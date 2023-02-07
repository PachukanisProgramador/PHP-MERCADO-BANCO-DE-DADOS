<?php
namespace SistemaProduto\PHP\Controle;

use SistemaProduto\PHP\Modelo\Cliente;
use SistemaProduto\PHP\Modelo\Produto;

require_once("PHP/Modelo/Cliente.php");
require_once("PHP/Modelo/Produto.php");

class Compra{
    public Produto $produtoComprado;
    public Cliente $clienteComprador;

    public function __construct(Produto $produto, Cliente $cliente, int $quantidadeCompra){
        $produtoComprado = $produto;
        $clienteComprador = $cliente;
        $clienteComprador->quantidadeComprada += $quantidadeCompra;
        $clienteComprador->totalGasto += ($produtoComprado->valor * $quantidadeCompra);
    }    
}
?>