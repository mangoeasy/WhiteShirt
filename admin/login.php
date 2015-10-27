<?php
require ('../includes/include.inc.php');
include_once 'functionList.php';
$username=isset($_POST['username'])?$_POST['username']:"";
$password=isset($_POST['password'])?$_POST['password']:"";
if(!empty($username)&&!empty($password)){
	$re=login($username, $password);
	if($re){
		echo  1;
	}else{
		echo  0;
	}
}