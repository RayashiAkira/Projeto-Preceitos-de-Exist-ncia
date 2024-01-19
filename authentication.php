
<?php
      
        include './con_bd.php';

        $email  = $_POST['email'];
        $senha  = $_POST['senha'];

        $resultado = $con->query("SELECT * FROM login WHERE email='$email' AND senha='$senha'");

        if (mysqli_num_rows($resultado)>0){

            session_start();
		    $_SESSION['email'] = $_POST['email'];
		    $_SESSION['senha'] = $_POST['senha'];
            
            header("location:c_cria.php");
            
        }else{
        
            header("location:index.html");
        
        }
       
?>