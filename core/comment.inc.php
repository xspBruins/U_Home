<?php

function getComment($bId){
	$sql = "select * from u_comment where bId=$bId order by id ";
	$rows = fetchAll($sql);
	return $rows;
}