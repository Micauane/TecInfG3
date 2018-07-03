<!DOCTYPE html>
<html lang="pt-br">
	<head>
	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet"  href="css/style.css">
		<title>Ficha de Publicação</title>
	</head>
	<body>
    <div class="cabecalho">
        <div class="container">
          <div class="row">
        <div class="col-8">
          <img id="logo" src="Layouts\PNGs\Logo\Logo.png" alt="">
        </div>
        <div class="col-4">
          <a class="publicar" href="index.html">Voltar ao Menu </a>
        </div>
      </div>
      </div>
    </div>

		<section>
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="panel panel-primary">
							<div class="panel-body">
								<div class="panel-heading lead">Ficha de Publicação:</div>
								<form class="pull-left" action="registrar.php" method="post">
									<table>
										<tbody>
											<tr>
												<td>
													<p class="text-right lead">Titulo</p>
												</td>
												<td>
													<input class="from-control" type="text" name="titulo" placeholder="Insira o título">
												</td>
											</tr>
											<tr>
												<td>
													<p  class="text-right lead">Autor</p>
												</td>
												<td>
													<input type="text" name="name" placeholder="Nome do autor">
												</td>
											</tr>

											<tr>
												<td>
													<p class="text-right lead">Conteúdo</p>
												</td>
												<td>
                          <textarea name="text" rows="8" cols="80" placeholder="Insira o conteúdo"></textarea>
												</td>
											</tr>
											<tr>
												<td></td>
												<td>
													<input id="salva" class="btn btn-info btn-block" type="submit" value="Salvar">
												</td>
											</tr>
										</tbody>
									</table>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
    <div class="rodape2">
      <div class="container">
        <div class="row">
          <div class="col">
              <img id="logo_fundo" src="Layouts\PNGs\Logo\Logo.png" alt=""> <br>
              C 2018 Todos os direitos reservados. <br>
              Desenvolvido por Grupo 3
          </div>
        </div>
      </div>
    </div>

	</body>
</html>
