<?php /* Smarty version Smarty-3.1.15, created on 2015-10-23 22:55:27
         compiled from "E:\www\src2\trunk\BPO\WhiteShirt\templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:3088056051b75a1c710-97210093%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef6b31da78459894a6d16459c8ce9973a8d5cf2a' => 
    array (
      0 => 'E:\\www\\src2\\trunk\\BPO\\WhiteShirt\\templates\\index.html',
      1 => 1445612061,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3088056051b75a1c710-97210093',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56051b75a63999_48064284',
  'variables' => 
  array (
    'static_path' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56051b75a63999_48064284')) {function content_56051b75a63999_48064284($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
js/main.js"></script>
<div  class="loadingNum" style=" width:100px;   height:50px; position:fixed; left:50%; bottom:15%; margin-left:-50px;  font-size:14px; z-index:999; color:#171e26;  text-align:center; line-height:22px;"><span class="parentLoadingNumber">0</span>%<br>
  加载中...</div>
<Div style="width:100%; min-height:100%; overflow:hidden; opacity:0; -webkit-transform: scale(1,1)"  class="PageDiv1" id="CanvasAnimate">
  <canvas id="canvas" width="640" height="820"></canvas>
</Div>
<div class="PageDiv2" style=" display:none; " id="PageDiv2"> 
  <!--  <Div style="position:fixed; left:0; top:0; width:100%; z-index:0;"><img src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
images/stylebg1.jpg" width="100%" /></Div>-->
  <div style="position:relative; left:0; top:0; z-index:1; width:100%;" id="Page2ActionDiv">
    <div class="book">
      <div class="page"> <img src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
images/kv.jpg" width="100%" />
        <div class="pos" id="StartGameBtn" onClick="StartGame(event)"></div>
        <div class="pos" id="BtnLeftTop" onClick="BookAnimate(1,event)"></div>
        <div class="pos" id="BtnLeftBottom" onClick="BookAnimate(2,event)"></div>
        <div class="pos" id="BtnRightTop" onClick="BookAnimate(4,event)"></div>
        <div class="pos" id="BtnRightBottom" onClick="BookAnimate(3,event)"></div>
      </div>
      <!--发起 宣言 模块-->
      <div class="page"><img src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
images/p4.jpg" width="100%" class="bookpagestyle" /></div>
      <div class="page"><img src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
images/p5.jpg" width="100%"  class="bookpagestyle" /></div>
      <div class="page"><img src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
images/p6.jpg" width="100%"  class="bookpagestyle" /></div>
      
      <!--九大精品购物村 模块-->
      <div class="page"><img src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
images/p7.jpg" width="100%" class="bookpagestyle" /></div>
      <div class="page"><img src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
images/p8.jpg" width="100%" class="bookpagestyle" /></div>
      <div class="page"><img src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
images/p9.jpg" width="100%"  class="bookpagestyle" /></div>
      <div class="page"><img src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
images/p10.jpg" width="100%"  class="bookpagestyle" /></div>
      <div class="page"><img src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
images/p11.jpg" width="100%"  class="bookpagestyle" /></div>
      
      <!--玩转-->
      <div class="page"><img src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
images/p1.jpg" width="100%"  class="bookpagestyle" /></div>
      <div class="page"><img src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
images/p2.jpg" width="100%"  class="bookpagestyle" /></div>
      <div class="page"><img src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
images/p3.jpg" width="100%"  class="bookpagestyle" /></div>
      
      <!--那些事儿-->
      
      <div class="page"><img src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
images/nabg.jpg" width="100%"  class="bookpagestyle1" />
        <div class="Ckwenz"> <img src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
images/txt1.jpg" width="100%"  /> </div>
      </div>
      <div class="page"><img src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
images/nabg.jpg" width="100%"  class="bookpagestyle1" />
        <div class="Ckwenz"> <img src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
images/txt2.jpg" width="100%"  /> </div>
      </div>
      <div class="page"><img src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
images/nabg.jpg" width="100%"  class="bookpagestyle1" />
        <div class="Ckwenz"> <img src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
images/txt3.jpg" width="100%"  /> </div>
      </div>
      <div class="page"><img src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
images/nabg.jpg" width="100%"  class="bookpagestyle1" />
        <div class="Ckwenz"> <img src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
images/txt4.jpg" width="100%"  /> </div>
      </div>
      <div class="page"><img src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
images/nabg.jpg" width="100%"  class="bookpagestyle1" />
        <div class="Ckwenz"> <img src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
images/txt5.jpg" width="100%"  /> </div>
      </div>
      <div class="page"><img src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
images/nabg.jpg" width="100%"  class="bookpagestyle1" />
        <div class="Ckwenz"> <img src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
images/txt6.jpg" width="100%"  /> </div>
      </div>
      <div class="page"><img src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
images/nabg.jpg" width="100%"  class="bookpagestyle1" />
        <div class="Ckwenz"> <img src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
images/txt7.jpg" width="100%"  /> </div>
      </div>
      <div class="page"><img src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
images/nabg.jpg" width="100%"  class="bookpagestyle1" />
        <div class="Ckwenz"> <img src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
images/txt8.jpg" width="100%"  /> </div>
      </div>
      <div class="page"><img src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
images/nabg.jpg" width="100%"  class="bookpagestyle1" />
        <div class="Ckwenz"> <img src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
images/txt9.jpg" width="100%"  /> </div>
      </div>
      <div class="page"><img src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
images/nabg.jpg" width="100%"  class="bookpagestyle1" />
        <div class="Ckwenz"> <img src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
images/txt10.jpg" width="100%"  /> </div>
      </div>
    </div>
  </div>
  <div style="padding-top:5px; position:relative; z-index:1;"><img src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
images/europelogo.png" width="100%" /></div>
</div>
<div class="PageDiv3" style=" opacity:0; min-height:100%;"> 
  <!--<Div style="position:fixed; left:0; top:0; width:100%; z-index:0;"><img src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
images/stylebg1.jpg" width="100%" /></Div>-->
  <div style="position:relative; left:0; top:0; z-index:1; width:100%;">
    <div class="EditDiv">
      <div id="img-container" class="avatar-view" style="width:100%; position:absolute; left:0; top:0; z-index:88;"> <img  src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
images/icon.jpg"  width="100%" class="imgIcon"/></div>
    </div>
    <div style=" clear:both;  background-color:rgba(255,255,255,0.5); position:fixed; left:0; width:100%; bottom:0; padding:10px 0; z-index:99" id="comCanvasBox"> 
      
      <!-- <div style="font-size:13px; color:#ff0000; text-align:center; line-height:22px; ">请点击选择以下您喜欢的封面</div>-->
      <Div class="SelectStyleDiv">
        <input type="hidden" value="1" id="CoverStyle" />
        <div class="SelectStyleLi SelectCur" onClick="SelectCover(1)"><img src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
images/styleicon1.png" width="100%" style="display:block" /></div>
        <div class="SelectStyleLi" onClick="SelectCover(2)"><img src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
images/styleicon2.png" width="100%" style="display:block"  /></div>
        <div class="SelectStyleLi" onClick="SelectCover(3)"><img src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
images/styleicon3.png" width="100%"  style="display:block" /></div>
        <div class="SelectStyleLi" onClick="SelectCover(4)" style="margin-right:0;"><img src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
images/styleicon4.png" width="100%" style="display:block"  /></div>
        <div style="height:1px; overflow:hidden; clear:both;"></div>
      </Div>
      <form class="avatar-form" action="uploadFile.php" enctype="multipart/form-data" method="post" target="iframe">
        <div style=" clear:both; overflow:hidden; margin:0 5%; padding-top:5px;  ">
          <Div style=" width:40%; float:left; margin-left:5%; position:relative">
            <input class="avatar-src" name="avatar_src" type="hidden" value="">
            <input class="avatar-data" name="avatar_data" type="hidden" id="avatar_data" value="">
            <img src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
images/uploadbtn.jpg" width="100%" >
            <input class="avatar-input" id="avatarInput" name="avatar_file"    type="file" accept="image/*" style="display:block; position:absolute;left:0px; cursor:pointer; opacity:0;top:0;height:50px;z-index:10;width:100%;">
          </Div>
          <Div style="width:40%;  float:left; margin-left:5%"  id="download" ><img src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
images/savejpg.jpg" width="100%" ></Div>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="PageDiv4" style="display:none;  min-height:100%;"> 
  <!--  <Div style="width:100%; overflow:hidden;" id="Page4Bg"><img src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
images/stylebg1.jpg" width="100%" style="display:block;" /></Div>-->
  <div style="position:relative; left:0; top:0; z-index:1; width:100%;">
    <div style=" width:80%; margin-left:auto; margin-right:auto; "id="CanvasResult"></div>
    <!--    <div style="margin-top:10px;"><img src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
images/bowsertext.png" width="100%"></div>-->
    <Div style="width:80%; margin-left:auto; margin-right:auto; overflow:hidden;">
      <Div style=" width:48%; margin-right:2%; float:left; height:32px; position:relative;">
        <div style="width:32px; line-height:30px; font-size:12px; position:absolute; left:0; top:0; font-weight:bold;">姓名</div>
        <div style="margin-left:32px; border-bottom:1px solid rgba(0,0,0,0.2);">
          <input type="text" id="userName" value="" style="width:100%; border:0; background:0; height:30px; line-height:30px; font-size:12px; color:#000;" />
        </div>
      </Div>
      <Div style=" width:48%; margin-left:2%;float:left; height:32px; position:relative;">
        <div style="width:32px; line-height:30px; font-size:12px; position:absolute; left:0; top:0; font-weight:bold;">手机</div>
        <div style="margin-left:32px; border-bottom:1px solid rgba(0,0,0,0.2);">
          <input type="tel" id="phone" value="" style="width:100%; border:0; background:0; height:30px; line-height:30px; font-size:12px; color:#000;" />
        </div>
      </Div>
      <div style=" clear:both; overflow:hidden;  padding-top:16px; padding-bottom:6px;  ">
        <Div style=" width:45%; float:left; margin-right:5%" onClick="EditCanvas()"><img src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
images/editbtn.png" width="100%" ></Div>
        <Div style="width:45%;  float:left; margin-left:5%" onClick="submitData(event)"><img src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
images/submitbtn.png" width="100%" ></Div>
      </div>
    </Div>
  </div>
</div>
<div class="popup" style="display: none;" onClick="$('.popup').hide()">
  <div style="width:12%; position:absolute; right:30px; top:30px;"><img src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
images/closetips.png" width="100%" /></div>
  <div class="imgShow" style="width:40%"><img src="<?php echo $_smarty_tpl->tpl_vars['static_path']->value;?>
images/shoushi.png" width="100%"></div>
</div>
<div style="position:absolute; left:0; top:0; display:none;" id="IosCanvas">
  <canvas id="resultCanvas2"></canvas>
</div>
<input type="hidden" value="0" id="IsUploadImage" />
<input type="hidden" value="" id="HashPrevLocation" />
 
<script type="text/javascript">

var styleValue = 1; 
var canvas640; 
var $book;
var $backTag;
var nStartX, nChangX, pageIndex = 1, isPlayIndex = false,pageType; 

function LoadInit(){
	var Ww = $(window).width();
	var EH = (Ww/640) *850;
	$(".EditDiv,#img-container").css({width:Ww, height:EH});
	$(".cropper-modal").css({width:Ww});
	$("#CanvasResult").css({width:Ww*0.9,"padding-top":Ww*0.05})
	
}
function SelectCover(index){
	$(".cropper-modal").css({'background-image':'url(images/style'+index+'.png)'});
	$(".SelectStyleLi").removeClass('SelectCur');
	$(".SelectStyleLi").eq(index-1).addClass('SelectCur');
	//$("#Page4Bg").html('<img src="{$static_path}images/stylebg'+index+'.jpg" width="100%" />');
	//$(".PageDiv4").css({background:'url(images/stylebg'+index+'.jpg) no-repeat left top', 'background-size':'100% 100%'});
	//$("#CoverStyle").val(index);
	styleValue = index; 
}

imageLoad( { 
		url:function(v){ 
		v = [static_path+'images/p1.jpg',static_path+'images/p2.jpg',static_path+'images/p3.jpg',static_path+'images/p4.jpg',static_path+'images/p5.jpg',static_path+'images/p6.jpg',static_path+'images/p7.jpg',static_path+'images/p8.jpg',static_path+'images/p9.jpg',static_path+'images/p10.jpg',static_path+'images/p11.jpg',static_path+'images/close.png',static_path+'images/covergirlbtn.png',static_path+'images/editbtn.png',static_path+'images/followtxt.png',static_path+'images/gzh.png',static_path+'images/icon.jpg',static_path+'images/kv.jpg',static_path+'images/savejpg.jpg',static_path+'images/share.png',static_path+'images/startbtn.png',static_path+'images/style1.png',static_path+'images/style2.png',static_path+'images/style3.png',static_path+'images/style4.png',static_path+'images/stylebg1.jpg',static_path+'images/styleicon1.png',static_path+'images/styleicon2.png',static_path+'images/styleicon3.png',static_path+'images/styleicon4.png',static_path+'images/submitbtn.png',static_path+'images/uploadbtn.jpg',static_path+'images/dddd.png',static_path+'images/dfgfsg.jpg',static_path+'images/dfgwf.jpg',static_path+'images/dfhgw.jpg',static_path+'images/dhgw34gb.png',static_path+'images/dsfgwg.jpg',static_path+'images/dsfgwrg.jpg',static_path+'images/sdfsfg.png',static_path+'images/sdgwrg.jpg',static_path+'images/wwwdgsg.jpg',static_path+'images/wrgtw2r.jpg',static_path+'images/txtpng.png',static_path+'images/nabg.jpg',static_path+'images/txt1.jpg',static_path+'images/txt2.jpg',static_path+'images/txt3.jpg',static_path+'images/txt4.jpg',static_path+'images/txt5.jpg',static_path+'images/txt6.jpg',static_path+'images/txt7.jpg',static_path+'images/txt8.jpg',static_path+'images/txt9.jpg',static_path+'images/txt10.jpg'];
				return v; 
		}, 
		oncomplete: function(s){ 
			var fid = parseInt((s.complete/s.total)*100);
			
			$(".parentLoadingNumber").html(fid);
			
		//	$('#status').html( '正在加载...'+s.complete+'/'+s.total); 
		//$('#processing').html(this.src); 
		}, 
		complete:function(imgs, s){ 
	
			$(".loadingNum").hide();
		
				$(".PageDiv3").hide();
				$(".PageDiv1").animate({opacity:1},800);
				
				init();
				var getW = $(window).width();
				var  dwenz = getW/640 *510;
				 var ftop =  getW/640 *80;
				  var fleft=  getW/640 *68;
				  var fheight =  getW/640 *727;
				$(".Ckwenz").css({width:dwenz,height:fheight,top:ftop,left:fleft});
		
			document.getElementById('PageDiv2').addEventListener("touchstart",function(e){
					nStartX = e.targetTouches[0].pageX;	
				
			})
			document.getElementById('PageDiv2').addEventListener('touchmove', function(event) {					
		 if (event && event.preventDefault) {event.preventDefault();  } }, false);
			document.getElementById('PageDiv2').addEventListener("touchend",function(e){
						nChangX = e.changedTouches[0].pageX;
						var sum = nStartX-nChangX ;
						if(isPlayIndex == false){
							return false;	
						}
						var ofcc = true;
						if(pageType==1 || pageType==2 || pageType==3 || pageType==4){
							ofcc = false;
						}
						if(ofcc){
							return;	
						}
				//		console.log('当前页数:'+pageIndex);
						if(pageIndex == 1){
							return false;	
						}
						if(sum>30){
							if(pageType == 1){
								if(pageIndex == 4){
									return false;	
								}
							}
							
							if(pageType == 2){
								if(pageIndex == 9){
									return false;	
								}
							
							}
							if(pageType == 3){
								if(pageIndex == 12){
									return false;	
								}
							}
							if(pageType == 4){
								if(pageIndex == 22){
									return false;	
								}
							}
							pageIndex++;
							PlayBookAnimate(pageIndex);	 	
						}
						
					  if(sum<-30){
						  	if(pageType == 1){
								if(pageIndex == 1){
									isPlayIndex = false;
									return false;	
								}	
							}
							if(pageType == 2){
								if(pageIndex == 5){
									pageIndex = 2; 	
								}
							}
							if(pageType == 3){
								if(pageIndex == 10){
									pageIndex = 2; 	
								}
							}
							if(pageType == 4){
								if(pageIndex == 13){
									pageIndex = 2; 	
								}
							}
							
							pageIndex--;
							PlayBookAnimate(pageIndex);	 
					}
						
			})
		}
			
	});
function PlayBookAnimate(num){
	$book.turn('disable', false).turn('page',num).turn('disable',true);	
	if(num!=1){
		var jhash = location.hash;
		if(jhash != "#indexpage"){
				location.hash = 'indexpage';
				$("#HashPrevLocation").val('indexpage');	
		}
	}
}
function BookAnimate(number,e){
	pageIndex = 1; 
	isPlayIndex = true;
	pageType = number;
	if(number == 1){
		 pageIndex++;
		 PlayBookAnimate(pageIndex);
	}
	if(number == 2){
		 pageIndex = 5;
		 PlayBookAnimate(pageIndex);
	}
	if(number == 3){
		 pageIndex = 10;
		 PlayBookAnimate(pageIndex);
	}
	if(number == 4){
		 pageIndex = 13;
		 PlayBookAnimate(pageIndex);
	}
	e.stopPropagation();
}
function Page2(){
	
//	if(PAni){clearInterval(PAni);}
	$(".PageDiv1").hide();
	$(".PageDiv2").show();
	//$("#Page2Text").show();
	//Page2Animate1();
	var getWinw = $(window).width();
	var divH =ReturnAP(getWinw);
	$("#Page2ActionDiv").css({height:divH,width:getWinw});
	var startBtn = {width:306,height:110,left:317,top:671};
	$("#StartGameBtn").css({width:ReturnAPForWw(startBtn.width),height:ReturnAPForWw(startBtn.height),left:ReturnAPForWw(startBtn.left),top: ReturnAPForWw(startBtn.top)});
	var BtnLeftTop = {width:265,height:78,left:28,top:354};
	var BtnLeftBottom = {width:265,height:78,left:28,top:445};
	var BtnRightTop = {width:242,height:88,left:380,top:354};
	var BtnRightBottom= {width:208,height:88,left:414,top:460};
	$("#BtnLeftTop").css({width:ReturnAPForWw(BtnLeftTop.width),height:ReturnAPForWw(BtnLeftTop.height),left:ReturnAPForWw(BtnLeftTop.left),top: ReturnAPForWw(BtnLeftTop.top)});
	$("#BtnLeftBottom").css({width:ReturnAPForWw(BtnLeftBottom.width),height:ReturnAPForWw(BtnLeftBottom.height),left:ReturnAPForWw(BtnLeftBottom.left),top: ReturnAPForWw(BtnLeftBottom.top)});
	$("#BtnRightTop").css({width:ReturnAPForWw(BtnRightTop.width),height:ReturnAPForWw(BtnRightTop.height),left:ReturnAPForWw(BtnRightTop.left),top: ReturnAPForWw(BtnRightTop.top)});
	$("#BtnRightBottom").css({width:ReturnAPForWw(BtnRightBottom.width),height:ReturnAPForWw(BtnRightBottom.height),left:ReturnAPForWw(BtnRightBottom.left),top: ReturnAPForWw(BtnRightBottom.top)});
	location.hash = "index";
}
function ReturnAP(num){
	return (num / 640) * 862
}
function ReturnAPForWw(num){
	return (num / 640) * $(window).width();
}


var c = 0; 

function StartGame(e){
	backFlase = true; 
	$(".PageDiv2").hide();
	$(".PageDiv3").css("opacity",1).show();
	$(".popup").show();
	location.hash = "#startgame"
	$("#HashPrevLocation").val('')
	e.stopPropagation();	
}
function EditCanvas(){
		$(".PageDiv4").hide();	
		$(".PageDiv3").show();	
		location.hash = "#startgame"

}
function submitData(e){
		
		e.stopPropagation();
	if(canvas640 == ""){
		alert('封面为空哦！');
		return false; 	
	}	
	var userName = $.trim($("#userName").val());
	var phone = $.trim($("#phone").val());
	if(userName == ""){
		alert('姓名不能为空哦！');
		return false; 	
	}
	if(phone == ""){
		alert('手机不能为空哦！');
		return false; 	
	}
	if(!checkMobile(phone)){
		alert('手机号码不正确哦！');
		return false; 		
	}
		$.ajax({
				type:'post',
				url:"upload.php",
				dataType:"json",
				data: {
					userName: userName, 
					phone: phone,
					data: canvas640
				},
                beforeSend:function(){
                    $(".loading").show();
                    $("#loadingtips").html("上传中...");
                },
				success: function(data) {
                    $(".loading").hide();
                    if(data.rsp){
                       location.href="sharePage.php?id="+data.id+"&uid="+data.uid;
                    }else{
                        alert(data.errorMsg);
                        return false;
                    }
				},
				error: function(data) {}
			});
}

function checkMobile(value){
    if (value != "") {
        var reg = /^1[3,4,5,7,8]{1}[0-9]{1}[0-9]{8}$/;
        if (value.match(reg) == null) {
            return false;
        }
    }
    else {
        return false;
    }
    return true;
}
	function loaded() {
			
				myScroll = new iScroll('wrapperScroll', { useTransition:false });
				myScroll2 = new iScroll('wrapperScroll2', { useTransition:false });
		}	
		
	var myScroll, myScroll2; 
		function shareBox(class1,class2){
			
			$(class1).show();
			$(class2).animate({'bottom':'0'},800);
			myScroll.refresh();
			myScroll2.refresh();
		}
		function closeShare(class1,class2){	
			$(class2).animate({'bottom':-($(window).height()-20)},500,function(){$(class1).hide();});
		}

var backFlase = false; 
window.onpopstate=function(event){
	var hash = location.hash; 
	//alert(backFlase)
	if(hash == "#index"){
		if(backFlase == false){
			return;	
		}
		if($("#HashPrevLocation").val() == "indexpage"){
			isPlayIndex = false;
			PlayBookAnimate(1);	
			return;		
		}
		$(".popup").hide();
		$("div[class^=PageDiv]").hide();
		Page2();	
	
	}
	if(hash =="#startgame"){
		//$(".popup").show();
		if(backFlase == false){
			return;	
		}
		$("div[class^=PageDiv]").hide();
		$(".PageDiv3").show();		
	}
	if(hash =="#bowserpage"){
		if(backFlase == false){
			$("div[class^=PageDiv]").hide();
			homeScreenFunction();
			return false;
		}
		$("div[class^=PageDiv]").hide();
		$(".PageDiv4").show();	
	}
	
	if(hash == "#indexpage"){
		if(backFlase == false){
			return;	
		}
		//alert(hash);
		
		
	}
}
function IndexAnimateFinish(){
	$("#CanvasAnimate").addClass('animateScaleBig');
	
	setTimeout(function(){
			backFlase = true;
			homeScreenFunction();
		},2000)	
	
}
function homeScreenFunction(){
	$("html").removeClass('htmlClass');
		Page2();
		LoadInit();
		
		$book = $('#Page2ActionDiv .book').turn({
							display: "single",
							autoCenter: true
		});
		$book.turn("disable", true);
}
</script>
<iframe name="iframe" style="display: none"></iframe>

<?php echo $_smarty_tpl->getSubTemplate ("loading.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<?php }} ?>
