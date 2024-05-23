<?php

$wp_customize->add_section('archive_eventos', array(
    'title'      => __('Eventos'),
    'panel'     => 'archives',
    'priority'   => 0,
));

// Background
$wp_customize->add_setting(
    'background_archive_eventos',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'background_archive_eventos',
    array(
        'label'      => __('Background', 'background_archive_eventos'),
        'settings'   => 'background_archive_eventos',
        'section'    => 'archive_eventos',
        'type'       => 'image'
    )
));

// Título da archive de Eventos

$wp_customize->add_setting(
    'titulo_archive_eventos',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'titulo_archive_eventos',
    array(
        'label'      => __('Título da Página', 'titulo_archive_eventos_label'),
        'settings'   => 'titulo_archive_eventos',
        'section'    => 'archive_eventos',
        'type'       => 'text'
    )
));

// Subtítulo

$wp_customize->add_setting(
    'subtitulo_archive_eventos',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'subtitulo_archive_eventos',
    array(
        'label'      => __('Subtítulo da Página', 'subtitulo_archive_eventos_label'),
        'settings'   => 'subtitulo_archive_eventos',
        'section'    => 'archive_eventos',
        'type'       => 'text'
    )
));