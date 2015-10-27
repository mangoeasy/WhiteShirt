<?php /* Smarty version Smarty-3.1.15, created on 2015-10-23 14:43:25
         compiled from "E:\www\src2\trunk\BPO\WhiteShirt\templates\sharePage.html" */ ?>
<?php /*%%SmartyHeaderCode:1899756051bf4a6bf67-02326440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fab6af145be5c74228b5a2718da55928af76ca22' => 
    array (
      0 => 'E:\\www\\src2\\trunk\\BPO\\WhiteShirt\\templates\\sharePage.html',
      1 => 1445579016,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1899756051bf4a6bf67-02326440',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56051bf4aad436_17332804',
  'variables' => 
  array (
    'photoresult' => 0,
    'type' => 0,
    'isMyPicture' => 0,
    'indexUrl' => 0,
    'static_path' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56051bf4aad436_17332804')) {function content_56051bf4aad436_17332804($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>
<style type="text/css">

.htmlClass{ background: -webkit-gradient(linear, 0% 0%, 0% 100%,from(#fff), to(#fff));}

</style>
<div class="PageDiv4" style="min-height:100%;">

  <div style="position:relative; left:0; top:0; z-index:1; width:100%;">
    <div style=" width:90%; margin-left:auto; margin-right:auto;" id="MetImage"><img src="<?php echo $_smarty_tpl->tpl_vars['photoresult']->value['pictureurl'];?>
" width="100%" /></div>
    <div style=" clear:both;">
      <Div style="padding-top:0; overflow:hidden; "><img src="images/sharett.png" width="100%" ></Div>
      
     <?php if ($_smarty_tpl->tpl_vars['type']->value=="wchat") {?>
      <?php if (!$_smarty_tpl->tpl_vars['isMyPicture']->value) {?>
          <Div style="overflow:hidden; ">
            <Div style="width:35%; margin-left:15%; float:left; padding-top:10px;">
              <div onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['indexUrl']->value;?>
'"><img src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
images/covergirlbtn.png" width="100%" ></div>
           <!--   <div style="margin-top:0;" onClick="sharePage()"><img src="images/share.png" width="100%" ></div>-->
              <div style=" margin-top:5px;"><img src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
images/logoshare.png" width="100%" /></div>
            </Div>
            <Div style="width:20%; margin-left:15%; float:left;">
              <div><img src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
images/gzh.png" width="100%" /></div>
              <div><img src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
images/followtxt.png" width="100%" /></div>
            </Div>
          </Div>
      		<?php } else { ?>
            <div style="padding-top:10px;"><img src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
images/tipsmyshare.png" width="100%" /></div>
            <?php }?>
      <!--微信end-->
        <?php } else { ?>
      <!--weibo.com -->
      <Div style="overflow:hidden; margin-top:10px; ">
        <Div style="width:32%; margin-left:14%; margin-right:4%;  float:left;">
          <div onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['indexUrl']->value;?>
'"><img src="images/covergirlbtn.png" width="100%" ></div>
        </Div>
        <Div style="width:32%; margin-left:4%; margin-right:14%;float:left;">
          <div><img src="images/weibo.png" width="100%" /></div>
        </Div>

      </Div>
  	 <div style=" padding-top:12px;"><img src="images/logoforweibo.png" width="100%" /></div>
      <!--weibo.com end-->
      <?php }?>
    </div>
  </div>
</div>
<?php if ($_smarty_tpl->tpl_vars['type']->value=="wchat"&&$_smarty_tpl->tpl_vars['isMyPicture']->value) {?>
<div style="position:fixed;  z-index:999; left:0; top:0;  width:100%; height:100%; background-color:rgba(0,0,0,0.7);" onClick="shareclose()" id="sharepage"><img src="images/fenxiang.png" width="100%" ></div>
<?php }?>
<script type="text/javascript">


$(function(){
	$("#MetImage").css({'margin-top':$(window).width() * 0.05})	
})
function sharePage(){
	$("#sharepage").show();		
}

function shareclose(){$("#sharepage").hide();	}

</script> 
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<?php }} ?>
