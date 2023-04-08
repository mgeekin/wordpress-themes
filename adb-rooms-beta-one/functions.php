<? 
function add_scripts(){

    wp_enqueue_script('jquery');
    
};


add_action('wp_enqueue_scripts', 'add_scripts');


?>