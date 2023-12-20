<?php
#incluindo as funcoes
include_once 'inc/funcoes.php';
#incluindo conexão
include_once 'inc/conecta.php';
#consulta para montar o select tipo
$sql = "select Valor,Rotulo from tipos";
$result = mysqli_query($conn,$sql);
$tipos = resultForArray($result);
$select = montaSelect($tipos, 'tipo','tipo','','',true);
//die($select);
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
           <form id="form2" name="form2" method="get" action="noticias_tipo.php">
             <div id="espaco" ></div>
     	   Escolha o tipo de Notícia:
   		    
			<?=$select ?>

     	   </form>
      </span></div>
</div>

<?php
include 'inc/rodape.php';
?>