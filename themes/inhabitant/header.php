<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <?php wp_head();?>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body <?php body_class();?>>

    <header>
        
        <nav class="main-menu">
            <?php wp_nav_menu (array(
                'theme_location' => 'main'
            ));?>
        </nav>
        <section class="main-logo">
            <img src="wp-content/themes/inhabitant/images/logos/inhabitent-logo-full.svg">
        </section>
        </div>
    </header>


    