<?php
//Arquivo de conexao ao banco de dados 
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "crud";

$connect = mysqli_connect($servername, $username, $password, $db_name);
//Configuracao para aceitar os caracteres 
mysqli_set_charset($connect, "utf8");

if (mysqli_connect_error()) :
    echo "Erro na conexao: " . mysqli_connect_error();
endif;
