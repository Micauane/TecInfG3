<?php
 include 'connecta.php';
 include 'pegarnoticias.php'
 ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>TecNews</title>
  </head>
  <body>

    <div class="cabecalho">
        <div class="container">
          <div class="row">
        <div class="col-8">
          <img src="img/ideialogo1.png" alt="">
        </div>
        <div class="col-4">
          <a class="publicar" href="formulario.php">publicar</a>
        </div>
      </div>
      </div>
    </div>

  <script language="JavaScript">

          array1 = new Array ("http://placehold.it/1960x500")

          function comeco(){
          document.getElementById('imgId').src = array1[0]
          document.form.texto.value="0"
          }

          function mais(){
          document.form.texto.value = Math.floor (1+ 1 - 2 + (document.form.texto.value) * 1 + 1)
          if (document.form.texto.value > 2)
          {document.form.texto.value = 0}
          }

          function menos(){
          document.form.texto.value = Math.floor (1+ 1 - 2 + (document.form.texto.value) * 1 -1)
          if (document.form.texto.value < 0)
          {document.form.texto.value = 2}
          }

          function regular(){
          document.getElementById('imgId').src = array1[document.form.texto.value];
          setTimeout("regular()", 1)
          }
   </script>

   <body onLoad="comeco();regular()">
   <a id="aId"><img id="imgId"></a>
   </br>
   <a id="prev" href="javascript:menos()">Anterior</a>.<a id="next" href="javascript:mais()">Próximo</a>
   <form name="form">
   <input type=text name="texto">
   </form>


    </script>

    <div class="container">
      <div class="row">
        <div class="col">
          <h3><?php echo $titulo?></h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
          <span>Micauane O</span>
          <br>Publicado em 20/05/2018.
          <br> <a href="#">ver mais</a>
        </div>
        <div class="col">
          <h3>Titulo</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
          <span>Micauane O</span>
          <br>Publicado em 20/05/2018.
          <br> <a href="#">ver mais</a>
      </div>
      <div class="col">
        <h3>Titulo</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
        <span>Micauane O</span>
        <br>Publicado em 20/05/2018.
        <br> <a href="#">ver mais</a>
    </div>
    </div>
    </div>
    <hr>
    <div class="container">
      <div class="row">
        <div class="col">
          <h3>Titulo</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
          <span>Micauane O</span>
          <br>Publicado em 20/05/2018.
          <br> <a href="#">ver mais</a>
        </div>
        <div class="col">
          <h3>Titulo</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
          <span>Micauane O</span>
          <br>Publicado em 20/05/2018.
          <br> <a href="#">ver mais</a>
      </div>
      <div class="col">
        <h3>Titulo</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
        <span>Micauane O</span>
        <br>Publicado em 20/05/2018.
        <br> <a href="#">ver mais</a>
    </div>
    </div>
</div>
    <hr>
    <div class="container">
      <div class="row">
        <div class="col">
          <h3>Titulo</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
          <span>Micauane O</span>
          <br>Publicado em 20/05/2018.
          <br> <a href="#">ver mais</a>
        </div>
        <div class="col">
          <h3>Titulo</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
          <span>Micauane O</span>
          <br>Publicado em 20/05/2018.
          <br> <a href="#">ver mais</a>
      </div>
      <div class="col">
        <h3>Titulo</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
        <span>Micauane O</span>
        <br>Publicado em 20/05/2018.
        <br> <a href="#">ver mais</a>
    </div>
    </div>
  </div>
    <hr>
    <div class="rodape">
      <div class="container">
        <div class="row">
          <div class="col">
              <img id="logo_fundo" src="img/ideialogofundo.png" alt=""> <br>
              C 2018 Todos os direitos reservados. <br>
              Desenvolvido por GruopG3
          </div>
        </div>
      </div>
    </div>

  </body>
</html>
