<html>
<head>
<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript"> 
		$(document).ready(function(){
			function aniDiv(){
				$("#box").animate({width:300},"slow");
				$("#box").animate({width:100},"slow",aniDiv);
			}
			aniDiv();
			$(".btn1").click(function(){
				$(":animated").css("background-color","blue");
			});
		});
	</script>
	<style> 
		div
		{
			background:#98bf21;
			height:40px;
			width:100px;
			position:relative;
			margin-bottom:5px;
		}
	</style>
</head>
<body>
	<div>静态的div</div>
	<div id="box">动态的div</div>
	<div>静态的div</div>
	<button class="btn1">Mark animated element</button>
</body>
</html>
