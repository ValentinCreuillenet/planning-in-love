<!-- Ce script affiche les detail de 1 utilisateur-->

<!--Ou récupère le script qui va effectuer toute les actions sur les utilisateurs -->

<?php include_once("./sources/data/users.php") ?>
<?php include_once("./sources/core/HTML-maker.php") ?>

<?php 

	//On vérifie si un id a bien été passé en param, sinon on prends 0 par default
	$id = isset($_GET["id"]) ? $_GET["id"] : 0;

	//On récupère tout les informations de l'utilisateur a afficher
    $userToDisplay = getUserById($id);


	//On recupère la list des équipiers ce cet utilisateur
	$userTeamMates = getUserTeammates($id);

	//Si l'id ne corrsepond pas on affiche un message d'erreur
    if(!$userToDisplay){
        include("./pages/error.php");
    } else { ?>


<!-- Affichage des détails de l'utilisateur -->
<body class="font-sans antialiased text-gray-900 leading-normal tracking-wider bg-cover" >



  <div class="max-w-4xl flex items-center h-auto lg:h-screen flex-wrap mx-auto my-32 lg:my-0">
    
	<!--Main Col-->
	<div id="profile" class="w-full lg:w-3/5 rounded-lg lg:rounded-l-lg lg:rounded-r-none shadow-2xl bg-white opacity-75 mx-6 lg:mx-0">
	

		<div class="p-4 md:p-12 text-center lg:text-left">
			
			
			<h1 class="text-3xl font-bold pt-8 lg:pt-0"><?=$userToDisplay["firstname"]." ".$userToDisplay["lastname"]?></h1>
			<div class="mx-auto lg:mx-0 w-4/5 pt-3 border-b-2 border-green-500 opacity-25"></div>
			<p class="pt-4 text-base font-bold flex items-center justify-center lg:justify-start"><svg class="h-4 fill-current text-green-700 pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9 12H1v6a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-6h-8v2H9v-2zm0-1H0V5c0-1.1.9-2 2-2h4V2a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v1h4a2 2 0 0 1 2 2v6h-9V9H9v2zm3-8V2H8v1h4z"/></svg><?= $userToDisplay["mail"] ?></p>
			
			<div class="pt-12 pb-8">
				<button class="bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded-full">
				  Demander en ami
				</button> 
			</div>
		</div>

	</div>
	
	<!--Img Col-->
	<div class="w-full lg:w-2/5">
		<!-- Big profile image for side bar (desktop) -->
		<img src=<?=explode("?",$userToDisplay["logo"])[0]?> class="rounded-none lg:rounded-lg shadow-2xl hidden lg:block">
		<!-- Image from: http://unsplash.com/photos/MP0IUfwrn0A -->
		
	</div>
	

</div>

			<!-- Liste des équipiers -->
<!---------------------------------------------------------->

<!-- This example requires Tailwind CSS v2.0+ -->
<h1 class = "text-center m-12">Liste des équipiers</h1>
<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Nom d'utilisateur
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Mél
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Nom de l'équipe
              </th>
              <th scope="col" class="relative px-6 py-3">
                <span class="sr-only">Détails</span>
              </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
          </tbody>
		  <?php foreach ($userTeamMates as $teamMate) : ?>
				<?= generateTeamMateCard($teamMate) ?>
			<? endforeach ?>
        </table>
      </div>
    </div>
  </div>
</div>

</body>


<?php } ?>