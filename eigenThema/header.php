<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
    <title><?php bloginfo('name'); ?></title>
    <meta name="author" content="Robbe van der Lee, MD1A">
    <meta name="description" content="Mijn wordpress blog">
    <?php wp_head(); ?>
    </head>
    <body>
        <header class="header" style="background-image: url('<?php echo get_template_directory_uri() ?> /img/achtergrond.jpg')">
            <div class="container">
                <nav> 
                    <?php $arguments = array('theme_location' => 'hoofd', ) ?>
                    <?php wp_nav_menu($arguments); ?> 
                </nav>
                <a href="<?php echo home_url(); ?>"" class="header__name"><h1><?php bloginfo('name'); ?></h1></a>
                <p class="header__description"> <?php bloginfo('description');?></p>
            </div>
        </header>