֪ʶ��:
һ �������վ�����ٶ� 
���������վ�����ٶȳ����ֶ�--ҳ�� ��̬��

һ �����վ�������ٶ�:
	1.memcache ���漼�� 
	2.�Ż�sql���: select ��� 
	3.ҳ�澲̬������--��php-->����htmlҳ��      ���� �½���htmlҳ��
	
	��̬ҳ��: ֱ���½� htmlҳ�� ���� html div css js   ��׺: .html .htm .shtml
	��̬ҳ�棺.php  .jsp .apsx Ϊ��׺ �������ݿ⣬�����ݿ⽻����
	
	��̬ҳ�����ַ:  http:// www.baidu.com/....../�ļ���.html
												localhost/....../�ļ���.html
												
		������http://news.xinhuanet.com/world/2014-03/25/c_119922311.htm  --�� ��̬��ַ
		��̬��ַ:http://www.wyzc.com/index.php?a=career&m=Index&c=app-->��̬��ַ
	
	α��̬:  php --> ��̬ҳ��
	
	��̬��������:
		1 ��̬��ҳ�� �԰ٶ�����������  �Ѻ�
		2 ��̬��ҳ�� ������ �̻���ҳ���У��������ݷ��ʣ��������ݿ�ѹ����
		3 �Ӽ����ǶȲ���һ�� ��̬ �Ƿ�ʡʱ��
	ȱ��:
		���ݹ̻���ҳ���У�������ά����****
	���ʣ� fso �ļ�ϵͳ����--����̬����****
	
	3 �Ӽ����ǶȲ���һ�� ��̬ �Ƿ�ʡʱ�� ��̬��ҳ��ʡʱ��
		apache ����:-->���� ��ҳ������״̬�ġ�
		��ת����������λ��:apache/apache2.2/bin/ab.exe
		ab.exeʹ�ø�ʽ:
			ab.exe  -n ��������  -c ���������  url ��ַ/·��
		
index.php
Concurrency Level:      6
Time taken for tests:   2.873165 seconds   һ�����˶೤ʱ��
Complete requests:      10000
Failed requests:        0
Write errors:           0
Total transferred:      2270000 bytes
HTML transferred:       420000 bytes
Requests per second:    3480.48 [#/sec] (mean)
Time per request:       1.724 [ms] (mean) 6���� ÿ���������ʱ��
Time per request:       0.287 [ms] (mean, across all concurrent requests) ÿ����ÿ�������ʱ��
Transfer rate:          771.27 [Kbytes/sec] received	
index.html
Concurrency Level:      6
Time taken for tests:   2.104120 seconds  һ�����˶೤ʱ��
Complete requests:      10000
Failed requests:        0
Write errors:           0
Total transferred:      6400000 bytes
HTML transferred:       3700000 bytes
Requests per second:    4752.58 [#/sec] (mean)
Time per request:       1.262 [ms] (mean)   6���� ÿ���������ʱ��
Time per request:       0.210 [ms] (mean, across all conc  ÿ����ÿ������ʱ��
Transfer rate:          2970.36 [Kbytes/sec] received

ʱ��ָ�� ԽСԽ�á�

���������վ�����ٶȳ����ֶ�--ҳ�� ��̬��
	1 α��̬
	2 ����php�Դ��Ļ�����ƣ��������ݣ�ʵ�־�̬����һ����Ҫ ��php�ļ����� ����
	3 ����php�ļ�������ʵ��ҳ�澲̬����	
	
2 ����php�Դ��Ļ�����ƣ��������ݣ�ʵ�־�̬����һ����Ҫ ��php�ļ����� ����	
  1���������	
	php.ini 
	output_buffering = Off   / On  ����  �����������
	error_reporting  =  E_ALL & ~E_NOTICE  ���ô��󼶱�ġ� ����
	E_ALL�����еĴ���;���
	E_NOTICE������ʱ�Ĵ���

	����apache
	
	2����������:
		ob_start ; �������棺�����ļ����ݣ������� header
		ob_get_contents(); �ӻ����еõ����ݣ�
		ob_clean()  ��ջ������е����ݡ�****
		ob_end_clean();�رջ������������ ****
		ob_flush() ��ˢ�����ͳ�������������е�����  ,û�йر�
		ob_end_flush() ��ˢ�����ͳ���������������ݲ��رջ���
	
php �Դ�������ʵ�ֵİ��� ���ݿ⣺
	���ݿ�: news
	��  ��  article
	aId
	aTitle   ����
	aDate  ����
	aContent  ����
	aSource   ��Դ
	aFilePath ��̬ҳ�汣��ĵ�ַ��
	
ע�⣺�����ɾ�̬ҳ���ʱ��:  ģ����������ⲿ�����ã�phpҳ��ֻ��ƴ�ӡ�
		  �����ģ����뿽���� php�ļ��У�����??????

ȱ��:
	��̬ҳ�棬�����޸ģ�ֻ��ɾ�����������ɡ�	������ά����
	
��ϰ:
	1 ����һ�����±����ɾ�̬ҳ�� ��php�Դ�����ϵͳ���ɣ���


3 ����php�ļ�������ʵ��ҳ�澲̬����	*****
	1> ģ��ҳ�� html ������ ��Ӧ��Ŀ¼��
	2>���� ģ���е�css �� ͼƬ 
	3> html/20140326/���ɵľ�̬ҳ��  ��ģ�忽����  html/20140326/  ����ͼƬ����ʽ����ȷ��
	4>��Ҫ���ǵ� : tpl/ģ��ҳ��
	5>��ʼ���ɾ�̬ҳ��:????
		1. ��ȡģ��ҳ���е����� file_get_contents(url); ���ؽ����һ���ַ���
		2. ���ҷ��������� �滻�� ģ������Ӧ������
		3.�ڰ��滻���յ��ַ��� ������ļ��� file_put_contents(url,�ַ���);
		4.�����Ѿ��̻���ҳ���У�������Ҫ ��⡣
		5 ����   upload/   html/  ���ݿ���
		
	6>ǰ̨�ĵ���:
	
4 Ӧ�ã�
	ҳ����������ȶ����������ı�--����̬��
	fso �ļ� ϵͳ���� 
	������ά����




		
	



	
	
	
	