֪ʶ��:
	һ memcache����
	�� ��װ��ʹ��memcache
	�� php����memcache
	�� memcache����
	�� memcache �������

һ memcache ����:
	1 ʲô��memcache
	�ٷ�: ������ �ֲ�ʽ �ڴ���󻺴�ϵͳ�������������ص���վ���ֵ����ݿ�ѹ����
	���: memcache �����ڴ�����  ��memcache �洢����  �����ʽ��****
	key=>value 
	ע�⣺���Ե�ʱ��  �ٷ�������
	2 memcache ԭ��:
	memcache ����:
		��һ�η�����վ�������ݿ��н�������
		�ڶ����ڷ�����վ�����ڴ�ռ�  
		memcache ʹ���� �洢���ݡ�
	--------------------------------
		�ڴ������� ����ȫ ���׶�ʧ ��memcache �� �ų��� ���Ǻ���Ҫ�����ݡ�
	---------------------------------
	memcache�����ڴ� ��һ�� hashtable 
	key  ==�� value
	key  �ַ���  �ڴ��в����ظ���
	value  �ַ��� ��ֵ ���� boolean ���� null ������(ͼƬ����Ƶ)
	
	С��:
		1>memcache ���漼�������ݷ����ڴ棬�����վ�����ٶȡ�
		2> key=>value����ġ�

�� ��װ��ʹ��memcache
	1 ����memcached.exe ��� 
	2 ��װ: 
		1> �������°�װ:
			�����ʼ�˵�--������  cmd--����ת�� memcached.exe�ļ���Ŀ¼
			--����װ���� memcached.exe -d install
	
			�������--��������--������ �鿴memcache   �Ҽ�����
			����:
			memcached.exe -d start ��������
			
			�鿴memcache��Ϣ:
				netstat -an 
				tcp  0.0.0.0:11211   
				memcache �˿ں� 11211 
			
			memcache -d  install ��װ
									 start ����memcache ����
									 stop | shutdown ��ֹ����
									 uninstall ж��memcache
									 restart ����memcache
			
			--------------------------------
				win7 ��װʧ��  ����Ա����ݵ�¼ ȥ��װ ��
				memcached.exe -d start ���ź��ַ�����Ӣ�ġ� 
			--------------------------------			 
			
		3��cmd ģʽ��ʹ��memcache  ���� ɾ �ģ�
			 telnet ���Ա༭memcache�������
			 ��telnet
			 �������--��������--���򿪻�ر�windows����--��telnet ������/�ͻ��� ѡ��
			 
			 ����telnet �༭״̬:
			 telnet ������/IP �˿ں� 
			 telnet localhost 1122        --> ����memcache �༭״̬��
			 
		4����Ӳ���:
			 add  ��������  ��־λ(0 ��ѹ��  1 ѹ��)  ��Ч��(��) ���ݴ�С(�ַ�)
			 demo��
			 add key 0 60 5  �س� 
				hello				�ȴ�
			STORED				�洢�ɹ�
		5�� ȡֵ 
			 get �������� 
			 demo:
			 get test
			VALUE test 0 3
			abc
		6���޸�:
			set �������� ��־λ ��Ч�� ���� ��С
			--------------------------
			set ���������ݣ��ı�����������ڣ���ӱ��������ڣ��޸ı���
			--------------------------
		7��ɾ��:
			ɾ�� ����ֵ:
				delete ��������
				
				delete awt
			����ڴ��е����ݡ� 
				flush_all  
				ע�⣺�������ʼ� �� _
				
		8�����ã�
			append: ׷��  ���Ѿ����ڵı��� ׷������
					abcde
			prepend�����Ѿ����ڵı��� ǰ������
					deabc
			append/prepend  �������� ��־λ ��Ч�� �ַ�����
				
			add demo 0 3600 5 �½�����
			abcde
			STORED
			append demo 0 3600 3 ׷�ӵ�����
			fff
			STORED
		9���鿴��Ϣ:
			stats �鿴ͳ����Ϣ�ġ�
			
			STAT pid 4592
			STAT uptime 2983
			STAT time 1395301023
			STAT version 1.2.6
			STAT pointer_size 32
			STAT curr_items 3
			STAT total_items 10
			STAT bytes 183
			STAT curr_connections 3
			STAT total_connections 9
			STAT connection_structures 4
			STAT cmd_get 17
			STAT cmd_set 10
			STAT get_hits 11
			STAT get_misses 6
			STAT evictions 0
			STAT bytes_read 645
			STAT bytes_written 584
			STAT limit_maxbytes 67108864
			STAT threads 1
			
	STAT cmd_get 17
	STAT cmd_set 10	
	Խ��Խ�ã�Խ�ߡ�	 
		
�� php����memcache  ��ɾ��:
	1>����memcache��̬��չ��:
	php_memcache.dll�ļ� ��php�汾Լ��
	2> ���ò���
	php_memcache.dll --�� php/ext/
	php.ini
		extension = php_memcache.dll
	����apache		
	3>php����memcache
		ʵ����memcache
			$mem = new Memcache;
		����memcache������
			$mem->connect("��������",11211);  
		$mem->set(��������,value,��־λ,��Ч��)  //��ӵ�ֵ telnet  ģʽ��Ҳ�ܻ�ȡ��
		$mem->add(��������,value,��־λ,��Ч��)
		$mem->get(��������);
		$mem->delete("��������");
		
		��־λ:
			MEMCACHE_COMPRESSED ѹ����
			
		�ַ��� ��ֵ  ���� ����   null boolean 
	
��ҵ:
	��memcache ���� �ַ��� ��ֵ  ���� ����   null boolean  �ܷ����mem�С���ҳ�����ܷ��ȡ������
		
�� memcache����
1 memcache ʹ��php�����������ģ�����������������ʵģ�memcache��c/s�ܹ������
2 memcache�������洢���ݵ� �������ڴ��У�ɾ����ԭʼ�����ݣ�������µ����ݡ�
3 memcache�ǻ��ڷֲ�ʽ�����԰�װ�ڶ�̨�����ϣ�Ҳ������ͬһ̨�����϶������memcache****
demo	�������memcache
	netstat -an �鿴Ŀǰ����
			TCP    0.0.0.0:11211    --�� memcache�ķ���
ͬһ̨������ �������memcache  
	netstat -an �鿴�Ѿ������ķ���
	�����ڶ���memcache
		��ת�� ��� memcached.exe �ļ����ڵ�λ��--��memcached.exe -p �¶˿� //9999--�����ڲ��ܹر�
	php���ʹ�ö��������memcache	
		���memcache�����д����ݣ���memcache�������Զ�����ġ�****	
		ȡ���� ���ܴ����Ǹ�memcache�˿��µ����ݣ����Ƕ���������ȡ����****
С��: �˽�
	memcache������ ���Էֲ� ����̨�������ϣ�Ҳ�ɷֲ���ͬһ̨�����Ķ˿���
	$mem->addServer ͨ������hash �ž��������Ǹ�memcache��Ϊ�˽�ʡ������
	$mem->addServer("localhost",11211);
	$mem->addServer("localhost",9999);
	$mem->addServer("localhost",8888);
	$mem->addServer("localhost",2222);
	
	$mem->addServer("ip",�˿�)��
	
�� memcache �������
1 ��������:
	add/set ��������  ��־λ ������	 ����
	$mem->set(�������ƣ�ֵ����־λ��������);
	�����ݷŵ�memcache�𣬵������ٺ��� delete flush
	�����ڵ�
	��������/�رջ���--��memcache���ݴ����ڴ��С�
2 memcache����:
	1> session�е����� ����memcache 
		 ��½�����������ݡ�
		
	
	
	
	
	
	
	
	
	