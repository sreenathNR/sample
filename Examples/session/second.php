<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
if(isset($_SESSION["type"]))
echo "session value is " . $_SESSION["type"] . ".<br>";
else
echo "Please Start with Index Page";
print_r($_SESSION);
?>

</body>
</html> 