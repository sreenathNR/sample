<?php
/*if(!file_exists("style1.css")) {
  die("File not found");
} else {
  $file=fopen("style1.css","r");
}*/

/*$test=2;
if ($test>1) {
  trigger_error("Value must be 1 or below");
}*/
//error handler function
function customError($errno, $errstr) {
  echo "<b>Error:</b> [$errno] $errstr<br>";
  echo "Ending Script";
  die();
}
set_error_handler("customError",E_USER_WARNING);


$test=2;
if ($test>1) {
  trigger_error("Value must be 1 or below",E_USER_WARNING);
}
/*function customError($errno, $errstr) {
  echo "<b>Error:</b> [$errno] $errstr<br>";
  echo "Webmaster has been notified";
  error_log("Error: [$errno] $errstr",1,
  "sreenath.nr@yatnam.com","From: sreenathnr555@gmail.com");
}

set_error_handler("customError",E_USER_WARNING);

$test=2;
if ($test>1) {
  trigger_error("Value must be 1 or below",E_USER_WARNING);
}*/

?> 