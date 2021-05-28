<!-- Ce script affiche les detail de 1 utilisateur-->

<!--Ou récupère le script qui va effectuer toute les actions sur les utilisateurs -->

<?php include("./sources/data/users.php") ?>

<?php 

	//On vérifie si un id a bien été passé en param, sinon on prends 0 par default
	$id = isset($_GET["id"]) ? $_GET["id"] : 0;

	//On récupère tout les informations de l'utilisateur a afficher
    $userToDisplay = getUserById($id);


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
</body>


<?php } ?>