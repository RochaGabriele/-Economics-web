<?php 
 require_once("menu.php");
	echo"

        <link rel='stylesheet' type='text/css' href='css/artigos.css'>
       
		 <script>
function typeWritter(texto, idElemento, tempo) {
  var char = texto.split('').reverse();
  var typer = setInterval(function() {
    if (!char.length) return clearInterval(typer);
    var next = char.pop();
    document.getElementById(idElemento).innerHTML += next;
  }, tempo);
}


typeWritter('Planejamento', 'plan', 300);
typeWritter('Livros', 'dicas', 300);
typeWritter('Orçamento', 'log', 300);
typeWritter('Dicas', 'conselho', 300);

 
    </script>
			<div class='row line'>
				<div class='container text-left' id='comeco'>
			  			
			  			
			  		
				    <img src='imagens/artigos.svg' class='img-fluid float-right test' alt='Imagem responsiva'>
				    <h1 class='display-4 m-1 text-center'>Aprenda mais com os artigos!</h1>
				    <p class='lead display-7 text-center'>
				      	Mostraremos por meio de artigos dicas para tópicos, como: economia, planejamentos, viajens etc.
				    </p>
			  	</div>
			  	<div class='container'>
			  		  		<div class='row line' id='po'>
			  			<div class='col-lg-6 col-sm-6 col-xs-6 col-md-6 square one '>
			  			 <a href='https://blog.rico.com.vc/planejamento-financeiro-pessoal-poderoso' class='barreira'>
			  				<h1  id='li'> Planejamento Financeiro Pessoal: O guia completo [2020]</h1></a>
			  			</div>
			  			<div class='col-lg-6 col-sm-6 col-xs-6 col-md-6 topics' id='plan'>
			  				
			  			</div>
			  		</div>
			  		<div class='row line' id='po'>
			  			<div class='col-lg-6 col-sm-6 col-xs-6 col-md-6 topics' id='dicas'>
			  				
			  			</div>
			  			<div class='col-lg-6 col-sm-6 col-xs-6 col-md-6 square two '>
			  			<a href='https://exame.abril.com.br/seu-dinheiro/10-livros-essenciais-para-quem-quer-comecar-a-investir/' class='barreira'>
			  				<h1  id='li'> 10 livros essenciais para quem quer começar a investir</h1></a>
			  			</div>
			  		</div>
			  		<div class='row line' id='po'>
			  			<div class='col-lg-6 col-sm-6 col-xs-6 col-md-6 square three '>
			  			<a href='https://financaspessoais.organizze.com.br/mude-seu-orcamento-pessoal-com-a-regra-do-50-15-30/' class='barreira'>
			  				<h1 id='li'> Mude seu orçamento pessoal com a regra do 50-15-35</h1></a>
			  			</div>
			  			<div class='col-lg-6 col-sm-6 col-xs-6 col-md-6 topics ' id='log'>
			  			
			  			</div>
			  		</div>
			  		<div class='row line' id='po'>
			  			<div class='col-lg-6 col-sm-6 col-xs-6 col-md-6 topics '  id='conselho'>
			  				
			  			</div>
			  			<div class='col-lg-6 col-sm-6 col-xs-6 col-md-6 square four '>
			  			<a href='https://blog.guiabolso.com.br/7-dicas-de-como-controlar-as-financas-pessoais/' class='barreira'>
			  				<h1  id='li'> 7 dicas de como controlar as finanças pessoais</h1></a>
			  			</div>
			  		</div>
			  	</div>
          </div>

			  	";
          require_once("footer.php");
	?>
