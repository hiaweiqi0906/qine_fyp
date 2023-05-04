<?php
session_start();
if(!$_SESSION['loggedin']){
    header("location: login.php");
}else {
    if($_SESSION['type'] == "lecturer"){
        header("location: dashboardlecturer.php");
    }else if($_SESSION['type'] == "kualitiukm"){
        header("location: dashboardkualitiukm.php");
    }
}
?>