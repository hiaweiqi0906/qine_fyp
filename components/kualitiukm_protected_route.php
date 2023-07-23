<?php
session_start();
if(!$_SESSION['loggedin']){
    header("location: login_kualiti_ukm.php");
}else{
    if($_SESSION['type'] == "app"){
        header("location: /qine%20fyp/pages/dashboardapp.php");
    }else if($_SESSION['type'] == "lecturer"){
        header("location: /qine%20fyp/pages/dashboardlecturer.php");
    }else if($_SESSION['type'] == "userfakulti"){
        header("location: /qine%20fyp/pages/dashboard.php");
    }else if($_SESSION['type'] == "admin"){
        header("location: /qine%20fyp/admin/dashboard.php");
    }
}
?>