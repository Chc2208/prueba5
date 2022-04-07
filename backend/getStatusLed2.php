<?php

$valueLed2 = file_get_contents("led2.txt");
$status = json_decode($valueLed2, true);

foreach ($status as $item) {
    echo $item;
}
