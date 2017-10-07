CREATE DATABASE Rest_test DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE Rest_test
CREATE TABLE user(
    user_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(20) NOT NULL,
    password CHAR(32) NOT NULL,
    created_at DATETIME NOT NULL
);
CREATE TABLE article(
    article_id INT NOT NULL,
    title VARCHAR(40) NOT NULL,
    content TEXT NOT NULL,
    user_id INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES user(user_id)
);