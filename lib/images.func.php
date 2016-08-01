<?php
require_once 'string.func.php';
// 通过GD库做验证码
function verifyImage($type = 1, $length = 4, $pixel = 50, $line = 8, $sess_name = "verify") {
	session_start();
	// 创建画布
	$width = 80;
	$height = 28;
	$image = imagecreatetruecolor ( $width, $height );
	$white = imagecolorallocate ( $image, 255, 255, 255 );
	$black = imagecolorallocate ( $image, 0, 0, 0 );
	
	// 填充矩形填充画布
	$type = 1;
	$length = 4;
	imagefilledrectangle ( $image, 1, 1, $width - 2, $height - 2, $white );
	$chars = bulidRandomString ( $type, $length );
	$_SESSION [$sess_name] = $chars;
	$fontfiles = array (
			"BITSUMISHI.TTF",
			"MSYH.TTF",
			"MSYHBD.TTF",
			"SIMKAI.TTF",
			"SIMSUN.TTC" 
	);
	
	for($i = 0; $i < $length; $i ++) {
		$size = mt_rand ( 14, 18 );
		$angle = mt_rand ( - 15, 15 );
		$x = 18 * $i + 4;
		$y = mt_rand ( 20, 26 );
		$color = imagecolorallocate ( $image, mt_rand ( 50, 90 ), mt_rand ( 80, 200 ), mt_rand ( 90, 180 ) );
		$fontfile = "../fonts/" . $fontfiles [mt_rand ( 0, count ( $fontfiles ) - 1 )];
		$text = substr ( $chars, $i, 1 );
		imagettftext ( $image, $size, $angle, $x, $y, $color, $fontfile, $text );
	}
	
	for($i = 0; $i < $pixel; $i ++) {
		imagesetpixel ( $image, mt_rand ( 0, $width - 1 ), mt_rand ( 0, $height - 1 ), $black );
	}
	
	for($i = 1; $i < $line; $i ++) {
		$color = imagecolorallocate ( $image, mt_rand ( 50, 90 ), mt_rand ( 80, 200 ), mt_rand ( 90, 180 ) );
		imageline ( $image, mt_rand ( 0, $width - 1 ), mt_rand ( 0, $height - 1 ), mt_rand ( 0, $width - 1 ), mt_rand ( 0, $height - 1 ), $color );
	}
	
	header ( "content-type:image/gif" );
	imagegif ( $image );
	imagedestroy ( $image );
}
