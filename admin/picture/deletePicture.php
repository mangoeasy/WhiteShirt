<?php
include_once '../../includes/include.inc.php';
include_once '../functionList.php';

$user=isset($_SESSION['user'])?$_SESSION['user']:"";
if(!$user){
	header("Location:../index.php");
}

$ids=isset($_POST['ids'])?$_POST['ids']:"";
$re=deletePicture($ids);
if($re){
	echo 1;
}else{
	echo 0;
}
