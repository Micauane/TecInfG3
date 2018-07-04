<?php
include 'connecta.php';

$titulo = $_POST['titulo'];
$subtitulo = $_POST['subtitulo'];
$autor = $_POST['autor'];
$conteudo = $_POST['conteudo'];
$sql = "INSERT INTO noticia (titulo, subtitulo, autor, conteudo) VALUES ('$titulo','$subtitulo,','$autor', '$conteudo') ";

// Notice: Undefined index: conteudo in C:\wamp64\www\TecInfG3\registrar.php on line 7
// O conteudo é o unico que não funciona e não sei resolver

if($conexao->query($sql) === TRUE){
  echo "<script type='text/javascript'>alert('Publicado com sucesso!')</script>";
}else {
  echo 'Erro:' . $sql . '<br/>' . $conexao->error;
}

//fechar conexãos
$conexao->close();

?>
