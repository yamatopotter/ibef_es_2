<?php
$wp_customize->add_section('global-config', array(
    'priority'   => 1,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => 'Configurações Globais',
    'description'    => 'Realiza mudanças globais no sistema'
));
// Logo do Menu
$wp_customize->add_setting(
    'logo_menu',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'logo_menu',
    array(
        'label'      => __('Logo do Menu', 'logo_menu'),
        'settings'   => 'logo_menu',
        'section'    => 'global-config',
        'type'       => 'image'
    )
));
