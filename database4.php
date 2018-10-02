<?php
include 'db.php';

$id=$_GET['eid'];
$name=$_GET['ename'];

/* Using PDO (prepared statements) prevents SQL injection: */
$sql = $conn->prepare("INSERT INTO emp (eid, ename) VALUES (?, ?)");
$sql->bind_param("is", $id, $name);
$result = $sql->execute();

if (!$result) {
	echo "Error inserting data";
	$sql->close();
} else {
	 echo "Data inserted successfully";
	 $sql->close();
 }

/* Prone to SQL Injection:

$sql="INSERT INTO `emp` (`eid`,`ename`) values ('$id','$name')";
$check=mysql_query($sql,$conn);
if(!$check)
	die( "Error inserting data".mysql_error() );
else echo "Data Inserted Succesfully";

mysql_close($conn);
*/
?>
