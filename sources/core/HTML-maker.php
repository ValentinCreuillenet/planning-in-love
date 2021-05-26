<?php

function generateNavbar() {

$content = "";

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
return $content;

}

?>