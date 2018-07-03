<!DOCTYPE html>
<html lang="pt-br">
	<head>
	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet"  href="css/style.css">
		<title>Ficha de Publicação</title>
	</head>
	<body>
    <div class="cabecalho">
        <div class="container">
          <div class="row">
        <div class="col-8">
          <img src="img/ideialogo1.png" alt="">
        </div>
        <div class="col-4">
          <a class="publicar" href="index.php">voltar ao menu </a>
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
													<input class="from-control" type="text" name="titulo" placeholder="Insira o titulo Notícia">
												</td>
											</tr>
											<tr>
												<tr>
													<td>
														<p class="text-right lead">Subtítulo</p>
													</td>
													<td>
														<input class="from-control" type="text" name="subtitulo" placeholder="Insira o subtitulo Notícia">
													</td>
												</tr>
												<tr>
												<td>
													<p  class="text-right lead">Autor</p>
												</td>
												<td>
													<input type="text" name="autor" placeholder="Insira seu nome">
												</td>
											</tr>

											<tr>
												<td>
													<p class="text-right lead">Conteúdo</p>
												</td>
												<td>
                          <textarea name="conteudo" rows="8" cols="80" placeholder="Insira seu o conteúdo"></textarea>
												</td>
											</tr>
											<tr>
												<td></td>
												<td>
													<input class="btn btn-info btn-block" type="submit" value="salvar">
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
              <img id="logo_fundo" src="img/ideialogofundo.png" alt=""> <br>
              C 2018 Todos os direitos reservados. <br>
              Desenvolvido por GrupoG3
          </div>
        </div>
      </div>
    </div>

	</body>
</html>
