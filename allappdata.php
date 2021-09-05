<?php
include 'nav.php';

require_once 'database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<div class="top">
    <div>
        <a class="btn-lg btn-warning app" href="alluserdata.php">USER DATABASE</a>
    </div>

    <div>
        <a class="btn-lg btn-warning app" href="allempdata.php">EMPLOYEE DATABASE</a>
    </div>

    <div>
        <a class="btn-lg btn-warning app" href="allappdata.php">APPOINTMENT DATABASE</a>
    </div>
</div>
<body>

<?php
$q = "SELECT * FROM `app` ";
$row = mysqli_query($conn, $q);
$r = mysqli_fetch_array($row)
?>

<div class="hdiv">
    <strong>
        <h1 class="heading"> Appointment History </h1>
    </strong>
</div>
<div class="tablediv table-responsive ">
    <table class="table" style="border-collapse:collapse;">
        <thead>
            <tr>


                <th width="10%">USERNAME</th>
                <th width="8%">PICTURE</th>
                <th width="7%">PHONE NO</th>
                <th width="5%">Email</th>
                <th width="5%">ADDRESS</th>
                <th width="10%">VISITING TO</th>
                <th width="5%">DEPARTMENT</th>
                <th width="10%">PURPOSE</th>
                <th width="10%">DATE</th>
                <th width="10%">TIMING</th>
                <th width="10%">STATUS</th>



            </tr>
        </thead>


        <tbody class="tbody">


            <?php
            while ($r = mysqli_fetch_array($row)) {
            ?>
                <tr>


                    <td><?php echo $r['username'] ?></td>
                    <td><img src="appimg/<?php echo $r['pic']; ?>" style="width:70px;height:80px;"></td>
                    <td><?php echo $r['phoneno'] ?></td>
                    <td><?php echo $r['email'] ?></td>
                    <td><?php echo $r['address'] ?></td>
                    <td><?php echo $r['person'] ?></td>
                    <td><?php echo $r['dep'] ?></td>
                    <td><?php echo $r['purpose'] ?></td>
                    <td><?php echo $r['date'] ?></td>
                    <td><?php echo $r['timing'] ?></td>
                    <td><?php echo $r['status'] ?></td>


                </tr>
            <?php
            }
            ?>
        </tbody>



    </table>
</div>








    <style>
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
            width: 100%;
            padding-left: 8%;
            padding-right: 8%;


        }

        .tbody {
            background: #d5e3f1;
        }

        .hdiv {
            margin-top: 50px;
        }

        .heading {
            text-align: center;
            width: 100%;
            background: skyblue;
        }

        .top {
            text-align: right;

        }

        .top div {
            float: right;
            margin-top: 10px;
            margin-right: 10px;
        }
    </style>

</body>

</html>