<?php

/**
 * json api 调用操作类 
 */
//header("Content-type: text/html; charset=utf-8"); 
class JSONServer {

    private static $apiServerType;
    private $server_url;

    /**
     * Initialize a JSON Server proxy
     */
    function __construct() {

        $type = self::$apiServerType;

        if (($type !== JSONAPI_WEIXIN)) {
            throw new Exception("JSONAPI TYPE setting error");
        }
        $this->server_url = JSON_API_URL;
    }

    public static function setApiServerType($type) {
        if (($type !== JSONAPI_WEIXIN)) {
            throw new Exception("JSONAPI TYPE setting error");
        }

        self::$apiServerType = $type;
    }

    /**
     * Send json request to server, and return the decoded json data array
     * If $json_data doesn't match spec definition, an exception will be thrown. For data format, please visit dev wiki
     * @param array $json_data json request data array.
     * @param boolean $returnArr if the returned the data is array or object. default is array
     * @return return false if failed. return decoded json data array response if success.
     */
    function call($json_data, $returnArr = TRUE) {

        //mandatory fields: ua, cmd
        if (!is_array($json_data)) {
            throw new Exception("json_data data format error - not a array");
        }

        if (!isset($json_data ['route'])) {
            throw new Exception("json_data data format error - cmd field is missing");
        }

        $content = "cmd=" . urlencode(json_encode($json_data));
        //connect json server and make request/response

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->server_url . (isset($_GET['profile']) ? '?XDEBUG_PROFILE=1' : ''));
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $content);
        curl_setopt($ch, CURLOPT_HEADER,'Content-Type: application/json');  
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $rsp = curl_exec($ch);
        curl_close($ch);
//		if (substr( $rsp, 0, 3 ) == "\xEF\xBB\xBF" ){   
//    		$rsp=substr_replace( $rsp, '', 0, 3 ) ;   
//		}  
//        var_dump($rsp);exit;
        $ret = json_decode($rsp, $returnArr);
        if ($ret == null) {
            $ret = $rsp;
        }
        return $ret;
    }

}
?>