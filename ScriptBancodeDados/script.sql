/* Criação da base de dados
######################################## */
create database IF NOT EXISTS crud;

/* Selecionando a database para criar as tabelas
######################################## */
use crud;

/* Criação da tabela Clientes
######################################## */
create table clientes (id int NOT NULL AUTO_INCREMENT , 
nome varchar, 
sobrenome varchar,
email varchar,
idade int (3),  
primary key (id));