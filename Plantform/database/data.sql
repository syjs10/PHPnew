CREATE DATABASE plantform CHARACTER SET 'utf8' COLLATE 'utf8_general_ci';
CREATE USER 'plantform'@'localhost' IDENTIFIED BY 'plantform123';
GRANT ALL ON plantform.* TO 'plantform'@'localhost';
USE plantform
CREATE TABLE teacher(
	teacher_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	username VARCHAR(20) NOT NULL,
	password VARCHAR(32) NOT NULL,
	teacher_name VARCHAR(12) NOT NULL
	
) ENGINE=INNODB;
CREATE TABLE course(
	course_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	course_name VARCHAR(50) NOT NULL,
	course_introduction VARCHAR(300) NOT NULL,
	img_path VARCHAR(100)NOT NULL,
	teacher_id INT NOT NULL,
	FOREIGN KEY (teacher_id) REFERENCES teacher(teacher_id)
) ENGINE=INNODB;
INSERT INTO teacher (username, password, teacher_name) 
	VALUES ('test', '098f6bcd4621d373cade4e832627b4f6', 'admin');