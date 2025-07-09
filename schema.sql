CREATE DATABASE bug_reports;

USE bug_reports;

CREATE TABLE bugs (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255),
  description TEXT,
  status ENUM('Open','In Progress','Resolved') DEFAULT 'Open',
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
