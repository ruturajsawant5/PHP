<?php 

abstract class A { 
	abstract function display(); 
} 
class B extends A { 
	function display() { 
		echo "Abstract class"; 
	} 
} 
	
    $obj = new B(); 
    $obj->display(); 
?> 
    