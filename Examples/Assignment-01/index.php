<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Assignment-01</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>

<body>
<form name="dates" action="result.php" method="post">
<label>Select A Month</label><select name="date-select">
<?php 
for ($m=1; $m<=12; $m++) {
     $month = date('F', mktime(0,0,0,$m));
     echo "<option>$month</option>";
     }
?>
</select>
<input type="submit" value="Show Dates"/>
</form>
</body>
</html>