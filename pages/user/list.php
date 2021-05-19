<?php include("./sources/users.php"); ?>

<style>
.container{
    margin-top:100px;
    margin-bottom:2em;
    display:flex;
    justify-content: space-around;
}
</style>


<div class="container">
    <?php foreach ($users as $user) :?>
        <div class="max-w-xs rounded overflow-hidden shadow-lg my-2">
        <img class="w-full" src=<?=$user["logo"]?> alt="Sunset in the mountains">
        <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2"><?=$user["firstname"]." ".$user["lastname"]?></div>
        <p class="text-grey-darker text-base"><?=$user["mail"]?></p>
        <a class="text-grey-darker text-base font-bold" href=<? echo "./?folder=user&file=detail&id=".$user["id"] ?>>Détails</a>
        </div>
        </div>
    <? endforeach ?>
</div>
