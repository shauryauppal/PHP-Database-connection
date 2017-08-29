<?php
$servername="localhost";
$username="root";
$password="";

$conn=mysql_connect($servername,$username,$password);
if(!$conn)
  echo "Error in Connection".mysql_error();

$dbcheck=mysql_select_db("lname");
if(!$dbcheck)
	echo "Error selecting Database<br>".mysql_error();
//else echo "Success";

  //mysql_close($conn);
  
  ?>