<?php
include 'db.php';

//create table
//$sql="Create table emp (eid int primary key, ename varchar(20))";
//$check=mysql_query($sql,$conn);
//if(!$check)
	//echo "Error creating table".mysql_error();

//INSERTING DATA IN TABLE
$sql="Insert into emp values(1,'shaurya')";
mysql_query($sql,$conn);
$sql="Insert into emp values(2,'saranch')";
mysql_query($sql,$conn);
$sql="Insert into emp values(3,'aurya')";
mysql_query($sql,$conn);


mysql_close($conn);
?>