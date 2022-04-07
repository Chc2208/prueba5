<?php

$valueLed1 = file_get_contents("led1.txt");
$status = json_decode($valueLed1, true);

foreach ($status as $item) {
    echo $item;
}
