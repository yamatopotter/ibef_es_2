<?php
$wp_customize->add_panel('front-page', array(
    'priority'   => 2,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => 'Página inicial',
    'description'    => 'Altera configurações da página inicial'
));

// Submenu do menu principal
$wp_customize->add_section('intro', array(
    'title'      => __('Cabeçalho'),
    'priority'   => 0,
    'panel'    => 'front-page'
));

// Título da intro 

$wp_customize->add_setting(
    'titulo_intro',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'titulo_intro',
    array(
        'label'      => __('Título da introdução', 'titulo_label'),
        'settings'   => 'titulo_intro',
        'section'    => 'intro',
        'type'       => 'text'
    )
));

// Texto da intro
$wp_customize->add_setting(
    'texto_intro',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'texto_intro',
    array(
        'label'      => __('Texto da introdução', 'titulo_label'),
        'settings'   => 'texto_intro',
        'section'    => 'intro',
        'type'       => 'textarea'
    )
));

// Imagem de background Intro
$wp_customize->add_setting(
    'bg_intro',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'bg_intro',
    array(
        'label'      => __('Background da introdução', 'bg_intro'),
        'settings'   => 'bg_intro',
        'section'    => 'intro',
        'type'       => 'image'
    )
));

// Checkbox para ver se vai adicionar o botão da intro ou não

$wp_customize->add_setting(
    'exibir_botao_intro',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'exibir_botao_intro',
    array(
        'label'      => __('Exibir botão da introdução?', 'exibir_botao_intro_label'),
        'settings'   => 'exibir_botao_intro',
        'section'    => 'intro',
        'type'       => 'checkbox'
    )
));

// Texto e link do botão da intro
$wp_customize->add_setting(
    'link_botao_intro',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'link_botao_intro',
    array(
        'label'      => __('Link do botão da Introdução', 'link_botao_intro_label'),
        'settings'   => 'link_botao_intro',
        'section'    => 'intro',
        'type'       => 'text'
    )
));

$wp_customize->add_setting(
    'texto_botao_intro',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'texto_botao_intro',
    array(
        'label'      => __('Texto do botão da introdução', 'texto_botao_intro_label'),
        'settings'   => 'texto_botao_intro',
        'section'    => 'intro',
        'type'       => 'text'
    )
));

/**
 * SUBMENU Página Principal -> Sobre nós
 */

$wp_customize->add_section('sobre_nos', array(
    'title'      => __('Sobre o IBEF'),
    'priority'   => 0,
    'panel'    => 'front-page'
));

// Imagem do sobre nós
$wp_customize->add_setting(
    'img_sobre_nos',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'img_sobre_nos',
    array(
        'label'      => __('Imagem do Sobre Nós', 'img_sobre_nos'),
        'settings'   => 'img_sobre_nos',
        'section'    => 'sobre_nos',
        'type'       => 'image'
    )
));

//Título do bloco sobre nós
$wp_customize->add_setting(
    'titulo_sobre_nos',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'titulo_sobre_nos',
    array(
        'label'      => __('Título do bloco sobre nós', 'titulo_sobre_nos_label'),
        'settings'   => 'titulo_sobre_nos',
        'section'    => 'sobre_nos',
        'type'       => 'text'
    )
));

// Texto do bloco sobre nós
$wp_customize->add_setting(
    'texto_sobre_nos',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'texto_sobre_nos',
    array(
        'label'      => __('Texto do bloco sobre nós', 'texto_sobre_nos_label'),
        'settings'   => 'texto_sobre_nos',
        'section'    => 'sobre_nos',
        'type'       => 'textarea'
    )
));

$wp_customize->add_setting(
    'exibir_botao_sobre',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'exibir_botao_sobre',
    array(
        'label'      => __('Exibir botão do sobre?', 'exibir_botao_sobre_label'),
        'settings'   => 'exibir_botao_sobre',
        'section'    => 'sobre_nos',
        'type'       => 'checkbox'
    )
));

$wp_customize->add_setting(
    'texto_botao_sobre',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'texto_botao_sobre',
    array(
        'label'      => __('Texto do botão da introdução', 'texto_botao_sobre_label'),
        'settings'   => 'texto_botao_sobre',
        'section'    => 'sobre_nos',
        'type'       => 'text'
    )
));

// Seleção da página para link do bloco sobre nós
$wp_customize->add_setting(
    'pagina_sobre_nos',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'pagina_sobre_nos',
    array(
        'label'      => __('Página para linkar o botão saiba mais', 'pagina_sobre_nos_label'),
        'settings'   => 'pagina_sobre_nos',
        'section'    => 'sobre_nos',
        'type'       => 'dropdown-pages'
    )
));

/**
 *  SUBMENU Página Principal -> Porque ser um ibefiano 
 */

$wp_customize->add_section('porque_ser_ibefiano', array(
    'title'      => __('Porque ser um IBEFiano'),
    'priority'   => 0,
    'panel'    => 'front-page'
));

//Título do bloco
$wp_customize->add_setting(
    'titulo_porque_ser_ibefiano',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'titulo_porque_ser_ibefiano',
    array(
        'label'      => __('Título do bloco', 'titulo_porque_ser_ibefiano_label'),
        'settings'   => 'titulo_porque_ser_ibefiano',
        'section'    => 'porque_ser_ibefiano',
        'type'       => 'text'
    )
));

$wp_customize->add_setting('customizer_repeater_porque_ser_ibefiano', array(
    'sanitize_callback' => 'customizer_repeater_sanitize'
));
$wp_customize->add_control(new Customizer_Repeater($wp_customize, 'customizer_repeater_porque_ser_ibefiano', array(
    'label'   => esc_html__('Porque ser um ibefiano', 'customizer-repeater'),
    'section' => 'porque_ser_ibefiano',
    'priority' => 1,
    'customizer_repeater_image_control' => true,
    'customizer_repeater_icon_control' => true,
    'customizer_repeater_title_control' => true,
    'customizer_repeater_subtitle_control' => false,
    'customizer_repeater_text_control' => true,
    'customizer_repeater_link_control' => false,
    'customizer_repeater_shortcode_control' => false,
    'customizer_repeater_repeater_control' => false
)));

/**
 *  SUBMENU Página Principal -> Eventos 
 */
$wp_customize->add_section('eventos', array(
    'title'      => __('Eventos'),
    'priority'   => 0,
    'panel'    => 'front-page'
));

//Título do bloco eventos
$wp_customize->add_setting(
    'titulo_proximos_eventos',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'titulo_proximos_eventos',
    array(
        'label'      => __('Título do bloco de eventos', 'titulo_eventos_label'),
        'settings'   => 'titulo_proximos_eventos',
        'section'    => 'eventos',
        'type'       => 'text'
    )
));

//Subtítulo do bloco eventos
$wp_customize->add_setting(
    'subtitulo_eventos',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'subtitulo_eventos',
    array(
        'label'      => __('Subtítulo do bloco de eventos', 'subtitulo_eventos_label'),
        'settings'   => 'subtitulo_eventos',
        'section'    => 'eventos',
        'type'       => 'text'
    )
));

/**
 *  SUBMENU Página Principal -> Nossos Ibefianos 
 */

$wp_customize->add_section('nossos_ibefianos', array(
    'title'      => __('Nossos IBEFianos'),
    'priority'   => 0,
    'panel'    => 'front-page'
));

//Título do bloco
$wp_customize->add_setting(
    'titulo_nossos_ibefianos',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'titulo_nossos_ibefianos',
    array(
        'label'      => __('Título do bloco', 'titulo_nossos_ibefianos_label'),
        'settings'   => 'titulo_nossos_ibefianos',
        'section'    => 'nossos_ibefianos',
        'type'       => 'text'
    )
));

$wp_customize->add_setting('customizer_repeater_nossos_ibefianos', array(
    'sanitize_callback' => 'customizer_repeater_sanitize'
));
$wp_customize->add_control(new Customizer_Repeater($wp_customize, 'customizer_repeater_nossos_ibefianos', array(
    'label'   => esc_html__('Nossos Ibefianos', 'customizer-repeater'),
    'section' => 'nossos_ibefianos',
    'priority' => 1,
    'customizer_repeater_image_control' => false,
    'customizer_repeater_icon_control' => false,
    'customizer_repeater_title_control' => false,
    'customizer_repeater_subtitle_control' => false,
    'customizer_repeater_text_control' => true,
    'customizer_repeater_link_control' => false,
    'customizer_repeater_shortcode_control' => false,
    'customizer_repeater_repeater_control' => false
)));


/**
 * SUBMENU Página Principal -> Últimas notícias
 */
$wp_customize->add_section('ultimas_noticias', array(
    'title'      => __('Últimas Notícias'),
    'priority'   => 0,
    'panel'    => 'front-page'
));

//Título do bloco ultimas notícias
$wp_customize->add_setting(
    'titulo_ultimas_noticias',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'titulo_ultimas_noticias',
    array(
        'label'      => __('Título do bloco últimas notícias', 'titulo_ultimas_noticias_label'),
        'settings'   => 'titulo_ultimas_noticias',
        'section'    => 'ultimas_noticias',
        'type'       => 'text'
    )
));

/**
 * SUBMENU Página Principal -> Podcast
 */
$wp_customize->add_section('podcast', array(
    'title'      => __('Podcast'),
    'priority'   => 0,
    'panel'    => 'front-page'
));

//Título do bloco podcast 
$wp_customize->add_setting(
    'titulo_podcast',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'titulo_podcast',
    array(
        'label'      => __('Título do bloco de podcast', 'titulo_podcast_label'),
        'settings'   => 'titulo_podcast',
        'section'    => 'podcast',
        'type'       => 'text'
    )
));

//Código do Spotify 
$wp_customize->add_setting(
    'iframe_podcast',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'iframe_podcast',
    array(
        'label'      => __('Código do player do podcast', 'iframe_podcast_label'),
        'settings'   => 'iframe_podcast',
        'section'    => 'podcast',
        'type'       => 'textarea'
    )
));

// Exibir botão

$wp_customize->add_setting(
    'exibir_botao_podcast',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'exibir_botao_podcast',
    array(
        'label'      => __('Exibir botão do podcast?', 'exibir_botao_podcast_label'),
        'settings'   => 'exibir_botao_podcast',
        'section'    => 'podcast',
        'type'       => 'checkbox'
    )
));

$wp_customize->add_setting(
    'texto_botao_podcast',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'texto_botao_podcast',
    array(
        'label'      => __('Texto do botão da introdução', 'texto_botao_podcast_label'),
        'settings'   => 'texto_botao_podcast',
        'section'    => 'podcast',
        'type'       => 'text'
    )
));

$wp_customize->add_setting(
    'link_botao_podcast',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'link_botao_podcast',
    array(
        'label'      => __('Texto do botão da introdução', 'link_botao_podcast_label'),
        'settings'   => 'link_botao_podcast',
        'section'    => 'podcast',
        'type'       => 'text'
    )
));


/**
 * SUBMENU Página Principal -> Mantenedores
 */
$wp_customize->add_section('mantenedores', array(
    'title'      => __('Mantenedores'),
    'priority'   => 0,
    'panel'    => 'front-page'
));

//Título do bloco Mantenedores
$wp_customize->add_setting(
    'titulo_mantenedores',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'titulo_mantenedores',
    array(
        'label'      => __('Título da sessão', 'titulo_mantenedores_label'),
        'settings'   => 'titulo_mantenedores',
        'section'    => 'mantenedores',
        'type'       => 'text'
    )
));

//Subtítulo do bloco Mantenedores
$wp_customize->add_setting(
    'texto_mantenedores',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'texto_mantenedores',
    array(
        'label'      => __('Texto da sessão', 'texto_mantenedores_label'),
        'settings'   => 'texto_mantenedores',
        'section'    => 'mantenedores',
        'type'       => 'text'
    )
));

$wp_customize->add_setting('customizer_repeater_mantenedores', array(
    'sanitize_callback' => 'customizer_repeater_sanitize'
));
$wp_customize->add_control(new Customizer_Repeater($wp_customize, 'customizer_repeater_mantenedores', array(
    'label'   => esc_html__('Nossos Ibefianos', 'customizer-repeater'),
    'section' => 'mantenedores',
    'priority' => 1,
    'customizer_repeater_image_control' => true,
    'customizer_repeater_icon_control' => true,
    'customizer_repeater_title_control' => false,
    'customizer_repeater_subtitle_control' => false,
    'customizer_repeater_text_control' => false,
    'customizer_repeater_link_control' => false,
    'customizer_repeater_shortcode_control' => false,
    'customizer_repeater_repeater_control' => false
)));

/**
 * SUBMENU Página Principal -> Footer
 */
$wp_customize->add_section('footer', array(
    'title'      => __('Rodapé'),
    'priority'   => 0,
    'panel'    => 'front-page'
));

//Telefone de contato
$wp_customize->add_setting(
    'sobre_empresa_footer',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'sobre_empresa_footer',
    array(
        'label'      => __('Sobre a empresa', 'sobre_empresa_footer_label'),
        'settings'   => 'sobre_empresa_footer',
        'section'    => 'footer',
        'type'       => 'textarea'
    )
));

//Telefone de contato
$wp_customize->add_setting(
    'telefone_contato',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'telefone_contato',
    array(
        'label'      => __('Telefone', 'telefone_contato_label'),
        'settings'   => 'telefone_contato',
        'section'    => 'footer',
        'type'       => 'text'
    )
));

//Email de contato
$wp_customize->add_setting(
    'email_contato',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'email_contato',
    array(
        'label'      => __('E-mail', 'email_contato_label'),
        'settings'   => 'email_contato',
        'section'    => 'footer',
        'type'       => 'text'
    )
));

//Endereço do Escritório
$wp_customize->add_setting(
    'endereco_contato',
    array(
        'default' => '',
        'transport' => 'refresh'
    )
);

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'endereco_contato',
    array(
        'label'      => __('Endereço', 'endereco_contato_label'),
        'settings'   => 'endereco_contato',
        'section'    => 'footer',
        'type'       => 'text'
    )
));
