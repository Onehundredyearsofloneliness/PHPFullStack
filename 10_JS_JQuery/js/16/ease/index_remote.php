<html>
    <script type="text/javascript" src="ajax.js"></script>
    <body>

        <script>
            // 这个代码是 调用远程 json 数据的案例 要求 远程的 getJsonDiv.php 释放权限才能获取到数据
            
            
            //alert(33333333);
            window.onload = function () {
                //alert(3333);
                var bt1 = document.getElementById("bt1");
                var st1 = document.getElementById("st1");
                var dv1 = document.getElementById("dv1");

                bt1.onclick = function () {
                    var st = st1.value;
                    //alert(st);
                    ajax({
                        type: "POST",
                        url: "http://192.168.0.50:8081/10/js/16/ease/getJsonDiv.php?rd="+ Math.random(),
                        data:"style=" + st,
                        success: function (data) {
                            //alert(data);
                            json = JSON.parse(data);
                            dv1.innerHTML = "<" + json.tag + " style='" + json.style + "'>" + json.text + "</" + json.tag + ">";
                        }
                    });
                };
            };
        </script>



        <input type="text"   id="st1" name="style" />
        <input type="button" id="bt1" value="确定" />
        <br />
        <div id="dv1">渲染这里</div>
        
        <p>
        <pre>
            案例要求：
                1 在输入框输入数字 1 / 2 / 3  输入框下面 插入 不同风格的 div 。
                2 要求使用 ajax 实现。
                3 获取数据网址：http://192.168.0.50:8081/10/js/16/ease/getJsonDiv.php
                4 数据为json 格式：{"tag":"div","style":"样式","text":"文本"}
                
           编码要求：
                1 首先实现 index.php 如本页功能。
                2 自己编写 getJsonDiv.php 。使得 index.php 调用本地数据。

        </pre>
    </body>
</html>