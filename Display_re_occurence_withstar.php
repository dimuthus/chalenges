<?php
$str = "helloWorld";
$my_result=[];
$star="*";
foreach (count_chars($str, 1) as $strr => $value) {
    $star="*";
	$addStar="";
	for ( $i=0;$i<$value;$i++ ) {
             $addStar =$addStar.$star;
    }
   
   echo  chr($strr).":".$addStar.",";
}
