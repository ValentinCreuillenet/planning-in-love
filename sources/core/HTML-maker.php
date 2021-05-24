<?php

function generateNavbar() {

$content = "";

    foreach (scandir("./pages") as $pages){
        if(is_dir("./pages/{$pages}") && $pages != "." && $pages != "..") {
        $content.= "<div class='dropdown'>";
            $content.="<li class='mr-3'>";
                 $content.="<a class='dropbtn inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4'>".$pages."</a>";
                $content.="<div class='dropdown-content'>";
                foreach(scandir("./pages/{$pages}") as $page){
                    if($page != "." && $page != "..") {
                        $content.="<a href=./?folder={$pages}&file=".rtrim($page,'.php').">".rtrim($page,'.php')."</a>";
                    }
                }
            $content.="</li>";
        $content.="</div>";
    }
}
return $content;

}

?>