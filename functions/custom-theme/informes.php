<?php

$wp_customize->add_section('archive_informe', array(
    'title'      => __('Informe'),
    'panel'     => 'archives',
    'priority'   => 0,
));

// Background
$wp_customize->add_setting(
    'background_archive_informes',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'background_archive_informes',
    array(
        'label'      => __('Background', 'background_archive_informes'),
        'settings'   => 'background_archive_informes',
        'section'    => 'archive_informe',
        'type'       => 'image'
    )
));

// Título da archive de informes

$wp_customize->add_setting(
    'titulo_archive_informe',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'titulo_archive_informe',
    array(
        'label'      => __('Título da Página', 'titulo_archive_informe_label'),
        'settings'   => 'titulo_archive_informe',
        'section'    => 'archive_informe',
        'type'       => 'text'
    )
));

// subtítulo da archive de informes

$wp_customize->add_setting(
    'subtitulo_archive_informe',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'subtitulo_archive_informe',
    array(
        'label'      => __('Subtítulo da Página', 'subtitulo_archive_informe_label'),
        'settings'   => 'subtitulo_archive_informe',
        'section'    => 'archive_informe',
        'type'       => 'text'
    )
));
