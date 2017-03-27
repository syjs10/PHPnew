CREATE DATABASE plantform CHARACTER SET 'utf8' COLLATE 'utf8_general_ci';
CREATE USER 'plantform'@'localhost' IDENTIFIED BY 'plantform123';
GRANT ALL ON plantform.* TO 'plantform'@'localhost';
USE plantform
CREATE TABLE teacher(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	username VARCHAR(20) NOT NULL,
	password VARCHAR(32) NOT NULL
);
INSERT INTO teacher (username, password) VALUES ('test', '098f6bcd4621d373cade4e832627b4f6');