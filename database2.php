<?php
$servername="localhost";
$username="root";
$password="";

$conn=mysql_connect($servername,$username,$password);
if(!$conn)
{
	die("Connection Failed".mysql_error());
}
else
	echo "Connection Successful<br>";
//selecting database
$dbcheck=mysql_select_db("lname");

if(!$dbcheck)
{
	echo "Error selecting DB".mysql_error();
}
else echo "Database Selected<br>";

//Creating table
$sql="Create table student (sid int primary key, sname varchar(20))";

$check=mysql_query($sql,$conn);
if(!$check)
	echo "Error creating Table".mysql_error();
else echo "Table created successfully";

mysql_close($conn);
?>