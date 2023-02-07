<?php
namespace SistemaProduto\PHP\Controle;

use SistemaProduto\PHP\Modelo\Cliente;
require_once("PHP/Modelo/Cliente.php");

class Promocao{

    public Cliente $clienteComprador;

    public function __construct(Cliente $cliente){
        $this->clienteComprador = $cliente;
    }

    public function validarPromocao(int $numeroCompras){
        if($this->clienteComprador->quantidadeComprada >= 10 || $this->clienteComprador->quantidadeComprada <= $this->produtoComprado->quantidade){
            echo "|PARABÉNS! VOCÊ ESTÁ APTO A NOSSA PROMOÇÃO|<br>";
            echo "|Você recebeu: R$".$this->mediaPromocao($numeroCompras)." de volta!|<br>";
        }
    }

    public function mediaPromocao(int $numeroCompras){
        return $this->clienteComprador->totalGasto / $numeroCompras;
    }
}

?>