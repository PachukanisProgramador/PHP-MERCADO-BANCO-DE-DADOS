<?php
namespace SistemaProduto\PHP\DAO;

require_once("Conexao.php");
use SistemaProduto\PHP\DAO\Conexao;

class Inserir{
    public function cadastrarProduto(Conexao $conexao, string $nomeTabela, string $nome, int $quantidade, float $valor){
        try{
            $conn = $conexao->conectar();//Abrindo conexão com o banco
            $sql = "insert into $nomeTabela (codigo,nome,quantidade,valor) values('','$nome','$quantidade','$valor')";
            $result = mysqli_query($conn,$sql);//Comando que executa a ação do script dentro do banco
            if($result){
                return "<br><br>Inserido com sucesso no banco de dados!";
            }
            return "<br><br>Erro. Não foi inserido no banco de dados.";
        }catch(Except $erro){
            echo $erro;
        }

    }

    public function cadastrarCliente(Conexao $conexao, string $nomeTabela, string $nome, int $telefone, string $endereco, int $quantidadeCompra, float $totalGasto, string $login, string $senha){
        try{
            $conn = $conexao->conectar();//Abrindo conexão com o banco
            $sql = "insert into $nomeTabela (codigo,nome,telefone,endereco,quantidadeCompra,totalGasto,login,senha) values('','$nome','$telefone','$endereco','$quantidadeCompra','$totalGasto','$login','$senha')";
            $result = mysqli_query($conn,$sql);//Comando que executa a ação do script dentro do banco
            if($result){
                return "<br><br>Inserido com sucesso no banco de dados!";
            }
            return "<br><br>Erro. Não foi inserido no banco de dados.";
        }catch(Except $erro){
            echo $erro;
        }

    }

    public function cadastrarRegistroUnitario(Conexao $conexao, string $nomeTabela, int $codigoCliente, string $produtoVendido, int $quantidadeProduto, float $valorUnitario){
        try{
            $conn = $conexao->conectar();//Abrindo conexão com o banco
            $sql = "insert into $nomeTabela (codigo,codigoCliente,produtoVendido,quantidadeProduto,valorUnitario) values('','$nome','$telefone','$produtoVendido','$quantidadeProduto','$valorUnitario')";
            $result = mysqli_query($conn,$sql);//Comando que executa a ação do script dentro do banco
            if($result){
                return "<br><br>Inserido com sucesso no banco de dados!";
            }
            return "<br><br>Erro. Não foi inserido no banco de dados.";
        }catch(Except $erro){
            echo $erro;
        }

    }

    public function cadastrarRegistro(Conexao $conexao, string $nomeTabela, string $nome, ){
        try{
            $conn = $conexao->conectar();//Abrindo conexão com o banco
            $sql = "insert into $nomeTabela (codigo,codigoRegistroProdutoUnitario,valorTotal,maiorVenda) values('','$nome','$telefone','$codigoRegistroProdutoUnitario','$quantidadeProduto','$valorUnitario')";
            $result = mysqli_query($conn,$sql);//Comando que executa a ação do script dentro do banco
            if($result){
                return "<br><br>Inserido com sucesso no banco de dados!";
            }
            return "<br><br>Erro. Não foi inserido no banco de dados.";
        }catch(Except $erro){
            echo $erro;
        }

    }

    public function cadastrarFuncionario(Conexao $conexao, string $nomeTabela, string $nome, ){
        try{
            $conn = $conexao->conectar();//Abrindo conexão com o banco
            $sql = "insert into $nomeTabela (codigo,nome,endereco,telefone,sexo,funcao,salario) values('','$nome','$endereco','$telefone','$sexo','$funcao','$salario')";
            $result = mysqli_query($conn,$sql);//Comando que executa a ação do script dentro do banco
            if($result){
                return "<br><br>Inserido com sucesso no banco de dados!";
            }
            return "<br><br>Erro. Não foi inserido no banco de dados.";
        }catch(Except $erro){
            echo $erro;
        }

    }
}


?>