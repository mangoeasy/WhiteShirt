<?php /* Smarty version Smarty-3.1.15, created on 2015-10-23 21:48:47
         compiled from "E:\www\src2\trunk\BPO\WhiteShirt\templates\header.html" */ ?>
<?php /*%%SmartyHeaderCode:1954556051b75a73c30-23752234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68c0775c472a8ca799e2b4bb2f750c062b032e88' => 
    array (
      0 => 'E:\\www\\src2\\trunk\\BPO\\WhiteShirt\\templates\\header.html',
      1 => 1445608096,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1954556051b75a73c30-23752234',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56051b75ae0c10_21913235',
  'variables' => 
  array (
    'title' => 0,
    'version' => 0,
    'static_path' => 0,
    'jssdkinfo' => 0,
    'shareComment' => 0,
    'ShareAppMessageUrl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56051b75ae0c10_21913235')) {function content_56051b75ae0c10_21913235($_smarty_tpl) {?><!doctype html>
<html class="htmlClass">
<head>
<meta name= "apple-mobile-web-app-capable" content ="yes" />
<meta name= "apple-mobile-web-app-status-bar-style" content= "black" />
<meta http-equiv= "Content-Type" content ="text/html; charset=utf-8" />
<meta http-equiv= 'X-UA-Compatible' content ='IE=EmulateIE7' />
<meta name="viewport" content="width=device-width,  maximum-scale=1.0, minimum-scale=1.0" />
<meta content= "telephone=no" name ="format-detection" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<script type="text/javascript" src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js?v=<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
" language="javascript"></script>
<link href="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
style/global.css?v=<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
" type="text/css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
js/assets/css/cropper.min.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
js/megapix-image.js"></script>
<script type="text/javascript">var styleValue = 1;var version ='<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
';
var static_path = '<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
';</script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
js/exif.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
js/iscroll.js"></script>
 <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
js/assets/js/cropper.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
js/easeljs-0.8.1.min.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
js/tweenjs-0.6.1.min.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
js/movieclip-0.8.1.min.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
js/preloadjs-0.6.1.min.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
js/turn.min.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
js/ann.js"></script>
<script type="text/javascript">

var  jssdk='<?php echo $_smarty_tpl->tpl_vars['jssdkinfo']->value;?>
';
jssdk=eval("(" + jssdk + ")");

var shareComnext = {

		title: '<?php echo $_smarty_tpl->tpl_vars['shareComment']->value['title'];?>
',
        link : '<?php echo $_smarty_tpl->tpl_vars['shareComment']->value['link'];?>
',
        desc :  '<?php echo $_smarty_tpl->tpl_vars['shareComment']->value['desc'];?>
',
        imgUrl : '<?php echo $_smarty_tpl->tpl_vars['shareComment']->value['imgUrl'];?>
'

}
function imageLoad( s ){ 
    var urlset = [], undefined, toString = Object.prototype.toString; 
    switch( toString.apply(s.url) ){ 
        case '[object String]': urlset[urlset.length] = s.url; break; 
        case '[object Array]': if(!s.url.length){ return false; } urlset = s.url; break; 
        case '[object Function]': s.url = s.url(); return imageLoad( s ); 
        default: return false; 
    } 
    var imgset =[], r ={ total:urlset.length, load:0, error:0, abort:0, complete:0, currentIndex:0 }, timer, 
        _defaults = { 
            url:'', 
            onload: 'function', 
            onerror: 'function', 
            oncomplete: 'function', 
            ready: 'function', 
            complete: 'function', 
            timeout: 15 
        }; 
    for( var v in _defaults){ 
        s[v] = s[v]===undefined? _defaults[v]: s[v]; 
    } 
    s.timeout = parseInt( s.timeout ) || _defaults.timeout; 
    timer = setTimeout( _callback, s.timeout*1000); 
    for( var i=0,l=urlset.length,img; i<l; i++){ 
        img         = new Image(); 
        img.loaded    = false; 
        imgset[imgset.length] = img; 
    }    for( i=0,l=imgset.length; i<l; i++){ 
        imgset[i].onload     = function(){ _imageHandle.call(this, 'load', i ); }; 
        imgset[i].onerror     = function(){ _imageHandle.call(this, 'error', i ); }; 
        imgset[i].onabort     = function(){ _imageHandle.call(this, 'abort', i ); }; 
        imgset[i].src         = ''+urlset[i]; 
    } 
    if( _isFn(s.ready) ){ s.ready.call({}, imgset, r); }     
    function _imageHandle( handle, index ){ 
        r.currentIndex = index; 
        switch( handle ){ 
            case 'load': 
                this.onload = null; this.loaded = true; r.load++; 
                if( _isFn(s.onload) ){ s.onload.call(this, r); }     
                break;case 'error': r.error++; 
                if( _isFn(s.onerror) ){ s.onerror.call(this, r); } 
                break; 
            case 'abort': r.abort++; break; 
        } 
        r.complete++; 
        // oncomplete 事件回调 
        if( _isFn(s.oncomplete) ){ s.oncomplete.call(this, r); } 
        // 判断全局加载 
        if( r.complete===imgset.length ){ _callback(); } 
    } 
    function _callback(){ 
        clearTimeout( timer ); 
        if( _isFn(s.complete) ){ s.complete.call({}, imgset, r); } 
    } 
    function _isFn(fn){ return toString.apply(fn)==='[object Function]'; } 
    return true; 
}
//微信分享信息
wx.config({
        debug:false,
        appId:jssdk.appId,
        timestamp:jssdk.timestamp,
        nonceStr: jssdk.nonceStr,
        signature:jssdk.signature,
        jsApiList: [
    // 所有要调用的 API 都要加到这个列表中
    'checkJsApi',
    'onMenuShareTimeline',
    'onMenuShareAppMessage',
    'onMenuShareQQ',
    'onMenuShareWeibo',
    'hideMenuItems',
    'showMenuItems',
    'hideAllNonBaseMenuItem',
    'showAllNonBaseMenuItem',
    'hideOptionMenu',
    'showOptionMenu',
    'closeWindow',

]
});
wx.ready(function () {
    // 1 判断当前版本是否支持指定 JS 接口，支持批量判断
    wx.checkJsApi({
        jsApiList: [
            'closeWindow',
            'hideOptionMenu',
            'onMenuShareAppMessage',
            'onMenuShareTimeline',
        ],
        success: function (res) {
           // alert(JSON.stringify(res));
        }
    });
    //wx.hideOptionMenu();
    //分享到朋友圈
    wx.onMenuShareTimeline({
        title: shareComnext.title, // 分享标题
        link:  <?php if ($_smarty_tpl->tpl_vars['ShareAppMessageUrl']->value) {?>'<?php echo $_smarty_tpl->tpl_vars['ShareAppMessageUrl']->value;?>
'<?php } else { ?>shareComnext.link<?php }?>, // 分享链接
        imgUrl: shareComnext.imgUrl, // 分享图标
        desc: decodeURIComponent(shareComnext.desc), // 分享描述
        success: function () {
        },
        cancel: function () {
            // 用户取消分享后执行的回调函数
        }
    });
    //分享给朋友
    wx.onMenuShareAppMessage({
        title: shareComnext.title, // 分享标题
        link: <?php if ($_smarty_tpl->tpl_vars['ShareAppMessageUrl']->value) {?>'<?php echo $_smarty_tpl->tpl_vars['ShareAppMessageUrl']->value;?>
'<?php } else { ?>shareComnext.link<?php }?>, // 分享链接
        imgUrl:shareComnext.imgUrl, // 分享图标
        desc: decodeURIComponent(shareComnext.desc), // 分享描述
        type: 'link', // 分享类型,music、video或link，不填默认为link
        dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
        success: function (res) {
        },
        cancel: function () {
            // 用户取消分享后执行的回调函数
            // alert("cancel");
        }
    });

});
wx.error(function (res) {
   // alert(res.errMsg);
});
    
</script>
<script>
  
var canvas, stage, exportRoot;

function init() {
	canvas = document.getElementById("canvas");
	images = images||{};

	var loader = new createjs.LoadQueue(false);
	loader.addEventListener("fileload", handleFileLoad);
	loader.addEventListener("complete", handleComplete);
	loader.loadManifest(lib.properties.manifest);
}

function handleFileLoad(evt) {
	if (evt.item.type == "image") { images[evt.item.id] = evt.result; }
}

function handleComplete(evt) {
	exportRoot = new lib.ann();

	stage = new createjs.Stage(canvas);
	stage.addChild(exportRoot);
	stage.update();

	createjs.Ticker.setFPS(lib.properties.fps);
	createjs.Ticker.addEventListener("tick", stage);
}
$(function(){
	var getW = $(window).width();
	$("#canvas").css({width:getW});
	
	//setTimeout(function(){alert(11)},1087*100)
})
/*document.getElementById("CanvasAnimate").addEventListener('touchmove', function (e) { 
     e.preventDefault(); 
}, false);*/
  
</script>
</head>
<?php }} ?>
