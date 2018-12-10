<?php 
//bxzzxnx
$connect = mysqli_connect('localhost','root','','projeto_jogo');
$nome    = $_POST['nome'];
$end     = $_POST['endereco'];
$tel     = $_POST['telefone'];

$query_select = " SELECT nome, endereco, tel FROM pessoa WHERE nome = '$nome' AND endereco = '$end' AND tel = '$tel' ";
// $query_select = " SELECT * FROM pessoa WHERE nome = '$nome' AND endereco = '$end' AND tel = '$tel' ";
$select = mysqli_query($connect,$query_select);

$query = "INSERT INTO pessoa (nome,endereco,tel) VALUES ('$nome','$end','$tel')";
$insert = mysqli_query($connect,$query);

        if($insert){
          echo"<script language='javascript' type='text/javascript'> alert('Paciente cadastrado com Sucesso!');window.location.href='t2.html'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript' >alert('Não foi possível cadastrar esse paciente');window.location.href='t2.html'</script>";
        }
//
 ?>
