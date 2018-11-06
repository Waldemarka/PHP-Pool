<?php
if ($_SERVER['PHP_AUTH_USER'] == "zaz" && $_SERVER['PHP_AUTH_PW'] == "111") {
/* $img = '../img/42.png';
 $get_contents = file_get_contents($img);
 $in_base_64 = 'data:image/png' . ';base64,' . base64_encode($get_contents);*/
  header("WWW-Authenticate: Basic realm=''Member area''");
 //header("HTTP/1.0 401 Unauthorized");
?>
<html><body>
Hello Zaz<br />
<img src='<?php echo $in_base_64 ?>'>
</body></html>
<?php
} else
{
 header("WWW-Authenticate: Basic realm=''Member area''");
 //header("HTTP/1.0 401 Unauthorized");
?>
<html><body>That area is accessible for members only</body></html>
<?php
}
?>