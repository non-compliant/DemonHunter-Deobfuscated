#!/usr/bin/php
<?php
	echo gzinflate(base64_decode($argv[1]));
?>
