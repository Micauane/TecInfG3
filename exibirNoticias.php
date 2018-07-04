<?php
 	include 'connecta.php';


	$sql = "SELECT * FROM noticia;"; //Seleciona todos os dados da tabela
	$resultado = mysqli_query($conexao, $sql); //Executa a query no banco pela conexao
	$checarResultados = mysqli_num_rows($resultado); //Guardar a quantidade de linhas retornadas pela query

	if($checarResultados > 0) { //Se houver algum resultado faça o seguinte:
		while ($linhas = mysqli_fetch_assoc($resultado)) //buscar os resultados da query e insira nas linhas (variavel que se tornara um array)
		echo 

		"<div class='container'>
    		<div class='row'>
      			<div class='col-md-4'>
        			<h3 class='Titulo'>" . $linhas['titulo'] . "</h3>

        		<p class='paragrafo'>" . $linhas['subtitulo'] . "</p>

        		<span>" . $linhas['autor'] . "</span>
        		<br> <a href='#'>ver mais</a>
        		<hr>
      		</div> ";
	}

?>

