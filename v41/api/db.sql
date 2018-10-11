CREATE DATABASE abdo;

CREATE TABLE users(
	id int(8) PRIMARY KEY AUTO_INCREMENT,
	name varchar(32),
	mail varchar(32),
	age int(8),
	password varchar(64)
);

