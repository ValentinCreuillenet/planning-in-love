<!--Ce script sert a afficher la liste des utilisateurs -->

<!--Ou récupère le script qui va effectuer toutes les actions sur les utilisateurs -->
<?php include("./sources/data/users.php"); ?>

<style>
.displaybox{
    width:100%;
    margin-top:100px;
    margin-bottom:100px;
    display:flex;
    justify-content: space-around;
    flex-wrap: wrap;
}

.display-card{
    margin:2em;
    text-align:center;
}
</style>

<?php

//On vérifie si un offset à été precisé sinon on considère que c'est 0
if(!isset($_GET["offset"])){
    	$offset=0;
    } else {
        $offset = $_GET["offset"];
    }

//On récupère ensuite 50 utilisateur a afficher via cet offset
$users = getUserCards($offset);

?>

<!-- On crée une carte pour chaque utilisateur récupéré-->
<div class="displaybox">
    <?php foreach ($users as $user) :?>
        <div class="display-card max-w-xs rounded overflow-hidden shadow-lg my-2">
        <img class="w-full" src=<?= explode("?",$user["logo"])[0]?> alt="Sunset in the mountains">
        <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2"><?=$user["firstname"]." ".$user["lastname"]?></div>
        <p class="text-grey-darker text-base"><?=$user["mail"]?></p>
        <a class="text-grey-darker text-base font-bold" href=<?= "./?folder=Utilisateurs&file=detail&id=".$user["id"] ?>>Détails</a>
        </div>
        </div>
    <? endforeach ?>
</div>

<?php $totalToLoad = getNumberOfUsers() ?>
<? include_once($_SERVER['DOCUMENT_ROOT']."/template/pagination.php") ?>

