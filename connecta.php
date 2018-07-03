<?php
$host = 'localhost';
$username = 'root';
$password =  '';
$database = 'noticias';

$conexao = new mysqli($host,$username, $password, $database);

if($conexao->connect_error){
  die("Falha ao conectar ao banco de dados: " . $conexao->connect_error);
}
 ?>
