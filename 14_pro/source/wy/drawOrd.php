<?php

/*
 * @Description �ױ�֧����Ʒͨ��֧���ӿڷ��� 
 * @V3.0
 * @Author xin.li
 */
 	
include 'yeepayCommon.php';
require_once 'HttpClient.class.php';
 		
$p0_Cmd 	= "CancelOrd";	            #�ӿ�����
$pb_TrxId = $_POST['pb_TrxId'];						#�̻�������
$pv_Ver = "1";							#�汾��
#��ʽ�����ַ
#$CancelOrdURL_onLine	= "https://www.yeepay.com/app-merchant-proxy/command";			
$CancelOrdURL_onLine="https://cha.yeepay.com/app-merchant-proxy/command";			
#���������ַ					
#$CancelOrdURL_onLine	= "http://tech.yeepay.com:8080/robot/debug.action";									
    
#	����ǩ������һ�������ĵ��б�����ǩ��˳�����
$sbOld ="";
#	���붩���������󣬹̶�ֵ"CancelOrd"
$sbOld = $sbOld.$p0_Cmd;
#	�����̻����
$sbOld = $sbOld.$p1_MerId;
#	�����̻�������
$sbOld = $sbOld.$pb_TrxId;
#	����汾��
$sbOld = $sbOld.$pv_Ver;
                   
$hmac	 = null;
$hmac	 = HmacMd5($sbOld,$merchantKey);     
#echo "==================".$sbOld;           
	logstr($pb_TrxId,$sbOld,HmacMd5($sbOld,$merchantKey));
           
#	����ǩ������һ�������ĵ��б�����ǩ��˳�����
#	���붩���������󣬹̶�ֵ"CancelOrd"
$params = array('p0_Cmd' => $p0_Cmd,
#	�����̻����
'p1_MerId'	=>  $p1_MerId,
#	�����̻�������
'pb_TrxId'	=>  $pb_TrxId,
#	����汾��
'pv_Ver'=>  $pv_Ver,
#	����У����
'hmac' 			=>  $hmac);


$pageContents = HttpClient::quickPost($CancelOrdURL_onLine, $params);

$result = explode("\n",$pageContents);
#echo "=======".$pageContents;
## ������ѯ���
	$r0_Cmd					= "";			#	ȡ��ҵ������
	$r1_Code				= "";     #	�������
	$hmac						= "";     #	��ѯ�������ݵ�ǩ����
    		
	for($index=0;$index<count($result);$index++){//����ѭ��
		$result[$index] = trim($result[$index]);
		if (strlen($result[$index]) == 0) {
			continue;
		}
		$aryReturn = explode("=",$result[$index]);
		$sKey = $aryReturn[0];
		#$sValue = $aryReturn[1];
		$sValue = urldecode($aryReturn[1]);
		if($sKey=="r0_Cmd"){											#ҵ������ 
			$r0_Cmd = $sValue;
		}elseif($sKey=="r1_Code"){								#��ѯ���״̬��  
			$r1_Code = $sValue;
		}elseif($sKey == "hmac"){									#ȡ��У����
			$hmac = $sValue;	      
		}
	}
		

	#����У������ ȡ�ü���ǰ���ַ���
	$sbOld="";
	#����ҵ������
	$sbOld = $sbOld.$r0_Cmd;
	#���볷�������Ƿ�ɹ�
	$sbOld = $sbOld.$r1_Code;              
            	
 // echo "[".$sbOld."]";
  //echo $sNewString;  
  //echo $sNewString;
  
	$sNewString = HmacMd5($sbOld,$merchantKey);
	
	#logstr($r6_Order,$sbOld,HmacMd5($sbOld,$merchantKey));
	//У������ȷ
	if($sNewString==$hmac) {
	  if($r1_Code=="1"){
	      echo "<br>�����ɹ�!";
	     
	  } else if($r1_Code=="53"){
	      echo "<br>�����Ѿ��ɹ�,���ɳ���";
	      exit; 
	  } else{
	      echo "<br>����ʧ��";	
	      exit;       
	  }
	} else{
		echo "<br>localhost:".$sNewString;	
		echo "<br>YeePay:".$hmac;
		echo "<br>������Ϣ���۸�";
		exit; 
	}
 
	function decode($text) {
			return str_replace("+", " ", $text);
	}
     
?> 
<html>
<head>
<title>To YeePay Page</title>
</head>
<body>
</html>
