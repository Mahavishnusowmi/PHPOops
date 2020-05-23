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
?>
