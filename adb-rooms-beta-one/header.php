<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php the_title();?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <? wp_head(); ?>
</head>

<body>

    <div id="wp-app">

        <div class="wp-head">

        </div>


        <header class="header">

            <!-- wp:header -->
            <!-- /wp:header -->

            <a href="/" id="home">
                <img id="logo" class="logo" src="<?   echo get_template_directory_uri() ; ?>/img/adbroomslogo.png"
                    class="filter-hue" alt="<? bloginfo( " name" );?>"
                />
            </a>
            <span>
                <?include("searchPart.php") ?>
            </span>
            <span>login</span>
        </header>