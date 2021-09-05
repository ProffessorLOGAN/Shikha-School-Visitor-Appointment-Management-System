<?php

include 'database.php';
$a="accepted";
$sno=$_GET['sno'];
$q="UPDATE `app` SET `status` = 'Accepted' WHERE `app`.`sno` = '$sno' ";
mysqli_query($conn,$q);
header("location:empapplist.php");


?>