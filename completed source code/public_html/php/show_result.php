<?php

$link = mysqli_connect('localhost', 'id15613200_root', 'Akulupa1998#', 'id15613200_systemdb');

$sql = "SELECT * FROM result";
$result = mysqli_query($link, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);


?>