<?php

$numero =10000;
$n = 0;
do{
$numero = floor($numero / 10);
$n = $n + 1;
} while ($numero > 0);
echo $n;

?>