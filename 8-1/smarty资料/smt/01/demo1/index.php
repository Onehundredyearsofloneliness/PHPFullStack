<?php
//��������ļ�
include("libs/Smarty.class.php");
//ʵ���� smarty����
$st = new Smarty();
/*
$st->setTemplateDir("tpl/");  ģ��Ŀ¼��
$st->setCacheDir("cc/");	����Ŀ¼
$st->setConfigDir("cf/");	�����ļ�Ŀ¼
$st->setCompileDir("tc/"); �����ļ�Ŀ¼
*/
$st->display("index.html"); // templates/index.html -->index.html

