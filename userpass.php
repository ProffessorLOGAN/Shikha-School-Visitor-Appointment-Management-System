<?php



if( !isset($_SESSION['userloggedin']) || $_SESSION['userloggedin']!=true)
{
    header("location: login.php");
    
}

?>
