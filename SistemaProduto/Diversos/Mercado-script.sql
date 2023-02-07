create database Mercado;
use Mercado;

create table Cliente(
cpf bigint(11) primary key not null,
nome varchar(150) not null,
telefone bigint(11) not null,
endereco varchar(150) not null,
quantidade_compras int not null,
total_gasto decimal(10,2) not null
)Engine = InnoDB;

create table Produto(
id_produto int primary key not null,
nome varchar(150) not null,
quantidade int not null,
valor decimal(10,2) not null
)Engine = InnoDB;

create table Funcionario(
codigo int primary key not null,
nome varchar(150) not null,
endereco varchar(150) not null,
bairro varchar(150) not null,
telefone bigint(11) not null,
sexo varchar(150) not null,
funcao varchar(150) not null,
salario decimal(10,2) not null
)Engine = InnoDB;