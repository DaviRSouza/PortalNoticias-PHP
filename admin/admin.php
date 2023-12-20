<?php
include_once '../inc/cabecalho.php';
include_once '../inc/funcoes.php';
logado();
include_once '../inc/avisos.php';
?> 
	<div  style="margin:auto;width:30%" class="tabela_borda">
      
        <div class="tabela_cabecalho"><span class="style3">Administração
              do Site </span></div>
      
      
        <p>&nbsp;</p>
        <p class="center texto_rotulo"><a href="noticia.php">Notícias</a></p>
<?php   
        if($_SESSION['nivel'] === 'sup'){
        echo '<p class="center texto_rotulo"><a href="user.php">Usuários</a></p>';
        }
?>
        <p class="center texto_rotulo"><a href="tipo.php">Tipos de Notícias</a></p>
        <p class="center texto_rotulo"><a href="#">Sair</a></p>
</div>

<?php
include '../inc/rodape.php';
?>