<?php session_start(); ?>
<!doctype html>
<html lang="pt-BR">
    <head>
        <title>Energia Fotovoltaica</title>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster|Staatliches" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Lobster|Staatliches" rel="stylesheet">
        
        <link href="../style/header.css" rel="stylesheet">
        <link href="../style/bodymain.css" rel="stylesheet">
        <link href="../style/nav.css" rel="stylesheet">
        <link href="../style/footer.css" rel="stylesheet">
    </head>
    <body>
        <main>
            <?php include_once("../elementos_comum/topo.php") ?>
            
            <div id="formulario_cadastro">
                    <form action="backand/cadastro.php" method="post">
                        <input type="texto" name="nomecompleto" placeholder="nome completo: "> <br>
                        <input type="texto" name="email" placeholder="email: "> <br>
                        <input type="texto" name="nomeusuario" placeholder="nome de usuário: "> <br>
                        <input type="password" name="senha" placeholder="senha: "> <br>
                        
                        <input type="submit" name="cadastrar" value="Realizar Cadastro">
                        <input type="submit" name="logar" value="Logar">

                    </form>
                </div>
            
            <?php include_once("../elementos_comum/footer.php") ?>
        </main>
    </body>

</html>