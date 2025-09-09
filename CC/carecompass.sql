CREATE DATABASE carecompass;

USE carecompass;

CREATE TABLE appointments (

    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    department VARCHAR(50) NOT NULL,
    appointment_date DATE NOT NULL,
    appointment_time TIME NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE billpayments (
    
    id INT AUTO_INCREMENT PRIMARY KEY,
    patient_name VARCHAR(50) NOT NULL,
    invoice_number VARCHAR(50) NOT NULL,
    amount DECIMAL(10, 2) NOT NULL, 
    payment_method ENUM('Credit Card', 'Debit Card', 'Bank Transfer', 'Mobile Payment') NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


    
CREATE TABLE contact_form (

    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    query_topic VARCHAR(50) NOT NULL,
    phone_number VARCHAR(15) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);

CREATE TABLE users (

    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    phone_number VARCHAR(20) NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);

CREATE TABLE  patient_reports (

    id INT AUTO_INCREMENT PRIMARY KEY,
    patient_id VARCHAR(50) NOT NULL,
    patient_name VARCHAR(50) NOT NULL,
    upload_type ENUM('Blood Test', 'X-Ray', 'MRI Scan', 'Prescription') NOT NULL,
    file_path VARCHAR(50) NOT NULL,
    uploaded_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    
);








