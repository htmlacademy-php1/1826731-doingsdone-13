CREATE DATABASE doingsdone
DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_general_ci;

USE doingsdone;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(128),
    email VARCHAR(128) NOT NULL UNIQUE,
    pass CHAR(64),
    date_add TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE category (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    user_id INT NOT NULL
);

CREATE TABLE task (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    date TIMESTAMP,
    cat_id INT NOT NULL,
    file VARCHAR(255),
    done SMALLINT NOT NULL DEFAULT '0',
    date_add TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);