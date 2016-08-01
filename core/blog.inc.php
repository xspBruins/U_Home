<?php
require_once '../lib/mysql.func.php';
//得到所有
function getAllBlog(){
	$sql = "select * from u_topic order by id";
	$rows = fetchAll($sql);
	return $rows;
}
//得到条数
function getBlogRows(){
	$sql = "select * from u_topic";
	$totalRows = getResultNum($sql);
	return $totalRows;
}
//根据点击哪个博客而进入该博客具体内容页
function getOwnBlog($id){
	$sql = "select * from u_topic where id=$id";
	$row = fetchOne($sql);
	return $row;
}

//得到最新帖子，并选取前7条
function getNewestBlog(){
	$sql = "select * from u_topic order by id desc limit 7";
	$rows = fetchAll($sql);
	return $rows;
}

//根据isHot得到精华帖子
function getFavBlog(){
	$sql = "select * from u_topic where isHot=1 order by id desc";
	$rows = fetchAll($sql);
	return $rows;
}

//执行根据帖子id进行插入评论
function insertComment($bId,$name,$email,$topic,$comment){
	$arr['bId'] = $bId;
	$arr['name'] = $name;
	$arr['email'] = $email;
	$arr['topic'] = $topic;
	$arr['comment'] = $comment;
	
	insert("u_comment", $arr);
}