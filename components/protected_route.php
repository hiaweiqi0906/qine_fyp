<?php
session_start();
if(!$_SESSION['loggedin']){
    header("location: login.php");
}else {
    if($_SESSION['type'] == "app"){
        header("location: dashboardapp.php");
    }else if($_SESSION['type'] == "lecturer"){
        header("location: dashboardlecturer.php");
    }
}
?>