<?php
include_once "includes/include.inc.php";
//调用auth授权
weixinAuth();

	$user_agent = $_SERVER['HTTP_USER_AGENT'];	
	
	if (strpos($user_agent, 'MicroMessenger') === false) {
			$type="wap";
		} else {
			// 微信浏览器，允许访问
			$type="wchat";
		}
	



/*$type="wap";
if(isset($_GET['type'])&&in_array($_GET['type'],array('wchat','wap')))
{
    $type=trim($_GET['type']);
}*/
set_cookie(array('type'=>$type));
$smarty->display ( 'index.html' );