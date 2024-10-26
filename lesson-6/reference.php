<?php
// assign by reference

$name = "Harso";
$username = &$name;

echo $username . PHP_EOL;

$username = "Ngatimin";
echo $name;
