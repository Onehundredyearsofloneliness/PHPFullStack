<?php
//ob_end_flush();��ˢ�����ͳ���������������ݲ��رջ���
ob_start();
echo "ccccc";
header("content-type:text/html;charset=utf-8");
echo 123;
ob_end_flush();
echo "<br />-------------------------<br />";
echo ob_get_contents();