<?php

require_once __DIR__ . 'core/database.php';
//Creating table
$sql="Create table student (sid int primary key, sname varchar(20))";

$check=$mysqli->query($sql);
if (!$check) {
    echo "Error creating Table :".$mysqli->error;
} else {
    echo "Table created successfully";
}

$mysqli->close();
