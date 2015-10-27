<?php /* Smarty version Smarty-3.1.15, created on 2015-10-23 16:50:41
         compiled from "E:\www\src2\trunk\BPO\WhiteShirt\templates\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:2892756051b75b7efc1-55618490%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a601d500b1a3bc7bd826ff8c66ca5d0cd5bf91c6' => 
    array (
      0 => 'E:\\www\\src2\\trunk\\BPO\\WhiteShirt\\templates\\footer.html',
      1 => 1445589866,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2892756051b75b7efc1-55618490',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56051b75b93bc0_63058632',
  'variables' => 
  array (
    'static_path' => 0,
    'version' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56051b75b93bc0_63058632')) {function content_56051b75b93bc0_63058632($_smarty_tpl) {?><script type="text/javascript">

function orient() {
	if (window.orientation == 0 || window.orientation == 180) {
		
				$("#waring").hide();		
	
			return false;
	}
	else if (window.orientation == 90 || window.orientation == -90) {
			
				$("#waring").show();
	return false;
	}
}

</script>
<div align="center" id="waring" style="display:none; background-color:rgba(0,0,0,0.9); position:absolute; width:100%; left:0; top:0; height:100%; z-index:100000;"><img src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
images/landscape.jpg?v=<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
" width="130" style="top:50%; margin-top:-62px; position:absolute; left:50%; margin-left:-65px;" /></div>


<script  type="text/javascript">

var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?1b3fbb8bfd8a229b2b47cd610dbf53f1";
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(hm, s);
})();
$(function(){
	function hidebd(){
		if($("img[src='http://eiv.baidu.com/hmt/icon/21.gif']").length!=0){
			$("img[src='http://eiv.baidu.com/hmt/icon/21.gif']").hide();
		}else{
			setTimeout(function(){hidebd();},100);
		}
	}
	var clearbd = setTimeout(function(){hidebd();},100);
})

</script>

</body>
</html>
         <?php }} ?>
