CREATE DATABASE inventory_audit;

USE inventory_audit;

CREATE TABLE inventory (
    id INT AUTO_INCREMENT PRIMARY KEY,
    barcode VARCHAR(255) NOT NULL UNIQUE,
    item_name VARCHAR(255) NOT NULL,
    quantity INT NOT NULL,
    scanned_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
