<?php /* Smarty version Smarty-3.1.15, created on 2015-09-26 15:57:10
         compiled from "E:\www\src2\trunk\BPO\WhiteShirt\templates\admin\public\header.html" */ ?>
<?php /*%%SmartyHeaderCode:212056064ac1d70ea7-35711577%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34e8f9e7907e2c059597a4b5d6e77bced7d06893' => 
    array (
      0 => 'E:\\www\\src2\\trunk\\BPO\\WhiteShirt\\templates\\admin\\public\\header.html',
      1 => 1443254227,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212056064ac1d70ea7-35711577',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56064ac1d79527_28255494',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56064ac1d79527_28255494')) {function content_56064ac1d79527_28255494($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>奕欧来 white shirt 数据管理</title>
<link href="../../style/admin.css" type="text/css" rel="stylesheet" />
<link href="../../js/jqueryeasy/themes/gray/easyui.css" rel="stylesheet" type="text/css" />
<link href="../../js/jqueryeasy/themes/icon.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../../js/jquery.min.js"></script>
<script type="text/javascript" src="../../js/jqueryeasy/admin.js"></script>
<script type="text/javascript" src="../../js/jqueryeasy/common.js"></script>
<script type="text/javascript" src="../../js/jqueryeasy/jquery.easyui.min.js"></script>
<script type="text/javascript" src="../../js/jqueryeasy/locale/easyui-lang-zh_CN.js"></script>
<script type="text/javascript" src="../../js/jqueryeasy/easyloader.js"></script>
<script type="text/javascript" src="../../js/jqueryeasy/datagrid-detailview.js"></script>
<script type="text/javascript" src="../../js/jqueryeasy/common-utils.js" language="JavaScript"></script>
</head>
<body style="background-color:#ecf0f1">
<div id="warp">
<div id="header" class="clearfix" style="height:30px; background:#2c6787; ">
  <div class="user fr" style=" padding:0;"><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>

    | <a href="../index.php"> <i class="icon-out"></i> 退出 </a> </div>
  <div class="logo fl" style=" padding-top:0; line-height:30px; font-weight:bold; color:#fff;">奕欧来 white shirt 数据管理</div>
</div>

<?php }} ?>
