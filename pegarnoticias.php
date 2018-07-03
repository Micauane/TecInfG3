<?php
include 'connecta.php';

$sql = "SELECT * FROM noticia ";
$execute = $conexao->query($sql);

if($execute->num_rows > 0){
  while($item = $execute->fetch_assoc()){
    echo 'titulo:' . $item['titulo'] . '|';
    echo '</a><br />';
    echo 'subtitulo:' .$item['subtitulo'];
    echo '</a><br />';
    echo 'autor:' .$item['autor'];
    echo '</a><br />';
    echo 'conteudo:' .$item['conteudo'];
    echo '</a><br />';
  }
}
 ?>
