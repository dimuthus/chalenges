<?php
//Interface (declare only) | abstract class (declare and define, abstarct method should not have body)
//Interface (multiple inheritance) | abtract class (single)
//Interface (no propertice)| abstract class (+)
//Interface (visiblity public only)| abstractrct class (not only public)

/*********point 1*********/

Interface A {
	public function foo(); // this accept ,but should not have body
} 

Abstract class absA {
	public function foo(){
		
	}
	abstract function bar(); //this accept, but cannot contain body in
		 
	 
} 
/*********point 2*********/
Interface P {};
Interface Q {};
Interface R {};
Interface S extends P,Q,R {}; // Mutiple inheritance allowed

Abstract class absB extends absA {   // Single inheritanc allowed
	
}
/*********point 2*********/

Interface E {
	# public $propties;     //Fatal error: Interfaces may not include member variables 
} 
Abstract class absC {
	private $a;
	public $b;
	public function foo(){
		
	}
	abstract function bar(); //this accept, but cannot contain body in
		 
	 
} 
?>