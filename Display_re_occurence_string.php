<?php
$str = "helloWorldH";
$my_result=[];
$star="*";
foreach (count_chars($str, 1) as $strr => $value) {
    echo chr($strr) . " occurred a number of $value times in the string." . "<br>";
  
}
