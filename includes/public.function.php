<?php
/**
 * 函数名称：isEmail
 * 简要描述：邮箱地址合法性检查
 *
 * @param string $val
 * @param string $domain  example: sina 126
 * @return  boolean
 *  */
function isEmail($val, $domain = "") {
    if (!$domain) {
        if (preg_match("/^[a-z0-9-_.]+@[\da-z][\.\w-]*\.[a-z]{2,4}$/i", $val)) {
            return true;
        }
        else
            return false;
    }
    else {
        if (preg_match("/^[a-z0-9-_.]+@" . $domain . "$/i", $val)) {
            return true;
        }
        else
            return false;
    }
}
/**
 * 设置cookie
 * @param $array=(name=>value)
 */
if ( ! function_exists('set_cookie'))
{
    function set_cookie($array,$expire =0, $path = '/')
    {
        if(is_array($array))
        {
            foreach ($array as $key=>$value)
            {
                if($expire==0){
                    $expire = time()+60*60*24*365;//365天
                }
                $key=PREFIX."_".$key;
                setcookie($key, $value,$expire,$path);
            }
        }
    }
}
/**
 * 删除cookie
 */
if ( ! function_exists('del_cookie'))
{
    function del_cookie($name)
    {
        $name=PREFIX."_".$name;
        setcookie ($name, "", time() - 3600);
    }
}
/**
 * 获取cookie
 */
if ( ! function_exists('get_cookie'))
{
    function get_cookie($name)
    {
        $name=PREFIX."_".$name;
        if(isset($_COOKIE[$name]))
        {
            return $_COOKIE[$name];
        }
        return false;
    }
}
if ( ! function_exists('set_session'))
{
    function set_session($name,$value)
    {
        $name=PREFIX."_".$name;
        $_SESSION[$name]=$value;
    }
}
if (!function_exists('get_session'))
{
    function get_session($name)
    {
        $name=PREFIX."_".$name;
        if(isset($_SESSION[$name]))
        {
            return $_SESSION[$name];
        }
        return false;
    }
}
/**
 * jssdk 调用
 */
function getJssdkInfo()
{
    $jssdk = new JSSDK(APPID,APPSECRET);
    $info=$jssdk->GetSignPackage();
    return json_encode($info);
}

function reponseError($rsp=true,$errorMsg="")
{
    $array=array(
        'rsp'=>$rsp,
        'errorMsg'=>$errorMsg,
    );
    echo json_encode($array);
    exit;
}
/*
 *验证手机号码是否正确
*@param $mobile 手机号码
*/
function isMobile($mobile){
    if(preg_match("/^13[0-9]{1}[0-9]{8}$|15[0-9]{1}[0-9]{8}$|18[0-9]{1}[0-9]{8}$/",$mobile)){
        return true;	//验证通过
    }else{
        return false;	//手机号码格式不对
    }
}
/**
 * 生成AUTH 授权URL
 * @param $url
 * @return mixed|string
 * @throws Exception
 */
function createAuthUrl($url)
{
    return 'https://open.weixin.qq.com/connect/oauth2/authorize?appid=' . APPID . '&redirect_uri=' . urlencode($url) . '&response_type=code&scope=snsapi_userinfo&state=whiteshirt#wechat_redirect';
}

/**
 * 获取微信weixinId
 */
function getWeixinId()
{
    $weixinId=get_session("weixinId");
        if($weixinId==false){
        $weixinId=get_cookie("weixinId");
    }
    return $weixinId;
}

/**
 *获取openID
 */
function getOpenId(){
    $openId=get_session("openId");
    if($openId==false){
        $openId=get_cookie("openId");
    }
    return $openId;
}

/**
 *获取userid
 */
function getUserid(){
    $userid=get_session("userid");
    if($userid==false){
        $userid=get_cookie("userid");
    }
    return $userid;
}
/**
 * 判断是否是非法请求
 */
function isBadRequest()
{
    $openid=getOpenId();
    $weixinId=getWeixinId();
    if(!$openid||!$weixinId)
    {
        header("Location:error.html");
        exit;
    }
}

//用户是否注册
function is_register(){
	$user = getUserByOpenid();
	if(!isset($user)){
		$user = getUserById();
	}
	if(isset($user['mobile'])&&!empty($user['mobile'])){
		return true;
	}
	
	return false;
}
//获取红包
//1该用户已经抽取过红包，不能重复抽取
//2红包库里已经没有红包。
//3更新失败，未抢到红包，被其他会员同步抢走了。返回3，可以尝试继续调用该方法
//4红包抢成功
function getBonus(){
	global $pdo;
	$openid = getOpenId();
	$user = getUserByOpenid();
	
	if($user['bonus']<=0){
		$ymd = date('Y-m-d');
		$ymdhis = date('Y-m-d H:i:s');
		//抽取红包
		$sql="SELECT * FROM bonus_prize where is_used=0 and bonus_datetime<='".$ymd."' ORDER BY RAND() LIMIT 1";
		$bonus = $pdo->query($sql, 'find');
		if($bonus){
			//尝试更新红包
			$sql="update bonus_prize set is_used=1,used_datetime='".$ymdhis."' where id=".$bonus['id']." and is_used=0";
			$result = $pdo->query($sql, 'update');
			
			//更新成功，抢到红包了
			if($result){
				$sql = "update user set bonus=".$bonus['bonus']." , bonus_id=".$bonus['id']." ,update_time='".$ymdhis."' where id=".$user['id'];
				$pdo->query($sql, 'update');
				//红包抢成功
				return 4;
			}
			//更新失败，未抢到红包，被其他会员同步抢走了。返回3，可以尝试继续调用该方法
			return 3;
		}
		//红包库里已经没有红包。
		return 2;
	}
	//该用户已经抽取过红包，不能重复抽取
	return 1;
	
}

//返回用户信息 通过penid
function getUserByOpenid(){
	global $pdo;
	$openid = getOpenId();
	
	if(empty($openid)) return null;//wap访问，没有openid
	
	$sql = "select * from user where wechat_openid='".$openid."'";
	$user = $pdo->query($sql, 'find');
	return $user;
}
//返回用户信息 通过userid
function getUserById(){
	global $pdo;
	$log = new CLog('public');
	$userid = getUserid();

	if(empty($userid)) return null;

	$sql = "select * from user where id='".$userid."'";
	$log->debug($sql);
	$user = $pdo->query($sql, 'find');
	return $user;
}

/* * *******************************************************************
  函数名称:encrypt
  函数作用:加密解密字符串
  使用方法:
  加密     :encrypt('str','E','nowamagic');
  解密     :encrypt('被加密过的字符串','D','nowamagic');
  参数说明:
  $string   :需要加密解密的字符串
  $operation:判断是加密还是解密:E:加密   D:解密
  $key      :加密的钥匙(密匙);
 * ******************************************************************* */

function encrypt($string, $operation, $key = 'motherdemo')
{
    $key = md5($key);
    $key_length = strlen($key);
    $string = $operation == 'D' ? base64_decode($string) : substr(md5($string . $key), 0, 10) . $string;
    $string_length = strlen($string);
    $rndkey = $box = array();
    $result = '';
    for ($i = 0; $i <= 255; $i++) {
        $rndkey[$i] = ord($key[$i % $key_length]);
        $box[$i] = $i;
    }
    for ($j = $i = 0; $i < 256; $i++) {
        $j = ($j + $box[$i] + $rndkey[$i]) % 256;
        $tmp = $box[$i];
        $box[$i] = $box[$j];
        $box[$j] = $tmp;
    }
    for ($a = $j = $i = 0; $i < $string_length; $i++) {
        $a = ($a + 1) % 256;
        $j = ($j + $box[$a]) % 256;
        $tmp = $box[$a];
        $box[$a] = $box[$j];
        $box[$j] = $tmp;
        $result .= chr(ord($string[$i]) ^ ($box[($box[$a] + $box[$j]) % 256]));
    }
    if ($operation == 'D') {
        if (substr($result, 0, 10) == substr(md5(substr($result, 10) . $key), 0, 10)) {
            return substr($result, 10);
        } else {
            return '';
        }
    } else {
        return str_replace('=', '', base64_encode($result));
    }
}
/**
 * 判断是否有分页
 *
 * @param integer $offset 下标
 * @param integer $num 取几个,构造SQL语句时候,我们生成如下形式: LIMIT $offset,$num
 * @param integer $total 总数
 * @return boolean $hasNext true|false
 */
function getHasNext($num, $total) {
    $hasNext = false;
    if ($total > $num)
        $hasNext = true;

    return $hasNext;
}
/**
 * 循环创建目录
 * @access public
 * @return string
 */
function mkdirs($dir,$mode=0777){
    $dir=dirname($dir);
    if(is_dir($dir)||@mkdir($dir,$mode)){
        return true;
    }
    if(!mkdirs(dirname($dir),$mode)){
        return false;
    }
    return @mkdir($dir,$mode);
}
function activityEnd()
{
    if(strtotime(date("YmdHis"))>strtotime(endtime))
    {
       return false;
    }
    return true;
}
function weixinAuth()
{
    global $pdo;
    $log = new CLog('wexinauth.php');
    $code = isset($_GET['code']) ? $_GET['code'] : "";
    $state = isset($_GET['state']) ? $_GET['state'] : "";
    if(!isset($_GET['code'])|| empty($code)|| $state!="whiteshirt")
    {
        return true;
    }
    $log->debug("AUTH 授权获取用户信息");
    $log->debug($_GET);
    $access_token_url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=" . APPID . "&secret=" . APPSECRET . "&code=" . $code . "&grant_type=authorization_code";
    //请求获取参数
    $access_token = get($access_token_url);
    $log->debug('url=' . $access_token_url . ' oauth2/access_token返回值' . $access_token);
    $access_token = json_decode($access_token);
    $openid = $access_token->openid;
    //将用户信息写入cookie 或者session
    set_cookie(array('openId' => $openid->openid));
    session_start();
    set_session("openId", $openid);
    session_write_close();
    //根据openid和accessToken获取用户新
    $getUserInfoUrl = 'https://api.weixin.qq.com/sns/userinfo?access_token=' . $access_token->access_token . '&openid=' . $openid . '&lang=zh_CN';
    $userInfo = get($getUserInfoUrl);
    $log->debug("url=" . $getUserInfoUrl . " AUTH授权获取用户信息" . $userInfo);
    $weixinUser = json_decode($userInfo);
    if (!isset($userInfo->errcode)) {
        //判断该用户信息是否存在，如果存在就不插入
        $sql="SELECT * FROM member where openid='{$weixinUser->openid}'";
        $customerInfo=$pdo->query($sql,"find");
        if(!$customerInfo)
        {
            $time=date("Y-m-d H:i:s");
            $sql = "insert into member(openid,nickname,sex,province,city,country,headimgurl,createtime) ";
            $sql .= " values('{$weixinUser->openid}','{$weixinUser->nickname}','{$weixinUser->sex}','{$weixinUser->province}','{$weixinUser->city}','{$weixinUser->country}','{$weixinUser->headimgurl}','{$time}')";
            $userId = $pdo->query($sql, 'insert');
            if($userId)
            {
                //将用户信息写入cookie 或者session
                set_cookie(array('member_id' => $userId));
                session_start();
                set_session("member_id",$userId);
                session_write_close();
            }
        }
    }
//    header("Location:".WEB_URL."index.php?type=wchat");
//    exit;
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