CREATE DATABASE dream_job_db;

USE dream_job_db;

CREATE TABLE game_applicants (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    email VARCHAR(100),
    contact_number VARCHAR(20),
    programming_language VARCHAR(50),
    experience_level VARCHAR(50),
    portfolio_link VARCHAR(255),
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
