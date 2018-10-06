<?php

require_once __DIR__ . 'core/database.php';

$id=$_GET['eid'];
$name=$_GET['ename'];

$sql="INSERT INTO `emp` (`eid`,`ename`) values ('$id','$name')";
$mysqli->query($sql);

if (!$check) {
    die("Error inserting data".mysql_error());
} else {
    echo "Data Inserted Succesfully";
}

$mysqli->close();
