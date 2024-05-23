<?php

function register_post_types()
{

    /* -------------------------------------------------------------------------- */
    /*                    Registro do tipo Programas estruturados                 */
    /* -------------------------------------------------------------------------- */

    register_post_type('programas', array(
        'labels' => array(
            'name' => __('Programa'),
            'singular_name' => __('Programa'),
            'add_new' => __('Adicionar novo programa'),
            'add_new_item' => __('Adicionar novo programa'),
            'edit_item' => __('Editar programa'),
            'new_item' => __('Novo programa'),
            'all_items' => __('Todos as programas'),
            'view_item' => __('Exibir programa'),
            'search_items' => __('Buscar programa'),
            'not_found' => __('Nenhuma programa encontrado'),
            'not_found_in_trash' => __('Nenhum item encontrado na Lixeira'),
            'parent_item_colon' => '',
            'menu_name' => 'Programas Estruturados'
        ),
        'public' => true,
        'menu_icon' => 'dashicons-media-document',
        'has_archive' => true,
        'hierarchical' => true,
        'rewrite' => array('slug' => 'programas'),
        'show_in_nav_menus' => true,
        'supports' => array(
            'title', 'excerpt', 'editor', 'thumbnail'
        )
    ));


    /* -------------------------------------------------------------------------- */
    /*                          Registro do tipo notícias                         */
    /* -------------------------------------------------------------------------- */

    register_post_type('noticias', array(
        'labels' => array(
            'name' => __('Notícia'),
            'singular_name' => __('Notícia'),
            'add_new' => __('Adicionar nova notícia'),
            'add_new_item' => __('Adicionar nova notícia'),
            'edit_item' => __('Editar notícia'),
            'new_item' => __('Nova notícia'),
            'all_items' => __('Todas as notícias'),
            'view_item' => __('Exibir notícia'),
            'search_items' => __('Buscar notícia'),
            'not_found' => __('Nenhuma notícia encontrado'),
            'not_found_in_trash' => __('Nenhum item encontrado na Lixeira'),
            'parent_item_colon' => '',
            'menu_name' => 'Notícias'
        ),
        'public' => true,
        'menu_icon' => 'dashicons-media-document',
        'has_archive' => true,
        'taxonomies' => array('category', 'post_tag'),
        'hierarchical' => true,
        'rewrite' => array('slug' => 'noticias'),
        'show_in_nav_menus' => true,
        'supports' => array(
            'title', 'excerpt', 'editor', 'thumbnail'
        )
    ));

    /* -------------------------------------------------------------------------- */
    /*                          Registro do tipo artigos                          */
    /* -------------------------------------------------------------------------- */

    register_post_type('artigos', array(
        'labels' => array(
            'name' => __('Artigo'),
            'singular_name' => __('Artigo'),
            'add_new' => __('Adicionar novo artigo'),
            'add_new_item' => __('Adicionar novo artigo'),
            'edit_item' => __('Editar artigo'),
            'new_item' => __('Novo artigo'),
            'all_items' => __('Todos os artigos'),
            'view_item' => __('Exibir artigo'),
            'search_items' => __('Buscar artigo'),
            'not_found' => __('Nenhum artigo encontrado'),
            'not_found_in_trash' => __('Nenhum item encontrado na Lixeira'),
            'parent_item_colon' => '',
            'menu_name' => 'Artigos'
        ),
        'public' => true,
        'menu_icon' => 'dashicons-media-document',
        'has_archive' => true,
        'taxonomies' => array('artigos_category', 'artigos_tag'),
        'hierarchical' => true,
        'rewrite' => array('slug' => 'artigos'),
        'show_in_nav_menus' => true,
        'supports' => array(
            'title', 'excerpt', 'editor', 'thumbnail'
        )
    ));

    /* -------------------------------------------------------------------------- */
    /*                           Registro do tipo Mídia                           */
    /* -------------------------------------------------------------------------- */

    register_post_type('midia', array(
        'labels' => array(
            'name' => __('Mídia'),
            'singular_name' => __('Mídia'),
            'add_new' => __('Adicionar nova'),
            'add_new_item' => __('Adicionar nova mídia'),
            'edit_item' => __('Editar mídia'),
            'new_item' => __('Nova mídia'),
            'all_items' => __('Todas as mídias'),
            'view_item' => __('Exibir mídia'),
            'view_items' => __('Exibir mídias'),
            'search_items' => __('Buscar mídia'),
            'not_found' => __('Nenhuma mídia encontrado'),
            'not_found_in_trash' => __('Nenhuma mídia encontrado na lixeira'),
            'archives' => ('Histórico de mídias'),
            'parent_item_colon' => '',
            'menu_name' => 'IBEF na Mídia'
        ),
        'public' => true,
        'menu_icon' => 'dashicons-id-alt',
        'public_queryable' => true,
        'hierarchical' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'midia'),
        'show_in_nav_menus' => true,
        'show_in_rest' => true,
        'query_var' => true,
        'can_export' => true,
        'supports' => array(
            'title', 'thumbnail', 'custom-fields'
        )
    ));

    /* -------------------------------------------------------------------------- */
    /*                           Registro do tipo Cartas                          */
    /* -------------------------------------------------------------------------- */

    register_post_type('carta', array(
        'labels' => array(
            'name' => __('Carta'),
            'singular_name' => __('Carta'),
            'add_new' => __('Adicionar carta'),
            'add_new_item' => __('Adicionar nova carta'),
            'edit_item' => __('Editar carta'),
            'new_item' => __('Nova carta'),
            'all_items' => __('Todas as cartas'),
            'view_item' => __('Exibir carta'),
            'view_items' => __('Exibir cartas'),
            'search_items' => __('Buscar carta'),
            'not_found' => __('Nenhuma carta encontrado'),
            'not_found_in_trash' => __('Nenhuma carta encontrado na lixeira'),
            'archives' => ('Todas as Cartas'),
            'parent_item_colon' => '',
            'menu_name' => 'Cartas'
        ),
        'public' => true,
        'menu_icon' => 'dashicons-email',
        'public_queryable' => true,
        'hierarchical' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'carta'),
        'show_in_nav_menus' => true,
        'show_in_rest' => true,
        'query_var' => true,
        'can_export' => true,
        'supports' => array(
            'title', 'thumbnail', 'custom-fields'
        )
    ));

    /* -------------------------------------------------------------------------- */
    /*                          Registro do tipo Informe                          */
    /* -------------------------------------------------------------------------- */

    register_post_type('informe', array(
        'labels' => array(
            'name' => __('Informe'),
            'singular_name' => __('Informe'),
            'add_new' => __('Adicionar nova'),
            'add_new_item' => __('Adicionar novo informe'),
            'edit_item' => __('Editar informe'),
            'new_item' => __('Novo informe'),
            'all_items' => __('Todos os informe'),
            'view_item' => __('Exibir informe'),
            'view_items' => __('Exibir informes'),
            'search_items' => __('Buscar informe'),
            'not_found' => __('Nenhum informe encontrado'),
            'not_found_in_trash' => __('Nenhum informe encontrado na lixeira'),
            'archives' => ('Todos os informes'),
            'parent_item_colon' => '',
            'menu_name' => 'Informe'
        ),
        'public' => true,
        'menu_icon' => 'dashicons-info-outline',
        'public_queryable' => true,
        'hierarchical' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'informe'),
        'show_in_nav_menus' => true,
        'show_in_rest' => true,
        'query_var' => true,
        'can_export' => true,
        'supports' => array(
            'title', 'thumbnail', 'custom-fields'
        )
    ));

    /* -------------------------------------------------------------------------- */
    /*                          Registro do tipo Relatórios                       */
    /* -------------------------------------------------------------------------- */

    register_post_type('relatorio', array(
        'labels' => array(
            'name' => __('Relatório'),
            'singular_name' => __('Relatório'),
            'add_new' => __('Adicionar novo'),
            'add_new_item' => __('Adicionar novo relatório'),
            'edit_item' => __('Editar relatório'),
            'new_item' => __('Novo relatório'),
            'all_items' => __('Todos os relatórios'),
            'view_item' => __('Exibir relatório'),
            'view_items' => __('Exibir relatórios'),
            'search_items' => __('Buscar relatório'),
            'not_found' => __('Nenhum relatório encontrado'),
            'not_found_in_trash' => __('Nenhum relatório encontrado na lixeira'),
            'archives' => ('Todos os relatórios'),
            'parent_item_colon' => '',
            'menu_name' => 'Relatórios de Gestão'
        ),
        'public' => true,
        'menu_icon' => 'dashicons-chart-pie',
        'public_queryable' => true,
        'hierarchical' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'relatorio'),
        'show_in_nav_menus' => true,
        'show_in_rest' => true,
        'query_var' => true,
        'can_export' => true,
        'supports' => array(
            'title', 'thumbnail', 'custom-fields'
        )
    ));

    /* -------------------------------------------------------------------------- */
    /*                          Registro do tipo Eventos                          */
    /* -------------------------------------------------------------------------- */

    register_post_type('eventos', array(
        'labels' => array(
            'name' => __('Eventos'),
            'singular_name' => __('Evento'),
            'add_new' => __('Adicionar novo'),
            'add_new_item' => __('Adicionar novo evento'),
            'edit_item' => __('Editar evento'),
            'new_item' => __('Novo evento'),
            'all_items' => __('Todos os evento'),
            'view_item' => __('Exibir evento'),
            'view_items' => __('Exibir eventos'),
            'search_items' => __('Buscar evento'),
            'not_found' => __('Nenhum evento encontrado'),
            'not_found_in_trash' => __('Nenhum evento encontrado na lixeira'),
            'archives' => ('Histórico de eventos'),
            'parent_item_colon' => '',
            'menu_name' => 'Eventos'
        ),
        'public' => true,
        'menu_icon' => 'dashicons-calendar-alt',
        'public_queryable' => true,
        'hierarchical' => true,
        'taxonomies' => array('eventos_category'),
        'has_archive' => true,
        'rewrite' => array('slug' => 'eventos'),
        'show_in_nav_menus' => true,
        'show_in_rest' => true,
        'query_var' => true,
        'can_export' => true,
        'capability_type' => 'post',
        'supports' => array(
            'title', 'editor', 'thumbnail', 'custom-fields'
        )
    ));

    /* -------------------------------------------------------------------------- */
    /*                          Registro do tipo Galerias                         */
    /* -------------------------------------------------------------------------- */
    register_post_type('galerias', array(
        'labels' => array(
            'name' => __('Galeria de Fotos'),
            'singular_name' => __('Galeria de Foto'),
            'add_new' => __('Adicionar nova galeria'),
            'add_new_item' => __('Adicionar nova galeria'),
            'edit_item' => __('Editar galeria'),
            'new_item' => __('Nova galeria'),
            'all_items' => __('Todas as galerias'),
            'view_item' => __('Exibir galeria'),
            'search_items' => __('Buscar galerias'),
            'not_found' => __('Nenhuma galeria encontrado'),
            'not_found_in_trash' => __('Nenhuma galeria encontrada na Lixeira'),
            'parent_item_colon' => '',
            'menu_name' => 'Galeria de Fotos'
        ),
        'public' => true,
        'menu_icon' => 'dashicons-format-gallery',
        'has_archive' => true,
        'hierarchical' => true,
        'rewrite' => array('slug' => 'fotos'),
        'show_in_nav_menus' => true,
        'supports' => array(
            'title', 'editor', 'thumbnail'
        )
    ));
}

add_action('init', 'register_post_types');

// --------------- Metabox - Documentos - Background -----------------------------
function add_background_documentos_meta_boxes()
{
    $page_template = get_post_meta(get_the_ID(), '_wp_page_template', true);


    if ($page_template == 'page-documentos.php') {
        add_meta_box(
            'post_metadata_background_documentos_post',
            'Banner da área de documentos',
            'post_meta_box_background_documentos_post',
            'page',
            'normal',
            'high'
        );
    }
}
add_action('add_meta_boxes', 'add_background_documentos_meta_boxes');

function post_meta_box_background_documentos_post()
{
    global $post;
    $custom = get_post_meta($post->ID, 'background_documentos', true);
    $fieldData = !empty($custom) ? $custom['url'] : '';
    wp_nonce_field(plugin_basename(__FILE__), 'wp_custom_attachment_nonce');

    $html = '<p class="description">';
    $html .= 'Upload do banner de documentos';
    $html .= '</p>';
    $html .= '<input type="file" id="background_documentos" name="background_documentos" value="" size="40" accept="image/png, image/jpeg">';

    if (!empty($fieldData)) {
        $html .= '<p class="alert">';
        $html .= "Já existe um banner para documentos. Clique <a href='$fieldData' target='_blank'>aqui</a> para visualizar";
        $html .= '</p>';
        $html .= '<input type="submit" class="button" name="delete_background_documentos" value="Excluir Imagem" />';
    }
    echo $html;
}

function save_post_meta_box_background_documentos($id)
{
    if (!empty($_FILES['background_documentos']['name'])) {
        $supported_types = array('image/jpeg', 'image/png');
        $arr_file_type = wp_check_filetype(basename($_FILES['background_documentos']['name']));
        $uploaded_type = $arr_file_type['type'];

        if (in_array($uploaded_type, $supported_types)) {
            $upload = wp_upload_bits($_FILES['background_documentos']['name'], null, file_get_contents($_FILES['background_documentos']['tmp_name']));
            if (isset($upload['error']) && $upload['error'] != 0) {
                wp_die('Houve um erro no upload do arquivo. Erro: ' . $upload['error']);
            } else {
                update_post_meta($id, 'background_documentos', $upload);
            }
        } else {
            wp_die("O arquivo que tentou subir não é uma imagem.");
        }
    }

    // Verifica se o botão de excluir imagem foi pressionado
    if (isset($_POST['delete_background_documentos'])) {
        delete_post_meta($id, 'background_documentos');
    }
}
add_action('save_post', 'save_post_meta_box_background_documentos');

function update_edit_form_background_documentos()
{
    echo ' enctype="multipart/form-data"';
}
add_action('post_edit_form_tag', 'update_edit_form_background_documentos');

// --------------- Metabox - Programas - Background -----------------------------
function add_background_programas_meta_boxes()
{
    add_meta_box(
        'post_metadata_background_programas_post',
        'Banner do programa',
        'post_meta_box_background_programas_post',
        'programas',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_background_programas_meta_boxes');

function post_meta_box_background_programas_post()
{
    global $post;
    $custom = get_post_meta($post->ID, 'background_programas', true);
    $fieldData = !empty($custom) ? $custom['url'] : '';
    wp_nonce_field(plugin_basename(__FILE__), 'wp_custom_attachment_nonce');

    $html = '<p class="description">';
    $html .= 'Upload do banner do programa';
    $html .= '</p>';
    $html .= '<input type="file" id="background_programas" name="background_programas" value="" size="40" accept="image/png, image/jpeg">';

    if (!empty($fieldData)) {
        $html .= '<p class="alert">';
        $html .= "Já existe um banner para o programas. Clique <a href='$fieldData' target='_blank'>aqui</a> para visualizar";
        $html .= '</p>';
        $html .= '<input type="submit" class="button" name="delete_background_programas" value="Excluir Imagem" />';
    }
    echo $html;
}

function save_post_meta_box_background_programas($id)
{
    if (!empty($_FILES['background_programas']['name'])) {
        $supported_types = array('image/jpeg', 'image/png');
        $arr_file_type = wp_check_filetype(basename($_FILES['background_programas']['name']));
        $uploaded_type = $arr_file_type['type'];

        if (in_array($uploaded_type, $supported_types)) {
            $upload = wp_upload_bits($_FILES['background_programas']['name'], null, file_get_contents($_FILES['background_programas']['tmp_name']));
            if (isset($upload['error']) && $upload['error'] != 0) {
                wp_die('Houve um erro no upload do arquivo. Erro: ' . $upload['error']);
            } else {
                update_post_meta($id, 'background_programas', $upload);
            }
        } else {
            wp_die("O arquivo que tentou subir não é uma imagem.");
        }
    }

    // Verifica se o botão de excluir imagem foi pressionado
    if (isset($_POST['delete_background_programas'])) {
        delete_post_meta($id, 'background_programas');
    }
}
add_action('save_post', 'save_post_meta_box_background_programas');

function update_edit_form_background_programas()
{
    echo ' enctype="multipart/form-data"';
}
add_action('post_edit_form_tag', 'update_edit_form_background_programas');


// --------------- Metabox - Quem Somos - Background -----------------------------
function add_background_quem_somos_meta_boxes()
{
    $page_template = get_post_meta(get_the_ID(), '_wp_page_template', true);


    if ($page_template == 'page-quem-somos.php') {
        add_meta_box(
            'post_metadata_background_quem_somos_post',
            'Banner da galeria',
            'post_meta_box_background_quem_somos_post',
            'page',
            'normal',
            'high'
        );
    }
}
add_action('add_meta_boxes', 'add_background_quem_somos_meta_boxes');

function post_meta_box_background_quem_somos_post()
{
    global $post;
    $custom = get_post_meta($post->ID, 'background_quem_somos', true);
    $fieldData = !empty($custom) ? $custom['url'] : '';
    wp_nonce_field(plugin_basename(__FILE__), 'wp_custom_attachment_nonce');

    $html = '<p class="description">';
    $html .= 'Upload do banner da página de quem somos';
    $html .= '</p>';
    $html .= '<input type="file" id="background_quem_somos" name="background_quem_somos" value="" size="40" accept="image/png, image/jpeg">';

    if (!empty($fieldData)) {
        $html .= '<p class="alert">';
        $html .= "Já existe um banner para quem somos. Clique <a href='$fieldData' target='_blank'>aqui</a> para visualizar";
        $html .= '</p>';
        $html .= '<input type="submit" class="button" name="delete_background_quem_somos" value="Excluir Imagem" />';
    }
    echo $html;
}

function save_post_meta_box_background_quem_somos($id)
{
    if (!empty($_FILES['background_quem_somos']['name'])) {
        $supported_types = array('image/jpeg', 'image/png');
        $arr_file_type = wp_check_filetype(basename($_FILES['background_quem_somos']['name']));
        $uploaded_type = $arr_file_type['type'];

        if (in_array($uploaded_type, $supported_types)) {
            $upload = wp_upload_bits($_FILES['background_quem_somos']['name'], null, file_get_contents($_FILES['background_quem_somos']['tmp_name']));
            if (isset($upload['error']) && $upload['error'] != 0) {
                wp_die('Houve um erro no upload do arquivo. Erro: ' . $upload['error']);
            } else {
                update_post_meta($id, 'background_quem_somos', $upload);
            }
        } else {
            wp_die("O arquivo que tentou subir não é uma imagem.");
        }
    }

    // Verifica se o botão de excluir imagem foi pressionado
    if (isset($_POST['delete_background_quem_somos'])) {
        delete_post_meta($id, 'background_quem_somos');
    }
}
add_action('save_post', 'save_post_meta_box_background_quem_somos');

function update_edit_form_background_quem_somos()
{
    echo ' enctype="multipart/form-data"';
}
add_action('post_edit_form_tag', 'update_edit_form_background_quem_somos');

// --------------- Metabox - Diretoria - Background -----------------------------
function add_background_diretoria_meta_boxes()
{
    $page_template = get_post_meta(get_the_ID(), '_wp_page_template', true);


    if ($page_template == 'page-diretoria.php') {
        add_meta_box(
            'post_metadata_background_diretoria_post',
            'Banner da galeria',
            'post_meta_box_background_diretoria_post',
            'page',
            'normal',
            'high'
        );
    }
}
add_action('add_meta_boxes', 'add_background_diretoria_meta_boxes');

function post_meta_box_background_diretoria_post()
{
    global $post;
    $custom = get_post_meta($post->ID, 'background_diretoria', true);
    $fieldData = !empty($custom) ? $custom['url'] : '';
    wp_nonce_field(plugin_basename(__FILE__), 'wp_custom_attachment_nonce');

    $html = '<p class="description">';
    $html .= 'Upload do banner da diretoria';
    $html .= '</p>';
    $html .= '<input type="file" id="background_diretoria" name="background_diretoria" value="" size="40" accept="image/png, image/jpeg">';

    if (!empty($fieldData)) {
        $html .= '<p class="alert">';
        $html .= "Já existe um banner para a diretoria. Clique <a href='$fieldData' target='_blank'>aqui</a> para visualizar";
        $html .= '</p>';
        $html .= '<input type="submit" class="button" name="delete_background_diretoria" value="Excluir Imagem" />';
    }
    echo $html;
}

function save_post_meta_box_background_diretoria($id)
{
    if (!empty($_FILES['background_diretoria']['name'])) {
        $supported_types = array('image/jpeg', 'image/png');
        $arr_file_type = wp_check_filetype(basename($_FILES['background_diretoria']['name']));
        $uploaded_type = $arr_file_type['type'];

        if (in_array($uploaded_type, $supported_types)) {
            $upload = wp_upload_bits($_FILES['background_diretoria']['name'], null, file_get_contents($_FILES['background_diretoria']['tmp_name']));
            if (isset($upload['error']) && $upload['error'] != 0) {
                wp_die('Houve um erro no upload do arquivo. Erro: ' . $upload['error']);
            } else {
                update_post_meta($id, 'background_diretoria', $upload);
            }
        } else {
            wp_die("O arquivo que tentou subir não é uma imagem.");
        }
    }

    // Verifica se o botão de excluir imagem foi pressionado
    if (isset($_POST['delete_background_diretoria'])) {
        delete_post_meta($id, 'background_diretoria');
    }
}
add_action('save_post', 'save_post_meta_box_background_diretoria');

function update_edit_form_background_diretoria()
{
    echo ' enctype="multipart/form-data"';
}
add_action('post_edit_form_tag', 'update_edit_form_background_diretoria');

// --------------- Metabox - Galerias - Background -----------------------------
function add_background_galerias_meta_boxes()
{
    add_meta_box(
        'post_metadata_background_galerias_post',
        'Banner da galeria',
        'post_meta_box_background_galerias_post',
        'galerias',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_background_galerias_meta_boxes');

function post_meta_box_background_galerias_post()
{
    global $post;
    $custom = get_post_meta($post->ID, 'background_galerias', true);
    $fieldData = !empty($custom) ? $custom['url'] : '';
    wp_nonce_field(plugin_basename(__FILE__), 'wp_custom_attachment_nonce');

    $html = '<p class="description">';
    $html .= 'Upload do banner da galeria';
    $html .= '</p>';
    $html .= '<input type="file" id="background_galerias" name="background_galerias" value="" size="40" accept="image/png, image/jpeg">';
    if (!empty($fieldData)) {
        $html .= '<p class="alert">';
        $html .= "Já existe um banner para esse galeria. Clique <a href='$fieldData' target='_blank'>aqui</a> para visualizar";
        $html .= '</p>';
        $html .= '<input type="submit" class="button" name="delete_background_galerias" value="Excluir Imagem" />';
    }
    echo $html;
}

function save_post_meta_box_background_galerias($id)
{
    if (!empty($_FILES['background_galerias']['name'])) {
        $supported_types = array('image/jpeg', 'image/png');
        $arr_file_type = wp_check_filetype(basename($_FILES['background_galerias']['name']));
        $uploaded_type = $arr_file_type['type'];

        if (in_array($uploaded_type, $supported_types)) {
            $upload = wp_upload_bits($_FILES['background_galerias']['name'], null, file_get_contents($_FILES['background_galerias']['tmp_name']));
            if (isset($upload['error']) && $upload['error'] != 0) {
                wp_die('Houve um erro no upload do arquivo. Erro: ' . $upload['error']);
            } else {
                update_post_meta($id, 'background_galerias', $upload);
            }
        } else {
            wp_die("O arquivo que tentou subir não é uma imagem.");
        }
    }

    // Verifica se o botão de excluir imagem foi pressionado
    if (isset($_POST['delete_background_galerias'])) {
        delete_post_meta($id, 'background_galerias');
    }
}
add_action('save_post', 'save_post_meta_box_background_galerias');

function update_edit_form_background_galerias()
{
    echo ' enctype="multipart/form-data"';
}
add_action('post_edit_form_tag', 'update_edit_form_background_galerias');


// --------------- Metabox - Eventos - Background -----------------------------
function add_background_eventos_meta_boxes()
{
    add_meta_box(
        'post_metadata_background_eventos_post',
        'Banner do evento',
        'post_meta_box_background_eventos_post',
        'eventos',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_background_eventos_meta_boxes');

function post_meta_box_background_eventos_post()
{
    global $post;
    $custom = get_post_meta($post->ID, 'background_eventos', true);
    $fieldData = !empty($custom) ? $custom['url'] : '';
    wp_nonce_field(plugin_basename(__FILE__), 'wp_custom_attachment_nonce');

    $html = '<p class="description">';
    $html .= 'Upload do banner do evento';
    $html .= '</p>';
    $html .= '<input type="file" id="background_eventos" name="background_eventos" value="" size="40" accept="image/png, image/jpeg">';

    if (!empty($fieldData)) {
        $html .= '<p class="alert">';
        $html .= "Já existe um banner para esse evento. Clique <a href='$fieldData' target='_blank'>aqui</a> para visualizar";
        $html .= '</p>';
        $html .= '<input type="submit" class="button" name="delete_background_eventos" value="Excluir Imagem" />';
    }
    echo $html;
}

function save_post_meta_box_background_eventos($id)
{
    if (!empty($_FILES['background_eventos']['name'])) {
        $supported_types = array('image/jpeg', 'image/png');
        $arr_file_type = wp_check_filetype(basename($_FILES['background_eventos']['name']));
        $uploaded_type = $arr_file_type['type'];

        if (in_array($uploaded_type, $supported_types)) {
            $upload = wp_upload_bits($_FILES['background_eventos']['name'], null, file_get_contents($_FILES['background_eventos']['tmp_name']));
            if (isset($upload['error']) && $upload['error'] != 0) {
                wp_die('Houve um erro no upload do arquivo. Erro: ' . $upload['error']);
            } else {
                update_post_meta($id, 'background_eventos', $upload);
            }
        } else {
            wp_die("O arquivo que tentou subir não é uma imagem.");
        }
    }

    // Verifica se o botão de excluir imagem foi pressionado
    if (isset($_POST['delete_background_eventos'])) {
        delete_post_meta($id, 'background_eventos');
    }
}
add_action('save_post', 'save_post_meta_box_background_eventos');

function update_edit_form_background_eventos()
{
    echo ' enctype="multipart/form-data"';
}
add_action('post_edit_form_tag', 'update_edit_form_background_eventos');


// --------------------- Metabox - Evento - Data do Evento ------------------------------
function add_event_metaboxes()
{
    add_meta_box(
        "post_metadata_events_post", //div id contendo os campos renderizados
        "Dia do Evento",  //Titulo da sessão que será mostrado como texto
        "post_meta_box_events_post", //callback para renderizar os campos
        "eventos", //nome do tipo do post onde queremos que a caixa renderize
        "side", //local na tela onde ele vai ficar
        "low" //prioridade de exibição
    );
}

add_action("admin_init", 'add_event_metaboxes');

// Função que realiza o salvamento das informações
function save_post_meta_box()
{
    global $post;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    update_post_meta($post->ID, "_event_date", sanitize_text_field($_POST['_event_date']));
}

add_action('save_post', 'save_post_meta_box');

// Função de callback
function post_meta_box_events_post()
{
    global $post;
    $custom = get_post_custom($post->ID);
    $fieldData = $custom['_event_date'][0];
    echo "<input type=\"date\" name=\"_event_date\" value=\"" . $fieldData . "\" placeholder=\"Dia do Evento\"> ";
}

// --------------------- Metabox - Evento - Link de Inscrição -------------------------
function add_link_event_metaboxes()
{
    add_meta_box(
        "post_metadata_link_events_post", //div id contendo os campos renderizados
        "Link para inscrição do evento",  //Titulo da sessão que será mostrado como texto
        "post_meta_box_link_events_post", //callback para renderizar os campos
        "eventos", //nome do tipo do post onde queremos que a caixa renderize
        "normal", //local na tela onde ele vai ficar
        "low" //prioridade de exibição
    );
}

add_action("admin_init", 'add_link_event_metaboxes');

// Função que realiza o salvamento das informações
function save_link_post_meta_box()
{
    global $post;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    update_post_meta($post->ID, "_event_link", sanitize_text_field($_POST['_event_link']));
}

add_action('save_post', 'save_link_post_meta_box');

// Função de callback
function post_meta_box_link_events_post()
{
    global $post;
    $custom = get_post_custom($post->ID);
    $fieldData = $custom['_event_link'][0];
    echo "<input type=\"text\" name=\"_event_link\" value=\"" . $fieldData . "\" placeholder=\"Link de inscrição do evento\" style='padding: 10px; width: 100%; display: block'> ";
}

// --------------------- Metabox - Evento - Local ------------------------------
function add_local_event_metaboxes()
{
    add_meta_box(
        "post_metadata_local_events_post", //div id contendo os campos renderizados
        "Local do Evento",  //Titulo da sessão que será mostrado como texto
        "post_meta_box_local_events_post", //callback para renderizar os campos
        "eventos", //nome do tipo do post onde queremos que a caixa renderize
        "side", //local na tela onde ele vai ficar
        "low" //prioridade de exibição
    );
}

add_action("admin_init", 'add_local_event_metaboxes');

// Função que realiza o salvamento das informações
function save_post_local_event_meta_box()
{
    global $post;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    update_post_meta($post->ID, "_local_event", sanitize_text_field($_POST['_local_event']));
}

add_action('save_post', 'save_post_local_event_meta_box');

// Função de callback
function post_meta_box_local_events_post()
{
    global $post;
    $custom = get_post_custom($post->ID);
    $fieldData = $custom['_local_event'][0];
    echo "<input type=\"text\" name=\"_local_event\" value=\"" . $fieldData . "\" placeholder=\"Local do Evento\"> ";
}

// --------------------- Metabox - Evento - Tema ------------------------------
function add_tema_event_metaboxes()
{
    add_meta_box(
        "post_metadata_tema_events_post", //div id contendo os campos renderizados
        "Tema do Evento",  //Titulo da sessão que será mostrado como texto
        "post_meta_box_tema_events_post", //callback para renderizar os campos
        "eventos", //nome do tipo do post onde queremos que a caixa renderize
        "side", //local na tela onde ele vai ficar
        "low" //prioridade de exibição
    );
}

add_action("admin_init", 'add_tema_event_metaboxes');

// Função que realiza o salvamento das informações
function save_post_tema_event_meta_box()
{
    global $post;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    update_post_meta($post->ID, "_tema_event", sanitize_text_field($_POST['_tema_event']));
}

add_action('save_post', 'save_post_tema_event_meta_box');

// Função de callback
function post_meta_box_tema_events_post()
{
    global $post;
    $custom = get_post_custom($post->ID);
    $fieldData = $custom['_tema_event'][0];
    echo "<input type=\"text\" name=\"_tema_event\" value=\"" . $fieldData . "\" placeholder=\"Tema do Evento\"> ";
}

// --------------------- Metabox - Evento - Endereço ------------------------------
function add_endereco_event_metaboxes()
{
    add_meta_box(
        "post_metadata_endereco_events_post", //div id contendo os campos renderizados
        "Endereço do Evento",  //Titulo da sessão que será mostrado como texto
        "post_meta_box_endereco_events_post", //callback para renderizar os campos
        "eventos", //nome do tipo do post onde queremos que a caixa renderize
        "side", //local na tela onde ele vai ficar
        "low" //prioridade de exibição
    );
}

add_action("admin_init", 'add_endereco_event_metaboxes');

// Função que realiza o salvamento das informações
function save_post_endereco_event_meta_box()
{
    global $post;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    update_post_meta($post->ID, "_endereco_event", sanitize_text_field($_POST['_endereco_event']));
}

add_action('save_post', 'save_post_endereco_event_meta_box');

// Função de callback
function post_meta_box_endereco_events_post()
{
    global $post;
    $custom = get_post_custom($post->ID);
    $fieldData = $custom['_endereco_event'][0];
    echo "<input type=\"text\" name=\"_endereco_event\" value=\"" . $fieldData . "\" placeholder=\"Endereço do Evento\"> ";
}

// --------------- Metabox - Mídia - PDF -----------------------------
function add_midia_pdf_meta_boxes()
{
    add_meta_box(
        'post_metadata_midia_pdf_post',
        'PDF da Mídia',
        'post_meta_box_midia_pdf_post',
        'midia',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_midia_pdf_meta_boxes');

function post_meta_box_midia_pdf_post()
{
    global $post;
    $custom = get_post_meta($post->ID, 'midia_pdf', true);
    if (!empty($custom)) {
        $fieldData = $custom['url'];
        wp_nonce_field(plugin_basename(__FILE__), 'wp_custom_attachment_nonce');
    }
    $html = '<p class="description">';
    $html .= 'Upload da mídia em PDF';
    $html .= '</p>';
    $html .= '<input type="file" id="midia_pdf" name="midia_pdf" value="" size="40" accept=".pdf">';
    if (!empty($fieldData)) {
        $html .= '<p class="alert">';
        $html .= "Já existe um arquivo para esse mídia. Clique <a href='$fieldData' target='_blank'>aqui</a> para visualizar";
        $html .= '</p>';
    }
    echo $html;
}

function save_post_meta_box_midia_pdf($id)
{
    if (!empty($_FILES['midia_pdf']['name'])) {
        $supported_types = array('application/pdf');
        $arr_file_type = wp_check_filetype(basename($_FILES['midia_pdf']['name']));
        $uploaded_type = $arr_file_type['type'];

        if (in_array($uploaded_type, $supported_types)) {
            $upload = wp_upload_bits($_FILES['midia_pdf']['name'], null, file_get_contents($_FILES['midia_pdf']['tmp_name']));
            if (isset($upload['error']) && $upload['error'] != 0) {
                wp_die('Houve um erro no upload do arquivo. Erro: ' . $upload['error']);
            } else {
                update_post_meta($id, 'midia_pdf', $upload);
            }
        } else {
            wp_die("O arquivo que tentou subir não é um PDF.");
        }
    }
}
add_action('save_post', 'save_post_meta_box_midia_pdf');

function update_edit_form_midia_pdf()
{
    echo ' enctype="multipart/form-data"';
}
add_action('post_edit_form_tag', 'update_edit_form_midia_pdf');

// --------------- Metabox - Cartas - PDF -----------------------------
function add_carta_pdf_meta_boxes()
{
    add_meta_box(
        'post_metadata_carta_pdf_post',
        'PDF da Carta',
        'post_meta_box_carta_pdf_post',
        'carta',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_carta_pdf_meta_boxes');

function post_meta_box_carta_pdf_post()
{
    global $post;
    $custom = get_post_meta($post->ID, 'carta_pdf', true);
    if (!empty($custom)) {
        $fieldData = $custom['url'];
        wp_nonce_field(plugin_basename(__FILE__), 'wp_custom_attachment_nonce');
    }
    $html = '<p class="description">';
    $html .= 'Upload da carta em PDF';
    $html .= '</p>';
    $html .= '<input type="file" id="carta_pdf" name="carta_pdf" value="" size="40" accept=".pdf">';
    if (!empty($fieldData)) {
        $html .= '<p class="alert">';
        $html .= "Já existe um arquivo para essa carta. Clique <a href='$fieldData' target='_blank'>aqui</a> para visualizar";
        $html .= '</p>';
    }
    echo $html;
}

function save_post_meta_box_carta_pdf($id)
{
    if (!empty($_FILES['carta_pdf']['name'])) {
        $supported_types = array('application/pdf');
        $arr_file_type = wp_check_filetype(basename($_FILES['carta_pdf']['name']));
        $uploaded_type = $arr_file_type['type'];

        if (in_array($uploaded_type, $supported_types)) {
            $upload = wp_upload_bits($_FILES['carta_pdf']['name'], null, file_get_contents($_FILES['carta_pdf']['tmp_name']));
            if (isset($upload['error']) && $upload['error'] != 0) {
                wp_die('Houve um erro no upload do arquivo. Erro: ' . $upload['error']);
            } else {
                update_post_meta($id, 'carta_pdf', $upload);
            }
        } else {
            wp_die("O arquivo que tentou subir não é um PDF.");
        }
    }
}
add_action('save_post', 'save_post_meta_box_carta_pdf');

function update_edit_form_carta_pdf()
{
    echo ' enctype="multipart/form-data"';
}
add_action('post_edit_form_tag', 'update_edit_form_carta_pdf');

// --------------- Metabox - Informe - PDF -----------------------------
function add_informe_pdf_meta_boxes()
{
    add_meta_box(
        'post_metadata_informe_pdf_post',
        'PDF da Mídia',
        'post_meta_box_informe_pdf_post',
        'informe',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_informe_pdf_meta_boxes');

function post_meta_box_informe_pdf_post()
{
    global $post;
    $custom = get_post_meta($post->ID, 'informe_pdf', true);
    if (!empty($custom)) {
        $fieldData = $custom['url'];
        wp_nonce_field(plugin_basename(__FILE__), 'wp_custom_attachment_nonce');
    }
    $html = '<p class="description">';
    $html .= 'Upload do informe em PDF';
    $html .= '</p>';
    $html .= '<input type="file" id="informe_pdf" name="informe_pdf" value="" size="40" accept=".pdf">';
    if (!empty($custom['url'])) {
        $fieldData = $custom['url'];
        $html .= '<p class="alert">';
        $html .= "Já existe um arquivo para esse informe. Clique <a href='$fieldData' target='_blank'>aqui</a> para visualizar";
        $html .= '</p>';
    }
    echo $html;
}

function save_post_meta_box_informe_pdf($id)
{
    if (!empty($_FILES['informe_pdf']['name'])) {
        $supported_types = array('application/pdf');
        $arr_file_type = wp_check_filetype(basename($_FILES['informe_pdf']['name']));
        $uploaded_type = $arr_file_type['type'];

        if (in_array($uploaded_type, $supported_types)) {
            $upload = wp_upload_bits($_FILES['informe_pdf']['name'], null, file_get_contents($_FILES['informe_pdf']['tmp_name']));
            if (isset($upload['error']) && $upload['error'] != 0) {
                wp_die('Houve um erro no upload do arquivo. Erro: ' . $upload['error']);
            } else {
                update_post_meta($id, 'informe_pdf', $upload);
            }
        } else {
            wp_die("O arquivo que tentou subir não é um PDF.");
        }
    }
}
add_action('save_post', 'save_post_meta_box_informe_pdf');

function update_edit_form_informe_pdf()
{
    echo ' enctype="multipart/form-data"';
}
add_action('post_edit_form_tag', 'update_edit_form_informe_pdf');

// --------------- Metabox - Relatório - PDF -----------------------------
function add_relatorio_pdf_meta_boxes()
{
    add_meta_box(
        'post_metadata_relatorio_pdf_post',
        'PDF do Relatório',
        'post_meta_box_relatorio_pdf_post',
        'relatorio',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_relatorio_pdf_meta_boxes');

function post_meta_box_relatorio_pdf_post()
{
    global $post;
    $custom = get_post_meta($post->ID, 'relatorio_pdf', true);
    if (!empty($custom)) {
        $fieldData = $custom['url'];
        wp_nonce_field(plugin_basename(__FILE__), 'wp_custom_attachment_nonce');
    }
    $html = '<p class="description">';
    $html .= 'Upload do Relatório em PDF';
    $html .= '</p>';
    $html .= '<input type="file" id="relatorio_pdf" name="relatorio_pdf" value="" size="40" accept=".pdf">';
    if (!empty($custom['url'])) {
        $fieldData = $custom['url'];
        $html .= '<p class="alert">';
        $html .= "Já existe um arquivo para esse relatório. Clique <a href='$fieldData' target='_blank'>aqui</a> para visualizar";
        $html .= '</p>';
    }
    echo $html;
}

function save_post_meta_box_relatorio_pdf($id)
{
    if (!empty($_FILES['relatorio_pdf']['name'])) {
        $supported_types = array('application/pdf');
        $arr_file_type = wp_check_filetype(basename($_FILES['relatorio_pdf']['name']));
        $uploaded_type = $arr_file_type['type'];

        if (in_array($uploaded_type, $supported_types)) {
            $upload = wp_upload_bits($_FILES['relatorio_pdf']['name'], null, file_get_contents($_FILES['relatorio_pdf']['tmp_name']));
            if (isset($upload['error']) && $upload['error'] != 0) {
                wp_die('Houve um erro no upload do arquivo. Erro: ' . $upload['error']);
            } else {
                update_post_meta($id, 'relatorio_pdf', $upload);
            }
        } else {
            wp_die("O arquivo que tentou subir não é um PDF.");
        }
    }
}
add_action('save_post', 'save_post_meta_box_relatorio_pdf');

function update_edit_form_relatorio_pdf()
{
    echo ' enctype="multipart/form-data"';
}
add_action('post_edit_form_tag', 'update_edit_form_relatorio_pdf');

// ----------------------------Categoria para os tipos de eventos -----------------------------
function eventos_category()
{

    $labels = array(
        'name'              => _x('Categoria', 'taxonomy general name', 'textdomain'),
        'singular_name'     => _x('Categoria', 'taxonomy singular name', 'textdomain'),
        'search_items'      => __('Procurar categoria', 'textdomain'),
        'all_items'         => __('Todos as categoria', 'textdomain'),
        'parent_item'       => __('Parent category:', 'textdomain'),
        'parent_item_colon' => __('Parent category:', 'textdomain'),
        'edit_item'         => __('Editar categoria', 'textdomain'),
        'update_item'       => __('Atualizar categoria', 'textdomain'),
        'add_new_item'      => __('Adicionar nova categoria', 'textdomain'),
        'new_item_name'     => __('New category name', 'textdomain'),
        'menu_name'         => __('Categoria', 'textdomain'),
    );
    $args = array(
        'labels' => $labels,
        'description' => __('Categoria do evento', 'textdomain'),
        'hierarchical' => true,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud' => true,
        'show_in_quick_edit' => true,
        'show_admin_column' => true,
        'show_in_rest' => true,
    );
    register_taxonomy('eventos_category', array('eventos'), $args);
}
add_action('init', 'eventos_category');

// ----------------------------Categoria para os tipos de eventos -----------------------------
function artigos_category()
{

    $labels = array(
        'name'              => _x('Categoria', 'taxonomy general name', 'textdomain'),
        'singular_name'     => _x('Categoria', 'taxonomy singular name', 'textdomain'),
        'search_items'      => __('Procurar categoria', 'textdomain'),
        'all_items'         => __('Todos as categoria', 'textdomain'),
        'parent_item'       => __('Parent category:', 'textdomain'),
        'parent_item_colon' => __('Parent category:', 'textdomain'),
        'edit_item'         => __('Editar categoria', 'textdomain'),
        'update_item'       => __('Atualizar categoria', 'textdomain'),
        'add_new_item'      => __('Adicionar nova categoria', 'textdomain'),
        'new_item_name'     => __('Nova categoria', 'textdomain'),
        'menu_name'         => __('Categoria', 'textdomain'),
    );
    $args = array(
        'labels' => $labels,
        'description' => __('Categoria do artigo', 'textdomain'),
        'hierarchical' => true,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud' => true,
        'show_in_quick_edit' => true,
        'show_admin_column' => true,
        'show_in_rest' => true,
    );
    register_taxonomy('artigos_category', array('artigos'), $args);
}
add_action('init', 'artigos_category');

function artigos_tag()
{
    $labels = array(
        'name' => _x('Tags', 'taxonomy general name'),
        'singular_name' => _x('Tag', 'taxonomy singular name'),
        'search_items' =>  __('Search Tags'),
        'all_items' => __('All Tags'),
        'parent_item' => __('Parent Tag'),
        'parent_item_colon' => __('Parent Tag:'),
        'edit_item' => __('Edit Tag'),
        'update_item' => __('Update Tag'),
        'add_new_item' => __('Add New Tag'),
        'new_item_name' => __('New Tag Name'),
        'menu_name' => __('Tags'),
    );

    $args = array(
        'hierarchical' => false,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'custom-tag'),
    );

    register_taxonomy('artigos_tag', array('artigos'), $args);
}

add_action('init', 'artigos_tag', 0);
