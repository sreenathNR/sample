<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Assignment-02</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>

<body>
<table>
<?php
if (isset($_POST['submit'])) 
{
if(isset($_POST['name']))
$name=$_POST['name'];
else
$name=null;
if(isset($_POST['dob']))
$dob=$_POST['dob'];
else
$dob=null;
if(isset($_POST['tdate']))
$tdate=$_POST['tdate'];
else
$tdate=null;
if(isset($_POST['edate']))
$edate=$_POST['edate'];
else
$edate=null;
if(isset($_POST['html']))
$html=$_POST['html'].",";
else
$html=null;
if(isset($_POST['css']))
$css=$_POST['css'].",";
else
$css=null;
if(isset($_POST['js']))
$js=$_POST['js'].",";
else
$js=null;
if(isset($_POST['ph']))
$ph=$_POST['ph'].",";
else
$ph=null;
if(isset($_POST['ms']))
$ms=$_POST['ms'];
else
$ms=null;
echo "<tr><td>Name:</td><td>$name</td></tr>";
echo "<tr><td>Date of Birth:</td><td>$dob</td></tr>";
echo "<tr><td>Joining Date:</td><td>$tdate</td></tr>";
echo "<tr><td>Ending Date:</td><td>$edate</td></tr>";
echo "<tr><td>Courses Opted:</td><td>$html$js$css$ph$ms</td></tr>";
}
else{
	echo "Please Enter submit button";
}
?>
</table>
<a href="index.php">BACK</a>
</body>
</html>