-- drop database db;
-- create database db;
-- drop table user;
use db;

CREATE TABLE user (
    id INTEGER NOT NULL AUTO_INCREMENT,
    username VARCHAR(40) NOT NULL,
    password VARCHAR(40) NOT NULL,
    Primary key(id)
);


INSERT INTO user SET id = 1, username = 'HC', password = '123456';
-- INSERT INTO `db_php_exercises`.`user` (id, username, password) VALUES (1, 'HC', '123456');
