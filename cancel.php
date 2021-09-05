<?php

include 'database.php';
$sno=$_GET['sno'];
$q="UPDATE `app` SET `status` = 'Canceled' WHERE `app`.`sno` = '$sno' ";
mysqli_query($conn,$q);
header("location:empapplist.php");


?>