<?php require_once("../../conexao/conexaosite.php") ?>
<?php 
    session_start();

    if (isset($_POST["nomecompleto"])) {
        $nomecompleto   = $_POST["nomecompleto"];
        $email          = $_POST["email"];
        $nomeusuario    = $_POST["nomeusuario"];
        $senha          = md5($_POST["senha"]);
        
        $inserir    = "INSERT INTO cadastro ";
        $inserir    .= "(nomecompleto, email, nomeusuario, senha) ";
        $inserir    .= "VALUES ('$nomecompleto', '$email', '$nomeusuario', '$senha')";
        
        $inserir_banco = mysqli_query($conexao_banco, $inserir);
        
        if(!$inserir_banco) {
              die("FALHA NA CONEXÃO COM O SERVIDOR");
        }
        
        if($inserir_banco) {
            header("location:../home.php");
        }
    }
?>