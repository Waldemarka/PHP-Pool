#!/usr/bin/php
<?php

function with_zero($str)
{
	if (is_numeric($str) || $str)
		return true;
}

function ft_split($str)
{
	$res = array_filter(explode(" ", $str), "with_zero");
	return $res;
}

if ($argc > 0 && $argv[1])
$q = 0;
$string = '';
$res = ft_split($argv[1]); 
$firstElem = array_shift($res);
$res[] = $firstElem;
for ($q=0; $q < count($res); $q++) { 
	$string = $string . $res[$q] . " ";
}
$string = trim($string);
if(strlen($string)) {
	echo $string . "\n";
}
?>