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
?>