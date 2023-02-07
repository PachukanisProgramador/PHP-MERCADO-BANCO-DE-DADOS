<?php
namespace SistemaProduto\PHP\Modelo;

class Produto{
    public int $codigo;
    public string $nome;
    public float $quantidade;
    public float $valor;

    public function __construct(int $codigo, string $nome, float $quantidade, float $valor){
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->quantidade = $quantidade;
        $this->valor = $valor;
    }

    public function __get(string $nomeAtributo){
        return $this->nomeAtributo;
    }
    
    public function __set(string $nomeAtributo, string $valor) : void {
        $this->nomeAtributo = $valor;
    }
}
?>