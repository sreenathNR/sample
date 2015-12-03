 <?php
 $cookie_name="user";
$cookie_value="sree";
setcookie($cookie_name,$cookie_value, time() - 3600);
?>
<html>
<body>

<?php
echo "Cookie ".$cookie_name." is deleted.";
?>

</body>
</html>
