<?php

/**
 *Ce fichier récupère les information dans l'URL et charge le bon fichier PHP en accordance
 */

//On récupère d'abord les sources
include("./sources/data/paths.php");

//Si il n'y a pas de parmaètres dans l'URL on charge le dashboard
if(count($_GET) == 0){
    include("./pages/dashboard.php");
} else {

    //On vérifie si l'URL est au bon format
    if(isset($_GET["folder"]) && isset($_GET["file"])){

        //On récupère ensuite les paramètres passeés en arguments
        $folder = $_GET["folder"];

        $file = $_GET["file"];

        //On vérifie ensuite si les paramètres son correct
        if (in_array($folder, $folders) && in_array($file, $files)){
            include("./pages/{$folder}/{$file}.php");
        } else {
            include("./pages/error.php");
        }
    }  else {include("./pages/error.php");} 
}

?>