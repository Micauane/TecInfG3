<?php
 include 'connecta.php';
?>
<?php
include 'teste-buscarDados.php';
 ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>TecNews</title>
</head>

<body>
  <div class="cabecalho">
    <div class="container">
      <div class="row">

        <div class="col-8">
          <img id="logo" src="Layouts\PNGs\Logo\Logo.png" alt="">
        </div>

        <div class="col-4">
           <img id="icons" src="Layouts\PNGs\Icons\Newsicon.png">
           <a id="02" class="publicar" href="formulario.php">Publicar</a>
         </div>

      </div>
    </div>
  </div>


 <div class="container">
   <div class="row">
       <div class="col-md-7 offset-md-2">
          <div class="ultimanoticia">
            <h3><?php echo $titulo ?></h3> <br>
            <p><?php echo $subtitulo ?></p> <br>
            <span><?php echo $autor ?></span>
            data <br>
          </div>
       </div>
   </div>
 </div>


 <div class='container'>
     <div class='row'>
  <?php
    include 'exibirNoticias.php';
  ?>
</div>
</div>

  <div class="rodape">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <img id="logo_fundo" src="Layouts\PNGs\Logo\Logo.png" alt=""> <br>
               © 2018 Todos os direitos reservados. <br>
               Desenvolvido por Grupo 3
        </div>
      </div>
    </div>
  </div>

</body>
</html>
