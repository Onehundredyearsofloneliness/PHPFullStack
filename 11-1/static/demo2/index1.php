<?php
//ob_end_clean(); �رջ��棬ͬʱ���:
ob_start();
echo "aaaaaaa";
header("content-type:text/html;charset=utf-8");
echo "bbbbbbbb";
echo "<br />---------------<br />";
ob_end_clean(); //�رջ���֮�󣬻����е����� û�а취 ��ȡ����
echo 444444;  //�رջ���󣬺�����ݲ�Ӱ�졣
echo ob_get_contents();


