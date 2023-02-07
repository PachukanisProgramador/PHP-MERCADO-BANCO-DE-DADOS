create database Mercadinho;
use Mercadinho;

create table Produto(
codigo int auto_increment primary key not null,
nome varchar(150) not null,
quantidade int not null,
valor decimal(10,2) not null
)Engine = InnoDB;

create table NotaFiscal(
codigo int auto_increment primary key not null,
nomeCliente varchar(150) not null,
cpfCliente bigint(11) not null,
dataCompra date not null,
produtos varchar(500) not null,
quantidade int not null
)Engine = InnoDB;

create table Cliente(
cpf bigint(11) auto_increment primary key not null,
nome varchar(150) not null,
telefone bigint(11) not null,
endereco varchar(150) not null,
quantidadeCompra int not null,
totalGasto decimal(10,2) not null,
login varchar(50) not null,
senha varchar(8) not null
)Engine=InnoDB;

create table Funcionario(
codigo int primary key auto_increment not null,
nome varchar(150) not null,
endereco varchar(150) not null,
telefone bigint(11) not null,
sexo varchar(20) not null,
funcao varchar(150) not null,
salario decimal(10,2) not null
)Engine = InnoDB;

create table RegistroProdutoUnitario(
codigo int primary key auto_increment not null,
codigoCliente int not null,
produtoVendido varchar(500) not null,
quantidadeProduto int not null,
valorUnitario decimal(10,2) not null
)Engine = InnoDB;

create table Registro(
codigo int primary key auto_increment not null,
codigoRegistroProdutoUnitario int not null,
produtosVendidos varchar(500) not null,
quantidadeCadaProduto int not null,
valorUnitario decimal(10,2) not null,
valorTotal decimal(10,2) not null,
maiorVenda decimal(10,2) not null
)Engine = InnoDB;