<?php

$foo = 'Bob';
$bar = &$foo;
$bar = "Mi nombre es $bar";
echo $foo;
echo $bar

?>