<?php
require_once '../include.php';
date_default_timezone_set ( "PRC" );

function dogetConnection($arr){
	$arr['cTime'] = date('Y-m-d');
	//var_dump($arr);
	if (insert ( "u_contact", $arr )) {
		alertMes("小网君已经收到啦~", "index.php");
	} else {
		alertMes ( "联系失败了哦~", "contact.php" );
	}
}