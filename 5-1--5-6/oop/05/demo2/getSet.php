<?php
class getSet{
	private $name = "zhangsan";
	private $age = 20;
	function  demo(){
		echo 1111;
	}
	//__set();
	function __set($n,$v){  //$n ��������    $v ����ֵ�� 
		$this->$n = $v;
	}
	//__get();
	function __get($na){
		return $this->$na;
	}
}
$gs = new getSet();
$gs->name = "jack"; // �Զ�����__set()   $n = "name"  $v = "jack"
//$gs->age = 111; 
echo $gs->name; //�Զ�����__get();   $na = name



