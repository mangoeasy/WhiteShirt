<?php
/**
 * 用户上传图片管理
 * Created by www.5adian.com
 * User: jerry.yang@5adian.com
 * Date: 14-9-9 上午10:49
 */
require ('../../includes/include.inc.php');
$user=isset($_SESSION['user'])?$_SESSION['user']:"";
if(!$user){
	header("Location:../index.php");
}
$smarty->assign('user',$user);
$smarty->display("admin/picture/management.html");







