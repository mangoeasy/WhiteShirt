<?php
include_once '../../includes/include.inc.php';
include_once '../functionList.php';

$user=isset($_SESSION['user'])?$_SESSION['user']:"";
if(!$user){
	header("Location:../index.php");
}
$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 20;
$page = isset($_POST['page']) ?intval($_POST['page']) : 1;
$addtime=isset($_POST['addtime'])?htmlspecialchars($_POST['addtime'],ENT_QUOTES):"";
$keyword=isset($_POST['keyword'])?htmlspecialchars($_POST['keyword'],ENT_QUOTES):"";
getPictureLists($rows,$page,$addtime,$keyword);

