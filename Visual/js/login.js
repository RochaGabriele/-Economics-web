$('#btnenvia').click(function(e){
		e.preventDefault();
		var user = $('#user');
		var senha= $('#senha');
		if(user.val()=='' || senha.val()==''){
			swal({
  				title: "Preencha todos os campos!",
  				text: "todos os campos são obrigatórios",
  				icon: "warning"
			});

			return false;
		}
		/*$.ajax({
			url:'controle/valida-login.php',
			method:'POST',
			datatype:"html",
			data:{
				user: user.val(),
				senha: senha.val()
			}
		}).done(function(data){
			if(data=="Usuário ou senha incorretos!" || data=="Dados não encontrados, banco de dados vazio" ){
				swal({
  					title: data,
  					text: "Por favor, tente novamente.",
  					icon: "warning"
				});
				senha.val('');
			}else{
				user.val('');
				senha.val('');
				window.location.href="home-adm.php";
			}
		});*/

	});