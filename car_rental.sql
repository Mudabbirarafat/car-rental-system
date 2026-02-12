CREATE DATABASE car_rental;
USE car_rental;

CREATE TABLE users (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
email VARCHAR(100) UNIQUE,
password VARCHAR(255),
role ENUM('customer','agency'),
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE cars (
id INT AUTO_INCREMENT PRIMARY KEY,
agency_id INT,
model VARCHAR(100),
vehicle_number VARCHAR(50),
seating_capacity INT,
rent_per_day DECIMAL(10,2),
FOREIGN KEY (agency_id) REFERENCES users(id) ON DELETE CASCADE
);

CREATE TABLE bookings (
id INT AUTO_INCREMENT PRIMARY KEY,
car_id INT,
customer_id INT,
start_date DATE,
days INT,
total_amount DECIMAL(10,2),
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
FOREIGN KEY (car_id) REFERENCES cars(id) ON DELETE CASCADE,
FOREIGN KEY (customer_id) REFERENCES users(id) ON DELETE CASCADE
);
