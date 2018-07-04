<?php
include 'connecta.php';

$sql = "SELECT * FROM noticia ";
$execute = $conexao->query($sql);

if($execute->num_rows > 0){
  while($item = $execute->fetch_assoc()){
    $titulo = $item['titulo'];
    $subtitulo = $item['subtitulo'];
    $autor = $item['autor'];
    $conteudo = $item['conteudo'];

  }
}
 ?>
