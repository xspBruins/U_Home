<?php

function getBarAlbum() {
	$sql = "select a.albumPath,a.phoTop,a.phoDesc,i.bName,i.bDesc 
	        from bar_album as a join bar_introduction i on a.bId = i.id order by a.id desc ";
	$rows = fetchAll($sql);
	return $rows;
}