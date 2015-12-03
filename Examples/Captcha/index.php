<?php
session_start();
?>
<html>
<head>
<title>Captcha</title>
</head>
<body>
  <form method="post" action="index.php">
   <img src="randomImage.php" alt="captcha"/>
   <input type="text" name="captcha" id="captcha">
  <input type="submit" value="submit" name="submit">
  </form>
</body>
</html>
<?php
if(isset($_POST['submit'])){
	$captcha=md5($_POST['captcha']);
	if($_SESSION['image_random_value']==$captcha)
		echo "Valid";
	else
		echo "Invalid";
}
?>