<?php
header("content-type:image/gif"); // http协议头 告诉浏览器 数据是一个 gif 图像。
$width =150;
$height = 60;
$img = imagecreatetruecolor($width, $height);  //创建真色彩的图像 image create true color 

imagegif($img); //输出到页面
imagedestroy($img); //销毁内存资源