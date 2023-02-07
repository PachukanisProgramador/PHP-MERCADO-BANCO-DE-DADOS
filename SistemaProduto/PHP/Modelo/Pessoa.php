<?php
namespace SistemaProduto\PHP\Modelo;

abstract class Pessoa{
    protected string $nome;
    protected float $telefone;
    protected string $endereco;

    public function __construct(string $nome, float $telefone, string $endereco){
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->endereco = $endereco;
    }
    
    public function __get(string $nomeAtributo){
        return $this->nomeAtributo;
    }
    public function __set(string $nomeAtributo, string $valor) : void {
        $this->nomeAtributo = $valor;
    }
}

?>