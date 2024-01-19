<!DOCTYPE html>
<html lang="en">
<head>
    <!--Link para chamar o Font-Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Link para chamar o CSS
    <link href="/Assets/CSS/reset.css" rel="stylesheet">-->
    <link href="./Assets/CSS/c_cria_style.css" rel="stylesheet">
    <meta charset="UTF-8" />

    <!--Icone-->
    <link rel="shortcut icon" href="/Assets/Imagens/Icones/icone.ico" type="image/x-icon">

    <!--Fonte: Ubuntu-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessão de Personagens</title>
</head>
<body>

    <?php 
        session_start();
        if((!isset($_SESSION['email'])==true) and (!isset($_SESSION['senha'])==true)){
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('location:index.html');        
        }
    ?>

    <!--Começo do bloco de Personagens-->

    <section class="bloco-transmition" id="transmition">
        <div class="blocoT">
            <div class="content">
                <!--Começo do bloco de conteúdo-->
                <div class="persona-block">
                    <h4>Fichas de Personagens</h4>
                    <div class="blocodepersonagens">
                        <ul class="listabtn">
                            <li>
                                <span class="iconed20"><i class="fa-solid fa-dice-d20"></i></span>
                                <a href="#" class="textobtn">Crie um novo personagem</a>
                            </li>
                            <li>
                                <span class="iconed20"><i class="fa-solid fa-dice-d20"></i></span>
                                <a href="#" class="textobtn">Crie um novo personagem</a>
                            </li>
                            <li>
                                <span class="iconed20"><i class="fa-solid fa-dice-d20"></i></span>
                                <a href="#" class="textobtn">Crie um novo personagem</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--Fim do bloco de conteúdo-->
    <!--Fim do bloco de Personagens-->
</body>
</html>