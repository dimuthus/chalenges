<?php

$a=['a','b','a','c','a','d'];

$output=[];

foreach ($a as $v) {
    $output[$v] = ($output[$v] ?? 0) + 1;
}

print_r($output);

?>