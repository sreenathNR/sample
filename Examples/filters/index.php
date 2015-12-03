 <!DOCTYPE html>
<html>
<body>
<head>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
</head>
<table>
   <tr>
     <td>Filter Name</td>
     <td>Filter ID</td>
   </tr>
   <?php
   foreach (filter_list() as $id =>$filter) {
       echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
   }
   ?>
   </table>
   <?php

$str = "<br/><h1>Hello World!</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo "Filtered String is".$newstr;
$int = "100.012";

if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
     echo("<br/>Integer is valid");
} else {
     echo("<br/>Integer is not valid");
}
$ip = "127.12.0.1";
if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
    echo("<br/>$ip is a valid IP address");
} else {
    echo("<br/>$ip is not a valid IP address");
}
$email="sreenathnr555@gmail.com";
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo("<br/>$email is a valid email address");
} else {
    echo("<br/>$email is not a valid email address");
}
$url = "http://www.gmail.com";
$url = filter_var($url, FILTER_SANITIZE_URL);

if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
    echo("<br/>$url is a valid URL");
} else {
    echo("<br/>$url is not a valid URL");
}
$int = 20;
$min = 1;
$max = 20;

if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
    echo("<br/>Variable value is not within the legal range");
} else {
    echo("<br/>Variable value is within the legal range");
}
   ?>


</body>
</html>
