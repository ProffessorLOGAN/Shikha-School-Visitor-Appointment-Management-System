<?php
require_once 'database.php';
include 'nav.php';
?>

<?php
echo $_SESSION['username'];
$name=$_SESSION['username'];
$q1="SELECT * FROM `emp` WHERE empname = '$name'";
$q2="SELECT * FROM `userdatabase` WHERE username = '$name'";
$row1=mysqli_query($conn,$q1);
$row2=mysqli_query($conn,$q2);
$r1=mysqli_fetch_array($row1);
$r2=mysqli_fetch_array($row2);

if($r1['empname']==$r2['username']){
    header("location: empapplist.php");

}else{
    header("location:appointment.php");
}


?>

