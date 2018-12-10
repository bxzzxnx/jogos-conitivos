<?php 
//bxzzxnx
$connect = mysqli_connect('localhost','root','','projeto_jogo');
$login   = $_POST['login'];
$senha   = $_POST['senha'];

$query_select = "SELECT usuario FROM pessoa WHERE usuario = '$login'";
$select       = mysqli_query($connect,$query_select);
$array        = mysqli_fetch_array($select);
$logarray     = $array['login'];
 
  if($login == "" || $login == null || $senha == "" || $senha == null){
    echo"<script language='javascript' type='text/javascript'>alert('Os dois campos devem ser preenchidos!');window.location.href='cadastro.html';</script>";

    }else{
      if($logarray == $login){
        echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='cadastro.html';</script>" ;
        die();
 
      }else{
        $query = "INSERT INTO Pessoa (usuario,senha) VALUES ('$login','$senha')";
        $insert = mysqli_query($connect,$query);
         
        if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='tlogin.html'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.html'</script>";
        }
      }
    }
?>