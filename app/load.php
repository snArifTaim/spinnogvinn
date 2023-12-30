<?php 
include app_dir.'/app/functions.php';

$dotenv = Dotenv\Dotenv::createImmutable(app_dir);
$dotenv->safeLoad();


// routing
$router = new AltoRouter();

$router->map('GET|POST','/',function(){
    // db call 
    include app_dir.'/themes/index.php';

},'home_page');

$router->map('GET|POST','/view/[*:slug]',function($slug){
    $myData= get_game_by_slug($slug);

    if($myData == false){ 
        //  'no games found';
        redirect('/');
    } 
 
    include app_dir.'/themes/single_card.php';

});


$router->map('GET|POST','/page/[*:slug]',function($slug){
    $dir= app_dir.'/themes/pages/'.$slug.'.php';
    if(!file_exists($dir)){
        redirect('/');
    }
    include $dir;
});


$match = $router->match(); 

if( is_array($match) && is_callable( $match['target'] ) ) {
	call_user_func_array( $match['target'], $match['params'] );
} else {
	// no route was matched
    http_response_code(404);
    include app_dir.'/themes/404.php';
}
