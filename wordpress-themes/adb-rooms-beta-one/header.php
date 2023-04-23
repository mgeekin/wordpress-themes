<!DOCTYPE <?php bloginfo('html_type'); ?>>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset=<?php bloginfo('charset'); ?>>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php the_title();?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <? wp_head(); ?>
</head>

<body>

    <div id="wp-app">

        <div class="wp-fse-head">
            <!-- wp:header -->
            <!-- /wp:header -->
        </div>


        <header id="header" class="header">
            <a href="/" id="home">
                <img id="logo" class="logo" src="<?php   echo get_template_directory_uri() ; ?>/img/adbroomslogo.png"
                    class="filter-hue" alt="<?php bloginfo( " name" );?>" title="
                <?php bloginfo( "tagname" );?>" />
            </a>
            <div class="header-nav">
                <?php  get_search_form( ); ?>
                <?php
                    $args=array(
                        "theme_location"=>"primary"
                    );
                    
                    wp_nav_menu($args);
                    ?>
            </div>




        </header>