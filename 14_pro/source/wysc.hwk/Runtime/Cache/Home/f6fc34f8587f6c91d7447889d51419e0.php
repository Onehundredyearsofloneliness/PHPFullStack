<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="__SKIN__css/header.css" rel="stylesheet" type="text/css" />
        <link href="__SKIN__css/reset.css" rel="stylesheet" type="text/css" />
        <link href="__SKIN__css/ucentermenu.css" rel="stylesheet" type="text/css" />
        <link href="__SKIN__css/ucenter.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="__SKIN__plugin/ui/themes/__THEME__/easyui.css" />
<link rel="stylesheet" type="text/css" href="__SKIN__plugin/ui/themes/icon.css" />
<script src="__SKIN__plugin/ui/jquery-1.7.2.min.js" type="text/javascript"></script>
<script src="__SKIN__plugin/ui/jquery.easyui.min.js" type="text/javascript"></script>
<script src="__SKIN__plugin/ui/easyui-lang-zh_CN.js" type="text/javascript"></script>
<style type="text/css">
    *{margin:0; padding:0; color:#363636;}
    a{text-decoration:none; color:#000;}
</style>
        <script src="__SKIN__js/jq.js" type="text/javascript"></script>
        <script>
            function checkvalue(_obj, _regex, _message) {
                if (_regex == 'require') {
                    if (_obj.value == '') {
                        console.log($(_obj).parent().next('td'));
                        $(_obj).parent().next('td').find('span').html(_message).css('display', 'block');
                        return false;
                    } else {
                        $(_obj).parent().next('td').find('span').html('').css('display', 'none');
                        return true;
                    }
                } else {
                    if (!_regex.test(_obj.value)) {
                        $(_obj).parent().next('td').find('span').html(_message).css('display', 'block');
                        return false;
                    } else {
                        $(_obj).parent().next('td').find('span').html('').css('display', 'none');
                        return true;
                    }
                }
            }
            function checklogin() {
                var _username = document.getElementById('username');
                var _pwd = document.getElementById('pwd');
                if (checkvalue(_username, 'require', '用户名不能为空') && checkvalue(_pwd, /^.{8,}$/, '密码错误')) {
                    return true;
                } else {
                    return false;
                }
            }
            function checkrepwd(_obj1, _obj2id, _message) {
                var _obj2 = document.getElementById(_obj2id);
                console.log(_obj1.value);
                console.log(_obj2.value);
                if (_obj1.value != _obj2.value) {
                    $(_obj1).parent().next('td').find('span').html(_message).css('display', 'block');
                    return false;
                } else {

                    $(_obj1).parent().next('td').find('span').html('').css('display', 'none');
                    return true;
                }
            }
            function checknull(_obj, _regex, _message) {
                if (_obj.value == '') {
                    return true;
                }
                return checkvalue(_obj, _regex, _message);
            }
            function checkregister() {
                var _qq = document.getElementById('qq');
                var _phone = document.getElementById('phone');
                if (checknull(_qq, /^\d{6,}$/, 'qq格式不正确') && checknull(_phone, /^\d{11}$/, '手机格式不正确')) {
                    return true;
                } else {
                    return false;
                }
            }
        </script>
        <title>个人信息管理-用户中心-3C商城</title>
    </head>
    <body>
        <!--顶部导航开始-->
<div class="mini-nav">
    <div class="mini-main">
        <div class="fast-nav">
            <?php if($_USER[id]): ?><span 
                    <?php if($_USER[sex] == 1): ?>class="usericon1"
                    <?php elseif($_USER[sex] == 2): ?>
                    class="usericon"
                    <?php else: endif; ?>
                    >欢迎你:<?php echo ($_USER[username]); ?></span> | <a href="<?php echo U('User/logout');?>">退出登录</a>
            <?php else: ?>
            <a href="<?php echo U('User/login');?>">登录</a> | <a href="<?php echo U('User/register');?>">免费注册</a><?php endif; ?>
            | <a href="<?php echo U('User/ucenter');?>">会员中心</a> | <a href="<?php echo U('shoppingflow/step',array('step'=>'shoppingcar'));?>">购物车</a> | <a href="">帮助中心</a>
        </div>
        <div class="date">
            <?php echo ($nowtime); ?>
        </div>
    </div>
</div>
<!--顶部导航结束-->
<div class="wrap">
    <!--头部开始-->
    <div class="header">
        <div class="header-top">
            <h1><a href="__APPURL__"><img src="__SKIN__images/index_03.jpg" alt="" /></a></h1>
            <div class="searchform">
                <div class="form">
                    <form name="f1" method="post" action="<?php echo U('Index/search');?>">
                        <input type="text" name="keyword" class="keyword" />
                        <input type="submit" name="s1" value="" class="searchbtn"/>
                    </form>
                </div>
            </div>
        </div>
        <div class="nav">
            <div class="allcate">
            </div>
            <ul class="navigator">
                <?php if(is_array($navdata)): $i = 0; $__LIST__ = $navdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><li class="item"><a href="<?php echo U('Index/lists',array('catid'=>$item[id]));?>"><?php echo ($item[catename]); ?></a></li>
                    <li class="item">|</li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </div>
    <!--头部结束-->
        <div class="position">
            <h6>当前位置：</h6><a href="__APPURL__">首页 </a><span> &gt; </span><a href="<?php echo U('User/ucenter');?>"> 用户中心 </a><span>&gt; </span><a href="<?php echo U('User/ucenter',array('option'=>'selfinfo'));?>"> 个人信息管理</a>
        </div>
        <div class="main">
            <div class="left">
    <!--当前分类开始-->
    <div class="currencat">
        <h3><span>用户菜单</span></h3>
        <ul class="cat">
            <li class="item"><h4
                    <?php if($_GET['option']== 'selfinfo'): ?>class="current"<?php endif; ?>
                    ><a href="<?php echo U('User/ucenter',array('option'=>'selfinfo'));?>">个人信息</a></h4></li>
            <li class="item"><h4
                    <?php if($_GET['option']== 'modifypwd'): ?>class="current"<?php endif; ?>
                    ><a href="<?php echo U('User/ucenter',array('option'=>'modifypwd'));?>">修改密码</a></h4></li>
            <li class="item"><h4><a href="<?php echo U('Shoppingflow/step',array('step'=>'shoppingcar'));?>">购物车</a></h4></li>
            <li class="item"><h4
                    <?php if($_GET['option']== 'selforder'): ?>class="current"<?php endif; ?>
                    ><a href="<?php echo U('User/ucenter',array('option'=>'selforder'));?>">订单</a></h4></li>
            <li class="item"><h4
                    <?php if(($_GET['option']== 'selfaddress') OR ($_GET['option']== 'addaddress')): ?>class="current"<?php endif; ?>
                    ><a href="<?php echo U('User/ucenter',array('option'=>'selfaddress'));?>">收货地址</a></h4></li>
            <li class="item"><h4
                    <?php if($_GET['option']== 'selffavor'): ?>class="current"<?php endif; ?>
                    ><a href="<?php echo U('User/ucenter',array('option'=>'selffavor'));?>">我的收藏</a></h4></li>
            <li class="item"><h4
                    <?php if($_GET['option']== 'selfcomment'): ?>class="current"<?php endif; ?>
                    ><a href="<?php echo U('User/ucenter',array('option'=>'selfcomment'));?>">我的评论</a></h4></li>                                                        
        </ul>
        <div class="curcatbt">
        </div>
    </div>
</div>
            <div class="right">
                <form name="f2" action="" method="post" onsubmit="return checkregister()">
                    <table class="table-form" border="1" width="100%">
                        <caption><h3>修改个人信息</h3></caption>
                        <tr><th>用户名</th><td><h4><?php echo ($userdata[username]); ?><input type="hidden" name="id" value="<?php echo ($userid); ?>" /></h4></td><td><span class="msg"></span></td></tr>
                        <tr><th>性别</th>
                            <td>
                                <input type="radio" name="sex" value="1" 
                                <?php if($userdata["sex"] == 1): ?>checked<?php endif; ?>/>男&nbsp;
                                <input type="radio" name="sex" value="2" 
                                <?php if($userdata["sex"] == 2): ?>checked<?php endif; ?>/>女&nbsp;
                                <input type="radio" name="sex" value="0" 
                                <?php if($userdata["sex"] == 0): ?>checked<?php endif; ?>/>保密
                            </td>
                            <td><span class="msg"></span></td></tr>
                        <tr><th>邮箱</th><td><h4><?php echo ($userdata[email]); ?></h4></td><td><span class="msg"></span></td></tr>
                        <tr><th>出生日期</th><td><input type="text" name="birthday"  class="easyui-datebox" data-options="value:'<?php echo ($userdata["birthday"]); ?>'"/></td><td><span class="msg"></span></td></tr>
                        <tr><th>qq</th><td><input type="text" id="qq" name="qq" class="ipt" value="<?php echo ($userdata[qq]); ?>" onblur="checknull(this,/^\d{6,}$/,'qq格式不正确')" /></td><td><span class="msg"></span></td></tr>
                        <tr><th>phone</th><td><input type="text" id="phone" name="phone" class="ipt" value="<?php echo ($userdata[phone]); ?>" onblur="checknull(this,/^\d{11}$/,'手机格式不正确')" /></td><td><span class="msg"></span></td></tr>
                        <tr><th>提示问题</th><td><input type="text" name="question" class="ipt" value="<?php echo ($userdata[question]); ?>" style="font-size:12px"/></td><td><span class="msg"></span></td></tr>
                        <tr><th>答案</th><td><input type="text" name="answer" class="ipt" value="<?php echo ($userdata[answer]); ?>"  style="font-size:12px"/></td><td><span class="msg"></span></td></tr>
                        <tr><th></th><td><input type="submit" name="s1" value="提交" />&nbsp;<input type="reset" name="r1" value="清除" /></td></tr>
                    </table> 
                </form>
            </div>
        </div>
        <div class="footer">
    <img src="__SKIN__images/index_77.gif" width="1000" height="282" alt="" />
</div>
    </body>
</html>