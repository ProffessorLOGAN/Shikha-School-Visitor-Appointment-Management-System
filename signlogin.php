
    <?php
include 'nav.php';
    ?>

<!-- SIgn Up PHP -->

<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "shikshadb";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {

  die("ERROR: could not connect. " . mysqli_connect_error());
}

if (isset($_POST['signup'])) {

  $name = $_POST['username'];
  $phoneNo = $_POST['phone'];
  $Email = $_POST['email'];
  $address = $_POST['address'];

  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];


    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      $User = $_POST['username'];
      $Phone = $_POST['phone'];
      $Email = $_POST['email'];
      $Address = $_POST['address'];
      $Password = $_POST['password'];




      //user exits or not
      $exitsUser = "SELECT * FROM `userdatabase` WHERE `username` ='$User'";
      $result1 = mysqli_query($conn, $exitsUser);
      $f1=mysqli_fetch_array($result1);
      //cheking total no of row of username having same name
      $ExistRow = mysqli_num_rows($result1);


      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];


      //checking pic name already exists or not
      $q = "SELECT  * FROM `userdatabase` WHERE `pic` = '$file_name'";
      $result2 = mysqli_query($conn, $q);
      $f2=mysqli_fetch_array($result2);
      $row = mysqli_num_rows($result2);


      if ($ExistRow > 0) {
        echo "<script>alert('User already exists please login ...')</script>";
  
  
      } else {
        if ($row == 0 && $ExistRow == 0) {
          if ($password == $cpassword) {
            $fileextvalue = explode(".", $file_name);

            $fileextlower = strtolower(end($fileextvalue));
            $fileext = array('png', 'jpg', 'jpeg');
            if (in_array($fileextlower, $fileext)) {
              $insert = "INSERT INTO `userdatabase`( `username`, `phoneno`, `email`, `address`, `pic`, `password`) 
                VALUES ('$User','$Phone','$Email','$Address','$file_name','$Password')";
              $check = mysqli_query($conn, $insert);
              $row2=mysqli_fetch_row($check);

             
              $m = "imgdata/$file_name";
              move_uploaded_file($file_tmp, $m);
              

                          header("location: signlogin.php");
            } else {
              echo "<script>alert('Image extension invalid...')</script>";
            }
          } else {
            echo "<script>alert('password not match')</script>";
          }
        } else {
          echo "<script>alert('Image name Not available...please rename image and try')</script>";
        }
      }
    }
  }



?>


<!-- LOGIN PHP -->


<?php
if (isset($_POST['login'])) {
  $name = $_POST['username'];
  $password = $_POST['password'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {



  $name = $_POST['username'];
  $password = $_POST['password'];



  $Usersql = "select * from userdatabase where username='$name' AND password='$password' ";


  // Normal user Query
  $result = mysqli_query($conn,$Usersql);
  $r= mysqli_fetch_array($result);
  $num = mysqli_num_rows($result);
  

  $exitsAdmin = "Select * from admin where username = '$name' AND password='$password' ";
  $authenticate = mysqli_query($conn, $exitsAdmin);
  $r1= mysqli_fetch_array($authenticate);
  $Adminexists = mysqli_num_rows($authenticate);



  if ($Adminexists == 1)
   {

    $_SESSION['adminloggedin'] = true;
    $_SESSION['app'] = true;
    $_SESSION['userloggedin'] = true;
    $_SESSION['username'] = $r1['username'];
    $_SESSION['password'] = $r1['password'];
    header("location: home.php");
   }
    if ($num>0) {

      $_SESSION['userloggedin'] = true;
      $_SESSION['username'] = $r['username'];
      $_SESSION['password'] =  $r['password'];
      header("location: home.php");
    } else {
      echo "   <script>alert('Invalid Credentials...')</script>";
    
    }
 
  }
}


?>








<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/signuplogin.css" />
  <title>Sign in & Sign up Form </title>
</head>

<body>
  <div class="container">
    <div class="forms-container">


    <!-- LOGIN FORM  -->
      <div class="signin-signup">
        <form action="signlogin.php" method="post" class="sign-in-form">
          <h2 class="title">LOGIN</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" name="username" value="" required />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password" value="" required />
          </div>
          <input type="submit" value="Login" name="login" class="btn solid" />
          <p style="display: flex;justify-content: center;align-items: center;margin-top: 20px;"><a href="#" style="color: #4590ef;">Forgot Password?</a></p>
        </form>




  <!-- SIGN UP FORM -->
  <!-- CREATE NEW ACCOUNT HERE -->
        <form action="signlogin.php" class="sign-up-form" method="post" enctype="multipart/form-data">
          <h2 class="title">Sign up</h2>

          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Full Name" name="username" id="username" value="" required />
          </div>

          <div class="input-field">
            <i class="fas fa-mobile-alt"></i>
            <input type="text" placeholder="Phone no" name="phone" id="phone" value="" required />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Email Address" name="email" value="" required />
          </div>

          <div class="input-field">
          <i class="fas fa-map-marker-alt"></i>
            <input type="text" placeholder="Address" name="address" id="address" value="" required />
          </div>

          <div class="input-field">
          <i class="fas fa-file-image"></i>
            <input type="file" name="image" id="image" value="" required />
          </div>

          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password" value="" required />
          </div>

          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Confirm Password" name="cpassword" value="" required />
          </div>

          <input type="submit" class="btn" name="signup" value="Sign up" />

        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>New here ?</h3>
          <p>
            Create new account here and enjoy seamless experience of our services
          </p>
          <button class="btn transparent" id="sign-up-btn">
           join now
          </button>
        </div>
        <img src="img/png2.png" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>One of us ?</h3>
          <p>
            Already have a account, please login ...
          </p>
          <button class="btn transparent" id="sign-in-btn">
           Login
          </button>
        </div>
        <img src="img/png1.png" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <script src="js/index.js"></script>
</body>

</html>