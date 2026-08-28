import { sql } from '@vercel/postgres';

export default async function handler(request, response) {
  if (request.method !== 'POST') return response.status(405).json({ success: false, message: 'Method not allowed' });
  const { customer_name, table_number, total_amount, payment_method, payment_reference, items } = request.body || {};
  if (!customer_name || !table_number || !total_amount || !Array.isArray(items) || !items.length || !['upi', 'card', 'cash'].includes(payment_method)) {
    return response.status(400).json({ success: false, message: 'Missing or invalid order details' });
  }
  if (payment_method !== 'cash' && !String(payment_reference || '').trim()) {
    return response.status(400).json({ success: false, message: 'Payment reference is required' });
  }
  if (!process.env.POSTGRES_URL) {
    return response.status(503).json({ success: false, message: 'Database is not configured. Add a Vercel Postgres database and redeploy.' });
  }
  const transactionReference = `GUSTO-${crypto.randomUUID().replaceAll('-', '').slice(0, 12).toUpperCase()}`;
  const paymentStatus = payment_method === 'cash' ? 'pending' : 'paid';
  try {
    await sql`CREATE TABLE IF NOT EXISTS orders (id SERIAL PRIMARY KEY, customer_name VARCHAR(100) NOT NULL, table_number INT NOT NULL, total_amount DECIMAL(10, 2) NOT NULL, payment_method VARCHAR(20) NOT NULL, payment_reference VARCHAR(100), payment_status VARCHAR(20) NOT NULL, transaction_reference VARCHAR(40) UNIQUE NOT NULL, items JSONB NOT NULL, created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP)`;
    await sql`INSERT INTO orders (customer_name, table_number, total_amount, payment_method, payment_reference, payment_status, transaction_reference, items) VALUES (${customer_name}, ${Number(table_number)}, ${Number(total_amount)}, ${payment_method}, ${payment_reference || null}, ${paymentStatus}, ${transactionReference}, ${JSON.stringify(items)})`;
    return response.status(200).json({ success: true, transaction_reference: transactionReference, payment_status: paymentStatus });
  } catch (error) {
    console.error(error);
    return response.status(500).json({ success: false, message: 'The order could not be saved. Check the Vercel database configuration.' });
  }
}
