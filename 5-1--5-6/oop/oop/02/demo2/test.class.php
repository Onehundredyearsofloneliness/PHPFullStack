<?php
class test{
	public $name = "zhangsan"; //���Ե�Ĭ��ֵ
	public $sex = "��";
	public $age = 20 ;
	function demo(){
		echo "�Һܰ���";
	}
	function demo1(){
		//$this-> ָ��ǰ����
		echo "***".$this->name; //Ĭ������� name zhangsan,�����Ĭ��ֵ���и��ǣ����õ��Ǹ��Ǻ�Ľ��***
	}
	function demo2($var){
		echo $var;
	}
}
$t = new test();
//��������
//echo $t->name ."<br />";
//echo $t->sex . "<br />";
//����Ĭ��ֵ
//$t->name = "tom";
//echo $t->name;
$t->name = "jack"; //����Ĭ��ֵ
$t->demo1();
$t->demo2("��������һ��");






