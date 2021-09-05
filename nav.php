<?php
include 'authentication.php';
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
    <link rel="stylesheet" href="css/nav.css" />
</head>



<body>
<header class="header">
    <nav class="navbar navbar-expand-lg bg-primary ">

        <div class="img">
            <img src="img/logo1.png" class="logo">
        </div>

        <span></span>
        </button>

        <div class="navbar-nav">
            <a class="nav-link active" href="home.php">HOME </a>
            <a class='nav-link' href='#about'>ABOUT US</a>
            <a class='nav-link' href='#course'>COURSES</a>
            <a class='nav-link' href='#teacher'>TEACHERS</a>
            <a class='nav-link' href='#contact'>CONTACTS</a>


            <?php if (!$app) {
                if ($loggedin) {
                    echo "          <a class='nav-link' href='apppagenav.php'>Appointments</a> ";
                }
            } ?>

            <?php if ($adminpass) {
                echo "          <a class='nav-link' href='allempdata.php'>ADMIN</a> ";
            }
            ?>



            <?php if (!$loggedin) {
                echo "         
                                            <a class='nav-link' href='signlogin.php'>LOGIN</a> ";
                                           
            }
            if ($loggedin) {
                echo "           <a class='nav-link' href='logout.php'>LOGOUT</a> ";
            } ?>




        </div>

      

    </nav>
</header>
    

</body>

</html>