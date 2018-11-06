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



	function check_mounth($str)
	{
		if ($str == "janvier")
			return 1;
		if ($str == "fevrier")
			return 2;
		if ($str == "mars")
			return 3;
		if ($str == "avril")
			return 4;
		if ($str == "mai")
			return 5;
		if ($str == "juin")
			return 6;
		if ($str == "juillet")
			return 7;
		if ($str == "aout")
			return 8;
		if ($str == "septembre")
			return 9;
		if ($str == "octobre")
			return 10;
		if ($str == "novembre")
			return 11;
		if ($str == "decembre")
			return 12;
	}

	$str = $argv[1];
	//$days = array("Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche");
	//$months = array("Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Decembre");
	$regl = '/([Ll]undi|[Mm]ardi|[Mm]ercredi|[Jj]eudi|[Vv]endredi|[Ss]amedi|[Dd]imanche) ([0-9]{2}) ([Jj]anvier|[Ff]vrier|[Mm]ars|[Aa]vril|[Mm]ai|[Jj]uin|[Jj]uillet|[Aa]out|[Ss]eptembre|[Oo]ctobre|[Nn]ovembre|[Dd]ecembre)[ ][0-9]{4}[ ][0-9]{1,2}[:][0-9]{1,2}[:][0-9]{1,2}/iu';
	if (preg_match($regl, $str, $str1))
	{
		$all = ft_split($str1[0]);
		$mon = check_mounth(strtolower($all[2]));
		$min = intval(substr($all[4], 3,4));
		$sec = intval(substr($all[4], 6,7));
		$time = mktime(intval($all[4]), $min, $sec, intval($mon), intval($all[1]), intval($all[3]));
		echo intval($all[4])."\n";
		echo $min."\n";
		echo $sec."\n";
		echo $mon."\n";
		echo intval($all[1])."\n";
		echo intval($all[3])."\n";
		if ($time > 0)
			echo $time;
		else
			exit();
	
	}
	else
		echo "Wrong Format\n";

?>