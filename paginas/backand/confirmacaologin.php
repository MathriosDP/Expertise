<?php require_once("../../conexao/conexaosite.php") ?>
<?php
    session_start();

    if (isset($_POST["nomelogin"])) {
            $nomelogin = $_POST["nomelogin"];
            $senha = ($_POST["senha"]);

            $inserir = "SELECT * ";
            $inserir .= "FROM cadastro ";
            $inserir .= "WHERE nomeusuario = '{$nomelogin}' and senha = '{$senha}' ";

            $inserir_banco = mysqli_query($conexao_banco, $inserir);

            if (!$inserir_banco) {
                die("FALHA NA CONEXÃO COM O BANCO");
            }

            $teste_login = mysqli_fetch_assoc($inserir_banco);
            
            if ( empty($teste_login)) {
                header("location:../login.php");
                $mensagem = "Acesso negado";
            } else {
               
                header("location:../home.php");
            }
        }
    
?>