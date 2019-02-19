<?php require_once("../../conexao/conexaosite.php") ?>
<?php 
    if (isset($_POST["nomecompleto"])) {
        $nomecompleto   = $_POST["nomecompleto"];
        $email          = $_POST["email"];
        $nomeusuario    = $_POST["nomeusuario"];
        $senha          = $_POST["senha"];
        
        $inserir    = "INSERT INTO cadastro ";
        $inserir    .= "(nomecompleto, email, nomeusuario, senha) ";
        $inserir    .= "VALUES ('$nomecompleto', '$email', '$nomeusuario', '$senha')";
        
        $inserir_banco = mysqli_query($conexao_banco, $inserir);
        
        if(!$inserir_banco) {
            die("FALHA NA CONEXÃO COM O SERVIDOR");
        }
    }
        
        if (isset($_POST["nomelogin"])) {
            $nomelogin = $_POST["nomelogin"];
            $senhaa = $_POST["senhaa"];

            $inserir = "SELECT * ";
            $inserir .= "FROM cadastro ";
            $inserir .= "WHERE nomeusuario = '{$nomelogin}' and senha = '{$senha}' ";

            $inserir_banco = mysqli_query($conexao_banco, $inserir);

            if (!$inserir_banco) {
                die("FALHA NA CONEXÃO COM O BANCO");
            }

            $teste_login = mysqli_fetch_assoc($inserir_banco);
            
            if ( empty($teste_login)) {
                $mensagem = "Acesso negado";
            } else {
                $_SESSION["user_portal"] = $teste_login["clienteID"];
                header("location:home.php");
            }
        }
    
?>

<!doctype html>
<html lang="pt-BR">
    <head>
        <title>Energia Fotovoltaica</title>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster|Staatliches" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Lobster|Staatliches" rel="stylesheet">
        
        <style>
            body {
                background-color: beige;
            }
            main {
                margin:0 auto;
                width: 960px;
                background-color: #FFF;
                border: 2px solid #DDD;
            }
        </style>
        
        <link href="../style/bodymain.css" rel="stylesheet">
        <link href="../style/header.css" rel="stylesheet">
        <link href="../style/nav.css" rel="stylesheet">
        <link href="../style/footer.css" rel="stylesheet">
    </head>
    <body>
        <main>
            <?php include("../elementos_comum/topo.php") ?>
            
            <?php if( !isset($_POST["cadastro"]) || isset($_POST["logar"]) || isset($_POST["cadastrar"]) ) { ?>
                <div id="formulario_login">
                    <form action="login.php" method="post">
                        <label for="login">Login</label> <br> 
                        <input type="text" name="nomelogin" placeholder="Nome ou Email"> <br>

                        <label for="senha">Senha</label> <br>
                        <input type="texto" nome="senhaa" placeholder="Senha"><br>

                        <input type="submit" value="Logar">
                        <input type="submit" name="cadastro" value="Cadastrar" >
                    </form>
                </div>
            
            <?php } else { ?>
                <div id="formulario_cadastro">
                    <form action="login.php" method="post">
                        <input type="texto" name="nomecompleto" placeholder="nome completo: "> <br>
                        <input type="texto" name="email" placeholder="email: "> <br>
                        <input type="texto" name="nomeusuario" placeholder="nome de usuário: "> <br>
                        <input type="password" name="senha" placeholder="senha: "> <br>
                        
                        <input type="submit" name="cadastrar" value="Realizar Cadastro">
                        <input type="submit" nome="logar" value="Logar">

                    </form>
                </div>
            <?php } ?>
              
                      
                      
                      
            <?php include("../elementos_comum/footer.php") ?>
        </main>
    </body>

</html>