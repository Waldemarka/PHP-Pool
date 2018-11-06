#!/usr/bin/php
<?php

function do_op($num_1, $oper, $num_2)
{
	switch ($oper) {
		case ('+'):
			echo $num_1 + $num_2."\n";
			break;
		case ('-'):
			echo $num_1 - $num_2."\n";
			break;
		case ('*'):
			echo $num_1 * $num_2."\n";
			break;
		case ('/'):
		{
			if ($num_2 != 0)
				echo $num_1 / $num_2."\n";
			else
				echo "Syntax Error\n";
			break;
		}
	}
}

function cuting($str)
{
	if (strpbrk($str, '+/*-'))
	{
		$num_2 = strpbrk($str, '+/*-');
		$oper = substr($num_2, 0, 1);
		$num_2 = substr($num_2, 1, strlen($num_2) - 1);
		$num_1 = substr($str, 0, strlen($num_1) - strlen($num_2) - 1);
		if (is_numeric(trim($num_1)) == 1 && is_numeric(trim($num_2)) == 1)
			do_op($num_1, $oper, $num_2);
		else
			echo "Syntax Error\n";
	}
	else
		echo "Syntax Error\n";
}

if ($argc != 2)
{
	echo "Incorrect Parameters\n";
	exit;
}
cuting($argv[1]);
?>