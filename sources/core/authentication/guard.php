<?php

    function logOut(){
        session_unset();
        session_destroy();
    }

    function isLogged(){
        if(isset($_SESSION['id'])) return true;
        else return false;
    }

    session_start();

    if(isset($_GET['action'])){
        if($_GET['action'] == "reset") 
        logOut();
    }

    if(!isset($_SESSION['id']))include("./sources/core/authentication/verification.php");

?>