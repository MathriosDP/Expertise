

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
                <div id="formulario_login">
                    <form action="backand/confirmacaologin.php" method="post">
                        <label for="login">Login</label> <br> 
                        <input type="text" name="nomelogin" placeholder="Nome ou Email"> <br>

                        <label for="senha">Senha</label> <br>
                        <input type="password" name="senha" placeholder="Senha"><br>

                        <input type="submit" value="Logar">
                        <input type="submit" name="cadastro" value="Cadastrar" >
                        <?php if ( isset($mensagem) ) { ?>
                            <p><?php echo $mensagem ?></p>
                        <?php } ?>
                    </form>
                </div>
            <?php include("../elementos_comum/footer.php") ?>
        </main>
    </body>

</html>