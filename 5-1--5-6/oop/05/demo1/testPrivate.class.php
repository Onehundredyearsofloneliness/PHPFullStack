<?php
class testPrivate{
	private $name = "lisi";
	private $sex = "nan";
	private function demo(){
		echo "aaaa";
	}
	function demo1(){ //���з��� ������һ�����з�����
		$this->demo();
	}
}
$pr = new testPrivate();
//echo $pr->name;
//$pr->demo1();
class testSon extends testPrivate{
	function demo3(){
		echo $this->name;  //�����Է��ʡ�
	}
}
$s = new testSon();
$s->demo3();









