<?php
date_default_timezone_set ( "PRC" );
function checkUserLogin(){
	if($_SESSION['uid']==""){
		alertMes("请先登录", "index.php");
	}
}

function checkUser($sql) {
	return fetchOne ( $sql );
}
function registerUser() {
	$add ['username'] = $_POST ['username'];
	$add ['password'] = md5 ( $_POST ['password1'] );
	$add ['email'] = $_POST ['email'];
	$add ['mobile'] = $_POST ['mobile'];
	$add ['regTime'] = date ( 'Y-m-d' );
	
	// var_dump($add);
	if (insert ( "u_user", $add )) {
		echo "<script>window.location='index.php';</script>";
	} else {
		alertMes ( "注册失败，请重新注册!", "register.php" );
	}
}
function addUser() {
	$arr ['username'] = $_POST ['username'];
	$arr ['password'] = md5 ( $_POST ['password2'] );
	$arr ['email'] = $_POST ['email'];
	$arr ['mobile'] = $_POST ['mobile'];
	$arr ['regTime'] = date ( 'Y-m-d' );
	var_dump ( $arr );
	if (insert ( "u_user", $arr )) {
		//echo "<script>window.location='mem_list.php';</script>";
		alertMes("添加成功！", "mem_list.php");
	} else {
		alertMes ( "添加失败，请重新添加!", "mem_add.php" );
	}
}

function getAllUser(){
	$sql = "select * from u_user ";
	$rows = fetchAll($sql);
	return $rows;
}

function delUser($id){
	if(delete("u_user","id={$id}")){
		alertMes("删除成功！", "mem_list.php");
	}else {
		alertMes("删除失败！请重新删除", "mem_list.php");
	}
}


