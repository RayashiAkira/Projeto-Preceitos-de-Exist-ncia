<!DOCTYPE html>
<html>
<head>
    <title>Recebe</title>
    <link rel="stylesheet" type="text/css" href="css/materialize.css">
    <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style type="text/css">
        img{
            margin-top: 2%;
        }
        h2{  
            margin-top: 10%;            
        }
        body{
            background-color: #eeeeee;
        }
    </style>
    <script type="text/javascript">
        function ok(){
            setTimeout("window.location='exibir.php'",4000);
        }
        function erro(){
            setTimeout("window.location='cadastrar.php'",4000);
        }
    </script>
</head>
<body>
    <script src="./js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
<?php
    include './con_bd.php';

    $email   = $_POST['email'];
    $usuario = $_POST['usuario'];
    $senha   = $_POST['senha'];
    
    $inserir = $con->query("INSERT INTO login VALUES ( '0','$email','$senha','$usuario')");


    if ($inserir) {
      
        session_start();
		$_SESSION['email'] = $_POST['email'];
	    $_SESSION['senha'] = $_POST['senha'];
            
        header("location:c_cria.php");

    }else{
        
        header("location:index.html");

    }       
    ?>