<?php
namespace SistemaProduto;

use SistemaProduto\PHP\Controle\Compra;
use SistemaProduto\PHP\Modelo\Funcionario;
use SistemaProduto\PHP\Modelo\Cliente;
use SistemaProduto\PHP\Modelo\Produto;
use SistemaProduto\PHP\Controle\Promocao;
use SistemaProduto\PHP\Controle\NotaFiscal;
use SistemaProduto\PHP\Controle\Registro;
use SistemaProduto\PHP\DAO\Atualizar;
use SistemaProduto\PHP\DAO\Consultar;
use SistemaProduto\PHP\DAO\Excluir;
use SistemaProduto\PHP\DAO\Inserir;
use SistemaProduto\PHP\DAO\Conexao;

require_once("PHP/Controle/Compra.php");
require_once("PHP/Modelo/Funcionario.php");
require_once("PHP/Modelo/Cliente.php");
require_once("PHP/Modelo/Produto.php");
require_once("PHP/Controle/Promocao.php");
require_once("PHP/Controle/NotaFiscal.php");
require_once("PHP/Controle/Registro.php");
require_once("PHP/DAO/Inserir.php");
require_once("PHP/DAO/Atualizar.php");
require_once("PHP/DAO/Excluir.php");
require_once("PHP/DAO/Consultar.php");
require_once("PHP/DAO/Conexao.php");

$cliente = new Cliente(12345678910,"Thiago",11968161630,"Avenida Oi",0,0);
$produtoMacarrao = new Produto(1,"Macarrão",15,4.50);
$compra = new Compra($produtoMacarrao,$cliente,10);

echo $cliente->totalGasto;
echo"<br>";

$promocao = new Promocao($cliente);
$promocao->validarPromocao($cliente->quantidadeComprada);

?>