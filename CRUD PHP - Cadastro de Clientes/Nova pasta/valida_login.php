<?php

include 'conexao.php';

if (empty($_POST['email'])){
    die("<script text = 'javascript'>alert('Email não informado');window.location.href = 'login.html'</script>");
}
 if (empty($_POST['pass'])) {
    die("<script text = 'javascript'>alert('Senha não informado');window.location.href = 'login.html'</script>");
 }

$email= mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['pass']);


$query =  "select * from pessoas where email = '$email' and senha = '$senha'";

$resultado = mysqli_query($conexao , $query);

$row = mysqli_num_rows($resultado);

if ($row > 1) {
    header('location: acesso_cadastro.html');
    die;
}else {
    die("<script text = 'javascript'>alert('Usuario ou senha Invalida! <br> Acesso negado);window.location.href = 'login.html'</script>");
}



?>