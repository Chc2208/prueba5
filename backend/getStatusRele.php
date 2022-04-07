<?php

$valueRele = file_get_contents("rele.txt");
$status = json_decode($valueRele, true);

foreach ($status as $item) {
    echo $item;
}
