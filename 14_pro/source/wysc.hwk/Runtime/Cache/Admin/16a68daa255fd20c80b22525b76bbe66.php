<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="__SKIN__plugin/ui/themes/__THEME__/easyui.css" />
<link rel="stylesheet" type="text/css" href="__SKIN__plugin/ui/themes/icon.css" />
<script src="__SKIN__plugin/ui/jquery-1.7.2.min.js" type="text/javascript"></script>
<script src="__SKIN__plugin/ui/jquery.easyui.min.js" type="text/javascript"></script>
<script src="__SKIN__plugin/ui/easyui-lang-zh_CN.js" type="text/javascript"></script>
<style type="text/css">
    *{margin:0; padding:0; color:#363636;}
    a{text-decoration:none; color:#000;}
</style>
        <title>添加商品</title>
        <link href="__SKIN__css/tableform.css" rel="stylesheet" type="text/css"/>
        <link href="__SKIN__plugin/editor/themes/default/default.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="__SKIN__plugin/editor/kindeditor-min.js"></script>
        <script type="text/javascript" src="__SKIN__plugin/editor/lang/zh_CN.js"></script>
        <style>
            .tabcontent{padding:10px 20px; }
        </style>
        <script type="text/javascript">
            function additem() {
                $('#picthumb tr:last').clone().appendTo($('#picthumb'));
            }
            function removeitem(obj) {
                var _len = $('#picthumb tr').length;
                if (_len > 1) {
                    $(obj).parents('tr').remove();
                } else {
                    $.messager.alert('提示', '必须保留一个上传项', 'info');
                }
            }
            var editor;
            KindEditor.ready(function (K) {
                K.create('#goodsinfo,#goodpra');
            })
            function getattrlist(_r) {
                //alert(_r.value);
                if (_r.value == 0) {
                    $.messager.alert('提示', '请选择模型', 'info');
                    return false;
                }
                $.get('index.php?g=Admin&m=Attrlist&a=getlist&attr_id=' + _r.value, function (data) {
                    //alert(data.length);
                    $('#selectmodel tr:not(:first)').remove();
                    for (ele in data) {
                        var _str = '<tr><th>' + data[ele][1].name + '</th><td>' + data[ele][0] + '</td></tr>';
                        $(_str).appendTo($('#selectmodel'));
                    }
                }, 'json');
            }
        </script>
    </head>
    <body>
        <div class="easyui-panel" data-options="title:'添加商品',border:false,iconCls:'icon-application_form_add'"> 
            <form name="f1" action="" method="POST" enctype="multipart/form-data">
                <div class="easyui-tabs" data-options="border:false">
                    <div class="tabcontent" data-options="iconCls:'icon-application_view_list'" title="基本信息">
                        <table class="table-form" border="1" width="100%">
                            <tr>
                                <th>商品名称</th>
                                <td>
                                    <input type="text" name="goodsname" class="ipt" />
                                </td>
                            </tr>
                            <tr>
                                <th>所属分类</th>
                                <td>
                                    <select id="cc" name="category_id" class="easyui-combotree" 
                                            data-options="
                                            url:'<?php echo U('Category/combotreejson');?>'">
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>所属类型</th>
                                <td>
                                    <select id="cc"  name="goodtype_id" class="easyui-combobox">
                                        <option value="0">请选择类型</option>
                                        <?php if(is_array($typedata)): $i = 0; $__LIST__ = $typedata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><option value="<?php echo ($item[id]); ?>"><?php echo ($item[typename]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>  
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>缩略图</th>
                                <td>
                                    <input type="file" name="thumb" />
                                </td>
                            </tr>
                            <tr>
                                <th>商场价格</th>
                                <td>
                                    <input type="text" name="price" class="ipt" style="width:65px; margin-right:10px;" /><span>￥</span>
                                </td>
                            </tr>
                            <tr>
                                <th>市场价格</th>
                                <td>
                                    <input type="text" name="mprice" class="ipt" style="width:65px; margin-right:10px;" /><span>￥</span>
                                </td>
                            </tr>
                            <tr>
                                <th>商标</th><td>
                                    <select class="easyui-combobox" 
                                            data-options="
                                            url:'<?php echo U('Brand/getcombojson');?>',
                                            valueField:'id',
                                            textField:'text'
                                            " name="brand_id"></select>
                                </td>
                            </tr>
                            <tr>
                                <th>库存</th>
                                <td>
                                    <input type="text" name="storenum" class="ipt" style=" width:65px; margin-right:10px;">
                                </td>
                            </tr>
                            <tr>
                                <th>是否显示</th><td>
                                    <input type="radio" name="is_show" value="1" checked/>是<input type="radio" name="is_show" value="0" />否
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="tabcontent" data-options="iconCls:'icon-application_view_tile'" title="相册信息">
                        <table class="table-form" border="1" width="100%" id="picthumb">
                            <tr>
                                <th>图片</th>
                                <td>
                                    <input type="file" name="pics[]">
                                </td>
                                <td>
                                    <a href="javascript:void(0)" class="easyui-linkbutton" data-options="
                                       iconCls:'icon-cancel',
                                       plain:true
                                       " onclick="removeitem(this)"></a>
                                </td>
                            </tr>
                            <tr>
                                <th>图片</th>
                                <td>
                                    <input type="file" name="pics[]">
                                </td>
                                <td>
                                    <a href="javascript:void(0)" class="easyui-linkbutton" data-options="
                                       iconCls:'icon-cancel',
                                       plain:true
                                       " onclick="removeitem(this)"></a>
                                </td>
                            </tr>
                            <tr>
                                <th>图片</th>
                                <td>
                                    <input type="file" name="pics[]">
                                </td>
                                <td>
                                    <a href="javascript:void(0)" class="easyui-linkbutton" data-options="
                                       iconCls:'icon-cancel',
                                       plain:true
                                       " onclick="removeitem(this)"></a>
                                </td>
                            </tr>
                            <tr>
                                <th>图片</th>
                                <td>
                                    <input type="file" name="pics[]">
                                </td>
                                <td>
                                    <a href="javascript:void(0)" class="easyui-linkbutton" data-options="
                                       iconCls:'icon-cancel',
                                       plain:true
                                       " onclick="removeitem(this)"></a>
                                </td>
                            </tr>
                            <tr>
                                <th>图片</th>
                                <td>
                                    <input type="file" name="pics[]">
                                </td>
                                <td>
                                    <a href="javascript:void(0)" class="easyui-linkbutton" data-options="
                                       iconCls:'icon-cancel',
                                       plain:true
                                       " onclick="removeitem(this)"></a>
                                </td>
                            </tr>
                        </table>
                        <a href="javascript:void(0)" onclick="additem()" class="easyui-linkbutton" data-options="
                           iconCls:'icon-add'
                           " style="margin-top:10px;">增加图片</a> 
                    </div>
                    <div class="tabcontent" data-options="iconCls:'icon-application_form'" title="模型信息">
                        <table class="table-form" border="1" width="100%" id="selectmodel">
                            <tr>
                                <th>选择模型</th>
                                <td>
                                    <select name="goodsattr_id" class="easyui-combobox" data-options="onSelect:getattrlist">
                                        <option value="请选择模型">请选择模型</option>
                                        <?php if(is_array($goodsmodellist)): $i = 0; $__LIST__ = $goodsmodellist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><option value="<?php echo ($val[id]); ?>"><?php echo ($val[attrname]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="tabcontent" data-options="iconCls:'icon-application_xp'" title="商品参数">
                        <textarea name="goodpra" id="goodpra" style="width:80%; height:300px"></textarea>
                    </div>
                    <div class="tabcontent" data-options="iconCls:'icon-application_xp'" title="详细信息">
                        <textarea name="goodsinfo" id="goodsinfo" style="width:80%; height:300px;"></textarea>
                    </div>
                </div>
                <table class="table-form" border="1" width="100%">
                    <tr>
                        <th></th>
                        <td>
                            <input name="s1" type="submit" value="提交" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input name="r1" type="reset" value="清除" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>