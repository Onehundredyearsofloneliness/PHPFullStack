<?php
class Index{
	const NAME="zhangsan";
	function test(){
		echo self::NAME; //���ó���
	}
}
$in = new Index();
$in->test();
