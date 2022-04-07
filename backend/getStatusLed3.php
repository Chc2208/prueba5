<?php

$valueLed3 = file_get_contents("led3.txt");
$status = json_decode($valueLed3, true);

foreach ($status as $item) {
    echo $item;
}
