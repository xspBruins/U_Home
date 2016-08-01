<?php

function getAllHouses(){
	$sql = "select * from u_houses ";
	$rows = fetchAll($sql);
	return $rows;
}

//取前四个热销房型
function getFavHouses(){
	$sql = "select * from u_houses where isHot=1 order by id limit 4";
	$rows = fetchAll($sql);
	return $rows;
}

//根据点击哪个房间而进入该房源具体内容页
function getOwnHouses($id){
	$sql = "select * from u_houses where id='{$id}'";
	$row = fetchOne($sql);
	return $row;
}

//根据城市得到该城市商圈分类
function getLocationbyCity($lcity){
	$sql = "select * from u_location where lcity='{$lcity}'";
	$rows = fetchAll($sql);
	return $rows;
}

//取得商家广告版
function getAD(){
	$sql = "select * from u_advertisement order by id desc";
	$row = fetchOne($sql);
	return $row;
}

//取四个房屋展示
function showHouses(){
	$sql = "select * from u_houses order by id desc limit 4";
	$rows = fetchAll($sql);
	return $rows;
}

//取得众筹房源
function getConHouses(){
	$sql = "select * from u_congregation order by id desc";
	$rows = fetchAll($sql);
	return $rows;
}

