<?php
class index{
	public $name;
	public $age;
	static $sex="��";
	static $num = 1;
	function test(){
		echo "aaaa";
	}
	static function test1(){
		echo "bbbbb";
	}
	function test2(){
		//echo $this->num; //��̬��Ա self
		return self::$num;
	}
}
$ine = new index();
index::$num = 1+1;
echo "****".index::$num."*****" ."<br />";
$at = new index();
echo "######".index::$num."#####" ."<br />";

