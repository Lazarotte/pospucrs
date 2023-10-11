<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Area do Tesoureiro</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
		
		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
		<style>
			.secao_destaque{
				background: url(imagens/fotocapaescolare2.jpg) no-repeat;
				background-size: cover;
			}
			.bg-footer{
				background: url(img/bg-footer.png) no-repeat center bottom;
			}
		</style>
	</head>
	
	<body>

		<section class="secao_destaque text-white text-center text-lg-left  bg-dark pb-5">
			<div class="container-fluid">
				
				<header class="row pt-2 pb-2">
					
					<div class="col-12 col-lg-6">
						<h1>
							<img src="imagens/logoescolaresite.png">
						</h1>
					</div>
					
					<div class="col-12 col-lg-6">
						<nav>
							<ul class="nav justify-content-end justify-content-center">
							  <li class="nav-item">
							    <a class="nav-link text-white" href="#">Plataforma</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link text-white" href="#">Tesouraria</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link text-white" href="#">Pedagogia</a>
							  </li>
							</ul>
						</nav>
					</div>
				</header>
			</div>
			
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-6">
						<h2 class="pt-5 pb-3" >Gestão escolar 2.0</h2>
						<p class="pb-5">Ambiente gráfico de monitoramento e análise de indicadores no âmbito financeiro e pedagógico de empresas educacionais.</p>
					</div>
				
					<div class="col-12 col-lg-6 pt-5 pb-5">
						<form class="row pb-2" method="POST" action="valida.php">

							<div class="col-6 pr-1">
								<input type="email" class="form-control" name="txt_usuario" id="inputEmail" placeholder="Usuário" required autofocus>
							</div>
							<div class="col-3 pl-0 pr-1">	
								<input type="password" class="form-control" name="txt_senha" id="inputPassword" placeholder="Senha" required>
							</div>
							<div class="col-3 pl-0">
								<button class="btn btn-primary" type="submit">ACESSAR</button></br>
							</div>
						</form>
						<a href="recuperar_senha.php">Esqueci a senha</a>
								
							 
							
							<p>
								<?php if(isset($_SESSION['loginErro'])){
									echo $_SESSION['loginErro'];
									unset ($_SESSION['loginErro']);
								}?>
							</p>
							<p>
								<?php if(isset($_SESSION['loginDeslogado'])){
									echo $_SESSION['loginDeslogado'];
									unset ($_SESSION['loginDeslogado']);
								}?>
							</p>
							<p>
								<?php if(isset($_SESSION['recuperarsenha'])){
									echo $_SESSION['recuperarsenha'];
									unset ($_SESSION['recuperarsenha']);
								}?>
							</p>
						</form>
					</div>
				</div>
			</div>
		</section>

		

		<section class="bg-footer pt-5 pb-5">
			<footer class="text-center">
				<div class="container">
					<div class="row">
						<div class="col-12 text-center">
							<img src="imagens/icons8-haiku-48.png">
							<h6>André Luiz Lazarotte - direitos reservados</h6>
						</div>
					</div>
				</div>
			</footer>
		</section>	



		<script type="text/javascript" src="js/meusscripts.js"></script>
	</body>
</html>
