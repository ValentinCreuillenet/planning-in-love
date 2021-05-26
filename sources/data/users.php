<?php

include("./sources/data/PDO.php");



function getUsercards($offset,$pdo){

  $users=[];

  $query = "SELECT firstname, lastname, mail, logo, id FROM user LIMIT {$offset},50";
  $stmt = $pdo->prepare($query);
  $stmt->execute();

  foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $user) {
    array_push($users,$user);
  }

  return $users;

}

function getUserById($id,$pdo){

  $query = "SELECT * FROM user WHERE id=$id";
  $stmt = $pdo->prepare($query);
  $stmt->execute();

  return $stmt->fetchAll(PDO::FETCH_ASSOC)[0];

}


?>