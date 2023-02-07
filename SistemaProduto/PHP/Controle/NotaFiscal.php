<?php
namespace SistemaProduto\PHP\Controle;

class NotaFiscal{
    
    public function __construct(Produto $produto, Cliente $cliente){
        echo "PRODUTO<br>";
        echo "|Nome comprador: $produto->nome|<br>";
        echo "|Nome produto: $produto->nome|<br>";
        echo "|Quantidade comprada: $cliente->nome|<br>";
        echo "|Nome: $produto->nome|<br>";
    }
    
}

?>