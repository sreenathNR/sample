<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SPECIALTY PROPERTY GROUP</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>

<?php
	include_once ('classes/User.php');

        
	$user=new User();

        $new_user_id = $user->getLastUser()+1;

	$user->setUsername('user'.$new_user_id);
        $user->setPassword('password'.$new_user_id);

        $user->addUser();
        ?>
<h1>Displaying all the content in Database</h1>

    <table border="0" cellspacing="0" cellpadding="0">
      <tr class="title-row">
        <td width="50" align="left" valign="middle" bgcolor="#666666"><strong>ID</strong></td>
        <td width="200" align="left" valign="middle" bgcolor="#666666"><strong>Username</strong></td>
        <td width="200" align="left" valign="middle" bgcolor="#666666"><strong>Password</strong></td>
      </tr>
        
      <?php

      $users = $user->getUsers();

      $selector=0;
      foreach ($users as $single_user){

          $css_class=$selector%2==0? "row_blue" : "row_dark"; 

          echo '
              <tr class="'.$css_class.'">
                <td align="left" valign="middle">'.$single_user->id.'</td>
                <td align="left" valign="middle">'.$single_user->username.'</td>
                <td align="left" valign="middle">'.$single_user->password.'</td>
              </tr>
              ';
          $selector++;
      }


      ?>
    </table>
    
    <table></table>
    <form action="update.php" method="POST">
    <p><label>Username</label><input type="text" name="name" id="name" required/></p><label>Password</label><input type="password" name="psd" id="psd" required/><input type="submit" value="Update"/>
</form>
<form action="deleteone.php" method="POST">
<p><label>ID</label><input type="text" name="name" id="name" required/>
    <input type="submit" value="Delete"/></p>
</form>
<form action="delete.php" method="POST">
    <input type="submit" value="Clear"/>
</form>


    
</html>
