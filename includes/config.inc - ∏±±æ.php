<?php
/**
 * 配置信息
 * Created by config.inc.php.
 * User: jerry.yang@5adian.com
 * Date: 2015/5/4
 * Time: 10:46
 */
//测试openid 和微信ID
define('DSN','mysql:host=192.168.1.254;dbname=whiteshrIt;charset=utf8');//测试地址
define('USER','root');
define('PASS','123456');

define('WEB_URL',"http://192.168.1.114/src2/trunk/BPO/WhiteShirt/");
define('PREFIX','dev_whiteshirt'); //cookie等前缀
define('DEBUG','1'); //开启调试 0 否 1 是
//测试  遍享5A活动
define('APPID','wxa854e974d35e6dfa');
define('APPSECRET','c6696ae15cfcd90bff48519e43345cda');
//define('STATICS_PATH','http://cdn.5adian.com/meteor/');
define('STATICS_PATH','');

//日志记录配置
if(defined("DEBUG") && DEBUG==1){
	error_reporting(E_ALL ^ E_NOTICE);   //输出除了注意的所有错误报告
	ini_set('display_errors', 'On'); 		//屏蔽错误输出
}else{
	ini_set('display_errors', 'Off'); 		//屏蔽错误输出
	ini_set('log_errors', 'On');             	//开启错误日志，将错误报告写入到日志中
	ini_set('error_log', ROOT_PATH.'runtime/error_log'); //指定错误日志文件

}
$logconfig = array(
		'log_file_name' => ROOT_PATH . 'runtime' . DIRECTORY_SEPARATOR . 'logs' . DIRECTORY_SEPARATOR .'%s.txt',
		'levels' => array(0 => 'debug', 1 => 'info', 2 => 'warn', 3 => 'error'),
		'log_level' =>0,
		'trace' => 0,
);