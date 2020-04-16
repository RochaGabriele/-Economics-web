$('#cadastrar').click(function(e){
		e.preventDefault();
		var user = $('#user');
		var email = $('#email');
		var sexo = $("input[name='sexo']:checked");
		var senha= $('#senha');
		var confsenha = $('#confsenha');

		if(user.val()=='' || senha.val()=='' || email.val()=='' || confsenha.val()=='' || sexo.val()== null){
			swal({
  				title: "Preencha todos os campos!",
  				text: "todos os campos são obrigatórios",
  				icon: "warning"
			});

			return false;
		}
		if(senha.val()!=confsenha.val()){
			swal({
  				title: "Senha não corresponde!",
  				text: "Senha não é a mesma que a confirmação dela",
  				icon: "warning"
			});

			return false;	
		}
		$.ajax({
			url:'controle/inserirUser.php',
			method:'POST',
			datatype:"html",
			data:{
				user: user.val(),
				email: email.val(),
				senha: senha.val(),
				sexo: sexo.val(),
				confsenha: confsenha.val()
			}
		}).done(function(data){
			if(data=="Cadastro realizado com sucesso!"){
				user.val('');
				email.val('');
				senha.val('');
				confsenha.val('');
				swal({
  					title: data,
  					text: "Seja bem vindo",
  					icon: "success"
				});
			}else{
				swal({
  					title: "Por favor, tente novamente.",
  					text: data,
  					icon: "warning"
				});
				senha.val('');
				confsenha.val('');
			}
		});

	});