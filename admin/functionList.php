<?php


function login($username,$password){
	global $pdo;
    $username=htmlspecialchars($username,ENT_QUOTES);
    $password=htmlspecialchars($password,ENT_QUOTES);
	$sql="select * from admin where username='{$username}' and password='{$password}'";
	$result=$pdo->query($sql, 'find');
	if($result){
//		session_start();
		$_SESSION['user']=$result;
		return true;
	}else{
		return false;
	}
}

function getPictureLists($rows,$page,$addtime,$keyword)
{
	global $pdo;
	$sql="SELECT * ";
	$sql.="FROM photo ";
	$sql.="WHERE delete_flag='0' ";
	if(!empty($addtime))
	{
        $sql.="and addtime like '{$addtime}%' ";
	}
    if(!empty($keyword))
    {
        $sql.="and ( username like '%{$keyword}%' ";
        $sql.="OR phone like '%{$keyword}%' ";
        $sql.="OR nickname like '%{$keyword}%') ";
    }
	//获取总数
	$result['total']=$pdo->query($sql,"total");
	$sql.="ORDER BY  addtime desc  ";
	$sql.="limit ".($page-1)*$rows.",". $rows;
	$list=$pdo->query($sql,"select");

	$result['rows']=$list;
	echo json_encode($result);
}

function deletePicture($array){
	global $pdo;
	$arr=implode(",",$array);
	$sql="update photo set delete_flag='1' where id in ({$arr})";
	$re=$pdo->query($sql, 'update');
	if($re){
		return true;
	}else{
		return false;
	}
}