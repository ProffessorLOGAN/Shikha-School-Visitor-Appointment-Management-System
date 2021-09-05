<?php
include 'nav.php';
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'shikshadb');


?>
<?php

$name = $_SESSION['username'];

$q = "SELECT * FROM `app` WHERE `person` LIKE '%$name%'";
$a = mysqli_query($con, $q);
$r = mysqli_fetch_array($a);


?>
<div class="hdiv">
    <strog>
        <h1 class="heading"> Employee Appointment List</h1>
    </strog>
</div>
<div class="tablediv table-responsive ">
    <table class="table" style="border-collapse:collapse;">
        <thead>
            <tr>



                <th width="10%">USERNAME</th>
                <th width="10%">PICTURE</th>
                <th width="10%">PURPOSE</th>
                <th width="10%">DATE</th>
                <th width="10%">TIMING</th>
                <th width="10%">STATUS</th>
                <th width="10%"></th>
                <th width="10%"></th>

            </tr>
        </thead>



        <tbody class="tbody">
            <tr>



                <?php
                while ($r = mysqli_fetch_array($a)) {
                ?>
                    <td><?php echo $r['username'] ?></td>

                    <td> <img src="appimg/<?php echo $r['pic']; ?>" style="width:70px;height:80px;"></td>

                    <td><?php echo $r['purpose'] ?></td>
                    <td><?php echo $r['date'] ?></td>
                    <td><?php echo $r['timing'] ?></td>
                    <td><?php echo $r['status'] ?></td>
                    <td>
                        <div class="col-sm-10" style="text-align: center;">
                            <button type="submit" name="sub" value="Accepted" class="btn  btn-primary">
                                <a href="accept.php?sno=<?php echo $r['sno']; ?>" class="text-white">accept</a>
                            </button>
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-10" style="text-align: center;">
                            <button type="submit" name="sub" value="Accepted" class="btn  btn-primary">
                                <a href="cancel.php?sno=<?php echo $r['sno']; ?>" class="text-white">cancel</a>
                            </button>
                        </div>
                    </td>
            </tr>
        <?php
                }

        ?>
        </tbody>



    </table>
</div>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <style>
        .tbody {
            background: #d5e3f1;
        }

        .table thead {

            background-color: skyblue;
        }

        .table thead tr {
            text-align: center;
        }

        .tbody tr {
            text-align: center;
            padding: auto;
            border-bottom: 1px solid #dddddd;

        }

        .table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;

        }

        .table tbody tr:last-of-type {
            border-bottom: 2px solid skyblue;
        }

        .tablediv {
            width: 80%;
            padding-left: 20%;


        }

        .hdiv {
            margin-top: 8px;
        }

        .heading {

            text-align: center;
            width: 100%;
            background: skyblue;
        }
    </style>

</body>

</html>