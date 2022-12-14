<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script defear src="smoothies.js"></script>
    <link href='https://css.gg/icecream.css' rel='stylesheet'>
    <link href='https://css.gg/shopping-cart.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" href="images\favicon.ico">
    <link rel="manifest" href="site.webmanifest">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
</head>
<header class="header">
    <div class="cabecalho">
        <a href="index.php"><img src="images/smoothieslogo.png" id="imagemlogo" alt="não achamos a imagem"></a>

        <form id="caixas" action="index.php" method="get">
            <input class="quest" name="pesquisa" type="text" placeholder="Pesquisar delicias">
            <button type="submit" id="button">Pesquisar</button>
        </form>

        <button type="submit" class="carrinho"><a href="carrinho.php"><i class="gg-shopping-cart"></i>Carrinho</a></button>

        <?php if(isset($_SESSION['usuario'])) {
            echo "<a href='deslogarUsu.php'><i class='fa fa-sign-out'></i>Logout<a>";
        }?>
        
    </div>
    <div id="sub">
        <a href="sobre.php" class="externos">Sobre a Loja</a>
        <a href="dashboard.php" class="externos">Dashboard</a>
        <a href="sobre.php" class="externos">Quem somos nós?</a>
        <a href="cadastroUsu.php" class="externos">Cadastro</a>
    </div>
</header>