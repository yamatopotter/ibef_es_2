<?php

$wp_customize->add_section('archive_resenhas', array(
    'title'      => __('Resenhas'),
    'panel'     => 'archives',
    'priority'   => 0,
));

// Background
$wp_customize->add_setting(
    'background_archive_resenhas',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'background_archive_resenhas',
    array(
        'label'      => __('Background', 'background_archive_resenhas'),
        'settings'   => 'background_archive_resenhas',
        'section'    => 'archive_resenhas',
        'type'       => 'image'
    )
));

// Título da archive de notícias 

$wp_customize->add_setting(
    'titulo_archive_resenhas',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'titulo_archive_resenhas',
    array(
        'label'      => __('Título da Página', 'titulo_archive_resenhas_label'),
        'settings'   => 'titulo_archive_resenhas',
        'section'    => 'archive_resenhas',
        'type'       => 'text'
    )
));

// Subtítulo da archive de notícias 

$wp_customize->add_setting(
    'subtitulo_archive_resenhas',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'subtitulo_archive_resenhas',
    array(
        'label'      => __('Subtítulo da Página', 'subtitulo_archive_resenhas_label'),
        'settings'   => 'subtitulo_archive_resenhas',
        'section'    => 'archive_resenhas',
        'type'       => 'text'
    )
));
