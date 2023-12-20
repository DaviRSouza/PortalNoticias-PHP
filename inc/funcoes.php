<?php

	function montaSelect(array $itens,string $name,string $id, string $class="", mixed $selected="",bool $acao = false):string
	{
		if($acao === true){
			$acao = 'onchange="form.submit()"';
		}
		if(!empty($class)){
			$class = "class=\"$class\" ";
		}

		$select = "\t<select name=\"$name\" id=\"$id\" $class $acao>\n";
		$select = $select . "\t\t<option value=\"escolha\">Escolha</option> \n";
		foreach($itens as $value=>$label){ 
			$select =  $select . "\t\t<option value=\"$value\" ";
            $select .=($value==$selected)?('selected'):(null);
            $select .= ">$label</option> \n";
		} 
		$select .= "\t</select>\n";//$saida = $saida."\t</select>\n";
		return $select;
	}

	//$avioes=['airbus'=>'A380', 'boeing'=>'787', 'embraer'=>'Ej195', 'ritalee' => 'Disco Voador'];
	########################################################################################################################

    

	function resultForArray($result):array
	{
		while($linha = mysqli_fetch_assoc($result)){

			extract($linha);
			$array[$Valor]=$Rotulo;
		}
		return $array;
	}

	##########################################################################################################################
	function dataHtmlToSql(string $dataHtml):string
	{
		//$dataHtml='15/05/2023';
		$dataArray = explode('/', $dataHtml);
		$dataArray = array_reverse($dataArray);
		$dataSql = implode('-', $dataArray);
		return $dataSql;
	}


	function dataSqlToHml(string $dataSql):string
	{
		//$dataHtml='15/05/2023';
		$dataArray = explode('-', $dataSql);
		$dataArray = array_reverse($dataArray);
		$dataHtml = implode('/', $dataArray);
		return $dataHtml;
	}


	function dataSqlToHml2()
	{
		$data = date_create('$dataSql');
		$dataHtml = date_format($data, 'd/m/Y');
		return $dataHtml;
	}

#########################################################################################################################################
function logado():void
{
      if(!isset($_SESSION)){ session_start();}
      if(!isset($_SESSION['logado']) || $_SESSION['logado'] !== true){
            $vai = '../entrar.php?aviso=invasor';
            header('location:'.$vai);
            exit;
      }
}

function nivel()
{
	if($_SESSION['nivel'] !== 'sup'){
		$vai = 'admin.php?aviso=nivel';
		header('location:'.$vai);
	}
}