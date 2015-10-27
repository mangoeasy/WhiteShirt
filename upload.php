<?php
/**
 * 保存涂鸦照片
 * Created by upload.php.
 * User: jerry.yang@5adian.com
 * Date: 2015/5/18
 * Time: 14:21
 */
include_once "includes/include.inc.php";
//reponseError(false,"非常抱歉，该活动已结束！后续活动，敬请期待！");
if(!isset($_POST['userName']) ||empty($_POST['userName']))
{
   reponseError(false,$param['uploadphoto']['usenameempty']);
}
if(!isset($_POST['phone']) ||!isMobile($_POST['phone']))
{
    reponseError(false,$param['uploadphoto']['mobileerror']);
}
$username=htmlspecialchars($_POST['userName'],ENT_QUOTES);
$phone=htmlspecialchars($_POST['phone'],ENT_QUOTES);

$array=array(
    'rsp'=>false,
    'errorMsg'=>$param['uploadphoto']['fail'],
);
$openid=getOpenId();
//获取涂鸦数据
$filteredData=substr($_POST['data'], strpos($_POST['data'], ",") + 1);
$unencodedData=base64_decode($filteredData);
$nickname="";
$weixinheadurl="";
$weixinaddress="";
if($openid)
{
    //获取对应的微信昵称和头像
    $sql="SELECT  * FROM member WHERE openid='{$openid}'";
    $memberResult=$pdo->query($sql,"find");
    if($memberResult)
    {
        $weixinaddress=$memberResult['country']." ".$memberResult['province']." ".$memberResult['city'];
        $nickname=$memberResult['nickname'];
        $weixinheadurl=$memberResult['headimgurl'];
    }
    $filename=md5($openid.date("his")).".jpg";
    $filename="upload/{$filename}";
}else{
    $openid=md5($phone);
    $filename=md5($openid.date("his")).".jpg";
    $filename="upload/other/{$filename}";
}
mkdirs($filename);
$result=file_put_contents($filename,$unencodedData);
if($result)//图片写入成功
{
   //讲图片写入数据库中
    $pictureurl=WEB_URL.$filename;
    $addtime=date("Y-m-d H:i:s");
    $sql="INSERT INTO photo";
    $sql.="(`openid`,`pictureurl`,`username`,`phone`,`addtime`,`nickname`,`weixinheadurl`,`weixinaddress`)";
    $sql.="VALUES('{$openid}','{$pictureurl}','{$username}','{$phone}','{$addtime}','{$nickname}','{$weixinheadurl}','{$weixinaddress}')";
    $saveResult=$pdo->query($sql,"insert");
    if($saveResult)
    {
        //判断是否存在UID
        $uid=get_cookie("uid");
        if(!$uid)
        {
            $uid=uniqid();
            set_cookie(array('uid' => $uid));
        }
        $array=array(
            'rsp'=>true,
            "id"=>md5($saveResult),
            "uid"=>$uid,
            'errorMsg'=>"图片上传成功",
        );
    }
}
echo json_encode($array);
exit;
?>
