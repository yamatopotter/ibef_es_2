<!DOCTYPE html>
<html <?php language_attributes(); ?> itemscope itemtype="http://schema.org/WebPage">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <title><?= get_bloginfo(); ?></title>
    <style>
        :root {
            --intro-bg: <?php if(!empty(get_theme_mod("bg_intro"))){
                echo "url(".get_theme_mod("bg_intro"). ") no-repeat center center/cover";
            }
            else{
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

                <div class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
                    <?php
                    $args = array('menu_id' => 'main-nav', 'menu_class' => 'menu', 'menu' => 'principal', 'container' => false);
                    wp_nav_menu($args);
                    ?>
                    <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0 flex gap-3 align-items-center">
                        <li class="nav-item">Home</li>
                        <li class="nav-item"><a href="quem-somos.html"></a>Sobre</li>
                        <li class="nav-item">Eventos</li>
                        <li class="nav-item">Mantenedores</li>
                        <li class="nav-item">Contato</li>
                        <li class="nav-item">
                            <a class="btn btn-outline-success">Faça Parte</a>
                        </li>
                    </ul> -->
                </div>
            </div>
        </nav>
    </header>