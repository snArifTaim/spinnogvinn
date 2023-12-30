<?php 

function get_header(){
    include (app_dir."/themes/header.php");
}

function get_footer(){
    include (app_dir."/themes/footer.php");
}

function get_all_datas(){
    return include app_dir.'/assets/alldatas.php';
}

function get_game_by_slug($slug){
    foreach(get_all_datas() as $data){
        if($data['slug'] == $slug){
            return $data;
        }
    }
    return false;
}

function redirect($path){
    header("Location: $path");
    exit();
}

function get_url($path){
    return $_ENV['app_url'].$path;
}