<?php

$wp_customize->add_section('archive_relatorio', array(
    'title'      => __('Relatórios de Gestão'),
    'panel'     => 'archives',
    'priority'   => 0,
));

// Background
$wp_customize->add_setting(
    'background_archive_relatorios',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'background_archive_relatorios',
    array(
        'label'      => __('Background', 'background_archive_relatorios'),
        'settings'   => 'background_archive_relatorios',
        'section'    => 'archive_relatorio',
        'type'       => 'image'
    )
));

// Título da archive de informes

$wp_customize->add_setting(
    'titulo_archive_relatorio',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'titulo_archive_relatorio',
    array(
        'label'      => __('Título da Página', 'titulo_archive_relatorio_label'),
        'settings'   => 'titulo_archive_relatorio',
        'section'    => 'archive_relatorio',
        'type'       => 'text'
    )
));

$wp_customize->add_setting(
    'subtitulo_archive_relatorio',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'subtitulo_archive_relatorio',
    array(
        'label'      => __('Subtítulo da Página', 'subtitulo_archive_relatorio_label'),
        'settings'   => 'subtitulo_archive_relatorio',
        'section'    => 'archive_relatorio',
        'type'       => 'text'
    )
));
