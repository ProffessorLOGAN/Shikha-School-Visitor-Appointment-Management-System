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
$q = "SELECT * FROM `userdatabase` ";
$row = mysqli_query($conn, $q);
$r = mysqli_fetch_array($row)
?>

<div class="hdiv">
    <strong>
        <h1 class="heading"> Userdata List</h1>
    </strong>
</div>
<div class="tablediv table-responsive ">
    <table class="table" style="border-collapse:collapse;">
        <thead>
            <tr>



                <th width="15%">USERNAME</th>
                <th width="15%">PHONE NO</th>
                <th width="15%">Email</th>
                <th width="15%">ADDRESS</th>
                <th width="20%">PICTURE</th>


            </tr>
        </thead>


        <tbody class="tbody">


            <?php
            while ($r = mysqli_fetch_array($row)) {
            ?>
                <tr>


                    <td><?php echo $r['username'] ?></td>
                    <td><?php echo $r['phoneno'] ?></td>
                    <td><?php echo $r['email'] ?></td>
                    <td><?php echo $r['address'] ?></td>
                    <td><img src="imgdata/<?php echo $r['pic']; ?>" style="width:70px;height:80px;"></td>

                </tr>
            <?php
            }
            ?>
        </tbody>



    </table>
</div>





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
            width: 100%;
            padding-left: 10%;
            padding-right: 10%;


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