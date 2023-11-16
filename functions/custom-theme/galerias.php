<?php

$wp_customize->add_section('archive_fotos', array(
    'title'      => __('Galerias de Fotos'),
    'panel'     => 'archives',
    'priority'   => 0,
));

// Background
$wp_customize->add_setting(
    'background_archive_galerias',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'background_archive_galerias',
    array(
        'label'      => __('Background', 'background_archive_galerias'),
        'settings'   => 'background_archive_galerias',
        'section'    => 'archive_fotos',
        'type'       => 'image'
    )
));


// Título da archive de galerias

$wp_customize->add_setting(
    'titulo_archive_fotos',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'titulo_archive_fotos',
    array(
        'label'      => __('Título da Página', 'titulo_archive_fotos_label'),
        'settings'   => 'titulo_archive_fotos',
        'section'    => 'archive_fotos',
        'type'       => 'text'
    )
));


$wp_customize->add_setting(
    'subtitulo_archive_fotos',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'subtitulo_archive_fotos',
    array(
        'label'      => __('Subtítulo da Página', 'subtitulo_archive_fotos_label'),
        'settings'   => 'subtitulo_archive_fotos',
        'section'    => 'archive_fotos',
        'type'       => 'text'
    )
));