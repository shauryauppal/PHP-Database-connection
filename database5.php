<?php
include 'db.php';
$sql = "select eid,ename from emp";
$result = mysql_query($sql,$conn);

while($row=mysql_fetch_array($result))
{
	echo $row['eid']." ".$row['ename']."<br>";
}
?>