<? 
//function to log in screenwith generatorjs
function jslog($args){
    $script_name="logger";
    $script_url = get_stylesheet_directory_uri() . $script_name.'.js';
    $cmd="log('$args')";
    wp_register_script($script_name, $script_url, array(), '1.0.0', true);
    wp_enqueue_script($script_name);
    wp_add_inline_script($script_name, $cmd);
};




// add scripts and styles
function add_theme_scripts_and_styles(){
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    // wp_enqueue_style( 'mainstyle',get_template_directory_uri() ."/mainstyle.css" );
    wp_enqueue_script( "generator", "https://generatorjs.github.io/generatorjs.cdn/generator.js", null, false );
    wp_enqueue_script( 'main.js', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
    wp_localize_script('main.js', 'myTheme', array('uri' => get_template_directory_uri()));
};


add_action('wp_enqueue_scripts', 'add_theme_scripts_and_styles');

?>