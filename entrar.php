<?php
#flag
$publica = true;
#cabecalho
include_once 'inc/cabecalho.php';
include_once 'inc/conecta.php';
include_once 'inc/funcoes.php';
include_once 'inc/avisos.php';

?>

<form name="admin" id="admin" method="POST" action="autentica.php">
<div>  
	<div  style="margin:auto;width:30%" class="tabela_borda">
      
        <div class="tabela_cabecalho">Administração do Site</div>
      
      
        <div>&nbsp;</div>
      
      <p>
        <label for = "usuario" class="texto_rotulo">Usuario:  </label>
        <input name="usuario" type="text" id="usuario" />
      </p>  
      <p>
        <label for = "senha" class="texto_rotulo">Senha: </label>
        <input name="senha" type="password" id="senha" />
      </p>
      
      <p>
        <div class="right">
        <input name="autenticar" type="submit" class="botao" value="Entrar" />
        </div>
      </p>
   
</div>    
</form>
<?php
  include_once 'inc/rodape.php';
?>

