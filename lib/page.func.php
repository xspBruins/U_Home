<?php
/*require_once '../include.php';*/
/*$sql = "select * from shop_user";
$totalRows = getResultNum ( $sql );

$pageSize = 2;
$totalPage = ceil ( $totalRows / $pageSize );
$page = $_REQUEST ['page'] ? ( int ) $_REQUEST ['page'] : 1;
if ($page < 1 || $page == null || ! is_numeric ( $page )) {
	$page = 1;
}
if ($page > $totalPage) {
	$page = $totalPage;
}
$offset = ($page - 1) * $pageSize;
$sql = "select * from shop_user limit {$offset},{$pageSize}";
$rows = fetchAll ( $sql );
foreach ( $rows as $row ) {
	echo "id:" . $row ['id'], "<br/>";
	echo "username:" . $row ['username'], "<hr/>";
}*/
function getPage($page, $totalPage, $where) {
	$where = ($where == null) ? null : "&" . $where;
	$url = $_SERVER ['PHP_SELF'];
	$index = ($page == 1) ? "首页" : "<a href='{$url}?page=1{$where}'>首页</a>";
	$last = ($page == $totalPage) ? "尾页" : "<a href='{$url}?page={$totalPage}{$where}'>尾页</a>";
	$prev = ($page == 1) ? "上一页" : "<a href='{$url}?page=" . ($page - 1) . "{$where}'>上一页</a>";
	$next = ($page == $totalPage) ? "下一页" : "<a href='{$url}?page=" . ($page + 1) . "{$where}'>下一页</a>";
	$str = "总共{$totalPage}页/当前第{$page}页";
	
	for($i = 1; $i <= $totalPage; $i ++) {
		// 当前页无连接
		if ($page == $i) {
			$p .= "[{$i}]";
		} else {
			$p .= "<a href='{$url}?page={$i}'>[{$i}]</a>";
		}
	}
	echo $str . "<br/>" . $index . "&nbsp;&nbsp;&nbsp;" . $prev . "&nbsp;&nbsp;&nbsp;" . $p . "&nbsp;&nbsp;&nbsp;" . $next . "&nbsp;&nbsp;&nbsp;" . $last;
}

//getPage ( $page, $totalPage,null);

