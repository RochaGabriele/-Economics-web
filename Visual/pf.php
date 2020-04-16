<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Plano Financeiro</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/pf.css">
</head>
<body>


  <?php
    require_once("menu.php");
  ?>
  <div class="banner-intro">
    <div class="container text-intro">
      <h3 class="txt-intro"><div class="bv">Bem vindo</div> 
        Nesta página você pode fazer seu <strong>plano financeiro mensal</strong>. De forma intuitiva, o sitema lhe apresentará uma proposta de divisão do seu capital em valores e como usá-los. </h3>
    </div>
  </div>

  <section class="principal">
    <div class="centroo">
  	 <div class="titulo"><h1>Plano Financeiro</h1></div>
    </div>
  	<div class="container form-pf" id="form-plan">
  		<form>
  			<div class="form-group lbandinp">
      		<label for="cap" class="font">Quanto você ganha mensalmente?</label>
      		<input type="text" class="form-control" name="capital" id="cap"  placeholder="Seu capital mensal."/>
    		</div>
    		<div class="form-group lbandinp">
          <label for="dividas" class="font">Qual o valor total de suas dividas?</label>
          <input type="text" class="form-control" name="dividas" id="dividas"  placeholder="Valor dividas fixas mensais?"/>
    		</div>
  			<div class="form-group lbandinp">
          <label for="yes" class="font">Você tem algum projeto para esse mês ou a longo prazo?</label>
          <div class="caixinha">
            <label class="lbsn">Sim</label>
            <input type="radio" class=" bolinha" name="sn" value="yes" id="yes"/>
            <label class="lbsn">Não</label>
            <input type="radio" class=" bolinha" name="sn" value="no" id="no"/>
          </div>
        </div>
    			<input type="hidden" name="data" id="data" value="#"/>
    			<button type="submit" onclick="display('resul')"  id="btnenviar" class="btn mb-2 text-center"><span class="font-bnt">Gerar Plano Financeiro</span></button>
  		</form>
  	</div>

  	<div class="container result" id="resul">
  		<div class="cab"><h1>Seu Plano Financeiro mensal <span id="date">Data</span></h1></div>
  		<br/>
  		<div class="rs">
      		<div class="ref"><strong>Capital</strong></div>
      		<div class="desc">Este é seu capital mensal</div>
      		<div class="val" id="capresul"><strong>valor</strong></div>
      		<div class="ref lef"><strong>Dívidas</strong></div>
      		<div class="desc">Este é o valor de suas dívidas mensais. Espera-se que este valor gradualmente diminua.</div>
      		<div class="val" id="dividasresul"><strong>valor</strong></div>
    		</div>
    		<div class="rs">
      		<div class="ref"><strong>Futilidades</strong></div>
      		<div class="desc">Fast Food; roupas; passeios (shopping, cinema...); dentre outros.</div>
      		<div class="val" id="futresul"><strong>valor</strong></div>
      		<div class="ref lef fil"><strong>Emergências
      		/
      	Projetos</strong></div>
      		<div class="desc">(ex: viagens, consulta de ultima hora, remédios...)</div>
      		<div class="val" id="emeproresul"><strong>valor</strong></div>
    		</div>

    		<div class="rs">
      		<div class="ref"><strong>Investir</strong></div>
      		<div class="desc">Que tal investir esta quantia na <a href="#">bolsa de valores</a> ou começar <a href="#">projetos de renda extra</a>?</div>
      		<div class="val" id="investresul"><strong>valor</strong></div>
      		<div class="ref lef"><strong>Poupança</strong></div>
      		<div class="desc">Deposite este valor na sua poupança, como forma de se precaver.</div>
      		<div class="val" id="poupresul"><strong>valor</strong></div>
    		</div>
    		<div class="container descricoes">
          <ul>
            <li>
              <strong>Futilidades:</strong> Fast Food; roupas; passeios (shopping, cinema...); dentre outros.
            </li>
            <li>
              <strong>Emergencias e projetos:</strong> (ex: viagens, consulta de ultima hora, remédios...)
            </li>
            <li>
              <strong>Investir:</strong> Que tal investir esta quantia na <a href="#">bolsa de valores</a> ou começar <a href="#">projetos de renda extra</a>?
            </li>
            <li>
              <strong>Poupança:</strong> Deposite este valor na sua poupança, como forma de se precaver.
            </li>
            </br>
            <p><em>Veja abaixo alguns artigos sobre economia e finanças...</em></p>
          </ul>  
        </div>

  	</div>
  </section>

	

		<section class="tres">
      <div class="container-fluid">
        <div class="row linhaa">
            <div class="col-sm contimg">
              <a target="_blank" href="https://blog.guiabolso.com.br/7-dicas-de-como-controlar-as-financas-pessoais">
                <img src="imagens/caneta.jpg"  class="rounded tri "  alt="algo de errado não está certo"/>
              </a>
            </div>
            <div class="col-sm contimg">
              <a target="_blank" href="https://exame.abril.com.br/seu-dinheiro/10-livros-essenciais-para-quem-quer-comecar-a-investir">
                <img src="imagens/10livros.jpg" class="rounded tri"  alt="algo de errado não está certo"/>
              </a>
            </div>
            <div class="col-sm contimg">
              <a target="_blank" href="https://financaspessoais.organizze.com.br/mude-seu-orcamento-pessoal-com-a-regra-do-50-15-30">  
                <img src="imagens/calculadora.jpg" class="rounded tri"  alt="algo de errado não está certo"/>
              </a>
          </div>
        </div>
      </div>
    </section>


  <?php
    require_once("footer.php");
   ?>



</body>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/sweetalert.min.js"></script>
<script type="text/javascript" src="js/pf.js"></script>
</html>