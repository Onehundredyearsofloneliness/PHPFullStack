<?php
class  fa{  //����
	public $money = 100;
	function car(){
		echo "�����˺�����";
	}
}
class son extends fa{ //����  ���Լ̳и�������Ժͷ�����
	
	function house(){
		echo "�Լ���";
	}
	function demo(){
		echo "�Լ��Ƿ���";
	}
	function demo1(){
		//���ø����car���� ��$this->�ؼ���
		$this->car();
		echo "ȥɽ��";
		
	}
}
$s = new son();
//�������Ժͷ��� �Ǽ̳и���
//echo $s->money ."<br />";
//$s->car();
//������ӵ�С�
//$s->house();
//$s->demo();
$s ->demo1();



