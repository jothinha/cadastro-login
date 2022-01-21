<?php

$conexao= mysqli_connect('localhost', 'root' , '' ,'cadastro');

if (mysqli_connect_errno($conexao))
{
    echo "Nao foi possivel conectar ao banco";
    exit();

}