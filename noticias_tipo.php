<?php
#flag para o cabeçalho HTML
$publica = true;
#inclui o cabeçalho HTML
include_once 'inc/cabecalho.php';
?>

<div id="externa">
	
	<div id="tudo">
	  <div id="menu" class="left"><a href="noticias.php">Notícias</a> &nbsp;&nbsp;&nbsp;&nbsp;<a href="entrar.php">Administra&ccedil;&atilde;o</a></div>
		<div id="menu2">&nbsp;</div>
 		<div id="cinza1">&nbsp;</div>
	  <div id="menu3">
	    <div id="news">noticias</div>
	  </div>
	  <div id="logo"><img src="imagens/senac_logo.gif" alt="SENAC" width="151" height="144" /></div>
	  <div id="cinza2">&nbsp;</div>
     	   <span class="tabela_cabecalho">
           <form id="form2" name="form2" method="post" action="">
             <div id="espaco" ></div>
     	   Escolha o tipo de Notícia:
   		    
           
     	   <select name="tipo" class="botao" id="tipo">
     	     <option value="esc">Escolha</option>
     	     <option value="cul">Cultura</option>
     	     <option value="pol">Politica</option>
     	     <option value="eco">Economia</option>
   	       </select>
     	   </form>
      </span>   
	    <div id="not_tipo">
         <div id="cinza3">&nbsp;</div>
	      <div class="tabela_cabecalho" id="tipo_tit">
	      
	          <div class="center" id="titulo">Cultura</div>
		  </div>
		  <div id="lista_not">
		    <div id="lista">05/02/2004 - <a href="detalhe_noticia.php">Título da Notícia</a><br />
Resumo da noticia resumo da noticia resumo da noticia resumo da noticia resumo
da noticia resumo da noticia resumo da noticia resumo da noticia resumo da noticia
resumo da noticia resumo da noticia resumo da noticia resumo da noticia resumo
da noticia . </div></div>

		<div id="barras_status">&nbsp;</div>
        
		  <div id="aviso">&nbsp;</div>
          
          
		  
	    </div>
    <div id="navegacao">&nbsp;</div>
	</div>
</div>

<?php
include 'inc/rodape.php';
?>