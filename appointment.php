 <?php
  include 'nav.php';
  $server = "localhost";
  $username = "root";
  $password = "";
  $database = "shikshadb";

  $conn = mysqli_connect($server, $username, $password, $database);



  ?>




 <?php




  if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];




    $name = $_SESSION['username'];
    $phoneNo = $_POST['phone'];
    $Email = $_POST['email'];
    $address = $_POST['address'];
    $dep1 = $_POST['dept1'];
    $empname1 = $_POST['empname1'];
    $purpose1 = $_POST['purpose1'];
    $date1 = $_POST['date'];
    $timing1 = $_POST['time1'];


    if (empty($phoneNo) || empty($Email) || empty($address) || empty($dep1) || empty($empname1) || empty($purpose1) || empty($date1) || empty($timing1)) {
      echo "   <div class='alert alert-danger' role='alert'>
      please fill all fields properly ...
      </div> ";
    } else {

      $fileextvalue = explode(".", $file_name);

      $fileextlower = strtolower(end($fileextvalue));
      $fileext = array('png', 'jpg', 'jpeg');
      if (in_array($fileextlower, $fileext)) {

        $insert = "  INSERT INTO `app` (`username`, `phoneno`, `email`, `address`, `pic`, `dep`, `person`, `purpose`, `date`, `timing`,`status`) 
    VALUES ('$name','$phoneNo','$Email','$address','$file_name','$dep1','$empname1','$purpose1','$date1','$timing1','pending') ";
        $check = mysqli_query($conn, $insert);
        $m = "appimg/$file_name";
        move_uploaded_file($file_tmp, $m);
        echo "   <div class='alert alert-success' role='alert'>
                         Appointment Created Successfuly...
                          </div> ";
      } else {
        echo "   <div class='alert alert-danger' role='alert'>
                    image extension invalid...
                     </div> ";
      }
    }
  }
  ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="stylesheet" href="css/nav.css" />
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  </head>

 <body>
   <div class="divapp">
     <a class="btn-lg btn-warning app" href="userapplist.php">Appointment Status</a>
   </div>
   <section class="appoint">

     <div class="imgappoint">
       <img src="img/appointment.svg" alt="aboutus pic">
     </div>

     <div class="content1">
       <form class="container-sm" action="appointment.php" method="post" enctype="multipart/form-data">



         <div class="form-group row ">
           <label class="col-sm-2 col-form-label">Phone Number</label>
           <div class="col-sm-10">
             <input type="text" name="phone" class="form-control" id="phone" placeholder="Contact Number">
           </div>
         </div>

         <div class="form-group row ">
           <label class="col-sm-2 col-form-label">Email</label>
           <div class="col-sm-10">
             <input type="email" name="email" class="form-control" id="email" placeholder="e-mail">
           </div>
         </div>

         <div class="form-group row ">
           <label class="col-sm-2 col-form-label">Address</label>
           <div class="col-sm-10">
             <input type="text" name="address" class="form-control" id="address" placeholder="Address">
           </div>
         </div>


         <div class="form-group row ">
           <label class="col-sm-2 col-form-label">Picture</label>
           <div class="col-sm-10">
             <input type="file" name="image" class="form-control" id="image">
           </div>
         </div>


         <div class="form-group row ">
           <label class="col-sm-2 col-form-label">Department</label>
           <div class="col-sm-10">
             <select class="form-control" onchange="dep(this.value)" name="dept1">
               <option value=""> Select Department </option>
               <?php
                $q = "select * from dept";
                $result = mysqli_query($conn, $q);
                while ($rows = mysqli_fetch_array($result)) {
                ?>
                 <option value="<?php echo $rows['dep']; ?>"> <?php echo $rows['dep']; ?> </option>

               <?php
                }
                ?>
             </select>
           </div>
         </div>

         <div class="form-group row ">
           <label class="col-sm-2 col-form-label">Visting To </label>
           <div class="col-sm-10">
             <select class="form-control" id="empnames" name="empname1">
               <option value="">choose visiting person here</option>
             </select>

           </div>
         </div>

         <div class="form-group row">
           <label class="col-sm-2 col-form-label">Purpose</label>
           <div class="col-sm-10">
             <select class="form-control" onchange="perps(this.value)" name="purpose1">
               <option value=""> Select purpose of visiting </option>
               <?php
                $q = "select * from purpose";
                $result = mysqli_query($conn, $q);
                while ($rows = mysqli_fetch_array($result)) {
                ?>
                 <option value="<?php echo $rows['purp']; ?>"> <?php echo $rows['purp']; ?> </option>

               <?php
                }
                ?>
             </select>
           </div>
         </div>

         <div class="form-group row">
           <label class="col-sm-2 col-form-label">Appointment Date</label>
           <div class="col-sm-10">
             <input type="date" name="date" class="form-control" id="date">
           </div>
         </div>

         <div class="form-group row">
           <label class="col-sm-2 col-form-label">Appointment Timing</label>
           <div class="col-sm-10">
             <select class="form-control" id="time1" name="time1">
               <option value="">choose appointment time schedule </option>
             </select>
           </div>
         </div>

         <div class="form-group row">
           <div class="col-sm-10" style="text-align: center;">
             <button type="submit" name="sub" class="btn-lg  btn-primary">Submit Appointment</button>
           </div>
         </div>
       </form>





     </div>
   </section>





   <style>
     .divapp {
       text-align: right;

     }

     .app {
       text-decoration: none;

     }
   </style>



   <script type="text/javascript">
     function dep(datavalue) {
       $.ajax({
         type: 'POST',
         url: 'ajax.php',

         data: {
           empnames1: datavalue
         },
         success: function(result) {
           $('#empnames').html(result);
         }


       });
     }

     function perps(datavalue) {
       $.ajax({
         type: 'POST',
         url: 'ajax.php',

         data: {
           purpose1: datavalue
         },
         success: function(result) {
           $('#time1').html(result);
         }


       });
     }
   </script>
 </body>

 </html>