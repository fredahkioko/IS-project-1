DROP DATABASE IF EXISTS immunize;
CREATE DATABASE IF NOT EXISTS immunize;
USE immunize;

DROP TABLE IF EXISTS users;
CREATE TABLE IF NOT EXISTS users (
	userId bigint(12) NOT NULL AUTO_INCREMENT,
	fullname varchar(100) NOT NULL DEFAULT '',
	username varchar(50) NOT NULL DEFAULT '',
	email varchar(60) NOT NULL DEFAULT '',
	phonenumber varchar(60) NOT NULL DEFAULT '',
	password varchar(60) NOT NULL DEFAULT '',
	userType varchar(30) NOT NULL DEFAULT '',
	UNIQUE KEY (username),
	UNIQUE KEY (password),
	UNIQUE KEY (phonenumber),
	UNIQUE KEY (email),
	PRIMARY KEY (userId)
);
