<?php
//php����memcache
$mem = new Memcache;
//print_r($mem);
 $mem->connect("localhost",11211);
 //����ַ���
 $mem->set("key1","zhangsan",MEMCACHE_COMPRESSED,3600);
 echo $mem->get("key1") ."<br />";
 //�������:
 $arr = array("lisi","wangwu","zhaoliu");
 $mem->set("key2",$arr,MEMCACHE_COMPRESSED,3600);
 print_r($mem->get("key2"));
 echo "<br />";
 //����д��memcache
 class mem{
 	public $name = "zh";
 	function at(){
 		echo "��Ӯְ��";
 	}
 }
 $me = new mem(); //??�����ܷ�ŵ�memcache
 $mem->set("mObj",$me,MEMCACHE_COMPRESSED,3600);
 
 
 
 
 