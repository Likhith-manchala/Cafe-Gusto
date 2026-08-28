# 🍽️ Multi-Cuisine Interactive Hotel Menu System

This project is a responsive and interactive hotel menu system developed using **HTML**, **CSS**, **JavaScript**, **PHP**, and **MySQL**. It allows users to browse dishes by cuisine, adjust quantities, and place orders — which are then stored in a MySQL database.

---

## 📌 Features

- 🧭 Landing page with animated logo
- 🍛 Tab-based menu interface with multi-cuisine support
- 🛒 Cart functionality with quantity control
- 🧾 Order submission with customer name and table number
- 💾 Orders stored in MySQL database and logged in a text file
- 🧑‍💼 Admin panel to view all submitted orders

---

## 🛠 Technologies Used

- HTML5, CSS3
- JavaScript (localStorage, dynamic UI)
- PHP (form handling and MySQL connection)
- MySQL (database for storing orders)
- XAMPP (local development environment)

---

## 📁 Folder Structure

## Vercel Deployment

The Vercel version uses `index.html`, `menu.html`, `cart.html`, and the serverless endpoint at `/api/order`.

1. Import this repository into Vercel.
2. Create a Vercel Postgres/Neon integration from the project dashboard.
3. Confirm the `POSTGRES_URL` environment variable is available to the deployment.
4. Redeploy and open the generated URL. Checkout stores orders in the hosted PostgreSQL database.

The original `.php` files are retained for XAMPP/PHP hosting and are not used by the Vercel frontend.

## 📜 License

This project is created for academic purposes. You are free to use and modify it with attribution.
