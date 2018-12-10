<?php 
//bxzzxnx
$connect = mysqli_connect('localhost','root','','projeto_jogo');
$login   =  $_POST['login'];
$entrar  =  $_POST['entrar'];
$senha   =  $_POST['senha'];

$query_select = "SELECT * FROM pessoa WHERE usuario = '$login' AND senha = '$senha'";

    if (isset($entrar)) {
             
      $verifica = mysqli_query($connect,$query_select);

        if (mysqli_num_rows($verifica)<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='tlogin.html';</script>";
          die();
        }else{
          setcookie("login", $login);
          header("Location:t2.html");
        }
    }


?>

