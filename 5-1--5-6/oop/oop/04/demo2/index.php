<?php
class fa{
	public $name = "����";
	public function car(){
		echo "���˺�����<br />";
	}
}
class son extends fa{
	function house(){
		echo "����<br />";
	}
	function car(){
		echo "�������˺�������ԽҰ��ɽ��";
	}
	function demo(){
		//$this->car(); //�����car
		//�����ø�������::���ñ���д�ķ���
		//fa::car();
		parent::car();		
	}
}
$s = new son();
//$s->house();
//$s->car();
$s->demo();








