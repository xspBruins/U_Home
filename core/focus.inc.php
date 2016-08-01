<?php
require_once '../include.php';

//按添加id大小排序，只显示三张
function getAllfocusAlbum(){
	$sql = "select * from focus_album order by id desc limit 3";
	$rows = fetchAll($sql);
	return $rows;
}