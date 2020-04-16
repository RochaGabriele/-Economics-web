/*function mostrar(id){
	var menu = document.getElementById(id);
	if(menu.classList.contains("parece-hide")){
		menu.classList.remove("parece-hide");		
	}else{
		menu.classList.add("parece-hide");
	}
}

function display(id){
	var conteudo = document.getElementById(id);
	if(conteudo.style.display=="block"){
		conteudo.style.display="none";
	}else{
		conteudo.style.display="block"
	}
}
*/

$('#btnenviar').click(function(e){
		e.preventDefault();
		var dNow = new Date();
		adata = dNow.getDate() + '/' + (dNow.getMonth()+1) + '/' + dNow.getFullYear();
		var conteudo = $('#resul');
		var dataa = $('#date');
		var cap = $('#cap');
		var dividas= $('#dividas');
		var sn= $("input[name='sn']:checked");
		var capresul = $("#capresul");
		var dividasresul = $("#dividasresul");
		var emeproresul = $("#emeproresul");
		var investresul = $("#investresul");
		var futresul = $("#futresul");
		var poupresul = $("#poupresul");
		
		if(cap.val()=='' || dividas.val()=='' || sn.val()== null){
			swal({
  				title: "Preencha todos os campos!",
  				text: "todos os campos são obrigatórios",
  				icon: "warning"
			});
			return false;
		}else{
			cap = parseFloat(cap.val());
			dividas = parseFloat(dividas.val());
			novocap =cap-dividas;
			emepro = 0.30*novocap;
			poup = 0.25*novocap;
			invest = 0.30*novocap;
			fult = 0.15*novocap;
			dataa.html(adata);
			capresul.html(cap);
			dividasresul.html(dividas); 
			emeproresul.html(emepro); 
			investresul.html(invest); 
			futresul.html(fult);
			poupresul.html(poup); 
			conteudo.css("display","block");
			$("#form-plan").css("display","none");
		}
		/*$.ajax({
			url:'#insira pra onde vai#',
			method:'POST',
			datatype:"html",
			data:{
				capital: cap,
				dividas: dividas,
				emepro: emepro,
				investimento: invest,
				futilidades: fult,
				poupanca: poup,
				date: adata
			}
		});*/

	});