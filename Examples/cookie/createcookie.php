<?php
$cookie_name="user";
$cookie_value="sree";
setcookie($cookie_name,$cookie_value,time()+(3600*24),"/");
?>
<html>
<body>
<?php
if(!isset($_COOKIE[$_cookie_name])){
echo "cookie named".$cookie_name."is not set";
}
else
{
echo "cookie named".$cookie_name."has value".$cookie_value;
	
}
?>
</body>
</html>