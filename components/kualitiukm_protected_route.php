<?php
session_start();
if(!$_SESSION['loggedin']){
    header("location: login_kualiti_ukm.php");
}
?>