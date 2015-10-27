/*对象key值转换*/
String.prototype.replaceAll = function(reallyDo, replaceWith, ignoreCase) {  
    if (!RegExp.prototype.isPrototypeOf(reallyDo)) {  
        return this.replace(new RegExp(reallyDo, (ignoreCase ? "gi": "g")), replaceWith);  
    } else {  
        return this.replace(reallyDo, replaceWith);  
    }  
}  
function keyConversion(returnDataObj,returnDataKey,ApiDataArrKey){
	var  returnDataString = JSON.stringify(returnDataObj);

	if(returnDataKey.length > 0 ){
		for(var i = 0; i< returnDataKey.length; i++){
			returnDataString  = returnDataString.replace(eval('/\"'+returnDataKey[i]+'\"/gi'),'"'+ApiDataArrKey[i]+'"');
		}
	}

	//console.log(returnDataString);
	return JSON.parse(returnDataString);
}
function datagridheight(idOrClass,jd){
	if(!jd){jd = 30}
		var h = $(window).height() - $("#header").height() - jd;
		$(idOrClass).css("height",h);
	
}

function percentWidth(num,id){
	if(id){
	var getPerCentDivWinth = $("#"+id).width();
	return getPerCentDivWinth*num;	
		}else{
   	var getPerCentDivWinth = $("#PerCentDiv").width();
	return getPerCentDivWinth*num;
	}
}
/* 
 用途：检查输入字符串是否为空或者全部都是空格
 输入：str
 返回：如果全是空返回true,否则返回false
 */
function isNull(str){
	if(str == undefined) return true;
    if (str != null) {
        str = $.trim(str);
    }else {
    	return true;
    }
    if (str == "") 
        return true;
    var regu = "^[ ]+$";
    var re = new RegExp(regu);
    return re.test(str);
}

/* 
 用途：检查输入对象的值是否符合整数格式
 输入：str 输入的字符串
 返回：如果通过验证返回true,否则返回false
 */
function isInteger(str){
    var regu = /^[-]{0,1}[0-9]{1,}$/;
    return regu.test(str);
}

/* 
 用途：检查输入字符串是否符合正整数格式
 输入：
 s：字符串
 返回：
 如果通过验证返回true,否则返回false
 */
function isNumber(s){
    var regu = "^[0-9]+$";
    var re = new RegExp(regu);
    if (s.search(re) != -1) {
        return true;
    }
    else {
        return false;
    }
}

/* 
 用途：数字是正整数，验证数量
 输入：str：字符串
 返回：如果通过验证返回true,否则返回false
 */
function checkNum(NUM){
    if (isNull(NUM)) {
        return false;
    }
    var mem_value = NUM;
    for (var i = 0; i < mem_value.length; i++) {
        if (mem_value.charAt(i) < '0' || mem_value.charAt(i) > '9') {
            return false;
        }
    }
    if (mem_value.charAt(0) == '0') {
        return false;
    }
    return true;
}


/* 
 用途：检查输入字符串是否是带小数的数字格式,可以是负数
 输入：str：字符串
 返回：如果通过验证返回true,否则返回false
 */
function isDecimal(str){
    if (isInteger(str)) 
        return true;
    var re = /^[-]{0,1}(\d+)[\.]+(\d+)$/;
    if (re.test(str)) {
        if (RegExp.$1 == 0 && RegExp.$2 == 0) 
            return false;
        return true;
    }
    else {
        return false;
    }
}

/* 
 用途：检查输入对象的值是否符合E-Mail格式
 输入：str 输入的字符串
 返回：如果通过验证返回true,否则返回false
 */
function isEmail(str){
    var myReg = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/;
    if (myReg.test(str)) 
        return true;
    return false;
}

/* 
 用途：检查输入字符串是否符合金额格式
 格式定义为带小数的正数，小数点后最多三位
 输入：s：字符串
 返回：如果通过验证返回true,否则返回false
 */
function isMoney(s){
    var regu1 = "^[0-9]+$";
    var regu = "^[0-9]+[\.][0-9]{0,3}$";
    var re1 = new RegExp(regu1);
    var re = new RegExp(regu);
    
    if (re.test(s) || re1.test(s)) {
        return true;
    }
    else {
        return false;
    }
}

/* 
 用途：检查输入字符串是否只由英文字母和数字和下划线组成
 输入：s：字符串
 返回：
 如果通过验证返回true,否则返回false
 */
function isNumberOr_Letter(s){//å¤æ­æ¯å¦æ¯æ°å­æå­æ¯ 
    var regu = "^[0-9a-zA-Z\_]+$";
    var re = new RegExp(regu);
    if (re.test(s)) {
        return true;
    }
    else {
        return false;
    }
}

/* 
 用途：检查输入字符串是否符合电话格式
 输入：
 s：字符串 010-20123251-2356
 返回：
 如果通过验证返回true,否则返回false
 */
function isPhone(phone){
    var p1 = /^(([0\+]\d{2,3}-)?(0\d{2,3})-)?(\d{7,8})(-(\d{0,4}))?$/;
    if (p1.test(phone)) {
        return true;
    }
    else {
        return false;
    }
}

/* 
 用途：检查输入字符串是否只由英文字母和数字和中划线组成
 输入：s：字符串
 返回：
 如果通过验证返回true,否则返回false
 */
function isNumberOr_MidLetter(s){//å¤æ­æ¯å¦æ¯æ°å­æå­æ¯ 
    var regu = "^[0-9a-zA-Z\-]+$";
    var re = new RegExp(regu);
    if (re.test(s)) {
        return true;
    }
    else {
        return false;
    }
}

/* 
 用途：检查输入字符串是否只由英文字母和数字组成
 输入： s：字符串
 返回：
 如果通过验证返回true,否则返回false
 */
function isNumberOrLetter(s){//å¤æ­æ¯å¦æ¯æ°å­æå­æ¯ 
    var regu = "^[0-9a-zA-Z]+$";
    var re = new RegExp(regu);
    if (re.test(s)) {
        return true;
    }
    else {
        return false;
    }
}

/* 
 用途：检查输入字符串是否只由汉字、字母、数字组成
 输入： s：字符串
 返回：
 如果通过验证返回true,否则返回false
 */
function isChinaOrNumbOrLett(s){
    var regu = "^[0-9a-zA-Z\u4e00-\u9fa5]+$";
    var re = new RegExp(regu);
    if (re.test(s)) {
        return true;
    }
    else {
        return false;
    }
}

//检验手机号码
function checkMobile(value){
    if (value > "") {
        var reg = /^1[3,5,8]{1}[0-9]{1}[0-9]{8}$/;
        if (value.match(reg) == null) {
            return false;
        }
    }
    else {
        return false;
    }
    return true;
}

// 检验输入字符(包括汉字,)转换为字节后(一个汉字为两个字节)是否大于指定的长度
// 大于返回true,小于等于返回false
function chkGreatByteLgth(value, length){
    if (value.replace(/[^\x00-\xff]/g, "**").length > length) {
        return true;
    }
    return false;
}



//数字转中文
function toChnDigit(num){
    var t = parseInt(num);
    if (t == 0) 
        return "零";
    if (t == 1) 
        return "一";
    if (t == 2) 
        return "二";
    if (t == 3) 
        return "三";
    if (t == 4) 
        return "四";
    if (t == 5) 
        return "五";
    if (t == 6) 
        return "六";
    if (t == 7) 
        return "七";
    if (t == 8) 
        return "八";
    if (t == 9) 
        return "九";
    return "";
}


/* 
 用途：校验ip地址的格式
 输入：strIP：ip地址
 返回：如果通过验证返回true,否则返回false；
 */
function isIP(strIP){
    if (isNull(strIP)) 
        return false;
    var re = /^(\d+)\.(\d+)\.(\d+)\.(\d+)$/g //å¹éIPå°åçæ­£åè¡¨è¾¾å¼ 
    if (re.test(strIP)) {
        if (RegExp.$1 < 256 && RegExp.$2 < 256 && RegExp.$3 < 256 && RegExp.$4 < 256) 
            return true;
    }
    return false;
}







//replaceAll
String.prototype.replaceAll = stringReplaceAll;
function stringReplaceAll(AFindText, AReplaceText){
    raRegExp = new RegExp(AFindText, "g")
    return this.replace(raRegExp, AReplaceText);
}

//validate start and end
function isValidStartEndDate(str1, str2){
    if (isNull(str1) || isNull(str2)) {
        return true;
    }
    var nStd = eval(str1.replaceAll('/', ''));
    var nEnd = eval(str2.replaceAll('/', ''));
    return nEnd >= nStd;
}

function trimSpace(str1, fullSpaceChar){
    if (isNull(str1)) {
        return str1;
    }
    var retVal = str1;
    while (retVal.substring(0, 1) == fullSpaceChar) {
        retVal = retVal.substring(1).trim();
    }
    while (retVal.substring(retVal.length - 1, retVal.length) == fullSpaceChar) {
        retVal = retVal.substring(0, retVal.length - 1).trim();
    }
    return retVal;
}

//page print
function pagePrint(){
    window.print();
}


//去空格
function stringTrim(str){
    return str.replace(/(^\s*)|(\s*$)/g, "");
}

String.prototype.trim = function(){
    return this.replace(/(^\s*)|(\s*$)/g, "").replace(/(^[\s\u3000]*)|([\s\u3000]*$)/g, "");
}
String.prototype.trimDoubleSpace = function(){
    return this.replace(/(^[\s\u3000]*)|([\s\u3000]*$)/g, "");
}


//格式化数字为千分位以","分隔表示
function formatNum(s){
    var num = s;
    if (!/^(\+|-)?\d+(\.\d+)?$/.test(num)) {
        //alert("wrong!");
        return num;
    }
    var re = new RegExp().compile("(\\d)(\\d{3})(,|\\.|$)");
    num += "";
    while (re.test(num)) 
        num = num.replace(re, "$1,$2$3")
    return num;
}



//电话号码或者手机至少填写一项
function checkPhoneOrMobile(telAreaObjName, telNumObjName, expandeTelNumObjName, mobileObjName, phoneOrMobileErrName,tipMsg){
	if(document.getElementById(tipMsg)){
		document.getElementById(tipMsg).style.display='none';
	}
    var perTelArea = document.getElementById(telAreaObjName).value.trim();
    var perTelNum = document.getElementById(telNumObjName).value.trim();
    var perNextTelNum = document.getElementById(expandeTelNumObjName).value.trim();
    var perMobilePhone = document.getElementById(mobileObjName).value.trim();
    
    var phone = perTelArea + "-" + perTelNum;
    if (!isNull(perNextTelNum)) {
        phone = phone + "-" + perNextTelNum;
    }
    //两个都没有填
    if (phone == "-" && isNull(perMobilePhone)) {
        //document.getElementById(telAreaObjName).focus();
        document.getElementById(phoneOrMobileErrName).innerHTML = getErrorMsgHid("W0052");
        return false;
    }
    else {
        //填了电话号码
        if (phone != "-" && !isPhone(phone)) {
            //document.getElementById(telAreaObjName).focus();
            document.getElementById(phoneOrMobileErrName).innerHTML = getErrorMsgHid("W0137");
            return false;
        }
        else {
            document.getElementById(phoneOrMobileErrName).innerHTML = "";
        }
        //填了手机号码
        if (!isNull(perMobilePhone) && !checkMobile(perMobilePhone)) {
            //document.getElementById(mobileObjName).focus();
            document.getElementById(phoneOrMobileErrName).innerHTML = getErrorMsgHid("W0136");
            return false;
        }
        else {
            document.getElementById(phoneOrMobileErrName).innerHTML = "";
        }
    }
    return true;
}
//电话号码区号验证
function checkPhoneOrMobileForTelArea(telAreaObjName, telNumObjName, expandeTelNumObjName, mobileObjName, phoneOrMobileErrName,tipMsg){
	
    var perTelArea = document.getElementById(telAreaObjName).value.trim();
    var perTelNum = document.getElementById(telNumObjName).value.trim();
    var perNextTelNum = document.getElementById(expandeTelNumObjName).value.trim();
    var perMobilePhone = document.getElementById(mobileObjName).value.trim();
    
    //如果电话号码没有填写，不验证
    if(isNull(perTelNum)&&isNull(perMobilePhone)){
    	return false;
    }
    if(document.getElementById(tipMsg)){
		document.getElementById(tipMsg).style.display='none';
	}
    
    var phone = perTelArea + "-" + perTelNum;
    if (!isNull(perNextTelNum)) {
        phone = phone + "-" + perNextTelNum;
    }
    //两个都没有填
    if (phone == "-" && isNull(perMobilePhone)) {
        //document.getElementById(telAreaObjName).focus();
        document.getElementById(phoneOrMobileErrName).innerHTML = getErrorMsgHid("W0052");
        return false;
    }
    else {
        //填了电话号码
        if (phone != "-" && !isPhone(phone)) {
            //document.getElementById(telAreaObjName).focus();
            document.getElementById(phoneOrMobileErrName).innerHTML = getErrorMsgHid("W0137");
            return false;
        }
        else {
            document.getElementById(phoneOrMobileErrName).innerHTML = "";
        }
        //填了手机号码
        if (!isNull(perMobilePhone) && !checkMobile(perMobilePhone)) {
            //document.getElementById(mobileObjName).focus();
            document.getElementById(phoneOrMobileErrName).innerHTML = getErrorMsgHid("W0136");
            return false;
        }
        else {
            document.getElementById(phoneOrMobileErrName).innerHTML = "";
        }
    }
    return true;
}
function checkFax(faxAreaObjName, faxNumObjName, expandFaxNumObjName, faxErr,flag){
    var perFaxArea = document.getElementById(faxAreaObjName).value.trim();
    var perFaxNum = document.getElementById(faxNumObjName).value.trim();
    var perNextFaxNum = document.getElementById(expandFaxNumObjName).value.trim();
    var fax = perFaxArea + "-" + perFaxNum;
    if (!isNull(perNextFaxNum)) {
        fax = fax + "-" + perNextFaxNum;
    }
    if (fax != "-" && !isPhone(fax)) {
		if (flag) {
			document.getElementById(faxAreaObjName).focus();
		}
        document.getElementById(faxErr).innerHTML = getErrorMsgHid("W0113");
        return false;
    }
    else {
        document.getElementById(faxErr).innerHTML = "";
    }
    return true;
}
		
function checkPhoneOrMobileForFocus(telAreaObjName, telNumObjName, expandeTelNumObjName, mobileObjName, phoneOrMobileErrName,flag,tipMsg){
	if(document.getElementById(tipMsg)){
		document.getElementById(tipMsg).style.display="none";
	}
    var perTelArea = document.getElementById(telAreaObjName).value.trim();
    var perTelNum = document.getElementById(telNumObjName).value.trim();
    var perNextTelNum = document.getElementById(expandeTelNumObjName).value.trim();
    var perMobilePhone = document.getElementById(mobileObjName).value.trim();
    var phone = perTelArea + "-" + perTelNum;
    if (!isNull(perNextTelNum)) {
        phone = phone + "-" + perNextTelNum;
    }
    if (phone == "-" && isNull(perMobilePhone)) {
		if (flag) {
			document.getElementById(telAreaObjName).focus();
		}
		document.getElementById(phoneOrMobileErrName).innerHTML = getErrorMsgHid("W0052");
        return false;
    }
    else {
        if (phone != "-" && !isPhone(phone)) {
			if (flag) {
				document.getElementById(telAreaObjName).focus();
			}
            document.getElementById(phoneOrMobileErrName).innerHTML = getErrorMsgHid("W0137");
            return false;
        }
        else {
            document.getElementById(phoneOrMobileErrName).innerHTML = "";
        }
        if (!isNull(perMobilePhone) && !checkMobile(perMobilePhone)) {
			if (flag) {
				document.getElementById(mobileObjName).focus();
			}
            document.getElementById(phoneOrMobileErrName).innerHTML = getErrorMsgHid("W0136");
            return false;
        }
        else {
            document.getElementById(phoneOrMobileErrName).innerHTML = "";
        }
    }
    return true;
}
	

//电话号码或者手机至少填写一项
function checkPhoneOrMobileMsg(telAreaObjName, telNumObjName, expandeTelNumObjName, mobileObjName){
    var perTelArea = document.getElementById(telAreaObjName).value.trim();
    var perTelNum = document.getElementById(telNumObjName).value.trim();
    var perNextTelNum = document.getElementById(expandeTelNumObjName).value.trim();
    var perMobilePhone = document.getElementById(mobileObjName).value.trim();
    var phone = perTelArea + "-" + perTelNum;
    if (!isNull(perNextTelNum)) {
        phone = phone + "-" + perNextTelNum;
    }
    //两个都没有填
    if (phone == "-" && isNull(perMobilePhone)) {
        document.getElementById(telAreaObjName).focus();
        putErrorMessage(getErrorMsgHid("W0052"));
        return false;
    }
    else {
        //填了电话号码
        if (phone != "-" && !isPhone(phone)) {
            document.getElementById(telAreaObjName).focus();
            putErrorMessage(getErrorMsgHid("W0137"));
            return false;
        }
        else {
            clearErrorMessage();
        }
        //填了手机号码
        if (!isNull(perMobilePhone) && !checkMobile(perMobilePhone)) {
            document.getElementById(mobileObjName).focus();
            putErrorMessage(getErrorMsgHid("W0136"));
            return false;
        }
        else {
            clearErrorMessage();
        }
    }
    return true;
}

//验证传真
function checkFax(faxAreaObjName, faxNumObjName, expandFaxNumObjName, faxErr){
    var perFaxArea = document.getElementById(faxAreaObjName).value.trim();
    var perFaxNum = document.getElementById(faxNumObjName).value.trim();
    var perNextFaxNum = document.getElementById(expandFaxNumObjName).value.trim();
    var fax = perFaxArea + "-" + perFaxNum;
    if (!isNull(perNextFaxNum)) {
        fax = fax + "-" + perNextFaxNum;
    }
    if (fax != "-" && !isPhone(fax)) {
        document.getElementById(faxAreaObjName).focus();
        document.getElementById(faxErr).innerHTML = getErrorMsgHid("W0113");
        return false;
    }
    else {
        document.getElementById(faxErr).innerHTML = "";
    }
    return true;
}

//验证传真
function checkFaxMsg(faxAreaObjName, faxNumObjName, expandFaxNumObjName){
    var perFaxArea = document.getElementById(faxAreaObjName).value.trim();
    var perFaxNum = document.getElementById(faxNumObjName).value.trim();
    var perNextFaxNum = document.getElementById(expandFaxNumObjName).value.trim();
    var fax = perFaxArea + "-" + perFaxNum;
    if (!isNull(perNextFaxNum)) {
        fax = fax + "-" + perNextFaxNum;
    }
    if (fax != "-" && !isPhone(fax)) {
        document.getElementById(faxAreaObjName).focus();
        putErrorMessage(getErrorMsgHid("W0113"));
        return false;
    }
    else {
        clearErrorMessage();
    }
    return true;
}



function cancleSubmit(){
    return false;
}

function isValidMonth(monthStr){
    if (monthStr.trim() == "") {
        return true;
    }
    if (!isNumber(monthStr)) {
        return false;
    }
    if (eval(monthStr) < 1 || eval(monthStr) > 12) {
        return false;
    }
    return true;
}

function isValidYear(yearStr){
    if (yearStr.trim() == "") {
        return true;
    }
    if (!isNumber(yearStr)) {
        return false;
    }
    if (yearStr.length != 4) {
        return false;
    }
    return true;
}

function clearForm(formName){
    var formObj = document.forms[formName];
    var formEl = formObj.elements;
    for (var i = 0; i < formEl.length; i++) {
        var element = formEl[i];
        if (element.type == 'submit') {
            continue;
        }
        if (element.type == 'reset') {
            continue;
        }
        if (element.type == 'button') {
            continue;
        }
        if (element.type == 'hidden') {
            continue;
        }
        if (element.type == 'text') {
            element.value = '';
        }
        if (element.type == 'textarea') {
            element.value = '';
        }
         if (element.type == 'password') {
            element.value = '';
        }
        if (element.type == 'checkbox') {
            element.checked = false;
        }
        if (element.type == 'radio') {
            element.checked = false;
        }
        if (element.type == 'select-multiple') {
            element.selectedIndex = 0;
        }
        if (element.type == 'select-one') {
            element.selectedIndex = 0;
        }
    }
}

function linkTo(urlStr){
    window.location.href = encodeURI(encodeURI(urlStr));
}

function printStart(flg){
    document.getElementById("WebBrowser").ExecWB(flg, 1);
}




function subStringToLength(targetStr,length){
	if(!isNull(targetStr)&&targetStr.length>length){
		targetStr = targetStr.substring(0,length)+"...";
	}
	return targetStr;
}

function newCode(){
	var validateCodeObj = document.getElementById("validateCode");
	if (validateCodeObj != null) {
		var imgpath = "url('validatecode.jpg?t=" + Math.random() +"')";
		validateCodeObj.style.backgroundImage=imgpath;
	}
}
function IsURL (str_url) { 
	var strRegex     = "(^(https?|ftp|gopher|telnet|file|notes|ms-help):((//)|(\\\\))+[\w\d:#@%/;$()~_?\+-=\\\.&]*)";
	var re=new RegExp(strRegex); 
	//re.test() 
	if (re.test(str_url)) { 
	return (true); 
	} else { 
	return (false); 
	} 
	} 
//****************map集合 start********************
/**
 * map对象
 * @return
 */
var Map = function(){
	this.entryArray = new Array();
	
};

/**
 * 将某个entry放入map中
 * @param key
 * @param value
 * @return
 */
Map.prototype.put = function(key,value){
	if(!key||!value) return ;
	var entry = new Entry(key,value);
	if(this.hasContainKey(key)){
		for(var i = 0;i<this.entryArray.length;i++){
			if(this.entryArray[i].key == key) {
				this.entryArray[i].value=value;
				return;
			}
		}
	}
	this.entryArray.push(entry);
};

/**
 * 获得对应于该key的value
 * @param key
 * @return value
 */
Map.prototype.get = function(key){
	if(this.entryArray.length == 0) return null;
	for(var i = 0;i<this.entryArray.length;i++){
		if(this.entryArray[i].key == key) return this.entryArray[i].value;
	}
	return null;
};
/**
 * 判断是否存在该key
 * @param key
 * @return
 */
Map.prototype.hasContainKey = function(key){
	if(this.entryArray.length == 0) return false;
	for(var i = 0;i<this.entryArray.length;i++){
		if(this.entryArray[i].key == key)return true;
	}
	return false;
};

/**
 * 判断是否已经存在该值值
 * @param value
 * @return
 */
Map.prototype.hasContainValue = function(value){
	if(this.entryArray.length == 0) return false;
	for(var i = 0;i<this.entryArray.length;i++){
		if(this.entryArray[i].value == value)return true;
	}
	return false;
};

/**
 * 移出对应于key实例  返回被移出的实例
 * @param key
 * @return
 */
Map.prototype.remove = function(key){
	if(!key) return null;
	for(var i = 0;i<this.entryArray.length;i++){
		if(this.entryArray[i].key == key){
			var oldValue = this.entryArray[i].value;
			var part1 = this.entryArray.slice(0,i);
			var part2 = this.entryArray.slice(i+1);
			this.entryArray = part1.concat(part2);
			return oldValue;
		}
	}
	return null;
};
/**
 * 返回map长度
 * @return
 */
Map.prototype.size = function(){
	return this.entryArray.length;
};
/**
 * map是否为空
 * @return
 */
Map.prototype.isEmpty = function(){
	return this.entryArray.length == 0;
};

Map.prototype.getEntryArray = function(){
	return this.entryArray;
};
//
Map.prototype.keySet = function(){
	var keyset = new Array();
	for(var i=0;i<this.entryArray.length;i++){
		keyset.push(this.entryArray[i].key);
	}
	return keyset;
}
/**
 * 
 * @param key
 * @param value
 * @return
 */
var Entry = function(key , value){
	this.key = key;
	this.value = value;
};
//****************map集合 end********************

//****************数组集合********************
Array.prototype.hasContainValue = function(foundvalue){
	for(var i = 0;i<this.length;i++){
		if(this[i] == foundvalue) return true;
	}
	return false;
}
/**
 * 是否包含数字
 */
function hasNumber(s){
    var regu = "[0-9]+";
    var re = new RegExp(regu);
    if (re.test(s)) {
        return true;
    }
    else {
        return false;
    }
}