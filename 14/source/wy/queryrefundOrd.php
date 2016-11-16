<?php

/*
 * @Description �ױ�֧����Ʒͨ��֧���ӿڷ��� 
 * @V3.0
 * @Author xin.li
 */
 	
include 'yeepayCommon.php';
require_once 'HttpClient.class.php';
 		
$p0_Cmd 	= "RefundResults";	            #�ӿ�����
$p2_Order = $_POST['p2_Order'];						#�̻�������
$pb_TrxId = $_POST['pb_TrxId'];
#��ʽ�����ַ
$RefundResultsURL_onLine	= "https://www.yeepay.com/app-merchant-proxy/node";			
#$QueryOrdURL_onLine	= "https://cha.yeepay.com/app-merchant-proxy/node";			
#���������ַ					
#$QueryOrdURL_onLine	= "http://tech.yeepay.com:8080/robot/debug.action";									
    
#	����ǩ������һ�������ĵ��б�����ǩ��˳�����
$sbOld ="";
#	���붩����ѯ���󣬹̶�ֵ"QueryOrdDetail"
$sbOld = $sbOld.$p0_Cmd;
#	�����̻����
$sbOld = $sbOld.$p1_MerId;
#	�����̻�������
$sbOld = $sbOld.$p2_Order;
#	�����ױ�������ˮ��
$sbOld = $sbOld.$pb_TrxId;
                   
$hmac	 = null;
$hmac	 = HmacMd5($sbOld,$merchantKey);     
           
	logstr($p2_Order,$sbOld,HmacMd5($sbOld,$merchantKey));
           
#	����ǩ������һ�������ĵ��б�����ǩ��˳�����
#	�����˿��ѯ���󣬹̶�ֵ"RefundResults"
$params = array('p0_Cmd' => $p0_Cmd,
#	�����̻����
'p1_MerId'	=>  $p1_MerId,
#	�����̻�������
'p2_Order'	=>  $p2_Order,
#	�����ױ�������ˮ��
'pb_TrxId'	=>  $pb_TrxId,
#	����У����
'hmac' 			=>  $hmac);


$pageContents = HttpClient::quickPost($RefundResultsURL_onLine, $params);


$result = explode("\n",$pageContents);
 echo $p2_Order;

## ������ѯ���
	$r0_Cmd					= "";			#	ȡ��ҵ������
	$r1_Code				= "";     #	��ѯ���״̬��
	$r2_TrxId				= "";			#	�ױ�֧��������ˮ��
	$r4_Order				= "";			#	�˿������
	$refundStatus	= "";			#�˿�������
	$refundFrpStatus		= "";			#	��������״̬
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
		}elseif($sKey == "r2_TrxId"){			        #�ױ�֧��������ˮ��
			$r2_TrxId = $sValue;
		}elseif($sKey == "r4_Order"){			          #�˿������
			$r4_Order = $sValue;
		}elseif($sKey == "refundStatus"){			          #�˿�������
			$refundStatus = $sValue;
		}elseif($sKey == "refundFrpStatus"){			          #��������״̬
			$refundFrpStatus = $sValue;
		}elseif($sKey == "hmac"){									#ȡ��У����
			$hmac = $sValue;	      
		}
	}
		

	#����У������ ȡ�ü���ǰ���ַ���
	$sbOld="";
	#����ҵ������
	$sbOld = $sbOld.$r0_Cmd;
	#�����ѯ�����Ƿ�ɹ�
	$sbOld = $sbOld.$r1_Code;
	#�����ױ�֧��������ˮ��
	$sbOld = $sbOld.$r2_TrxId;
	#�����˿������
	$sbOld = $sbOld.$r4_Order;	
	#�����˿�������
	$sbOld = $sbOld.$refundStatus;	
	#������������״̬
	$sbOld = $sbOld.$refundFrpStatus;	
	            
            	
  //echo "[".$sbOld."]";
  
  //echo $sNewString;  
  //echo $sNewString;
  
	$sNewString = HmacMd5($sbOld,$merchantKey);
	
	logstr($r4_Order,$sbOld,HmacMd5($sbOld,$merchantKey));
	//У������ȷ
	if($sNewString==$hmac) {
	  if($r1_Code=="1"){
	      echo "<br>��ѯ�ɹ�!";
	      echo "<br>�ױ�������ˮ��:".$r2_TrxId;
	      echo "<br>�˿������:".$r4_Order;
		  echo "<br>�˿�������:".$refundStatus;
	      echo "<br>��������״̬:".$refundFrpStatus;
	
	  } else if($r1_Code=="50"){
	      echo "<br>�ö���������";
		 
	      exit; 
	  } else{
	      echo "<br>��ѯʧ��";	
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
