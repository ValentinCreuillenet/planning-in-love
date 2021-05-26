<?php

include("./sources/data/PDO.php");


/*
function getFriendCards($offset,$pdo,$id){

  $friends=[];

  $query = "SELECT user.firstname, user.lastname, user.mail, user.logo, user.id FROM user_team
            LIMIT {$offset},50
            INNER JOIN user ON user.id = user_team.user
            WHERE user_team.id = $id";
  $stmt = $pdo->prepare($query);
  $stmt->execute();

  foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $friend) {
    array_push($friends,$friend);
  }

  return $friends;

}
*/


/* Requete imbriquée : 
select USER.logo, USER.id , USER.username , USER_TEAM.team FROM USER_TEAM

inner join USER ON USER.id = USER_TEAM.user

where team in (select team from USER_TEAM where user = 21) and user != 21
*/

//
function getUserInfo($username,$password,$pdo){

    $query = "SELECT firstname, logo, id FROM user WHERE user.username LIKE {$username} AND user.password LIKE {$password}";
    $stmt = $pdo->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC)[0];
}

//Retourne les informations de 50 utilisateurs a partir d'un offset pour l'affichage via liste
function getUserCards($offset,$pdo){

    $users=[];

    $query = "SELECT firstname, lastname, mail, logo, id FROM user LIMIT {$offset},50";
    $stmt = $pdo->prepare($query);
    $stmt->execute();

    foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $user) {
        array_push($users,$user);
    }

    return $users;
}

//Retourne les information complète d'un utilisateur via son ID
function getUserById($id,$pdo){

    $query = "SELECT * FROM user WHERE id={$id}";
    $stmt = $pdo->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC)[0];
}


?>