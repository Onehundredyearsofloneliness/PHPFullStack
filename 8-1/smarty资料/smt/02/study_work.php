֪ʶ��:
	һ smarty����֪ʶ:
	�� �Զ��庯�� smarty ģ���еĺ���
	
һ smarty����֪ʶ:
	1 ģ���е�ע�ͷ�
		css  /* ����*/
		php  //   /**/
		smarty <{*ע������*}>
	2 smarty��������:
		index.php -->index.html
		1> assign("ģ���б�������",php��������);
		2>�����ļ��������
			$st->setConfigDir("conf/");  // configs ���������ļ���Ŀ¼
			�����ļ�  configs/config.conf �ļ�
					�����ļ��е�������Ŀ   �����Զ���ı������ƣ�=ֵ
					<{config_load file="url"}> ע��: configs/
					����������
						<{#����#}> 
						ע�⣺�������� ��������� ����ֵ���󣬲�����ֵ�����
					�����ļ� һ������ ��վ�Ϲ̶��������Ϣ:
						icp   ��ҵ���� ��ҵ�ͷ��绰....
			����:
				����ҳ��ָ��������:
					<{config_load file="url" section="index"}> ע��: configs/
					
	
		��ϰ��
		����smarty��config�ļ�  
		6������   �� index.html demo.html�зֱ����һ�Ρ�
		3>smarty�еı���
			$_GET
			$_POST				
			$_SESSION
			$_SERVER
			$_COOKIE
			$_ENV		
		<{$smarty.��������.�±�}>
		�Ķ�:  �ڶ�ģ����  4С��
	3>�������η�: �ǶԱ����Ĳ���˵��  �˽�
	ģ����ʹ��
	<{$��������|�������η�}>
	 cat ���Ӷ������   . 
		<{��������|cat:"���ӵ�Ŀ������"}>
	 date_format ��ʽ������
	<{��������|data_format:"�ַ�����ʽ"}>
	php.ini
		date.timezone =   ǰ��;ȥ��   PRC
		date_default_timezone_set("PRC");
		
  3 smarty�е��Զ��庯��
  	 1�� �������η�
  	 		$st->registerPlugin(����, ģ���е��õĺ�������, php�е��õĺ�������)	��
  	 		$st->registerPlugin("modifier", "fun1", "fun1");
	 2���Զ��嵥��� 
	 		$st->registerPlugin("function", "demo", "fun2");
	 3���Զ���˫���
	 		$st->registerPlugin("block", "test", "fun3");
		
	  4�����η� ����� ˫��� �Բ������ʽ���嵽smarty
	  		������岽��:
	  			�����λ�� 
				��ĿĿ¼/Plugin/����ļ�:
				����ļ�������
						�������η����:  modifier.�������η�.php
						�Զ��嵥��ǲ��:function.���������.php
						�Զ���˫��ǲ��:block.˫�������.php
				����к�������:
						�������η�: function smarty_modifier_�������η�(){}
						�Զ��嵥���: function smarty_function_���������(){}
						�Զ���˫���: function smarty_block_˫�������(){}
				������еĲ���:
						�������η�: function smarty_modifier_�������η�($var){} $var  ��������
						�Զ��嵥���:  function smarty_function_���������($arr,[$smarty]){}
						�Զ���˫���:  function smarty_block_˫�������( $params,   $content,   $template,   &$repeat ){}
	
				smarty��д����İ���
					
						$st->addPluginsDir("Plugin/"); ��Ӳ����λ�� ����ĿĿ¼��ʼ����
	
						�������η����:
						�Զ��嵥��ǲ��:
						�Զ���˫���:
��ϰ:
	�Զ���  �������η� ��˫��� 3��	
			
	4. ���ú���: smarty �Ѿ�����õĺ���  
			php str_replace substr.....
			1> {append}������ ����ʱ Ϊ����������ӻ��ߴ���ֵ��
			$arr = array("aaaa","bbbb","cccc");
			$arr[4] = value;
			<{append var="arr" value="zhangsan"}>
			��
			<{append "arr" ��zhangsan��}>	�ɶ��� �ϲ� ���Ƽ�
			2>{assign}������ģ�������ڼ丳ֵ������. 	
			<{assign var="str" value="�Һܰ���"}>
			�������鸳ֵ:
				<{assign var="brr" value=[11,222,333]}>
				<{$brr[1]}>
				ע�� ��
				���鸳ֵʱ ��value���� ���� ""
			�������鸳ֵ:
				<{assign var="crr" value=["un"=>"zhangsan","ua"=>18,"ul"=>178]}>
				<{$crr["ua"]}>
			3>{if},{elseif},{else}
				<{if ����}> ���� �Ƚ������  ���ַ�����
					eq  == 
					neq !=
					gt  >
					lt  <
					gte >= 
					lte <=
					not !
					mod %
					===
					
					<{if $a gt 3}>
			4> {for $var=$start to $end step $step}ָ��������ѭ��
				var ��������
				start ��ʼֵ
				end ��ֵֹ
				step $i ++  Ĭ�� ����1
			
			5> ģ�����Զ��庯��
				ģ���ж��庯���ĸ�ʽ:
					<{function name="��������***" [key="val" key="val"]}>
						������(�������η�  �Զ����ǩ ���Լ�smarty���к�������)
					<{/function}>
					����:
						<{�������� [key=val key=key]}>
					
					�������ĺ�������:
						<{function name="demo1" uName="zhangsan" uAge="18"}>
								������:<{$uName}><br />
								����: <{$uAge}><br />
						<{/function}>
						<{demo1 uName="123" uAge="456"}>
					ע��:
						���ú�����ʱ��  ���������ԺͶ��庯����ʱ��Ĳ������Ʋ�һ�¡�
						�����һ�£��ͱ��� ���յ��ú���ʱ��Ĳ��� ����ȥ����*****
	��ϰ:
		demo7 ���� ���� ��3��
			6��ģ���б������� ����
				foreach
					<{foreach �������� as Ԫ��ֵ}>
						����������
					<{/foreach}>
					ע��; foreach ������ά���飬$valÿһ��ָ����һ��һά���飬ֵ: $val["�±�"]  $val.�±�
				section	
					<{section name="section������" loop="����ѭ����ֵ"}>	
						ѭ������
					<{/section}>
					 loop="����ѭ����ֵ" ==> ��������
					name="section������"==�������±�
					section  ������ά�����ʱ�򣬵�һά��һ����������
			7��smartyģ�������еİ����ļ�
				{include}������������ģ�嵽��ǰģ����
				file="ģ��URL" �������ļ�����
				ע�⣺������ҳ�棬�����������պ���ʾ�����ļ��ı���****
				<{include "head.html"}>
			8��ģ��ļ̳�
				 ģ�壺
				 	���������ģ����ʹ��{extends}��ǩ����չ��ģ��		
				 	
				 	parent.html ��ģ��
				 	son.html ��ģ��
				 		<{extends file="parent.html"}>	
		
					
						
						
						
						
						
						
						
						
						
						
						
	
		