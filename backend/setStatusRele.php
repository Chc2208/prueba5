<?php

if (isset($_GET["valueRele"])) {
	$valueRele = $_GET["valueRele"];

	$array = array('estatus' => $valueRele);

	$json = json_encode($array);
	file_put_contents("rele.txt", $json);
	echo "Status Relé=$valueRele";
}
