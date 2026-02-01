CREATE DATABASE college_db;

USE college_db;

CREATE TABLE notices (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    image VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE contact (
    id INT AUTO_INCREMENT PRIMARY KEY,
    type VARCHAR(50) NOT NULL,
    detail VARCHAR(255) NOT NULL
);

INSERT INTO contact (type, detail) VALUES 
('Phone', '0123456789'),
('Email', 'info@college.edu.bd');
