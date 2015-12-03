 <html>
 <body>
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newdb";
$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " );
}



//insert operation

/*$sql = "INSERT INTO register (name,rollno,age,phno,dob) VALUES ('John',101,23,9874563214,'1991-08-06')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}*/




//delete operation

/*$sql = "delete  from register  where id=11";

if (mysqli_query($conn, $sql)) {
    echo "One record deleted";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}*/




//select operation

$sql="select * from register where name='john' LIMIT 4";
echo "<table border='1'>" ;
echo "<tr><td>ID</td><td>Name</td><td>ROLL NO</td><td>AGE</td><td>PH NO</td><td>DOB</td></tr>";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
    	echo "<tr><td>$row[id]</td><td>$row[name]</td><td>$row[rollno]</td><td>$row[age]</td><td>$row[phno]</td><td>$row[dob]</td></tr>";
    }
} else {
    echo "0 results";
}
echo "</table>";




//update operation

/*$sql = "update register set age=30  where id=16";

if (mysqli_query($conn, $sql)) {
    echo "One record updated";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
*/
mysqli_close($conn);
?> 
</body>
</html>