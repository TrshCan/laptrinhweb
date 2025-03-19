CREATE DATABASE BE2_EXE2
GO

USE BE2_EXE2
GO

CREATE TABLE users (
    user_id INT IDENTITY(1,1) PRIMARY KEY,
    user_name VARCHAR(25) NOT NULL,
    user_email VARCHAR(55) NOT NULL,
    user_pass VARCHAR(255) NOT NULL,
    updated_at DATETIME,
    created_at DATETIME
);
GO

CREATE TABLE products (
    product_id INT IDENTITY(1,1) PRIMARY KEY,
    product_name VARCHAR(255) NOT NULL,
    product_price FLOAT NOT NULL, -- Using FLOAT instead of DOUBLE
    product_description TEXT NOT NULL,
    updated_at DATETIME,
    created_at DATETIME
);
GO

CREATE TABLE orders (
    order_id INT IDENTITY(1,1) PRIMARY KEY,
    user_id INT NOT NULL,
    updated_at DATETIME,
    created_at DATETIME,
    CONSTRAINT FK_orders_users FOREIGN KEY (user_id) REFERENCES users(user_id)
);
GO

CREATE TABLE order_details (
    order_detail_id INT IDENTITY(1,1) PRIMARY KEY,
    order_id INT NOT NULL,
    product_id INT NOT NULL,
    updated_at DATETIME,
    created_at DATETIME,
    CONSTRAINT FK_order_details_orders FOREIGN KEY (order_id) REFERENCES orders(order_id),
    CONSTRAINT FK_order_details_products FOREIGN KEY (product_id) REFERENCES products(product_id)
);
GO

INSERT INTO users (user_name, user_email, user_pass, updated_at, created_at) VALUES
('Alice', 'alice@gmail.com', 'alicePass123', '2025-03-19 18:30:00', '2025-03-18 09:00:00'),
('Jack', 'jack@gmail.com', 'jackSec101', '2025-03-19 18:40:00', '2025-03-18 15:00:00'),
('Charlie', 'charlie@gmail.com', 'charliePass789', '2025-03-19 17:30:00', '2025-03-18 09:15:00'),
('Diana', 'diana@gmail.com', 'dianaSecret101', '2025-03-19 16:45:00', '2025-03-18 11:30:00'),
('Marki', 'something@gmail.com', 'somethingPassword', '2025-03-19 18:20:00', '2025-03-18 13:10:00'),
('Eve', 'eve@gmail.com', 'eveSuperpass', '2025-03-19 19:15:00', '2025-03-18 10:45:00'),
('Frank', 'frank@outlook.com', 'frankStrongPass', '2025-03-19 18:00:00', '2025-03-18 09:30:00'),
('Grace', 'grace@gmail.com', 'graceSecretCode', '2025-03-19 19:30:00', '2025-03-18 12:00:00'),
('Bob', 'bob@mail.tdc.edu.vn', 'bobSecure456', '2025-03-19 19:00:00', '2025-03-18 10:00:00'),
('Irene', 'irene@gmail.com', 'ireneStrong789', '2025-03-19 17:50:00', '2025-03-18 14:00:00'),
('Harry', 'harry@gmail.com', 'harryPassword', '2025-03-19 18:20:00', '2025-03-18 13:10:00');
GO

INSERT INTO products (product_name, product_price, product_description, updated_at, created_at) VALUES
('Smartphone Samsung', 599.99, 'High-end mobile device', '2025-03-19 18:00:00', '2025-03-18 09:00:00'),
('Laptop', 999.99, 'Lightweight and fast', '2025-03-19 18:10:00', '2025-03-18 09:20:00'),
('Wireless Headphones', 199.99, 'Noise-canceling headset', '2025-03-19 18:20:00', '2025-03-18 09:40:00'),
('Gaming Console', 499.99, 'Next-gen gaming console', '2025-03-19 18:30:00', '2025-03-18 10:00:00'),
('Smartwatch Apple', 199.99, 'Tracks fitness and health', '2025-03-19 18:40:00', '2025-03-18 10:20:00'),
('Electric Scooter', 699.99, 'Eco-friendly transportation', '2025-03-19 18:50:00', '2025-03-18 10:40:00'),
('Digital Camera', 799.99, 'High-quality photography', '2025-03-19 19:00:00', '2025-03-18 11:00:00'),
('External Hard Drive', 99.99, '2TB storage device', '2025-03-19 19:10:00', '2025-03-18 11:20:00'),
('Bluetooth Speaker', 149.99, 'Portable sound system', '2025-03-19 19:20:00', '2025-03-18 11:40:00'),
('Drone', 899.99, 'Aerial photography device', '2025-03-19 19:30:00', '2025-03-18 12:00:00');
GO

INSERT INTO orders (user_id, updated_at, created_at) VALUES
(1, '2025-03-19 18:30:00', '2025-03-18 09:00:00'),
(3, '2025-03-19 19:00:00', '2025-03-18 09:20:00'),
(2, '2025-03-19 18:20:00', '2025-03-18 09:40:00'),
(4, '2025-03-19 18:40:00', '2025-03-18 10:00:00'),
(5, '2025-03-19 19:20:00', '2025-03-18 10:20:00'),
(6, '2025-03-19 18:50:00', '2025-03-18 10:40:00'),
(7, '2025-03-19 19:10:00', '2025-03-18 11:00:00'),
(9, '2025-03-19 18:00:00', '2025-03-18 11:20:00'),
(10, '2025-03-19 19:30:00', '2025-03-18 11:40:00'),
(8, '2025-03-19 18:10:00', '2025-03-18 12:00:00'),
(8, '2025-03-19 18:10:00', '2025-03-18 12:00:00');
GO

INSERT INTO order_details (order_id, product_id, updated_at, created_at) VALUES
(1, 1, '2025-03-19 18:30:00', '2025-03-18 09:00:00'),
(2, 4, '2025-03-19 19:00:00', '2025-03-18 09:20:00'),
(3, 3, '2025-03-19 18:20:00', '2025-03-18 09:40:00'),
(4, 2, '2025-03-19 18:40:00', '2025-03-18 10:00:00'),
(5, 5, '2025-03-19 19:20:00', '2025-03-18 10:20:00'),
(6, 6, '2025-03-19 18:50:00', '2025-03-18 10:40:00'),
(7, 7, '2025-03-19 19:10:00', '2025-03-18 11:00:00'),
(8, 8, '2025-03-19 18:00:00', '2025-03-18 11:20:00'),
(9, 9, '2025-03-19 19:30:00', '2025-03-18 11:40:00'),
(10, 10, '2025-03-19 18:10:00', '2025-03-18 12:00:00'),
(8, 10, '2025-03-19 18:10:00', '2025-03-18 12:00:00');


-- DROP DATABASE BE2_EXE2