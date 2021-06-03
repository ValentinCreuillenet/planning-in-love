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
    $content.= "<p class='text-white align-middle'></i> Bonjour {$_SESSION['firstname']}</p>";
    $content.='<div class="relative">';
    $content.='<button class="block h-12 w-12 rounded-full overflow-hidden focus:outline-none" id="accBtn">';
        $content.="<img class='h-full w-full object-cover' src={$_SESSION['logo']} alt='avatar'>";
    $content.='</button>';
    // Dropdown Body
    $content.='<div class="absolute right-0 w-40 mt-2 py-2 bg-white border rounded shadow-xl hidden" id="accBody">';
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

function generateTeamMateCard($teamMate){
    $content = "";

        $content.="<tr>";
            $content.="<td class='px-6 py-4 whitespace-nowrap'>";
                $content.="<div class='flex items-center'>";
                    $content.="<div class='flex-shrink-0 h-10 w-10'>";
                    $content.="<img class='h-10 w-10 rounded-full' src={$teamMate['logo']} alt=''>";
                $content.="</div>";
            $content.="<div class='ml-4'>";
                $content.="<div class='text-sm font-medium text-gray-900'>";
                    $content.=$teamMate['username'];
                $content.="</div>";
            $content.="</div>";
            $content.="</div>";
            $content.="</td>";
        $content.="<td class='px-6 py-4 whitespace-nowrap'>";
        $content.="<div class='text-sm text-gray-900'>{$teamMate['mail']}</div>";
        $content.="</td>";
        $content.="<td class='px-6 py-4 whitespace-nowrap'>";
        $content.="<span class='text-sm font-medium text-gray-900'>";
        $content.=$teamMate['name'];
        $content.="</span>";
        $content.="</td>";
        $content.="<td class='px-6 py-4 whitespace-nowrap text-right text-sm font-medium'>";
        $content.="<a href='http://localhost:9966/?folder=Utilisateurs&file=detail&id={$teamMate['id']}' class='text-indigo-600 hover:text-indigo-900'>Détails</a>";
        $content.="</td>";
        $content.="</tr>";

    return $content;
}


?>