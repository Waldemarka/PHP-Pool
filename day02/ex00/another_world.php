#!/usr/bin/php
<?php
	if ($argc == 1)
		exit();
	$str = $argv[1];
	$str = preg_replace('/\s+/', ' ', $str)."\n";
	echo trim($str)."\n";
?>