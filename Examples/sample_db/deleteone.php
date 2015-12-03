<?php
include_once 'classes/Database.php';
include_once 'classes/User.php';
$user=new User();
$username=$_POST['name'];
$user->setUsername($username);
$user->deleteone($user);
header('Location: index.php');

?>