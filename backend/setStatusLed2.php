<?php


if (isset($_GET["valueLed2"])) {
	$valueLed2 = $_GET["valueLed2"];

	$array = array('estatus' => $valueLed2);

	$json = json_encode($array);
	file_put_contents("led2.txt", $json);
	echo "Status LED2=$valueLed2";
}
