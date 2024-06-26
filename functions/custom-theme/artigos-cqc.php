<?php

$wp_customize->add_section('archive_artigos_cqc', array(
    'title'      => __('Artigos CQC'),
    'panel'     => 'archives',
    'priority'   => 0,
));

// Background
$wp_customize->add_setting(
    'background_archive_artigos_cqc',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'background_archive_artigos_cqc',
    array(
        'label'      => __('Background', 'background_archive_artigos_cqc'),
        'settings'   => 'background_archive_artigos_cqc',
        'section'    => 'archive_artigos_cqc',
        'type'       => 'image'
    )
));

// Título da archive de notícias 

$wp_customize->add_setting(
    'titulo_archive_artigos_cqc',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'titulo_archive_artigos_cqc',
    array(
        'label'      => __('Título da Página', 'titulo_archive_artigos_label'),
        'settings'   => 'titulo_archive_artigos_cqc',
        'section'    => 'archive_artigos_cqc',
        'type'       => 'text'
    )
));

// Subtítulo da archive de notícias 

$wp_customize->add_setting(
    'subtitulo_archive_artigos_cqc',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'subtitulo_archive_artigos_cqc',
    array(
        'label'      => __('Subtítulo da Página', 'subtitulo_archive_artigos_label'),
        'settings'   => 'subtitulo_archive_artigos_cqc',
        'section'    => 'archive_artigos_cqc',
        'type'       => 'text'
    )
));
