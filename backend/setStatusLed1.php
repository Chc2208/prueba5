<?php


if (isset($_GET["valueLed1"])) {
	$valueLed1 = $_GET["valueLed1"];

	$array = array('estatus' => $valueLed1);

	$json = json_encode($array);
	file_put_contents("led1.txt", $json);
	echo "Status LED1=$valueLed1";
}
