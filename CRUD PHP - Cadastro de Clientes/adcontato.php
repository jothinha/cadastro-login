<?php

include('conexao.php');

$nome =isset($_POST['nome'])?$_POST['nome']:false;
$email=isset($_POST['email'])?$_POST['email']:false;
$telefone=isset($_POST['numero'])?$_POST['numero']:false;
$documento=isset($_POST['documento'])?$_POST['documento']:false;
$senha=isset($_POST['pass'])?$_POST['pass']:false;
$data_nascimento=isset($_POST['dt_nascimento'])?$_POST['dt_nascimento']:false;


$query = "INSERT INTO `pessoas`(`nome`, `documento`, `email`, `telefone`, `senha`, `data_nascimento`) VALUES ('$nome','$documento','$email','$telefone','$senha','$data_nascimento')";

if(mysqli_query($conexao,$query)){
    echo"<script text = 'javascript'>alert('Cadastrado com sucesso');window.location.href = 'index.html'</script>";
}else
    echo "Ouve um erro no cadastro";



?>