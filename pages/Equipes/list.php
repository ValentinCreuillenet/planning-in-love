
<?php include("./sources/data/teams.php"); ?>

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

?>
<?

//On vérifie si un offset à été precisé sinon on considère que c'est 0
if(!isset($_GET["offset"])){
    	$offset=0;
    } else {
        $offset = $_GET["offset"];
    }


$teams = getTeamCards($offset);

?>

<!-- On crée une carte pour chaque utilisateur récupéré-->
<div class="displaybox">
    <?php foreach ($teams as $team) :?>
        <div class="bg-white shadow-md  rounded-3xl p-4 display-card">
                <div class="flex-none lg:flex">
                    <div class=" h-full w-full lg:h-48 lg:w-48   lg:mb-0 mb-3">
                        <img src=<?= explode("?",$team["logo"])[0]?>  alt="Just a flower" class=" w-full  object-scale-down lg:object-cover  lg:h-48 rounded-2xl">
                    </div>
                    <div class="flex-auto ml-3 justify-evenly py-2">
                        <div class="flex flex-wrap ">
                            <div class="w-full flex-none text-xs text-blue-700 font-medium ">
                                Nom de l'équipe :
                            </div>
                            <h2 class="flex-auto text-lg font-medium"><?= $team["name"] ?></h2>
                        </div>
                        <p class="mt-3"></p>
                        <div class="flex py-4  text-sm text-gray-600 text-center">
                                <p class="text-center"> Slogan : <?= $team['slogan'] ?></p>
                        </div>
                        <div class="flex p-4 pb-2 border-t border-gray-200 "></div>
                        <div class="flex space-x-3 text-sm font-medium">
                            <div class="flex-auto flex space-x-3">
                                <span>Membres : <?= getTeamCount($team['id']) ?></span>
                            </div>
                            <a
                                class="mb-2 md:mb-0 bg-gray-900 px-5 py-2 shadow-sm tracking-wider text-white rounded-full hover:bg-gray-800"
                                href="http://localhost:9966/?folder=Equipes&file=detail&id=<?= $team['id'] ?>" aria-label="like">Détails
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    
    <? endforeach ?>
</div>

<?php $totalToLoad = getNumberOfTeams() ?>
<? include_once("./template/pagination.php") ?>
