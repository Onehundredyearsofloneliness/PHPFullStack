<?php
$path = "aa/bb/cc/dd/ee";
$arr = explode("/",$path);

/* 循环 创建 多级 目录。
 * aa/
 * aa/bb/
 * aa/bb/cc
 * aa/bb/cc/dd
 * 
 * */
foreach($arr as $key=>$val){
	if($key==0){
		$str = $arr[0]; //aa
	}else{
		$str = $str."/".$val;
	}
	if(!file_exists($str)){
		mkdir($str);
	}
}
