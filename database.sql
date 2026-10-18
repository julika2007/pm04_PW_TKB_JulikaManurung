CREATE DATABASE IF NOT EXISTS mvc_mystore;
USE mvc_mystore;

CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL
);

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    price DECIMAL(15,2) NOT NULL DEFAULT 0,
    stock INT NOT NULL DEFAULT 0,
    category_id INT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

INSERT INTO categories (name) VALUES ("Laptop"), ("Mouse"), ("Keyboard");

INSERT INTO products (name, price, stock, category_id) VALUES
("Laptop Lenovo", 7500000, 2, 1),
("Mouse Logitech", 250000, 10, 2),
("Keyboard Mechanical", 850000, 5, 3);

-- User admin dibuat lewat: php config/seed_admin.php
