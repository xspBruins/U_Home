<?php
function checkAdmin($sql){
	return fetchOne($sql);
	
}

function checkLogin(){
	if($_SESSION['adminId']==""){
		alertMes("请先登录", "login.php");
	}
}

function addAdmin(){
	$add['username'] = $_POST['username'];
	$add['password'] = md5($_POST['password2']);
	$add['email'] = $_POST['email'];
	//var_dump($add);
	//var_dump($_POST);
	if(insert("shop_admin", $add)){
		alertMes("添加成功！", "admin.php");
	}else{
		alertMes("添加失败！请重新添加", "admin_add.php");
	}
}

function getAllAdmin(){
	$sql = "select id,username,email from bar_admin";
	$rows = fetchAll($sql);
	return $rows;
}

function editAdmin($id){
	//var_dump($_POST);
	$arr = $_POST;
	if (update("bar_admin", $arr,"id={$id}")){
		alertMes("编辑成功！", "admin.php");
	}else {
		alertMes("编辑失败！请重新编辑", "admin.php");
	}
}

function delAdmin($id){
	if(delete("bar_admin","id={$id}")){
		alertMes("删除成功！", "admin.php");
	}else {
		alertMes("删除失败！请重新删除", "admin.php");
	}
}
