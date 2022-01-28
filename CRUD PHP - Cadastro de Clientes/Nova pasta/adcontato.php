<?php

require_once 'conexao.php';

$nome = isset($_POST['nome']) ? $_POST['nome']:'';
$email = isset($_POST['email']) ? $_POST['email']:'';
$telefone = isset($_POST['numero']) ? $_POST['numero']:'';
$documento = isset($_POST['documento']) ? $_POST['documento']:'';
$senha = isset($_POST['pass']) ? $_POST['pass']:'';
$data_nascimento = isset($_POST['dt_nascimento']) ? $_POST['dt_nascimento']:'';


  if (!empty($nome) && !empty($email) && !empty($telefone) && !empty($documento) && !empty($senha) && !empty($data_nascimento)){
    $query = mysqli_query($conexao , "select * from pessoas where email='$email'");
    if (mysqli_num_rows($query) == 0) {
     $query = mysqli_query($conexao ,"insert into pessoas values ('','$nome','$email','$telefone','$documento','$senha','$data_nascimento')");
     if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      echo ("<script text = 'javascript'>alert('Esse email não é valido');window.location.href = 'cadastro.php'</script>");
      die;
    }
      if(!preg_match('/^(?=.*[A-Z])(?=.*[0-9])(?=.*[a-z])(?=.*[\@#$%&]).{8,36}$/' , $senha)) {
        echo("<script text = 'javascript'>alert('Senha deve conter pelo menos 8 caracteres entre letras,numero e caracter');window.location.href = 'cadastro.php'</script>");
        die;
      }
     if (strlen($nome) < 10 || strlen($nome) > 30) {
      echo("<script text = 'javascript'>alert('Nome invalido');window.location.href = 'cadastro.php'</script>");
       } 
      if ($query) {
      echo ("<script text = 'javascript'>alert('Usuario cadastrado com sucesso ');window.location.href = 'login.html'</script>");
      } else {
        die('ouve algum erro no cadastro'.mysqli_errno($conexao));
      } 
       }elseif (mysqli_num_rows($query) > 0) {
        echo ("<script text = 'javascript'>alert('Ja existe usuario com esse email');window.location.href = 'cadastro.php'</script>");
        }
         }else{
            die("<script text = 'javascript'>alert('Campos não foram preenchidos');window.location.href = 'cadastro.php'</script>");
      }
       

?>


