<?php
include 'config.php';
//ѡ����:
	$sql = "select cdId,cdName from com_dept";
	$result = mysql_query($sql);
	$rows = array();
	while($rs=mysql_fetch_assoc($result)){
		$rows[] = $rs;
	}
	$st->assign("rows",$rows);

//ѡ������
	$sql2 = "select clId,clName from com_leader";
	$result2 = mysql_query($sql2);
	$rows2 = array();
	while($rs2=mysql_fetch_assoc($result2)){
		$rows2[] = $rs2;
	}
	$st->assign("rows2",$rows2);

$st->display("empAdd.html");