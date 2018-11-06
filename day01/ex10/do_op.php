#!/usr/bin/php
<?php

function do_op($num_1, $oper, $num_2)
{
	switch ($oper) {
		case ('+'):
			echo intval($num_1) + intval($num_2)."\n";
			break;
		case ('-'):
			echo intval($num_1) - intval($num_2)."\n";
			break;
		case ('*'):
			echo intval($num_1) * intval($num_2)."\n";
			break;
		case ('/'):
			echo intval($num_1) / intval($num_2)."\n";
				break;
	}
}

if ($argc != 4)
{
	echo "Incorrect Parameters\n";
	exit;
}
do_op($argv[1], trim($argv[2]), $argv[3]);
?>