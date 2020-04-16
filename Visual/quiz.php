<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Quiz</title>
  
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/quiz.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">

  
</head>

<body>
	<?php
    require_once("menu.php");
  ?>
  <div class="quiz">
  
  
  <div id="borde">
  <h2 class="quiz-question">Você exagera nas compras?</h2>
  </div>
  
	<div id="bor"> 
  <ul data-quiz-question="1">
    <li class="quiz-answer" data-quiz-answer="a">a. Sempre, compro tudo que vejo pela frente. Não sobra nada no fim do mês.</li>
    <li class="quiz-answer" data-quiz-answer="b">b. Não, gosto sempre de me policiar na hora das compras.</li>
    <li class="quiz-answer" data-quiz-answer="c">c. Às vezes, mas tem horas que não dá e eu acabo sucumbindo.</li>
    <li class="quiz-answer" data-quiz-answer="d">d. Raramente eu não exagero.</li>
    <li class="quiz-answer" data-quiz-answer="e">e. Raramente eu exagero, só quando eu realmente estou querendo muito algumas coisas.</li>
  </ul>
  </div>
  
  <div id="borde">
  <h2 class="quiz-question">Quanto da sua renda mensal você guarda ou investe?</h2>
  </div>
  
  <div id="bor">
  <ul data-quiz-question="2">
    <li class="quiz-answer" data-quiz-answer="a">a. 1 a 20% de toda minha renda mensal.</li>
    <li class="quiz-answer" data-quiz-answer="b">b. Nada, todo dinheiro que ganho eu gasto.</li>
    <li class="quiz-answer" data-quiz-answer="c">c. Às vezes eu guardo/invisto.</li>
    <li class="quiz-answer" data-quiz-answer="d">d. Guardo 10% ou mais, pois não sei onde investir.</li>
    <li class="quiz-answer" data-quiz-answer="e">e. Minha renda mensal vai toda para as dívidas.</li>
  </ul>
  </div>
  
  <div id="borde">
  <h2 class="quiz-question">Quanto você gasta com fast food?</h2>
  </div>
  
  <div id="bor">
  <ul data-quiz-question="3">
    <li class="quiz-answer" data-quiz-answer="a">a. Quando sobra algum dinheiro eu compro, geralmente uns 20 ou 30 reais.</li>
    <li class="quiz-answer" data-quiz-answer="b">b. Em torno de 400 reais para o mês todo, frequentemente compro.</li>
    <li class="quiz-answer" data-quiz-answer="c">c. Em torno de 200, não pode faltar fast food.</li>
    <li class="quiz-answer" data-quiz-answer="d">d. Prefiro comidas caseiras mesmo.</li>
    <li class="quiz-answer" data-quiz-answer="e">e. Em torno de 100 reais, compro mais nos fins de semana.</li>
  </ul>
  </div>
  
  <div id="borde">
  <h2 class="quiz-question">Depois da compra:</h2>
  </div>
  
  <div id="bor">
  <ul data-quiz-question="4">
    <li class="quiz-answer" data-quiz-answer="a">a. Fico em duvida se eu realmente precisava.</li>
    <li class="quiz-answer" data-quiz-answer="b">b. Eu percebo que realmente precisava.</li>
    <li class="quiz-answer" data-quiz-answer="c">c. Eu me dou conta de que já tinha algo igual.</li>
    <li class="quiz-answer" data-quiz-answer="d">d. Só compro as compras do mês, estou guardando dinheiro para o futuro. Então a consciência está limpa.</li>
    <li class="quiz-answer" data-quiz-answer="e">e. Penso que só comprei por que sei que não vai me deixar no vermelho.</li>
  </ul>
  </div>
  
  <div id="borde">
  <h2 class="quiz-question">Pesquiso os preços antes da compra?</h2>
  </div>
  
  <div id="bor">
  <ul data-quiz-question="5">
    <li class="quiz-answer" data-quiz-answer="a">a. Com certeza, afinal isso é essencial.</li>
    <li class="quiz-answer" data-quiz-answer="b">b. Sim, mas às vezes canso e não pesquiso muito.</li>
    <li class="quiz-answer" data-quiz-answer="c">c. Não acho necessário, o dinheiro que tenho não me deixa com dívidas.</li>
    <li class="quiz-answer" data-quiz-answer="d">d. Não, isso é bobagem.</li>
    <li class="quiz-answer" data-quiz-answer="e">e. Compro o que me chama a atenção e não pelo preço. Mas ultimamente estou devendo
muito.</li>
  </ul>
  </div>

</div>

<div class="quiz-result"></div>

	<script src='js/jquery.min.js'></script>
    <script  src="js/quiz.js"></script>
    
    <?php
    require_once("footer.php");
   ?>

</body>

</html>
