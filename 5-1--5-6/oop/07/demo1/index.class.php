<?php
//final class index{//��final ���ε��಻�ܱ��̳�****
class index{	
	public $name;
	public $age;
	function __construct(){
	
	}
	final function test(){ //���ܸ��� final ������*****
		echo "aaaaa";	
	}
}
class indexSon extends index{
	function test(){ //��д��test
		echo "ccccc";
	}
	function test1(){
		echo "bbbb";
	}
}
$is = new indexSon();
$is->test();







