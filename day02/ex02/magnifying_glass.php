#!/usr/bin/php
<?php

 function uppper($matches) 
{
    return (str_replace($matches[1], strtoupper($matches[1]), $matches[0]));
}

$str = file($argv[1]);
$q = 0;
while ($str[$q]) {
   	$str[$q] =preg_replace_callback('/<a.*?title="(.*?)">/', "uppper", $str[$q]);
   	$str[$q] =preg_replace_callback('/<a.*?>(.*?)</', "uppper", $str[$q]);
	echo $str[$q];
	$q++;
}

?>