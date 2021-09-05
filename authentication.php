<?php
session_start();

if (isset($_SESSION['userloggedin']) && $_SESSION['userloggedin'] == true) {
    $loggedin = true;
} else {
    $loggedin = false;
}

if (isset($_SESSION['adminloggedin']) && $_SESSION['adminloggedin'] == true) {
    $adminpass = true;
  $app = true;
} else {
    $adminpass = false;
    $app = false;
}
?>