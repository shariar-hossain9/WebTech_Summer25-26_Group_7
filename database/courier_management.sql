CREATE DATABASE courier_management;

USE courier_management;


CREATE TABLE users
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    phone VARCHAR(20),
    password VARCHAR(100) NOT NULL,
    role VARCHAR(20) NOT NULL
);


CREATE TABLE orders
(
    order_id INT AUTO_INCREMENT PRIMARY KEY,

    customer_id INT NOT NULL,

    deliveryman_id INT DEFAULT NULL,

    pickup_address VARCHAR(200),

    delivery_address VARCHAR(200),

    receiver_name VARCHAR(50),

    receiver_phone VARCHAR(20),

    product_details TEXT,

    status VARCHAR(50) DEFAULT 'Waiting for Pickup',

    FOREIGN KEY(customer_id) REFERENCES users(id),

    FOREIGN KEY(deliveryman_id) REFERENCES users(id)
);


INSERT INTO users(name,email,phone,password,role)
VALUES
(
'Admin',
'admin@gmail.com',
'01700000000',
'admin123',
'admin'
);