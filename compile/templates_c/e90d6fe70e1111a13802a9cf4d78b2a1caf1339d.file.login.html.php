<?php /* Smarty version Smarty-3.1.15, created on 2015-09-26 15:52:22
         compiled from "E:\www\src2\trunk\BPO\WhiteShirt\templates\admin\login.html" */ ?>
<?php /*%%SmartyHeaderCode:2122056064abad0d8a4-88477087%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e90d6fe70e1111a13802a9cf4d78b2a1caf1339d' => 
    array (
      0 => 'E:\\www\\src2\\trunk\\BPO\\WhiteShirt\\templates\\admin\\login.html',
      1 => 1443253940,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2122056064abad0d8a4-88477087',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56064abad59e03_31189815',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56064abad59e03_31189815')) {function content_56064abad59e03_31189815($_smarty_tpl) {?><!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width,  maximum-scale=1.0, minimum-scale=1.0" />
    <title>奕欧来 White Shirt 数据管理系统</title>
    <link href="../style/admin.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    
    <style type="text/css">
        .progressbar {border: 0;border-radius: 0;position: relative
        }
        .progressbar-text {font-size: 80px;color: #FF0000
        }
        .progressbar-value {border-top: 5px solid #F00;}
        .progressbar-value .progressbar-text {background: 0;}
        .progressbar-value .progressbar-text {color: #000;display: none;}
        .sadu {line-height: 40px;font-size: 16px;font-weight: bold;overflow: hidden;padding: 5px;color: #575765
        }
        .sadu li {width: 200px;float: left;text-align: center
        }
        .aode td {padding: 4px 0;}
        .oode label {margin-left: 8px;display: block;float: left;width: 100px;}
        .pachal1 {padding-top: 5px;}
        .combobox-item {padding: 7px 3px;}

        .logincontainerwrap {width: 1001px;margin: 0 auto;padding: 0 0 40px;}
        .width438 {width: 438px;margin: 0 auto;padding: 0 0 40px;position: relative;}
        .logintips_wraptop {height: 95px;}
        .logintips_wrap {width: 430px;margin: 0 auto;position: relative;}
        .logintips {position: absolute;padding-bottom: 6px;bottom: -64px;width: 100%;}
        .logintips p {color: #dd4b39;font: 14px/1.7 arial;border: 1px solid #ffb7b6;background: #ffe5e5;padding: 5px 7px 3px;}
        .fakereldiv {position: absolute;left: 0;bottom: 0;width: 50%;height: 8px;font-size: 0;line-height: 0;}
        .downarrow1, .downarrow2 {position: absolute;top: 0;width: 0;height: 0;font-size: 0;line-height: 0;left: 10px;border: 7px dashed transparent;border-bottom: 0 none;border-top: 7px solid #ffb7b7;}
        .downarrow1 {top: 1px;}
        .downarrow2 {border-top: 7px solid #ffe5e5;}
        .bg_hd_login, .bg_ft_login {height: 10px;background: url(../images/admin/bg_hdft_login1.png) no-repeat;overflow: hidden;}
        .bg_ft_login {background-position: 0 -11px;}
        .bg_bd_login {background: url(../images/admin/bg_bd_login1.png) repeat-y;padding: 0 5px;}
        .bg_login_container {background: #eef4fa url(../images/admin/bg_login_container1.png) repeat-x 0 0;padding-top: 7px;*zoom:1;}
        .loginh1 {color: #333;font: bold 14px/50px arial;line-height: 50px;padding-left: 28px;}
        .overfix {overflow: hidden;*overflow:visible;*zoom:1;}
        .labelstyle {float: left;display: inline;width: 85px;padding-right: 5px;color: #333;font: 14px arial;padding-top: 10px;text-align: right;}
        .inputstyle {display: inline-block;border: 1px solid #adb6c9;vertical-align: middle;box-shadow: 2px 1px 0 0 #fff;margin-bottom: 1px;}
        .inputstyle_input, .inputstyle_input1 {margin: 0;padding: 8px 7px;border: 0 none;color: #000;font: 14px arial;border-left: 1px solid #fff;border-top: 1px solid #eee;border-right: 1px solid #f9fafb;border-bottom: 1px solid #f9fafb;background: #fff;outline: 0 none;}
        .inputstyle_input1 {border-left: 1px solid #999;border-top: 1px solid #999;}
        .loginpb15 {padding-bottom: 15px;}
        .loginpb6 {padding-bottom: 6px;}
        .wd263 {width: 263px;}
        .wd73 {width: 73px;}
        .wd280 {width: 280px;}
        .login_btn_area {padding: 8px 0 20px;border-bottom: 1px solid #e2e4e9;}
        .verification_area {display: inline-block;vertical-align: middle;margin: 0 1px 0 5px;width: 140px;height: 50px;}
        .autologinarea {color#333;padding: 5px 0;}
        .checkboxinput {vertical-align: middle;margin-right: 5px;}
        .btnspaceing {vertical-align: middle;margin-right: 20px;}
        .kxbtn * {background-repeat: no-repeat;cursor: pointer;display: inline-block;font-family: '宋体';font-style: normal;font-weight: 400;text-align: center;text-decoration: none;white-space: nowrap;}
        .kxbtn span i, .kxbtn span input {color: #FFFFFF;font-size: 14px;padding: 1px 15px 0;}
        .kxbtn button {background: none repeat scroll 0 0 rgba(0, 0, 0, 0);border: 0 none;margin: 0;padding: 0;}
        .kxbtn_m .normal em, .kxbtn_m span, .kxbtn_m .loading em, .kxbtn_m .loading span {background: url("../images/admin/kxbtn_m_01.png") repeat scroll 0 0 rgba(0, 0, 0, 0);}
        .kxbtn .normal em {background: url("../images/admin/kxbtn_m_01.png") repeat scroll 0 0 rgba(0, 0, 0, 0);background-position: 0 0;padding-left: 5px;}
        .kxbtn .normal span {background-position: right -40px;padding-right: 5px;}
        .kxbtn span {line-height: 28px;}
    </style>
    <script type="text/javascript">

        function is_iPad(){var ua = navigator.userAgent.toLowerCase();if(ua.match(/iPad/i)=="ipad") {return true;} else {return false;}
        }

    </script>
    
</head>
<body style=" background:0; background-color:#fff;">
<div class="width438" style="margin-top:100px;">
    <div class="bg_hd_login"></div>
    <div class="bg_bd_login">
        <div class="bg_login_container">
            <div class="loginh1" style="text-align:center">奕欧来 White Shirt 数据管理系统</div>
            <div class="login_content">
                <div class="overfix loginpb15">
                    <label class="labelstyle">账号：</label>
                    <div class="overfix"> <span class="inputstyle clearfix">
            <input type="text" tabindex="1" value="" style="width: 263px;font-weight: normal;" class="inputstyle_input l"  name="username" id="username" placeholder="请输入登录名称">
            </span> </div>
                </div>
                <div class="overfix loginpb6">
                    <label class="labelstyle">密码：</label>
                    <div class="overfix"> <span class="inputstyle clearfix">
            <input type="password" tabindex="2" value="" style="width:263px;" class="inputstyle_input  l"  name="password" id="password" placeholder="请输入登录密码">
            </span> </div>
                </div>
                <div class="login_btn_area" style="text-align:center    "> <span class="kxbtn kxbtn_m ">
          <button tabindex="6" class="normal" type="submit" value="" id="btn_dl" onclick="login()"><em><span><b><i>登录</i></b></span></em></button>
          </span></div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    document.onkeydown = function(e){
        if(!e) e = window.event;//火狐中是 window.event
        if((e.keyCode || e.which) == 13){
            login();
        }
    }
    function login(){
        var username= $.trim($("#username").val()),password= $.trim($("#password").val());
        if(username=="")
        {
            alert("登录名称不能为空!");
            return false;
        }
        if(password=="")
        {
            alert("登录密码不能为空!");
            return false;
        }
        $.ajax({
            type: "POST",
            url: "login.php",
            data: "username="+username+"&password="+password,
            dataType:"json",
            success: function(msg){
                if(msg){  
                	window.location.href='picture/management.php';
                }else{
                	alert("用户名或密码错误");
                }
            }
        });
    }
</script>

</body>
</html><?php }} ?>
