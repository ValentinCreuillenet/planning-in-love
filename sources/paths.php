<?php

$folders = [];

$files = ["list","detail","user"];

foreach (scandir("./pages") as $pages) {
    if(is_dir("./pages/{$pages}") && $pages != "." && $pages != ".."){
        array_push($folders,$pages);
    }
}
?>