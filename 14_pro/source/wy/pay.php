<?php
header("Content-type: text/html; charset=gb2312"); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ױ�֧�� - ���Ͽ��� | ����������ѡ�����̣�֧�����ױ��������ֿɿ�����</title>
<meta name="description" content="�ױ�֧����Ϊ���������ڷ����ṩ�̣��빤�����С��������С��������С�ũҵ���С��������еȶ�ҹ� �����м�VISA��MasterCard�⿨��֯���ܺ�����Ϊ���˿ͻ��ṩ����֧�����绰֧���������˻����Ʒ��� Ϊ��ҵ�̻��ṩ��������֧�������մ�����ί�н����Լ�B2Bת��ȶ�����ֵҵ��">
		<link href="css/yeepaytest.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<table width="50%" border="0" align="center" cellpadding="0" cellspacing="0" style="border:solid 1px #107929">
		  <tr>
		    <td><table width="100%" border="0" align="center" cellpadding="5" cellspacing="1">
		  </tr>
		  <tr>
		    <td height="30" align="left"><a href="http://www.yeepay.com/"><img src="http://www.yeepay.com/new-indeximages/yeepay-indexlogo.gif" alt="YeePay�ױ�֧�� ���µĶ�Ԫ��֧��ƽ̨ ��ȫ �ɿ� ��� ��������" width="141" height="47" border="0" /></a></td>
		  </tr>
		  <tr>
		  	<td height="30" colspan="2" bgcolor="#6BBE18"><span style="color: #FFFFFF">��л��ʹ���ױ�֧��ƽ̨</span></td>
		  </tr>
		  <tr>
		  	<td colspan="2" bgcolor="#CEE7BD">�ױ�֧����Ʒͨ��֧���ӿ���ʾ��</td>
		  </tr>
			<form method="post" action="req.php" targe="_blank">
		  <tr>
		  	<td align="left" width="30%">&nbsp;&nbsp;�̻�������</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="p2_Order" id="p2_Order" value="dd001" /></td>
      </tr>
		  <tr>
		  	<td align="left">&nbsp;&nbsp;֧�����</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="p3_Amt" id="p3_Amt" value="0.01" />&nbsp;<span style="color:#FF0000;font-weight:100;">*</span></td>
      </tr>
		  <tr>
		  	<td align="left">&nbsp;&nbsp;��Ʒ����</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="p5_Pid" id="p5_Pid"  value="productname"/></td>
      </tr>
		  <tr>
		  	<td align="left">&nbsp;&nbsp;��Ʒ����</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="p6_Pcat" id="p6_Pcat"  value="producttype"/></td>
      </tr>
		  <tr>
		  	<td align="left">&nbsp;&nbsp;��Ʒ����</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="p7_Pdesc" id="p7_Pdesc"  value="productdesc"/></td>
      </tr>
		  <tr>
		  	<td align="left">&nbsp;&nbsp;����֧���ɹ����ݵĵ�ַ</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="p8_Url" id="p8_Url" value="http://localhost/wy/callback.php" />&nbsp;<span style="color:#FF0000;font-weight:100;">*</span></td>
      </tr>
	   <tr>
		  	<td align="left">&nbsp;&nbsp;�ͻ���ַ</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="p9_SAF" id="p9_SAF"  value="0"/></td>
      </tr>
		  <tr>
		  	<td align="left">&nbsp;&nbsp;�̻���չ��Ϣ</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="pa_MP" id="pa_MP"  value="userId or other"/></td>
      </tr>
	  <tr>
		  	<td align="left">&nbsp;&nbsp;֧��ͨ������</td>
		  	<td align="left">&nbsp;&nbsp;<input type="text" name="pd_FrpId" value="ICBC-NET-B2C" /><!--֧��ͨ���������ױ�֧����Ʒ(HTML��)ͨ�ýӿ�ʹ��˵����-->
      </tr>
		 <tr>
		  	<td align="left">&nbsp;&nbsp;������Ч��</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="pm_Period" id="pm_Period"  value="7"/></td>
      </tr>
	  <tr>
		  	<td align="left">&nbsp;&nbsp;������Ч�ڵ�λ</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="pn_Unit" id="pn_Unit"  value="day"/></td>
      </tr>
	   <tr>
		  	<td align="left">&nbsp;&nbsp;Ӧ�����</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="pr_NeedResponse" id="pr_NeedResponse"  value="1"/></td>
      </tr>
		  
		  <tr>
		  	<td align="left">&nbsp;</td>
		  	<td align="left">&nbsp;&nbsp;<input type="submit" value="����֧��" /></td>
      </tr>
    </form>
      <tr>
      	<td height="5" bgcolor="#6BBE18" colspan="2"></td>
      </tr>
      </table></td>
        </tr>
      </table>
	</body>
</html>