


CREATE DATABASE g11_e_bussiness;
USE g11_e_bussiness;


CREATE TABLE users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    address VARCHAR(255),
    phone_number VARCHAR(15),
    password_hash VARCHAR(255) NOT NULL   
);

