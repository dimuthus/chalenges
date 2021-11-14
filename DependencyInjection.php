<?php
//DI mean inject one class from another
// Three ways we can do this 
//1.  Through Construtor
//2.  Through Setter function
//3.  Through Interface
//DI can not use for protected properties 
// Where we use DI , specialy in when mysql connection

class First_Class{
	public $var1="First class variable"; 
	public function getValue(){
		return $this->var1;
	}
}
class Second_Class{
	public $var2="";
	function __construct(First_Class $class1){
		echo $class1->getValue();
	}
}
$class2=new Second_Class(new First_Class);
 

?>