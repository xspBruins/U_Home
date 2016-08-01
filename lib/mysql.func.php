<?php

function connect(){
	$link=mysql_connect("localhost","root","xspyyer")or die("数据库连接失败Error:".mysql_errno().":".mysql_error());
	mysql_set_charset("gb2312");
	mysql_select_db("uhomer") or die("指定数据库打开失败！");
	return $link;
}

function insert($table,$array){
	$keys=join(",", array_keys($array));
	$vals="'".join("','", array_values($array))."'";
	$sql="insert {$table}($keys) values ({$vals})";
	mysql_query($sql);
	return mysql_insert_id();
}

function update($table,$array,$where=NULL){
	foreach ($array as $key=>$val){
		if ($str==null){
			$sep="";
		}else {
			$sep=",";
		}
		$str.=$sep.$key."='".$val."'";
	}
	
	$sql="update {$table} set {$str}".($where==null?null:"where ".$where);
	mysql_query($sql);
	return mysql_affected_rows();
}

function delete($table,$where=NULL){
	$where=$where==null?null:"where ".$where;
	$sql="delete from {$table} {$where}";
	mysql_query($sql);
	return mysql_affected_rows();
}

//查询
function fetchOne($sql,$result_type=MYSQL_ASSOC){
	$result=mysql_query($sql);
	$row = mysql_fetch_array($result,$result_type);
	return $row;
}

function fetchAll($sql,$result_type=MYSQL_ASSOC){
	$result=mysql_query($sql);
	while (@$row=mysql_fetch_array($result,$result_type)){
		$rows[]=$row;
	}
	return $rows;
}

//返回结果集条数
function getResultNum($sql){
	$result=mysql_query($sql);
	return mysql_num_rows($result);
}

//得到上一步插入记录的ID
function getInsertId(){
	return mysql_insert_id();
}
