#!/usr/bin/php
<?php

function filt($tmp_f, $tmp_s)
{
	$i = 0;
	$a = strtolower($tmp_f);
	$b = strtolower($tmp_s);
	while ($a[$i] == $b[$i] && $a[$i] && $b[$i])
		$i++;
	if ((ctype_digit($b[$i])) && (ctype_upper($a[$i]) || ctype_lower($a[$i])))
		return 0;
	if ((ctype_punct($b[$i])) && (ctype_upper($a[$i]) || ctype_lower($a[$i])))
		return 0;
	if ((ctype_upper($a[$i]) || ctype_lower($a[$i])) && (ctype_upper($b[$i]) || ctype_lower($b[$i])))
	{
		$tmp_a = strtolower($a[$i]);
		$tmp_b = strtolower($b[$i]);
		if ((ord($tmp_a) - ord($tmp_b)) < 0)
			return 0;
		else
			return 1;
	}
	if (ctype_digit($a[$i]) && (ctype_upper($b[$i]) || ctype_lower($b[$i])))
		return 1;
	if (ctype_digit($a[$i]) && ctype_punct($b[$i]))
		return 0;
	if (ctype_digit($a[$i]) && ctype_digit($b[$i]))
	{
		if ((ord($a[$i]) - ord($b[$i])) < 0)
			return 0;
		else
			return 1;
	}
	if (ctype_punct($a[$i]) && (ctype_upper($b[$i]) || ctype_lower($b[$i])))
		return 1;
	if (ctype_punct($a[$i]) && ctype_digit($b[$i]))
		return 1;
	if (ctype_punct($a[$i]) && ctype_punct($b[$i]))
	{
		if ((ord($a[$i]) - ord($b[$i])) < 0)
			return 0;
		else
			return 1;
	}
}

function zer($str)
{
	return($str || is_numeric($str));
}


$for_fil = array();
unset($argv[0]);
$argv = array_values($argv);
foreach ($argv as $key)
{ 
    $for_fil = array_filter(explode(' ', $key), "zer");
    foreach($for_fil as $key)
        $string[] = $key;
}
usort($string, 'filt');
foreach ($string as $key)
    echo $key . "\n";
?>