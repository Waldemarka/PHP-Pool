 <?php
 	function auth($login, $passwd)
 	{
 		if (!$login || !$passwd)
 			return false;
 		$str = unserialize(file_get_contents('../private/passwd'));
 		if ($str){
 			foreach ($str as $key => $value) {
 				if ($value['login'] === $login && $value['passwd'] === hash('whirlpool', $passwd))
 					return true;
 			}
 		}
 		return false;
 	}