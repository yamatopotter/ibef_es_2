<?php

$wp_customize->add_section('archive_programas_estruturados', array(
    'title'      => __('Programas estruturados'),
    'panel'     => 'archives',
    'priority'   => 0,
));

// Background
$wp_customize->add_setting(
    'background_archive_programas_estruturados',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'background_archive_programas_estruturados',
    array(
        'label'      => __('Background', 'background_archive_programas_estruturados'),
        'settings'   => 'background_archive_programas_estruturados',
        'section'    => 'archive_programas_estruturados',
        'type'       => 'image'
    )
));

// Título da archive de programas estruturados 

$wp_customize->add_setting(
    'titulo_archive_programas_estruturados',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'titulo_archive_programas_estruturados',
    array(
        'label'      => __('Título da Página', 'titulo_archive_programas_estruturados_label'),
        'settings'   => 'titulo_archive_programas_estruturados',
        'section'    => 'archive_programas_estruturados',
        'type'       => 'text'
    )
));

// Subtítulo da archive de programas estruturados 

$wp_customize->add_setting(
    'subtitulo_archive_programas_estruturados',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'subtitulo_archive_programas_estruturados',
    array(
        'label'      => __('Subtítulo da Página', 'subtitulo_archive_programas_estruturados_label'),
        'settings'   => 'subtitulo_archive_programas_estruturados',
        'section'    => 'archive_programas_estruturados',
        'type'       => 'text'
    )
));
