<?php
session_start();
if(isset( $_SESSION['loggedin'])){
    if($_SESSION['type'] == "app"){
        header("location: dashboardapp.php");
    }else if($_SESSION['type'] == "lecturer"){
        header("location: dashboardlecturer.php");
    }else if($_SESSION['type'] == "kualitiukm"){
        header("location: dashboardkualitiukm.php");
    }
}
?>