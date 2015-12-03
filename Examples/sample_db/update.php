<?php
include_once 'classes/Database.php';
include_once 'classes/User.php';
$user=new User();
$username=$_POST['name'];
$psd=$_POST['psd'];


$user->setUsername($username);
$user->setPassword($psd);
$user->changePassword($user);
header('Location: index.php');

?>