<?php
include 'nav.php';
require_once 'authentication.php';
$con = mysqli_connect('localhost','root');
mysqli_select_db($con, 'shikshadb');



$name=$_SESSION['username'];


$q="SELECT * FROM `app` WHERE `username` = '$name'";
$result = mysqli_query($con,$q);
$r = mysqli_fetch_array($result);


     ?>
     <div class="hdiv">
<strong><h1 class="heading"> User Appointment List</h1></strong>
     </div>
   <div class="tablediv table-responsive " >
  <table class="table"  style="border-collapse:collapse;"  >
               <thead> <tr>



                    <th width="15%">USERNAME</th>
                    <th width="15%">PICTURE</th>
                    <th width="15%">VISITING TO</th>
                    <th width="10%">DEPARTMENT</th>
                    <th width="10%">PURPOSE</th>
                    <th width="10%">DATE</th>
                    <th width="15%">TIMING</th>
                    <th width="10%">STATUS</th>
                    
                </tr>
               </thead>

              
               <tbody class="tbody">

             
               <?php
             while($r= mysqli_fetch_array($result))
               {
                   ?>
<tr>


    <td><?php echo $r['username']?></td>
    <td><img src="appimg/<?php echo $r['pic']; ?>" style="width:70px;height:80px;"></td>
    <td><?php echo $r['person']?></td>
    <td><?php echo $r['dep']?></td>
    <td><?php echo $r['purpose']?></td>
    <td><?php echo $r['date']?></td>
    <td><?php echo $r['timing']?></td>
    <td><?php echo $r['status']?></td>
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
.table thead{
   
    background-color: skyblue;
}

.table thead tr{
    text-align: center;
}
.tbody tr{
    text-align: center;
    padding: auto;
    border-bottom: 1px solid #dddddd;

}
.tbody{
    background:#d5e3f1;
}

.table tbody tr:nth-of-type(even){
    background-color:#f3f3f3;

}
.table tbody tr:last-of-type{
    border-bottom:2px solid skyblue;
}
.tablediv{
    width:80%;
    padding-left: 20%;
    
    
}
.hdiv{
    margin-top: 8px;
}
.heading{
    text-align: center;
    width: 100%;
    background: skyblue;
}
        </style>

</body>
</html>
