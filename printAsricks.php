<?php
$arr = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

function printAstric($num){
	  $star="*";
	  for ( $i=0;$i<$num;$i++ ) {
             echo $star;
      }
	
}
function findValuesBetweenTwoItems($arr, $start, $end) {
  $result = [];
  $has_started = false;
  $sum=0;
  $min = min($arr);
  $max = max($arr);

  foreach ( $arr as $item=>$value ) {
	
	  if ($start <0 || $end<0 ){
		  $sum=-1;
		  return $sum;
 
	  }
	  else if ($start > $end){
		  $sum=0;
          return $sum;


	  }
	  else {
		if ($start < $min) 
		   $start=$min;
		if ($end > $max) 
		   $end=$max;
		if( ( $value != $end && $has_started ) || $value == $start) {
		  //array_push($result, $value);
		  $sum=$sum+$value;
		  $has_started = true;
		}
		if( $value == $end ) {
		   //array_push($result, $value);
		   $sum =$sum+$value;
		   return $sum;

		}
	   }
  }
}
//$my_values = findValuesBetweenTwoItems($arr, 100, 10);
//echo $my_values; 
?>