<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne&display=swap" rel="stylesheet"> 
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="wrapper" class="hfeed">
        <header id="header">
            <div id="branding">
                <div id="site-logo" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                    <?php
                    if ( get_theme_mod( 'your_theme_logo' ) ) : ?>
                    <a href="<?php echo home_url(); ?>">
                        <img class=logo src="<?php echo get_theme_mod( 'your_theme_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" >
                    </a>
                    <?php //
                    else : ?>
                    <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
                    <?php endif; 
                    ?>
                </div>
                <div id="site-description" <?php if (!is_single()) {
                    echo ' itemprop="description"';
                } ?>>
                    <?php bloginfo('description'); ?>
                </div>
            </div>
            <nav id="menu" itemscope itemtype="https://schema.org/SiteNavigationElement">
                <?php wp_nav_menu(array('theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>')); ?>
            </nav>
        </header>
        <div id="container">
            <main id="content">