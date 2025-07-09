CREATE DATABASE currency_converter;

USE currency_converter;

CREATE TABLE conversions(
    id INT AUTO_INCREMENT PRIMARY KEY,
    dollar_amount DECIMAL(10, 2) NOT NULL,
    target_currency DECIMAL(10, 2) NOT NULL 
);