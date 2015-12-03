
<?php
// multiple recipients
$to .= 'sreenath.nr@yatnam.com';

// subject
$subject = 'Mark list';

// message
$message = '
<html>
<head>
  <title>Marklist</title>
</head>
<body>
  <p>Here are the Marks</p>
  <table>
    <tr>
      <th>Subject</th><th>Day</th><th>Marks</th>
    </tr>
    <tr>
      <td>English</td><td>3rd</td><td>40</td>
    </tr>
    <tr>
      <td>Malayalam</td><td>17th</td><td>40</td>
    </tr>
  </table>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'To: SREE <sree@gmail.com>' . "\r\n";
$headers .= 'From: PTA ASSOCIATION <ptahss@gmail.com>' . "\r\n";
$headers .= 'Cc: ptahss@gmail.com' . "\r\n";
$headers .= 'Bcc: ptahss@gmail.com' . "\r\n";

// Mail it
$stat=mail($to, $subject, $message, $headers);
if($stat=true)
	{
	echo "Sending Successful";
}
	else{
		echo "Error";
	}
?>
