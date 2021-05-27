<?php

    include($_SERVER['DOCUMENT_ROOT']."/sources/data/users.php");

    //Vérifie si paramètres de login fournis par l'utilisateur sont correct et crée une session si c'est le cas
    function checkUser($username,$password){

        $currentUser = getUserInfo($username,$password);

        if($currentUser)createSession($currentUser);

    }

    //Crée une session pour l'utilisateur courrant
    function createSession($user){

        foreach($user as $key => $value) $_SESSION[$key] = $value;
        
    }

    if(isset($_POST["username"]) && isset($_POST["password"])){
        checkUser($_POST["username"],$_POST["password"]);
    }
?>