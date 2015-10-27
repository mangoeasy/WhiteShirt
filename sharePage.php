<?php
include_once "includes/include.inc.php";
$indexUrl=WEB_URL."index.php";
if(!isset($_GET['id'])||empty($_GET['id']))
{
    header("Location:{$indexUrl}");
    exit;
}

$id=trim($_GET['id']);
$urlUid=isset($_GET['uid'])?trim($_GET['uid']):"";
$uid=get_cookie("uid");
//根据照片ID获取照片信息
/*$type=isset($_GET['type'])?trim($_GET['type']):get_cookie("type");
if(!$type)
{
    $type="wap";
}*/
	$user_agent = $_SERVER['HTTP_USER_AGENT'];	
	
	if (strpos($user_agent, 'MicroMessenger') === false) {
			$type="wap";
		} else {
			// 微信浏览器，允许访问
			$type="wchat";
		}
$shareUrl=WEB_URL."sharePage.php?id={$id}&uid={$uid}&type={$type}";
if($type=="wchat")
{
    //调用auth授权
    weixinAuth();
    $ShareAppMessageUrl=createAuthUrl($shareUrl);//分享给朋友的链接
}
//获取分享照片信息


$sql="SELECT * ";
$sql.=" FROM photo ";
$sql.=" WHERE md5(id)='{$id}' AND delete_flag='0'";
$photoresult=$pdo->query($sql,"find");

if(!$photoresult){
    header("Location:{$indexUrl}");
    exit;
}
//判断是否是自己点点击的链接
$isMyPicture=false;
if($urlUid!="" && $urlUid==$uid)
{
    $isMyPicture=true;
}


$smarty->assign('isMyPicture',$isMyPicture);
$smarty->assign('photoresult',$photoresult);
$smarty->assign('ShareAppMessageUrl',$ShareAppMessageUrl);
$smarty->assign('type',$type);
$smarty->assign('indexUrl',$indexUrl);
$smarty->display ( 'sharePage.html' );