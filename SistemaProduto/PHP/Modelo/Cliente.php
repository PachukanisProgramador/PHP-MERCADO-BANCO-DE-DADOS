<?php

namespace SistemaProduto\PHP\Modelo;

use SistemaProduto\PHP\Modelo\Pessoa;
require_once("Pessoa.php");

class Cliente extends Pessoa {
    public float $cpf;
    public float $quantidadeComprada;
    public float $totalGasto;

    public function __construct(float $cpf, string $nome, float $telefone, string $endereco, float $quantidadeComprada, float $totalGasto){
        parent::__construct($nome, $telefone, $endereco);
        $this->cpf = $cpf;
        $this->quantidadeComprada = $quantidadeComprada;
        $this->totalGasto = $totalGasto;
    }

    public function __get(string $nomeAtributo){
        return $this->nomeAtributo;
    }

    public function __set(string $nomeAtributo, string $valor) : void {
        $this->nomeAtributo = $valor;
    }
} 

?>