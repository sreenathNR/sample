<?php

session_start(); 
$alphanum = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

// generate the verication code 
$rand = substr(str_shuffle($alphanum), 0, 5);

// create the hash for the random number and put it in the session
$_SESSION['image_random_value'] = md5($rand);

// create the image
$image = imagecreate(100, 21);

// use color the background image
$bgColor = imagecolorallocate ($image, 0, 0, 0); 

// the text color is black
$textColor = imagecolorallocate ($image, 255, 255, 255); 

// write the random number
//bool imagestring  ( resource $image  , int $font  , int $x  , int $y  , string $string  , int $color  )
imagestring ($image, 22, 31, 3, $rand, $textColor); 

// send several headers to make sure the image is not cached 
// Date in the past 
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); 

// always modified 
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); 

// HTTP/1.1 
header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: post-check=0, pre-check=0", false); 

// HTTP/1.0 
header("Pragma: no-cache"); 

// send the content type header so the image is displayed properly
header('Content-type: image/jpeg');

// send the image to the browser
imagejpeg($image);

// destroy the image to free up the memory
imagedestroy($image);



?>
