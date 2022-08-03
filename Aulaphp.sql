DROP DATABASE IF EXISTS Atividade;

CREATE DATABASE Atividade;

USE Atividade;

CREATE TABLE Cliente(
Codigo int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
Nome varchar(20) NOT NULL,
Sobrenome varchar(40) NOT NULL,
Email varchar(30) NOT NULL,
CPF int(11) NOT NULL UNIQUE KEY,
Sexo char(1) NOT NULL,
Usuario varchar(20) NOT NULL,
Senha varchar(20) NOT NULL
);


