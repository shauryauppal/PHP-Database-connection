<?php
include 'db.php';

$id=$_GET['eid'];
$name=$_GET['ename'];

$sql="INSERT INTO `emp` (`eid`,`ename`) values ('$id','$name')";
$check=mysql_query($sql,$conn);
if(!$check)
	die( "Error inserting data".mysql_error() );
else echo "Data Inserted Succesfully";

mysql_close($conn);
?>