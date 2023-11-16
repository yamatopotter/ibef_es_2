<?php

$wp_customize->add_section('archive_carta', array(
    'title'      => __('Cartas'),
    'panel'     => 'archives',
    'priority'   => 0,
));

// Background
$wp_customize->add_setting(
    'background_archive_cartas',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'background_archive_cartas',
    array(
        'label'      => __('Background', 'background_archive_cartas'),
        'settings'   => 'background_archive_cartas',
        'section'    => 'archive_carta',
        'type'       => 'image'
    )
));

// Título da archive de cartas

$wp_customize->add_setting(
    'titulo_archive_carta',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'titulo_archive_carta',
    array(
        'label'      => __('Título da Página', 'titulo_archive_carta_label'),
        'settings'   => 'titulo_archive_carta',
        'section'    => 'archive_carta',
        'type'       => 'text'
    )
));

$wp_customize->add_setting(
    'subtitulo_archive_carta',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'subtitulo_archive_carta',
    array(
        'label'      => __('Subtítulo da Página', 'subtitulo_archive_carta_label'),
        'settings'   => 'subtitulo_archive_carta',
        'section'    => 'archive_carta',
        'type'       => 'text'
    )
));
