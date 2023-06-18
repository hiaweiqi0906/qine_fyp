<?php
session_start();
if(!$_SESSION['loggedin']){
    header("location: login.php");
}else {
    if($_SESSION['type'] == "app"){
        header("location: /qine%20fyp/pages/dashboardapp.php");
    }else if($_SESSION['type'] == "kualitiukm"){
        header("location: /qine%20fyp/pages/dashboardkualitiukm.php");
    }else if($_SESSION['type'] == "userfakulti"){
        header("location: /qine%20fyp/pages/dashboarduserfakulti.php");
    }else if($_SESSION['type'] == "admin"){
        header("location: /qine%20fyp/admin/dashboard.php");
    }
}
?>