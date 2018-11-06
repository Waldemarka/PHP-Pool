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

if ($argc >= 1){
	$q = -1;

	$str = ft_split($argv[1]);
	$str = array_values($str);
	while (++$q != count($str))
	{
		echo $str[$q];
		if ($q + 1 == count($str))
		{
			echo "\n";
			break;
		}
		echo " ";
	}
}
?>