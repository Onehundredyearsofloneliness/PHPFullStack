<?php
include "config.php";
$clId = $_GET["clId"];
//���ݽ��յ���id ��id���ڵļ�¼ ȫ���г���ҳ�档
$sql = "select * from com_leader where clId={$clId}"; //1����¼
$result = mysql_query($sql);
$rs = mysql_fetch_assoc($result);

$st->assign("rs",$rs);


$st->display("leaderUpdate.html");