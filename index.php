<?php
#flag para o cabeçalho HTML
$publica = true;
#inclui o cabeçalho HTML
include 'inc/cabecalho.php';
?>

<div id="externa">
<div id="header"><span class="senac">senac</span> <span class="news">notícias</span></div>
	<div id="tudo">
	
	  <div id="menu" class="left"><a href="noticias.php">Notícias</a> &nbsp;&nbsp;&nbsp;&nbsp;<a href="entrar.php">Administração</a></div>
		<div id="menu2">&nbsp;</div>
 		<div id="cinza1">&nbsp;</div>
	  <div id="menu3">
	    <div id="news">noticias</div>
	  </div>
	  <div id="logo"><img src="imagens/senac_logo.gif" alt="SENAC" width="151" height="144" /></div>
	  <div id="cinza2">&nbsp;</div>
     	   <span class="tabela_cabecalho">
           <form id="form1" name="form1" method="post" action=""><div id="espaco" ></div>
     	   
		   <label for="busca" id="labelBusca">Busca:</label>
   		    <input name="busca" type="text" class="botao" />   
            <input name="botao" type="submit" class="botao" id="botao" value="Buscar" />
          </form></span>   
	  <div id="ultimas_tudo">
	    <div id="ultimas">
	      <div class="tabela_cabecalho" id="ult_tit">
	        <div class="left" id="ult_int">Últimas Notícias </div>
		  </div>
		  <div id="dinamica">
		    <div>&nbsp;</div>
			  <div class="left" id="noticia">
			    <span class="fonte_laranja">05/02/2011</span> - <a href="detalhe_noticia.php">dfdfd dfdsf ghghg hjhj hjhjhj j </a><br />
	      </div></div>
		  <div>&nbsp;</div>
	    </div>


	  <div id="destaque">
      <div id="interna">
   			<div class="left" class="fonte_laranja_24">Cultura</div>
    			<p class="left"><span class="fonte_laranja">12/02/2011</span> - <a href="detalhe_noticia.php">utyiyuiyuiyuiyuiyuiyiuyui</a></p>
   			<p class="left">resumo da notícia resumo da notícia resumo da notícia
    resumo da notícia resumo da notícia resumo da notícia
    resumo da notícia . </p>
		  </div>
		</div>
	</div>      </div>
</div>

<?php
include 'inc/rodape.php';
?>