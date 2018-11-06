#!/usr/bin/php
<?php

function ft_is_sort($str)
{
	$sort_str = $str;
	sort($sort_str);

	$q = -1;
	while( ++$q != count($str)) 
	{
			if (strcmp($sort_str[$q], $str[$q]) !== 0)
			return false;
	}
	return true;
}
?>