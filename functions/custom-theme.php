<?php

include_once('custom-controls.php');

function theme_customizer_settings($wp_customize)
{
    /**
     * Configurações Globais
     */

    require_once("custom-theme/global.php");

    /**
     * Configurações da página inicial
     */


    require_once("custom-theme/front-page.php");
   

    /**
     * Páginas Internas
     */
    $wp_customize->add_panel('archives', array(
        'priority'   => 3,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => 'Páginas Internas',
        'description'    => 'Altera configurações das páginas que listam conteúdos'
    ));


    /**
     * SUBMENU Páginas Internas -> Programas estruturados
     */

    require_once("custom-theme/programas-estruturados.php");

    
    /**
     * SUBMENU Páginas Internas -> Notícias
     */

    require_once("custom-theme/noticias.php");

    /**
     * SUBMENU Páginas Internas -> Eventos
     */
    
    require_once("custom-theme/eventos.php");

    /**
     * SUBMENU Páginas Internas -> Mídia
     */
   
    require_once("custom-theme/midia.php");

    /**
     * SUBMENU Páginas Internas -> Cartas
     */
    
    require_once("custom-theme/cartas.php");

    /**
     * SUBMENU Páginas Internas -> Galerias de fotos
     */
    
    require_once("custom-theme/galerias.php");

    /**
     * SUBMENU Páginas Internas -> Informes
     */
    
    require_once("custom-theme/informes.php");

    /**
     * SUBMENU Páginas Internas -> Relatório
     */
    
    require_once("custom-theme/relatorios.php");
}

function returnCustomTerm($nameTerm)
{
    $terms = get_terms(array(
        'taxonomy' => $nameTerm,
        'hide_empty' => false,
    ));
    $cats = array();

    foreach ($terms as $term) {

        // uncomment to see all $category data
        #print_r($category);

        if ($i == 0) {
            $default = $term->term_id;
            $i++;
        }
        $cats[$term->name] = $term->name;
    }

    return $cats;
}

add_action('customize_register', 'theme_customizer_settings');
