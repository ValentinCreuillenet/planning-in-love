<?php

include_once($_SERVER['DOCUMENT_ROOT']."/sources/data/PDO.php");




//Recupère tout les memebres d'une équipe d'un utilisateur
function getUserTeammates($userId){

    try{
        $sql = "SELECT user.logo, user.id , user.username , user.mail, user_team.team_id, team.name FROM user_team
        INNER JOIN team ON team.id = user_team.team_id
        INNER JOIN user ON user.id = user_team.user_id
        WHERE team_id IN (SELECT team_id FROM user_team WHERE user_id = {$userId}) AND user_id != {$userId}";
        $data = getDB()->query($sql);
        $teamMates = $data->fetchAll(PDO::FETCH_ASSOC);
        //$num_rows = count($teamMates);

        if($teamMates > 0){
            return $teamMates;
        } else {
            
        }
        }catch (PDOException $e) {
            $e->getMessage();
        }

}

//Recupère les information d'un utilisateur par son mot de passe et nom d'utilisateur
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

//Retourne le nombre totale d'utilisateur
function getNumberOfUsers(){
    
    $query = "SELECT id FROM user";
    $stmt = getDB()->prepare($query);
    $stmt->execute();

    return $stmt->rowCount();
}

?>