<?php
include 'connecta.php';

$titulo = $_POST['titulo'];
$subtitulo = $_POST['subtitulo'];
$autor = $_POST['autor'];
$conteudo = $_POST['conteudo'];
$sql = "INSERT INTO noticia (titulo, subtitulo, autor, conteudo) VALUES ('$titulo','$subtitulo,','$autor', '$conteudo') ";

if($conexao->query($sql) === TRUE){
  echo 'registro adicionado com sucesso';
}else {
  echo 'Erro:' . $sql . '<br/>' . $conexao->error;
}

//fechar conexão
$conexao->close();

 ?>
