<?php
class oops{
	public $x=1;
		public $y=0;
	function fun1(){
		return $this->x++;
	}
}

$obj1=new oops();
$obj2=new oops();
$obj3=new oops();

$obj1->fun1();
echo $obj1->x;

echo "<br/>";

echo $obj2->x;

echo "<br/>";

echo $obj3->y;

echo "<br/>";

class oops1{
	function __construct($y){
		$this->x=$y;
	}

	function fun1(){
		echo $this->x;
	}

	function __destruct(){
		echo "<br>end";
	}
}

$obj1=new oops1(15);
$obj1->fun1();
?>
