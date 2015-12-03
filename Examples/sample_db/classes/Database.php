<?php

class Database {
	public $link;

    var $host = 'localhost';
    var $user = 'root';
    var $password = '';
    var $database = 'speciality';

    function __construct()
	{
		$this->link = new mysqli($this->host, $this->user, $this->password, $this->database) or die("Error " . mysqli_error($link)); 
	}

	function __destruct()
	{
		@mysql_close($this->link);
	}
	

}
?>

