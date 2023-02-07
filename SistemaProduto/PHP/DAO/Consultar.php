<?php
namespace SistemaProduto\PHP\DAO;

require_once("Conexao.php");
use SistemaProduto\PHP\DAO\Conexao;

class Consultar{
    public function consultarIndividualCliente(Conexao $conexao, string $nomeTabela, int $codigo){
        try{
            $conn = $conexao->conectar();
            $sql = "select * from $nomeTabela where codigo = '$codigo'";
            $result = mysqli_query($conn,$sql);

            while($dados = mysqli_fetch_array($result)){
                if($dados["codigo"] == $codigo){
                    echo "<br>CPF: ".$dados["cpf"]."<br>Nome: ".$dados["nome"]."<br>Telefone: ".$dados["telefone"]."<br>Endereço: ".$dados["endereco"]."<br>Quantidade comprada: ".$dados['quantidadeCompra'];
                    echo "<br>Total gasto: ".$dados['totalGasto']."<br>Login: ".$dados['login'];
                    return;//Encerrando a operação
                }
                echo "Código digitado não encontrado.";
            }
        }catch(Except $erro){
            echo $erro;
        }
    }

    public function consultarTudoCliente(Conexao $conexao, string $nomeTabela){
        try{
            $conn = $conexao->conectar();
            $sql = "select * from $nomeTabela";
            $result = mysqli_query($conn,$sql);

            while($dados = mysqli_fetch_array($result)){
                if(isset($dados)){
                    echo "<br>CPF: ".$dados["cpf"]."<br>Nome: ".$dados["nome"]."<br>Telefone: ".$dados["telefone"]."<br>Endereço: ".$dados["endereco"]."<br>Quantidade comprada: ".$dados['quantidadeCompra'];
                    echo "<br>Total gasto: ".$dados['totalGasto']."<br>Login: ".$dados['login'];
                }
                else{
                    echo "Banco de dados vazio!";
                }
            }
            return;//Encerrando a operação
        }catch(Except $erro){
            echo $erro;
        }
    }

    public function consultarIndividualProduto(Conexao $conexao, string $nomeTabela, int $codigo){
        try{
            $conn = $conexao->conectar();
            $sql = "select * from $nomeTabela where codigo = '$codigo'";
            $result = mysqli_query($conn,$sql);

            while($dados = mysqli_fetch_array($result)){
                if($dados["codigo"] == $codigo){
                    echo "<br>Código: ".$dados["codigo"]."<br>Nome: ".$dados["nome"]."<br>Quantidade: ".$dados["quantidade"]."<br>Valor: ".$dados["valorLivro"]."<br>Quantidade: ".$dados['quantidadeLivro'];
                    return;//Encerrando a operação
                }
                echo "Código digitado não encontrado.";
            }
        }catch(Except $erro){
            echo $erro;
        }
    }

    public function consultarTudoProduto(Conexao $conexao, string $nomeTabela){
        try{
            $conn = $conexao->conectar();
            $sql = "select * from $nomeTabela";
            $result = mysqli_query($conn,$sql);

            while($dados = mysqli_fetch_array($result)){
                if(isset($dados)){
                    echo "<br>Código: ".$dados["codigo"]."<br>Nome: ".$dados["nome"]."<br>Quantidade: ".$dados["quantidade"]."<br>Valor: ".$dados["valorLivro"]."<br>Quantidade: ".$dados['quantidadeLivro'];
                }
                else{
                    echo "Banco de dados vazio!";
                }
            }
            return;//Encerrando a operação
        }catch(Except $erro){
            echo $erro;
        }
    }

    public function consultarIndividualRegistro(Conexao $conexao, int $codigoCliente, int $codigo){
        try{
            $conn = $conexao->conectar();
            $sql = "select * from RegistroProdutoUnitario where codigoCliente = '$codigoCliente'";
            $result = mysqli_query($conn,$sql);

            while($dados = mysqli_fetch_array($result)){
                if($dados["codigoCliente"] == $codigoCliente){
                    echo "<br>Código: ".$dados["codigo"]."<br>Código Cliente: ".$dados["codigoCliente"]."<br>Produto Vendido: ".$dados["produtoVendido"]."<br>Valor unitário: ".$dados["valorUnitario"]."<br>Valor unitário: ".$dados['valorUnitario'];
                    return;//Encerrando a operação
                }
                else{
                    echo "Código do cliente digitado não encontrado.";
                }
            }

            $conn = $conexao->conectar();
            $sql = "select * from Registro where codigoCliente = '$codigo'";
            $result = mysqli_query($conn,$sql);

            while($dados = mysqli_fetch_array($result)){
                if($dados["codigoCliente"] == $codigoCliente){
                    echo "<br>Código: ".$dados["codigo"]."<br>Código Registro Unitário: ".$dados['codigoRegistroProdutoUnitario']."Valor total: ".$dados['valorTotal']."<br>Maior venda: ".$dados['maiorVenda'];
                    return;//Encerrando a operação
                }
                else{
                    echo "Código do cliente digitado não encontrado.";
                }
            }
        }catch(Except $erro){
            echo $erro;
        }
    }

    public function consultarIndividualNotaFiscal(Conexao $conexao, string $nomeTabela, int $codigo){
        try{
            $conn = $conexao->conectar();
            $sql = "select * from $nomeTabela where codigo = '$codigo'";
            $result = mysqli_query($conn,$sql);

            while($dados = mysqli_fetch_array($result)){
                if($dados["codigo"] == $codigo){
                    echo "<br>Código: ".$dados["codigo"]."<br>Nome: ".$dados["nome"]."<br>Quantidade: ".$dados["quantidade"]."<br>Valor: ".$dados["valorLivro"]."<br>Quantidade: ".$dados['quantidadeLivro'];
                    return;//Encerrando a operação
                }
                echo "Código digitado não encontrado.";
            }
        }catch(Except $erro){
            echo $erro;
        }
    }
}
?>