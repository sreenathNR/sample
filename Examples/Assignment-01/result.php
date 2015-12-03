<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Assignment-01</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>

<body>
<table>
<?php
$mon=$_POST['date-select'];
$month = date('m',strtotime($mon));
$a_date = "2012-$month-23";
$last=date("t-m-Y", strtotime($a_date));
$first=date("01-$month-2012");
echo "<p>$mon"." "."CALANDER</p>";
while($first<$last)
{
   $day= date('l', strtotime( $first));
   echo "<tr><td>$first</td><td>$day</td></tr>";
	$first= date ("d-m-Y", strtotime("+1 day", strtotime($first)));	
}
$day= date('l', strtotime( $last));
echo "<tr><td>$last</td><td>$day</td></tr>";
?>
</table>
<a href="index.php">BACK</a>
</body>
</html>