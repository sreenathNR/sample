<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newdb";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
	//echo "connection Successful";




	//insert operation

	/*$sql = "INSERT INTO register (name,rollno,age,phno,dob) VALUES ('sree',500,20,874561325,'1995-07-20f')";
	if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}*/




//select operation

/*$sql="select * from register where id=20";
echo "<table border='1'>" ;
echo "<tr><td>ID</td><td>Name</td><td>ROLL NO</td><td>AGE</td><td>PH NO</td><td>DOB</td></tr>";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	echo "<tr><td>$row[id]</td><td>$row[name]</td><td>$row[rollno]</td><td>$row[age]</td><td>$row[phno]</td><td>$row[dob]</td></tr>";
    }
} else {
    echo "No row with this ID";
}*/
 



 //delete operation

/*$sql = "delete  from register  where id=19";
if ($conn->query($sql) === TRUE) {
    echo "One Record deleted";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}*/



//updation operationsf

$sql = "update register set age=40  where id=18";
if ($conn->query($sql) === TRUE) {
    echo "One Record Updated";
} else {
    echo "Error: ";
}

}

$conn->close();
?> 