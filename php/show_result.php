<?php

$link = mysqli_connect('localhost', 'root', '', 'systemDB');

$sql = "SELECT * FROM result";
$result = mysqli_query($link, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>