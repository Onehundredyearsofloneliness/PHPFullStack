知识点：
	一 面向对象概述
		1. 什么是面向对象
		2.面向对象的4个重要概念
		3.用class创建类
		4.类的成员属性和成员方法
		5.使用new关键实例化对象

1. 什么是面向对象
	    面向对象:编程的思想，对象现实世界的抽象和理解，一切皆对象	
		面向对象：思想,共性和个性关系。
		程序: 体现了代码的通用性，和具体使用的特性。
		人:    共性   黑头发，年龄  性别 姓名
		张三  特例  对象   棕色    50   男  张三
		李四  对象            黑色  20  女  李四
		......
		数据库:   用户名  密码   数据库名称   字符集...
		mysql    root     12345   demo			utf8
		mysql2  lisi			2345667   test       gbk
		
		mysql5.0   mysql 6.0.....
	  1> 面向对象 三大特点: 记忆
	  		封装:  共有的信息（属性和方法） 封装到了 集合（类）中，限定 共有信息的访问权限
		    继承:  旧内容（父类） 可以被 新内容（子类）延续
		    多态: 在继承中，子类重写***父类中的方法。
2.面向对象的4个重要概念
	类:  一种事物的集合，抽象概念，从事物当中抽出了共有的特征（属性和方法）。
	方法 : 类中定义的功能。
	属性: 事物的特性  能用  有  来形容的。
	对象	：	 类中的个体
	
	三国演义:	
	英雄人物:
	英雄类:
		属性: 事物的特性， 事物本身自带内容用 "有"形容的。
			名字
			年龄
			性别
			身高
			.....
		方法: 事物的功能.  事物 用  “能” 来形容的。
			打仗
			吃饭
			游戏
			下棋
			.......
		对象: 类中事物的个体
			张飞 ： 名字  性别  吃饭  下棋
			关羽 ： 性别 名字 年龄  吃饭 下棋
			赵云
			.....
	数据库类  mysql  oracle sql server......
		属性:	
				userName
				userPwd
				userChar
				DB
		方法:
				存储数据
				执行 sql 语句  select  update insert delete 
		对象：
			  张三操作数据库   a  b 
			  李四					 c   d
			  
3.用class创建类  
	格式：
		【】表示可有可无
		[关键词]	class 类名称{
				属性：成员属性
				方法：成员方法
		}	
		注意：
		类名称 采用 大驼峰    Hero
		 一般 一个php文件只有一个类，文件名   类名称.class.php       -->  Hero.class.php	  
		 
		 class Hero{  //定义英雄泪
		 	
		 }
			  
4.类的成员属性和成员方法
		class Hero{
			属性： 变量
			方法：自定义函数
		}		    
		
练习：定义 英雄泪  数据库类  3次		
		
5.使用new关键实例化对象
	类使用必须，进行实例化 new
		$变量（对象名称） = new 类名（）；