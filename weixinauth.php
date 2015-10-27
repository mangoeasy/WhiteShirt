<?php
/**
 * 微信授权信息
 * User: jerry@5adian.com
 * Date: 14-2-26
 * Time: 下午3:41
 */
include 'includes/include.inc.php';
$log = new CLog('wexinauth.php');
$code=isset($_GET['code'])?$_GET['code']:"";
$state=isset($_GET['state'])?$_GET['state']:"";
$log->debug($_GET);
$openid = getOpenId();
$log->debug($_SESSION);
//如果cookie里已经有openid，那么不需要再获取用户信息 
// if(!empty($openid)){
// 	redirect();
// 	exit;
// }
//如果取消授权  没有code。那么如何跳转？

//判断是否不是第一次AUth授权
//$weixinauth_accessToken_file=ROOT_PATH . 'runtime' . DIRECTORY_SEPARATOR . 'data' .DIRECTORY_SEPARATOR. "weixinauth_accessToken.json";

// if(!file_exists($weixinauth_accessToken_file))
// {
    $access_token_url="https://api.weixin.qq.com/sns/oauth2/access_token?appid=".APPID."&secret=".APPSECRET."&code=".$code."&grant_type=authorization_code";
    //请求获取参数
    $access_token=get($access_token_url);
    $log->debug('url='.$access_token_url.' oauth2/access_token返回值'.$access_token);
    $access_token=json_decode($access_token);
    
    set_cookie(array('openId'=>$access_token->openid));
    session_start();
    set_session("openId", $access_token->openid);
    session_write_close();
    $openid=$access_token->openid;
    //$log->debug($_SESSION);
    //存储
//     $access_token->expire_time = time() + 7000;
//     unset($access_token->openid);
//     file_put_contents($weixinauth_accessToken_file,json_encode($access_token)); //将获取的信息保存到文件中,无别的用处用来判断是第一次授权还是第二次授权
// }

// $access_token = json_decode(file_get_contents($weixinauth_accessToken_file)); 
// if($access_token->expire_time<time() || empty($openid)){
//     //刷新access_token
//     $refresh_token_url='https://api.weixin.qq.com/sns/oauth2/refresh_token?appid='.APPID.'&grant_type=refresh_token&refresh_token='.$access_token->refresh_token;
//     //请求获取参数
//     $refresh_token=get($refresh_token_url);
//     $log->debug('url='.$refresh_token_url.' oauth2/refresh_token返回值'.$refresh_token);
//     $access_token=json_decode($refresh_token);
    
    
//     set_cookie(array('openId'=>$access_token->openid));
//     session_start();
//     set_session("openId", $access_token->openid);
//     session_write_close();
//     $openid=$access_token->openid;
//     //$log->debug($_SESSION);
//     //存储
//     $access_token->expire_time = time() + 7000;
//     unset($access_token->openid);
//     file_put_contents($weixinauth_accessToken_file,json_encode($access_token)); //将获取的信息保存到文件中,无别的用处用来判断是第一次授权还是第二次授权
// }
//根据openid和accessToken获取用户新
$getUserInfoUrl='https://api.weixin.qq.com/sns/userinfo?access_token='.$access_token->access_token.'&openid='.$openid.'&lang=zh_CN';
$userInfo=get($getUserInfoUrl);
$log->debug("url=".$getUserInfoUrl." AUTH授权获取用户信息".$userInfo);
$userInfo=json_decode($userInfo);
if(!isset($userInfo->errcode))
{
    //存储该用户 
    createUser($userInfo);
}

redirect(); 
exit;

function createUser($weixinUser){
	global $pdo;
	global $log;
	//$sql = "select * from user where wechat_openid='".$user['openid']."'";
	$user = getUserByOpenid();
	if(!$user){
		$ymdhis = date('Y-m-d H:i:s');
		$sql = "insert into user(wechat_openid,wechat_country,wechat_provice,wechat_city,wechat_headimgurl,wechat_nickname,wechat_sex,create_time,update_time) ";
		$sql.= " values('{$weixinUser->openid}','{$weixinUser->country}','{$weixinUser->province}','{$weixinUser->city}','{$weixinUser->headimgurl}','{$weixinUser->nickname}','{$weixinUser->sex}','{$ymdhis}','{$ymdhis}')";
		$user_id =$pdo->query($sql, 'insert');
		set_cookie(array('userid'=>$user_id));
		session_start();
		set_session("userid", $user_id);
		session_write_close();
		return true;
	}
	return true;
}


function redirect(){
	global $log;
	$locationUrl=htmlspecialchars_decode(WEB_URL.'index.php'); //跳转URL
	$locationUrlArray=parse_url($locationUrl);
	$locationUrlArray['query']=isset($locationUrlArray['query'])?$locationUrlArray['query']."&ResponseFrom= 3":"ResponseFrom= 3";
	$locationUrlArray['fragment']=isset($locationUrlArray['fragment'])?'#'.$locationUrlArray['fragment']:"";
	$locationUrlArray['port']=isset($locationUrlArray['port'])?':'.$locationUrlArray['port']:"";
	$url=$locationUrlArray['scheme'].'://'.$locationUrlArray['host'].$locationUrlArray['port'].$locationUrlArray['path'].'?'.$locationUrlArray['query'].$locationUrlArray['fragment'];
	$log->debug($url);
	header("location:".$url);
	exit;
}

function get( $url, $cookie='' )
{
    // 初始化一个cURL会话
    $curl = curl_init($url);
    // 不显示header信息
    curl_setopt($curl, CURLOPT_HEADER, 0);
    // 将 curl_exec()获取的信息以文件流的形式返回，而不是直接输出。
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    // 使用自动跳转
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
    if(!empty($cookie)) {
        // 包含cookie数据的文件名，cookie文件的格式可以是Netscape格式，或者只是纯HTTP头部信息存入文件。
        curl_setopt($curl, CURLOPT_COOKIEFILE, $cookie);
    }
    // 自动设置Referer
    curl_setopt($curl, CURLOPT_AUTOREFERER, 1);
    // 执行一个curl会话
    $tmp = curl_exec($curl);
    // 关闭curl会话
    curl_close($curl);
    return $tmp;
}


