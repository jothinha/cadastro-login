<!DOCTYPE html>
    <html>
    <head>
      <meta charset="UTF-8"/>
       <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="css/cadastro.css" rel="stylesheet">
      <title>Cadastro</title>
    </head>
    <body> 

<?php

include 'conexao.php';

if ($conexao == true) {
    echo 'conexao ativa';
}else {
    echo 'não esta conectado';
}


$dados = mysqli_query($conexao , 'select * from pessoas limit 10');

?>


<table border ="2">
    <tr>
        <td>Id</td>
        <td>Nome</td>
        <td>Telefone</td>
        <td>cpf</td>
</tr>

<?php

while ($retorno = mysqli_fetch_array($dados)) 
{

?>
   <tr>
       <td><?php echo $retorno['id_pessoas'];?></td>
       <td><?php echo $retorno['nome'];?></td> 
       <td><?php echo $retorno['documento'];?></td>
       <td><?php echo $retorno['email'];?></td>
       <td><?php echo $retorno['telefone'];?></td>
       <td><?php echo $retorno['senha'];?></td>
       <td><?php echo $retorno['data_nascimento'];?></td>

    </tr>
<?php 
}
?>
</table>

</body>
