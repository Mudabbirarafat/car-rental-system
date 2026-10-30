# 🚗 Car Rental System (PHP & MySQL)

[![CI](https://github.com/Mudabbirarafat/car-rental-system/actions/workflows/ci.yml/badge.svg)](https://github.com/Mudabbirarafat/car-rental-system/actions/workflows/ci.yml)

A full-stack Car Rental Web Application built using **PHP, MySQL, and Bootstrap 5**.  
This system supports two types of users: **Customers** and **Car Rental Agencies**.

The project is fully hosted and demonstrates authentication, role-based access, CRUD operations, and booking management.

---

## 🌐 Live Demo

🔗 https://mudabbir-car-rental.free.nf/

---

## 📌 Features

### 👤 Customer Features
- Register & Login
- View available cars
- Select rental start date
- Choose number of rental days
- Book car
- View dashboard
- Secure logout

### 🏢 Agency Features
- Register & Login
- Add new cars
- View cars added by agency
- View bookings made by customers
- Manage rental data

---

## 🔐 Authentication & Security

- Role-based access control (Customer / Agency)
- Session-based login management
- Password hashing (if implemented)
- Route protection for dashboards
- Logout destroys session properly

---

## 🗄 Database Structure

The system uses MySQL with proper relational structure.

### Tables:

#### 1️⃣ users
| Column | Type | Description |
|--------|------|-------------|
| id | INT | Primary Key |
| name | VARCHAR | User Name |
| email | VARCHAR | Unique Email |
| password | VARCHAR | Hashed Password |
| role | ENUM | customer / agency |

#### 2️⃣ cars
| Column | Type | Description |
|--------|------|-------------|
| id | INT | Primary Key |
| agency_id | INT | Foreign Key (users.id) |
| model | VARCHAR | Car Model |
| vehicle_number | VARCHAR | Unique Vehicle Number |
| seating_capacity | INT | Seating Capacity |
| rent_per_day | DECIMAL | Daily Rental Price |

#### 3️⃣ bookings
| Column | Type | Description |
|--------|------|-------------|
| id | INT | Primary Key |
| car_id | INT | Foreign Key |
| customer_id | INT | Foreign Key |
| start_date | DATE | Rental Start Date |
| days | INT | Rental Duration |
| total_amount | DECIMAL | Calculated Price |
| created_at | TIMESTAMP | Booking Timestamp |

---

## 🛠 Tech Stack

- **Frontend:** HTML, CSS, Bootstrap 5
- **Backend:** Core PHP
- **Database:** MySQL
- **Hosting:** InfinityFree
- **Version Control:** Git & GitHub

---

## 🖥 Installation & Setup (Local Environment)

### 1️⃣ Clone Repository

```bash
git clone https://github.com/yourusername/car-rental-system.git
2️⃣ Move Project to XAMPP

Move project folder to:

C:\xampp\htdocs\

3️⃣ Import Database

Open phpMyAdmin

Create database named:

car_rental


Import:

car_rental.sql

4️⃣ Update Database Config

Open:

config/db.php


Update:

$host = "localhost";
$username = "root";
$password = "";
$database = "car_rental";

5️⃣ Run Project

Open browser:

http://localhost/car-rental-system/

📈 Future Improvements

Payment Gateway Integration

Admin Panel

Search & Filter Cars

Car Image Upload System

Booking Status (Pending/Approved/Completed)

REST API Conversion

MVC Architecture Refactor

🎯 Learning Outcomes

Through this project, I implemented:

Role-based authentication

Session handling in PHP

MySQL relational database design

CRUD operations

Form handling & validation

Hosting a PHP project online

Debugging production errors

Version control using Git

👨‍💻 Author

Mohd Mudabbir Arafat
B.Tech (AIML)
Full Stack Development Enthusiast

GitHub: https://github.com/Mudabbirarafat

⭐ If You Like This Project

Give it a ⭐ on GitHub!
