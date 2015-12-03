<?php

include_once 'Database.php';
class User
{
  public $id;
  public $username;
  public $password;

  public function __construct()
  {
    $this->id="";
    $this->username="";
    $this->password="";
  }
  public function getId() {
      return $this->id;
  }

  public function setId($id) {
      $this->id = $id;
  }

  public function getUsername() {
      return $this->username;
  }

  public function setUsername($username) {
      $this->username = $username;
  }

  public function getPassword() {
      return $this->password;
  }

  public function setPassword($password) {
      $this->password = $password;
  }

  private static function removeQuotes(User $item )
  {
	$item->username=str_replace("\'", "''",$item->username);
	$item->password=str_replace("\'", "''",$item->password);
        return $item;
  } 

 public  function addUser( )
  {

        $db=new Database();


        $user=User::removeQuotes($this);

        $qry="INSERT INTO users (username, password) VALUES ('"
           .$this->username."','"
           .$this->password
           ."')";
        $qry=stripslashes($qry);
        if(!mysqli_query($db->link, $qry))
            return false;
        else
            return true;
  }

  public  function getUsers($where="")
  {
         $items=array();
         $db=new Database();

        $qry="select * from users ".$where;
        $res=mysqli_query($db->link,$qry);

        while($rec=mysqli_fetch_row($res))
        {
                $item=new User();

		$item->id = $rec[0];
                $item->username = $rec[1];
		$item->password = $rec[2];
                $items[]=$item;
        }
        return $items;
  }
  public function getLastUser()
  {
      $db=new Database();
      $qry="select max(`id`) from users";
      $res=mysqli_query($db->link,$qry);
      $val = $res->fetch_assoc();
      return $val['max(`id`)'];

  }
  public  function changePassword($item)
  {
        $db=new Database();
        $qry="update users set password='".$item->password
             ."' where username='".$item->username."'";

        if(!mysqli_query($db->link,$qry))
            return false;
        else
            return true;
  }
  public  function delete()
  {
        $db=new Database();
        $qry="delete from users";

        if(!mysqli_query($db->link,$qry))
            return false;
        else
            return true;
  }
  public  function deleteone($item)
  {
        $db=new Database();
        $qry="delete from users where id='".$item->username."'";

        if(!mysqli_query($db->link,$qry))
            return false;
        else
            return true;
  }

  
}
?>