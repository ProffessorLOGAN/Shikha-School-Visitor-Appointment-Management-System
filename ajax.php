<?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con, 'shikshadb');

require_once 'nav.php';



$sno1= $_POST['empnames1'];
$q1 = "select * from emp where dep = '$sno1'";

$result= mysqli_query($con,$q1);

while ($rows = mysqli_fetch_array($result)) {
    ?>
        <option > <?php echo $rows['empname']; ?> </option>

    <?php
    }
    ?>

<?php
$sno2= $_POST['purpose1'];
$q2 = "select * from timings where type = '$sno2'";

$result= mysqli_query($con,$q2);

while ($rows = mysqli_fetch_array($result)) {
    ?>
        <option > <?php echo $rows['time']; ?> </option>

    <?php
    }

    ?>