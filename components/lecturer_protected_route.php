<?php
session_start();
if(!$_SESSION['loggedin']){
    header("location: login.php");
}else {
    if($_SESSION['type'] == "app"){
        header("location: dashboardapp.php");
    }else if($_SESSION['type'] == "kualitiukm"){
        header("location: dashboardkualitiukm.php");
    }
}
?>