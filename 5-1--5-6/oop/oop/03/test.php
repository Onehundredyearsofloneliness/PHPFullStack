<?php
//������ݿ��еļ�¼����ô�Ѽ�¼��װ��һ����ά���飻
$link = mysql_connect("localhost","root","root");
mysql_query("set names utf8");
mysql_select_db("news");
$sql = "select * from article";

$result = mysql_query($sql);
$rows = array();
while($rs = mysql_fetch_assoc($result)){
	//echo $rs["aTitle"]."<br />";
	$rows[] = $rs;
}
print_r($rows);
