<?php

	echo '

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cadastro</title>
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
					<div class="cad-svg">
						<img src="imagens/imgcad.svg" alt="svg representando evolução">
					</div>
				</div>
			</div>
			<div class="col py-6 px-lg-5 ">
				<div class="formulario">
					<form>
						<div class="text-center mb-1">
						<h3 class="txt-saudacao">Seja Bem Vindo</h3>
						<span class="medium log-cad">cadastre-se</span>
						</div>
						<div class="form-group">
			    			<label for="user" class="font">Usuário</label>
			    			<input type="text" class="form-control" name="user" id="user"  placeholder="Seu nome de usuário"/>
			  			</div>
			  			<div class="form-group">
			    			<label for="email" class="font">Email</label>
			    			<input type="text" class="form-control" name="email" id="email"  placeholder="Seu email..."/>
			  			</div>
			  			<div class="form-group ">
			    			<label for="feminino" class="font">Sexo</label>
			    			<div class="caixinha">
			    				<label class="namesex">Feminino</label>
				    			<input type="radio" class="form-control boll" name="sexo" value="feminino" id="feminino"/>
				    			<label class="namesex">Masculino</label>
				    			<input type="radio" class="form-control boll" name="sexo" value="masculino" id="masculino"/>
			    			</div>
			  			</div>
			  			<div class="form-group mt-2">
			    			<label for="senha" class="font">Senha</label>
			    			<input type="password" class="form-control" name="senha" id="senha" placeholder="Senha"/>
			    		</div>
			  			<div class="form-group mt-2">
			    			<label for="confsenha" class="font">Confirmação de senha</label>
			    			<input type="password" class="form-control" name="confsenha" id="confsenha" placeholder="Confirme a sua senha"/>
			    		</br>
			    			<div class="medium ">
			    				<a class="link" href="login.php">Já é cadastrado? Faça login!</a>
			    				</br> 
			    				<a class="link" href="index.php">Voltar à home</a>
			    			</div>

			  			</div>
	  					<button type="submit" id="cadastrar" class="btn mb-2 text-center">Cadastrar</button>
	  				</form>
				</div>
				
			</div>
		</div>
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
<script src="js/cadastro.js" type="text/javascript"></script>

</html>
	';







?>