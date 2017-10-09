-- CREATE DATABASE Rest_test DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE Rest_test
CREATE TABLE user(
    userId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(20) NOT NULL,
    password CHAR(32) NOT NULL,
    createdAt DATETIME NOT NULL
);
CREATE TABLE article(
    articleId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(40) NOT NULL,
    content TEXT NOT NULL,
    createdAt DATETIME NOT NULL,
    userId INT NOT NULL,
    FOREIGN KEY (userId) REFERENCES user(userId)
);