֪ʶ��:
һʲô��smarty
�� smarty��ȡ�Ͱ�װ����
��smarty�����﷨


һʲô��smarty
	smarty ģ������
	ģ������:
	��ͳ:
		��������ҳ��--������Ա��ӳ���
			��ͳ���� ȱ��:
				1.ʱ�� Ч�ʲ���
				2.��������ҳ��html��������: --��������ҳ��ʹ����ά��
		ģ������:
			����������ֿ����� ��ʡ�˿���ʱ�䣬���ά��Ч�ʡ�
			����: ���֣�html���� div css����ҵ���߼���php���򣩷���
	smarty : ģ������  �г�ռ������ߡ�

�� smarty��ȡ�Ͱ�װ����
	1.��ȡsmartyģ������
		http://www.smarty.net
			smarty-3.1.15.zip  --> smarty-3.1.15-->libs(����)-->Smarty.class.php��smarty������ļ���
	2����ΰ�װ����:
		libs �����������ĿĿ¼��
			smartyʹ�õ�ʹ�� ����Ŀ¼:
				templates/  htmlҳ�棨ģ��ҳ�� .html .tpl��
				templates_c/ ����Ŀ¼  2 �ֹ�����  3.* �Զ�����
				configs/ �ֹ�����Ŀ¼
				cache/ ����Ŀ¼ 
	3.��һ������smarty�Ĵ���
		���������ʱ�� �����ᴴ�� templates_c 
		$st->display("ģ���ļ�����") Ĭ��ָ��ľ���templatesĿ¼
		����ģ��ʱ�������templates_c 
	4 ʹ��smartyģ������
		1>���� smarty ��������ļ�  include require
		2>ʵ����smarty����
		3>����ģ��  $smarty->display(ģ���ļ�����);  

ע��:
	smarty ���ĸ�Ĭ��Ŀ¼�����޸�:
		$st->setTemplateDir("��·��"); �޸� templatesĿ¼
		$st->setTemplateDir("tpl/");  ģ��Ŀ¼��
		$st->setCacheDir("cc/");	����Ŀ¼
		$st->setConfigDir("cf/");	�����ļ�Ŀ¼
		$st->setCompileDir("tc/"); �����ļ�Ŀ¼
	���鲻���޸�:
		
��smarty�����﷨
	index.php
	templates/index.html	 html����	������ģ��������ʹ�� div img ......
	1>php�����ģ��ͨ��:	
		$st->assign("ģ���б�������",php�ı�������); php��ģ�崫�����ݵġ�
		������������	
		assign() ���Դ������еı����������� string int float boolean;
		����:
			�����������assign����		ģ����  	$��������[�±�] ��  $��������.�±�
			�����������assign���� ģ������ʾ $��������[�±�] ��  $��������.�±�
		����:
			assign()  ģ����ʹ��:  $����->����/�������� 
	2> smarty ���� css imgs js�ļ�
		css imgs js �ļ������Ǵ�php�ļ�������
		
		assign();   {}smarty�����  ���ܻ��� css js �����������
		�޸Ķ����:*********
			//�޸�smarty�����
				$st->left_delimiter = "<{";  ���
				$st->right_delimiter = "}>";�ұ� 
		
			
			
			
			
			
			
			
			
			
			
			
	

 	