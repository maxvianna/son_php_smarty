<?php

include("config.php");

// $slq = "INSERT INTO cliente 
// 		(nome , sobrenome , empresa) 
// 			VALUES 
// 		('Marcio' , 'da Silva', 'Empresa modelo')";

//mysql_query($slq);

$sql_select = "SELECT * FROM cliente";
$result = mysql_query($sql_select);
$return = array();

if (mysql_num_rows($result) > 0) {
	for ($i=0; $i < mysql_num_rows($result); $i++) { 
		$return[] = mysql_fetch_array($result);
	}
} else {
	//$return['erro'] = "Nenhum erro encontrado";
}

// echo "<pre>";
// print_r($return);
// echo "</pre>";

$smarty->assign('clientes',$return);

$smarty->display('index.tpl');

?>