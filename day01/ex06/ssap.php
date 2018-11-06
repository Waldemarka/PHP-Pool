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
	sort($res);
	return $res;
}

$res= [];
$q = 0;
while (++$q != $argc)
	$res =array_merge($res, ft_split($argv[$q]));
$q = -1;
sort($res);
while (++$q != count($res))
	echo $res[$q]."\n";
?>