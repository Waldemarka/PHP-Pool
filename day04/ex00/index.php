<?php
	session_start();
	if ($_GET['login'] &&  $_GET['passwd'] && $_GET['submit'] === "OK")
	{
		$_SESSION['login'] = $_GET['login'];
		$_SESSION['passwd'] = $_GET['passwd'];
	}
?>

<html><body style="background-color: #00c7ff">
<form method="get" action="index.php">
	<div style="margin-top: 30vw; width: 300px; margin-left: 40%">
		Usesrname: <input type="text" name="login" style="border-radius: 8px; margin-right: 1px;" value="<?php if ($_SESSION['login']) echo $_SESSION['login'];else echo "Waldemarka"; ?>" size="24"><br/>
		Password: <input type= "password" name="passwd" style="border-radius: 8px; margin-left: 10px;" value="<?php if ($_SESSION['passwd']) echo $_SESSION['passwd'];else echo "123456";?>" size="24"><br/>
   		<input style="margin-left: 30%; margin-top: 20px; width: 100px; border-radius: 8px;" type="submit" name="submit" value="OK" >
   	</div>
</form>
</body></html>
