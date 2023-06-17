<?php
session_start();
if(isset( $_SESSION['loggedin'])){
    if($_SESSION['type'] == "app"){
        header("location: /fyp/pages/dashboardapp.php");
    }else if($_SESSION['type'] == "lecturer"){
        header("location: /fyp/pages/dashboardlecturer.php");
    }else if($_SESSION['type'] == "kualitiukm"){
        header("location: /fyp/pages/dashboardkualitiukm.php");
    }
    else if($_SESSION['type'] == "admin"){
        header("location: /fyp/admin/dashboard.php");
    }
}
?>