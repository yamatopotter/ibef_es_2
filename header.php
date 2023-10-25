<!DOCTYPE html>
<html <?php language_attributes(); ?> itemscope itemtype="http://schema.org/WebPage">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <title><?= get_bloginfo(); ?></title>
    <style>
        :root {
            --intro-bg: <?php if (!empty(get_theme_mod("bg_intro"))) {
                            echo "url(" . get_theme_mod("bg_intro") . ") no-repeat center center/cover";
                        } else {
                            echo "#000";
                        } ?>
        }
    </style>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="<?= get_theme_mod('logo_menu') ?>" alt="Logo" class="img-logo" />
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <?php
                wp_nav_menu(array(
                    'theme_location'    => 'main-menu',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'navbar-collapse flex-grow-0 collapse',
                    'container_id'      => 'navbarSupportedContent',
                    'menu_class'        => 'navbar-nav me-auto mb-2 mb-lg-0 flex gap-3 align-items-center',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ));
                ?>
            </div>
        </nav>
    </header>