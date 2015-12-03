<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
$_SESSION["type"] = "user";
echo "Session variables are set.";
?>
<a href="second.php">Next</a>
</body>
</html> 