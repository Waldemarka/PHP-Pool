#!/usr/bin/php
	<?php
	$s = fopen("php://stdin", "r");
while ($s && !feof($s)) {
	if ($s){
		echo 'Enter a number: ';
		$s1 = fgets($s);
		$s1 = str_replace("\n", "", $s1);
		if (is_numeric($s1))
			{
				if ($s1 % 2 == 0)
					echo "The number $s1 is even\n";
				elseif ($s1 % 2 == 1 || $s1 % 2 == -1)
					echo "The number $s1 is odd\n";
		
			}
		elseif ($s1)
			echo "'"."$s1"."'"."is not a number\n";
		}
}
fclose($s);
echo "\n";
?>