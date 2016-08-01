<?php
require_once '../include.php';

$act = $_REQUEST['act'];
$id = $_REQUEST['id'];

if($act == "searchBlog"){
	$row = getOwnBlog($id);
	echo "<script>window.location='blog_single.php?row=$row';</script>";
}