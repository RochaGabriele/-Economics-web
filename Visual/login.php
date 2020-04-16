<?php
	echo'
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid elementos">
		<div class="container-fluid cabecalho">	
			<div class=" name-site">		
				<h1>Economics Web</h1>
			</div>
		</div>
		<div class="row mx-lg-n5">
			<div class="col py-6 px-lg-5 coluna1 devices-svg">
				<div class="col py-6 px-lg-5 img-dvc">
					<div class="login-svg">
						<img class="imgfin" src="imagens/logimg.svg" alt="svg representando evolução">
					</div>
				</div>
			</div>
			<div class="col py-6 px-lg-5 ">
				<div class="formulario">
					<form>
						<div class="text-center mb-1">
						<h3 class="txt-saudacao">Seja Bem Vindo</h3>
						<div>
							<img class="pfl" src="imagens/perfilft.svg" alt="imagem representando uma foto de perfil">
						</div>
						<span class="medium log-cad">Logue-se</span>
						</div>
						<div class="form-group">
			    			<label for="user" class="font">Usuário</label>
			    			<input type="text" class="form-control" name="user" id="user"  placeholder="Seu nome de usuário"/>
			  			</div>
			  			<div class="form-group mt-2">
			    			<label for="senha" class="font">Senha</label>
			    			<input type="password" class="form-control" name="senha" id="senha" placeholder="Senha"/>
			    			</br>
			    			<div class="medium ">
			    				<a class="link" href="cadastro.php">Ainda não é cadastrado? Cadastre-se!</a>
			    				</br> 
			    				<a class="link" href="index.php">Voltar à home</a>
			    			</div>

			  			</div>
	  					<button type="submit" id="btnenvia" class="btn mb-2 text-center">Entrar</button>
	  				</form>
				</div>
			</div>
		</div>
		</br>
		<div class="container-fluid foot">	
			<div class="fon">		
				<a href="#" class="midia"><img src="imagens/instagramicon.svg"></a>
				<a href="#" class="midia"><img src="imagens/facebookicon.svg"></a>
				<a href="#" class="midia"><img src="imagens/linkedin.svg"></a>
				<a href="#" class="midia"><img src="imagens/twitter.svg"></a>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/sweetalert.min.js"></script>
<script src="js/login.js" type="text/javascript"></script>
</html>
';


?>