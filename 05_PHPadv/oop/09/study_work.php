知识点：
	一 、 多态
	二、设计模式
	
一 、 多态
	面向对象三大特性：多态：
	多态:多个操作或方法，相同的方法名称，作用于不同的对象上，获得结果不同。
	具有继承关系的对象，可以对相同的父类方法，重写，子类在调用同名方法是，产生结果不同。
	
	多态的作用：
		企业级应用中：
			web 管理软件
				财务
						function work(){
							echo "算账";
						}				
				人事
					function work(){
						echo "面试";
					}
				教学
					function work(){
						echo "上课";
					}
练习:
	公司:  工作，谈话，制度 三个方法
			财务
			人事
			教学
		 在三个部门中都定义，用多态的方法调用一次。
	
二、设计模式  面试。
	设计模式：建筑行业。经过多年的软件开发实践，开软件拥有固定的模式，模式被反复的应用
					经过多代码的汇总，让其在设计模式中的重用性越来越高。是代码的重用性最高。	
	
	设计模式的有点：
		1 ，提高的代码的重用性。
		2 ， 促进框架的发展
	
	常用的设计模式：
		工厂模式
		单例模式
		
		1 工厂模式:	
		一种类，它具有创建对象的作用。
		工厂模式：创建对象，可以为所有的类提供 对象
		2 单例模式:
			class user{
			
			}
			$u1 = new user();
			$u2 = new user();
			一个对象 在内存中开辟一段空间，引起内存空间的消耗。
			
			只创建一次对象的实例，在不同地方去调用。
			单例模式：允许一个类 只有一个累的实例（对象）;
			单例模式3个特点：
				类只能有一个实例（对象）;
				类必须自行创建该对象
				必须能为整个系统提供对象
	
	
练习：
	1 工厂模式 单例模式  3次。面试
	
把案例3次
	









			
			
		
		
		
		
		
		
		
		
		
		
		
		
		
	
	
	
	
	
	
	
	
	
