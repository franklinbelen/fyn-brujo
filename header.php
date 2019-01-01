<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

    <?php wp_head(); ?>
</head>
<body>    

    <header class="Header" style="background-image:url('<?php echo get_template_directory_uri() . '/img/bg-header.jpg';?>);">
        <div class="Logo">
            <?php if (has_custom_logo()): ?>
                <?php the_custom_logo(); ?>
            <?php else: ?>
                <a href="<?php echo esc_url( home_url('/') ); ?>">
                    <?php echo get_bloginfo('name'); ?>
                </a>
            <?php endif; ?>
        </div>

        <div class="BtnMenu" id="BtnMenu">
            <span></span>
            <span></span>
            <span></span>
        </div>


        <?php
            if ( has_nav_menu('main_menu' )):
                wp_nav_menu( array(
                    'theme_location' => 'main_menu',
                    'container' => 'nav',
                    'container_class' => 'Menu',
                    'container_id' => 'Menu',
                    'menu_class' => 'MenuNavegacion'
                ));
            else: ?>
                <nav class="Menu" id="Menu">
                    <ul class="MenuNavegacion">
                        <?php wp_list_pages('title_li'); ?>
                    </ul>
                </nav>
         <?php endif; ?>

    </header>

    <!-- Fyn Start Slider -->
    <div class="SliderAutomatico">
		<ul>
			<li>
                <img src="<?php echo get_template_directory_uri() . '/img/slider1.jpg';?>" alt="">
            </li>
			<li>
                <img src="<?php echo get_template_directory_uri() . '/img/slider2.jpg';?>" alt="">
            </li>
		</ul>
    </div>
    <!-- Fyn End Slider -->
    <main>