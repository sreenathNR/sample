<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Assignment-02</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<link rel="stylesheet" type="text/css" href="css/jui.css"/>
<link rel="stylesheet" href="themes/smoothness/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<script type="text/javascript" src="js/jQuery v1.11.3 .js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/jui.js"></script>
</head>

<body>
<div id="wrapper">
<form name="dates" action="result.php" method="post">
<p>Name</p>
<input type="text" name="name" id="name" required>
<p><p>Date of birth:</p><input type="text" class="datepicker" id="dob" name="dob" required></p>
<p><p>Training starts on</p> <input type="text" class="datepicker" id="tdate" name="tdate" required></p>
<p><p>Training ends on</p><input type="text" class="datepicker" id="edate" name="edate" required></p>
<p id="courses">Courses Optd</p>
<p><input type="checkbox" name="html" id="html" value="html" />  <label for="html">HTML</label></p>
<p><input type="checkbox" name="css" id="css" value="css"/>  <label for="css">CSS</label></p>
<p><input type="checkbox" name="js" id="js" value="javascript" />  <label for="js">JAVA SCRIPT</label></p>
<p><input type="checkbox" name="ph" id="mysql" value="php" />  <label for="ph">PHP</label></p>
<p><input type="checkbox" name="ms" id="ms" value="mysql" />  <label for="ms">MYSQL</label></p>
 <input type="submit" value="create user" name="submit" />
 </form>
</div>
</body>
</html>