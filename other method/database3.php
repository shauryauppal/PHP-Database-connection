<?php

require_once __DIR__ . 'core/database.php';

//INSERTING DATA IN TABLE
$sql="Insert into emp values(1,'shaurya')";
$mysqli->query($sql);

$sql="Insert into emp values(2,'saranch')";
$mysqli->query($sql);

$sql="Insert into emp values(3,'aurya')";
$mysqli->query($sql);

$mysqli->close();
