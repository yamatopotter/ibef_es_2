<?php

$wp_customize->add_section('archive_midia', array(
    'title'      => __('Mídia'),
    'panel'     => 'archives',
    'priority'   => 0,
));

// Background
$wp_customize->add_setting(
    'background_archive_midia',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'background_archive_midia',
    array(
        'label'      => __('Background', 'background_archive_midia'),
        'settings'   => 'background_archive_midia',
        'section'    => 'archive_midia',
        'type'       => 'image'
    )
));

// Título da archive de mídia

$wp_customize->add_setting(
    'titulo_archive_midia',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'titulo_archive_midia',
    array(
        'label'      => __('Título da Página', 'titulo_archive_midia_label'),
        'settings'   => 'titulo_archive_midia',
        'section'    => 'archive_midia',
        'type'       => 'text'
    )
));

// Subtítulo da archive de notícias 

$wp_customize->add_setting(
    'subtitulo_archive_midia',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'subtitulo_archive_midia',
    array(
        'label'      => __('Subtítulo da Página', 'subtitulo_archive_midia_label'),
        'settings'   => 'subtitulo_archive_midia',
        'section'    => 'archive_midia',
        'type'       => 'text'
    )
));