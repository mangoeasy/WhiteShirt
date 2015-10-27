<?php
class JSSDK {
  private $appId;
  private $appSecret;

  public function __construct($appId, $appSecret) {
    $this->appId = $appId;
    $this->appSecret = $appSecret;
  }

  public function getSignPackage() {
      $log  = new Clog('getSignPackage');
    $jsapiTicket = $this->getJsApiTicket();
    $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $log->debug('加密用的url:'.$url);
    $timestamp = time();
    $nonceStr = $this->createNonceStr();

    // 这里参数的顺序要按照 key 值 ASCII 码升序排序
    $string = "jsapi_ticket=$jsapiTicket&noncestr=$nonceStr&timestamp=$timestamp&url=$url";

    $signature = sha1($string);

    $signPackage = array(
      "appId"     => $this->appId,
      "nonceStr"  => $nonceStr,
      "timestamp" => $timestamp,
      "url"       => $url,
      "signature" => $signature,
      "rawString" => $string
    );
//    $log->debug('获取appid');
//    $log->debug($signPackage);
    return $signPackage; 
  }

  private function createNonceStr($length = 16) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $str = "";
    for ($i = 0; $i < $length; $i++) {
      $str .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
    }
    return $str;
  }

  public  function getJsApiTicket() {
    // jsapi_ticket 应该全局存储与更新，以下代码以写入到文件中做示例
    $data = json_decode(file_get_contents(ROOT_PATH . 'runtime' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR ."jsapi_ticket.json"));
    if ($data->expire_time < time()) {
      $accessToken = $this->getAccessToken();
      $url = "https://api.weixin.qq.com/cgi-bin/ticket/getticket?type=jsapi&access_token=$accessToken";
      $result =  Http::httpGet($url);
      $result = $result['content'];
      $res = json_decode($result);
      $ticket = $res->ticket;
      if ($ticket) {
        $data->expire_time = time() + 7000;
        $data->jsapi_ticket = $ticket;
        $fp = fopen(ROOT_PATH . 'runtime' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR ."jsapi_ticket.json", "w");
        fwrite($fp, json_encode($data));
        fclose($fp);
      }
    } else {
      $ticket = $data->jsapi_ticket;
    }

    return $ticket;
  }

  public function getAccessToken() {
    // access_token 应该全局存储与更新，以下代码以写入到文件中做示例
    $data = json_decode(file_get_contents(ROOT_PATH . 'runtime' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR ."access_token.json"));
    if ($data->expire_time < time()) {
      $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$this->appId&secret=$this->appSecret";
     $result =  Http::httpGet($url);
     $result = $result['content'];
      $res = json_decode($result);
      $access_token = $res->access_token;
      if ($access_token) {
        $data->expire_time = time() + 7000;
        $data->access_token = $access_token;
        $fp = fopen(ROOT_PATH . 'runtime' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR ."access_token.json", "w");
        fwrite($fp, json_encode($data));
        fclose($fp);
      }
    } else {
      $access_token = $data->access_token;
    }
    return $access_token;
  }
  private function httpGet( $url, $cookie='' )
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
}

