<?php
class fa{
	public $money = 100;
	public  $name;
	public $age;
	function __construct($n,$a){
		$this->name = $n;
		$this->age = $a;
		echo "***".$this->name;
	}
	function car(){
		echo "aaaaaaa<br />";
	}
}
class son extends  fa{
	function house(){
		echo "bbnbbb<br />";
	}
}
$na = "zhangsan";
$ag = 20;
$s = new son($na,$ag); //�����ڼ̳и��� ������ ������ͬ���̳С�����Ҳ����ʵ���� ��ʱ����ɵġ�










