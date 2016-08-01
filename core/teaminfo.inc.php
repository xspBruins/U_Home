<?php
require_once '../include.php';

function getAllTeaminfo(){
	$sql = "select * from u_admin";
	$rows = fetchAll($sql);
	return $rows;
}
