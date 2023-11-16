<?php

$wp_customize->add_section('archive_midia', array(
    'title'      => __('Mídia'),
    'panel'     => 'archives',
    'priority'   => 0,
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

// Quantidade de posts de mídia
$wp_customize->add_setting(
    'quantidade_posts_midia',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'quantidade_posts_midia',
    array(
        'label'      => __('Quantidade de Post', 'quantidade_posts_midia_label'),
        'settings'   => 'quantidade_posts_midia',
        'section'    => 'archive_midia',
        'type'       => 'number'
    )
));
