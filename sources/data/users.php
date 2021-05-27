<?php

include($_SERVER['DOCUMENT_ROOT']."/sources/data/PDO.php");





/* Requete imbriquée : 
select USER.logo, USER.id , USER.username , USER_TEAM.team FROM USER_TEAM

inner join USER ON USER.id = USER_TEAM.user

where team in (select team from USER_TEAM where user = 21) and user != 21
*/

//
function getUserInfo($username,$password){

    try{
    $sql = "SELECT id, firstname, logo FROM user WHERE username='{$username}' AND pass='{$password}'";
    $data = getDB()->query($sql);
    $user = $data->fetch(PDO::FETCH_ASSOC);
    $num_rows = count($user);   

    if($num_rows > 0){
        return $user;
    } else {
        
    }
    }catch (PDOException $e) {
        $e->getMessage();
        var_dump($e);
    }
}

//Retourne les informations de 50 utilisateurs a partir d'un offset pour l'affichage via liste
function getUserCards($offset){

    $users=[];

    $query = "SELECT firstname, lastname, mail, logo, id FROM user LIMIT {$offset},50";
    $stmt = getDB()->prepare($query);
    $stmt->execute();

    foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $user) {
        array_push($users,$user);
    }

    return $users;
}

//Retourne les information complète d'un utilisateur via son ID
function getUserById($id){

    $query = "SELECT * FROM user WHERE id={$id}";
    $stmt = getDB()->prepare($query);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);
}


?>