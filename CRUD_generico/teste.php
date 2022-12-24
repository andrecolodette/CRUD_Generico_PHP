<?php

require_once ("classe/cliente.classe.php");

$cliente_1 = new clientes();

echo "<pre>";
print_r($cliente_1);
echo "</pre> <br />";

$cliente_2 = new clientes(array(
			"nome" => "Andre",
			"sobrenome" => "Colodette"
		));

echo "<pre>";
print_r($cliente_2);
echo "</pre> <br />";

$cliente_3 = new clientes(array(
			"nome" => "Andre",
			"endereco" => "Castelo"
		));

echo "<pre>";
print_r($cliente_3);
echo "</pre> <br />";

$cliente_4 = new clientes();
$cliente_4->delCampo("sobrenome");

echo "<pre>";
print_r($cliente_4);
echo "</pre> <br />";

//$cliente_4->extra_select = "LIMIT 3";
$cliente_4->selecionaTudo($cliente_4);
while($res = $cliente_4->retornaDados()):
	echo $res->nome.'<br />
endwhile

?>

