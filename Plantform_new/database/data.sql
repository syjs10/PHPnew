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
	exp_num INT(4) NOT NULL,
	FOREIGN KEY (teacher_id) REFERENCES teacher(teacher_id)
) ENGINE=INNODB;
CREATE TABLE experiment(
	exp_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	exp_name VARCHAR(50) NOT NULL,
	exp_doc_path VARCHAR(300) NOT NULL,
	course_id INT NOT NULL,
	exp_num INT(4) NOT NULL,
	FOREIGN KEY (course_id) REFERENCES course(course_id)
) ENGINE=INNODB;
-- INSERT INTO teacher (username, password, teacher_name)
-- 	VALUES ('test', '098f6bcd4621d373cade4e832627b4f6', 'min');

CREATE TABLE student(
	student_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	student_name VARCHAR(16) NOT NULL,
	username VARCHAR(20) NOT NULL,
	password VARCHAR(32) NOT NULL,
	student_class VARCHAR(50) NOT NULL,
	student_num VARCHAR(9) NOT NULL
);
-- INSERT INTO student (username, password, student_name, student_class, student_num)
-- 	VALUES ('test', '098f6bcd4621d373cade4e832627b4f6', 'syjs10', '三班', '150405302');

-- ALTER TABLE student ADD INDEX name_num_class (student_name(10), student_num, student_class);
-- ALTER TABLE course ADD INDEX name_introduction_teacher (course_name, course_introduction, teacher_id);
CREATE TABLE choose_course(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	student_id INT NOT NULL,
	course_id INT NOT NULL,
	complete_exp_num INT(4) NOT NULL,
	FOREIGN KEY (course_id) REFERENCES course(course_id),
	FOREIGN KEY (student_id) REFERENCES student(student_id)

);