<?php
$mem = new Memcache;
 $mem->connect("localhost",11211);
echo $mem->get("key1");
print_r($mem->get("key2"));
echo "<br />";
 class mem{
 	public $name = "zh";
 	function at(){
 		echo "��Ӯְ��";
 	}
 }
$obj = $mem->get("mObj"); //��û��ʵ�������ڴ����Ѿ�����ʵ�������Ķ���
$obj->at();//???