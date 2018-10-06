<?php

require_once __DIR__ . 'core/database.php';

$sql = "select eid,ename from emp";
$mysqli->query($sql);

while ($row=mysqli_fetch_array($result)) {
    echo $row['eid']." ".$row['ename']."<br>";
}
