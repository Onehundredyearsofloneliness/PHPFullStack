<?php
class testProtected{
	protected $name = "zhangsan";
	protected $age = 20;
	protected function demo(){
		echo "aaaaa";
	}
	function demo1(){
		echo $this->name; //���ڲ�����  ����
	} 
}
$p = new testProtected();
//echo $p->demo(); ���ⲻ�ܷ���
//$p->demo1();
class testSon extends testProtected{
	function demo2(){
		echo $this->name; //��������ܱ����ĳ�Ա
		//$this->demo();
	}
}

$ts = new testSon();
$ts -> demo2();


















