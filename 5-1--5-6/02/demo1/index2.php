<?php
ob_clean();
header("content-type:image/gif");
$width =150;
$height = 60;
$img = imagecreatetruecolor($width, $height);  //创建真色彩的图像
$white = imagecolorallocate($img, 255,255,255); // 分配颜色 白色
$wColor = imagecolorallocate($img, 255,0,0); // 红色
$wColor1 = imagecolorallocate($img, 5,5,5); // 白色
imagefilledrectangle($img, 0,0,150,60,$white); // 画一个矩形 并填充颜色 参数 参考笔记

$angle=rand(-5,5);
$num = rand(10000,99999);
imagettftext($img, 20, $angle, 20, 40, $wColor, "simpo.ttf", $num); // 写文字

//绘制糙点
for($i=0;$i<200;$i++){
	imagesetpixel ( $img , rand(0,150) , rand(0,60) , $wColor1 );
}
// 绘制 随机 线段

for($i=0;$i<=5;$i++){
	imageline($img,rand(0,150),rand(0,60),rand(0,150),rand(0,60),$wColor1);
}


imagegif($img); //输出到页面
imagedestroy($img); //销毁内存资源