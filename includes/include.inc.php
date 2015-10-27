<?php
session_start();
define('VERSION','2015-9-30'); //当前版本
define('ROOT_PATH', dirname(dirname(__file__))."/");
date_default_timezone_set("PRC");    		 //设置时区（中国）
include_once (ROOT_PATH . 'includes/config.inc.php');
include_once (ROOT_PATH . 'lib/smarty/Smarty.class.php');
include_once (ROOT_PATH . 'lib/CLog.php');
include_once (ROOT_PATH . 'lib/db.class.php');
include_once (ROOT_PATH . 'lib/debug.class.php');
include_once (ROOT_PATH . 'lib/dpdo.class.php');
include_once (ROOT_PATH . 'lib/http.class.php');
include_once (ROOT_PATH . 'includes/jssdk.php');
include_once (ROOT_PATH . 'includes/public.function.php');
include_once (ROOT_PATH . 'functionList.php');
include_once (ROOT_PATH . 'includes/param.php');
include_once('param.php');
$smarty = new smarty();
$smarty->template_dir = ROOT_PATH . 'templates';
$smarty->compile_dir = ROOT_PATH . 'compile/templates_c';
$smarty->config_dir = ROOT_PATH . 'compile/configs';
$smarty->cache_dir = ROOT_PATH . 'compile/cache';
$baseParam = array();
$baseParam['openId'] = getOpenId();
$baseParam['weixinId'] = getWeixinId();
$baseParam['prefix'] =PREFIX;
$baseParam['weburl'] =WEB_URL;
//变量映射
$smarty->assign('version',VERSION);
$smarty->assign("title","白衬衫宣言");
$smarty->assign("jssdkinfo",getJssdkInfo());
$smarty->assign("baseParam",$baseParam);
$smarty->assign("shareComment",$param['shareComment']);
$smarty->assign("static_path",STATICS_PATH);
//实例化数据库对象
$pdo=new Dpdo();
$pdo->query("set names utf8","other");