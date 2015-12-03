<?php
include_once 'classes/Database.php';
include_once 'classes/User.php';
$user=new User();
$user->delete();
header('Location: index.php');
?>