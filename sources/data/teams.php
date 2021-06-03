<?php

include_once($_SERVER['DOCUMENT_ROOT']."/sources/data/PDO.php");


//Retourne les informations de 50 team a partir d'un offset pour l'affichage via liste
function getTeamCards($offset){

    $teams=[];

    $query = "SELECT name, slogan, logo, id FROM team LIMIT {$offset},50";
    $stmt = getDB()->prepare($query);
    $stmt->execute();

    foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $team) {
        array_push($teams,$team);
    }

    return $teams;
}

//Retounre le nombre de personne dans une équipe
function getTeamCount($teamId){

    $count = 0;

    $query = "SELECT DISTINCT user_id FROm user_team WHERE team_id = {$teamId}";
    $stmt = getDB()->prepare($query);
    $stmt->execute();

    $count = $stmt->rowCount();

    return $count;
}

//Retourne le nombre total d'équipes
function getNumberOfTeams(){

    $query = "SELECT id FROM team";
    $stmt = getDB()->prepare($query);
    $stmt->execute();

    return $stmt->rowCount();

}
