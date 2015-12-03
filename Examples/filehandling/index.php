<?php
$myfile = fopen("index1.php", "r") or die("Unable to open file!");
echo fread($myfile,filesize("index1.php"));
fclose($myfile);

/*$myfile = fopen("index1.php", "r") or die("Unable to open file!");
while(!feof($myfile)) {
  echo fgetc($myfile);
}
fclose($myfile);*/
$myfile = fopen("index1.php", "w") or die("Unable to open file!");
fwrite($myfile, "new Data");
fclose($myfile);
?>