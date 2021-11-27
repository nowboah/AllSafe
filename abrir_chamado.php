<?php
	require_once "validador_acesso.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>AllSafe</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<style>
		.card-home {
			padding: 40px 0 0 0;
			width: 60%;
			margin: 0 auto;
		}		
	</style>

</head>
<body>
	<nav class="navbar navbar-white bg-white">
		<a href="home.php" class="navbar-brand">
			<img src="logo.JPG" width="150" height="50" class="d-inline-block align-top">
			
		</a>
		<ul class="navbar-nav">
			<li class="nav-item">
				<a href="logoff.php" class="btn btn-lg btn-danger btn-block">Sair</a>
			</li>
		</ul>
	</nav>
	<div class="container">
		<div class="row">
			<div class="card-home">
				<div class="card">
					<div class="card-header">
						<b>Abrir Chamado</b>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col">
								<form method="post" action="registra_chamado.php">
									
									<div class="form-group">
										<label>Registro Abertura</label>
										<input readonly type="text" name="registro" class="form-control" value="<?php 
                                setlocale( LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese' ); 
                                date_default_timezone_set( 'America/Sao_Paulo' );
                                echo strftime( '%e/%m/%Y - %T');?>">
									</div>
									
									<div class="form-group">
										<label>Nome do Funcionario</label>
										<input type="text" name="nome" class="form-control" placeholder="Nome">
									</div>

									<div class="form-group">
										<label>Solicitação</label>
										<select class="form-control" name="categoria">
											<option disabled selected="true">Selecione o Problema</option>
											<option>Problema com Softwares</option>
											<option>Problema com o Windows</option>
											<option>Problema com a Rede</option>
											<option>Problema com a Impressora</option>
											<option>Problema com Acesso</option>
											<option>Problema com Senhas</option>
											<option>Outro...</option>
										</select>
									</div>
									
									<div class="form-group">
										<label>E-mail para Contato</label>
										<input type="email" name="email" class="form-control" placeholder="email@email.com">
									</div>

									<div class="form-group">
										<label>Descrição do Problema</label>
										<textarea name="descricao" class="form-control" rows="3"></textarea>
									</div>
									
									<div class="row">
										<div class="col-6">
											<a href="home.php" class="btn btn-lg btn-secondary btn-block">Voltar</a>
										</div>

										<div class="col-6">
											<button class="btn btn-lg btn-info btn-block" type="submit">Abrir Chamado</button>
										</div>
									</div>

								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>




