<<<<<<< HEAD
知识点:
	一 自定义函数
	二 变量的引用传值
	
一 自定义函数  数学 字符串  数组 日期
	1 函数:
		系统函数   数学 字符串  数组 日期
		自定义函数  
	2 自定义函数:	以后的 函数  流程语句等代码封装自己的函数。
		function 函数名称(参数【=默认值】,参数【=默认值】,参数【=默认值】...){
			函数体
			【return val】;
		}
			1> 无参数 无返回
				函数中代码不会立即执行. 函数在 调用的时候才执行
				调用:
					函数名称([参数列表])
			2>有参数 无返回值
			3>有参数，有返回值
			
			注意:
				function demo(){
					echo 1111;
				}
				demo(); //在页面上 打印出11111；
				function demo(){
					return 1111;
				}
				$n =demo(); //不会打印的 可以给变量赋值。
				echo $n;
			4>递归函数: 自己调用自己；
				递归函数必须要有终止的情况。
				常用在 php 可以递归删除目录 文件。
				
				
二 变量的引用传值
	引用传值：php允许多个变量指向同一个内存空间
   引用传值：传递是内容			
				
				
				
				
	
	
	
	
	




=======
知识点:
	一 自定义函数
	二 变量的引用传值
	
一 自定义函数  数学 字符串  数组 日期
	1 函数:
		系统函数   数学 字符串  数组 日期
		自定义函数  
	2 自定义函数:	以后的 函数  流程语句等代码封装自己的函数。
		function 函数名称(参数【=默认值】,参数【=默认值】,参数【=默认值】...){
			函数体
			【return val】;
		}
			1> 无参数 无返回
				函数中代码不会立即执行. 函数在 调用的时候才执行
				调用:
					函数名称([参数列表])
			2>有参数 无返回值
			3>有参数，有返回值
			
			注意:
				function demo(){
					echo 1111;
				}
				demo(); //在页面上 打印出11111；
				function demo(){
					return 1111;
				}
				$n =demo(); //不会打印的 可以给变量赋值。
				echo $n;
			4>递归函数: 自己调用自己；
				递归函数必须要有终止的情况。
				常用在 php 可以递归删除目录 文件。
				
				
二 变量的引用传值
	引用传值：php允许多个变量指向同一个内存空间
   引用传值：传递是内容			
				
				
				
				
	
	
	
	
	




>>>>>>> f407ad3bbcbbd827e8bfdf1e4f8410c6352e89c3
