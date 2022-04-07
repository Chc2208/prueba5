<?php


if (isset($_GET["valueLed3"])) {
	$valueLed3 = $_GET["valueLed3"];

	$array = array('estatus' => $valueLed3);

	$json = json_encode($array);
	file_put_contents("led3.txt", $json);
	echo "Status LED3=$valueLed3";
}
