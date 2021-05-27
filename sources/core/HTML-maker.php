<?php

function generateNavbar() {

$content = "";

    $content.="<div>";
    foreach (scandir("./pages") as $pages){
        if(is_dir("./pages/{$pages}") && $pages != "." && $pages != "..") {
        $content.= "<div class='dropdown'>";
            $content.="<li class='mr-3'>";
                $content.="<a href=./?folder={$pages}&file=list class='inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4'>".$pages."</a>";
                $content.="<div class='dropdown-content'>";
            $content.="</li>";
        $content.="</div>";
    }
}
$content.="</div>";
    
return $content;

}

function generateAccountMenu(){

    $content = "";

    $content.='<div class="flex justify-center p-0">';
    // Dropdown
    $content.= "<p class='text-white'></i> Bonjour {$_SESSION['firstname']}</p>";
    $content.='<div class="relative">';
    $content.='<button class="block h-12 w-12 rounded-full overflow-hidden focus:outline-none">';
        $content.="<img class='h-full w-full object-cover' src={$_SESSION['logo']} alt='avatar'>";
    $content.='</button>';
    // Dropdown Body
    $content.='<div class="absolute right-0 w-40 mt-2 py-2 bg-white border rounded shadow-xl">';
        $content.='<a href="#" class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-indigo-700 hover:text-white">Paramètres</a>';
        $content.='<div class="py-2">';
        $content.='<hr></hr>';
    $content.='</div>';
    $content.='<a href="./?action=reset" class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-indigo-700 hover:text-white">';  
        $content.="Se déconnecter";
    $content.='</a>';
    $content.='</div>';
  // Dropdown Body
  $content.='</div>';
  // Dropdown
$content.='</div>';

return $content;

}


?>