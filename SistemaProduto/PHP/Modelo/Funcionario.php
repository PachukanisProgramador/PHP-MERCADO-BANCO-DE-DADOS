<?php

namespace SistemaProduto\PHP\Modelo;

use SistemaProduto\PHP\Modelo\Pessoa;
require_once("Pessoa.php");

class Funcionario extends Pessoa {
    protected float $codigo;
    protected string $sexo;
    protected string $funcao;
    protected float $salario;

    public function __construct(float $codigo, string $nome, float $telefone, string $endereco, string $sexo, string $funcao, float $salario){
        parent::__construct($nome, $telefone, $endereco);
        $this->codigo = $codigo;
        $this->sexo = $sexo;
        $this->funcao = $funcao;
        $this->salario = $salario;
    }
}

?>