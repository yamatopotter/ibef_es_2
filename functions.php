<?php

require_once('customizer-repeater/functions.php');
require_once('customizer-repeater/inc/customizer.php');
require_once("functions/custom-controls.php");
require_once("functions/custom-post-types.php");
require_once('functions/custom-theme.php');
require_once("functions/assets.php");

//Limpar Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'ajacent_post_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Suporte ao menu no tema
add_theme_support('menus');

function register_my_menu()
{
    register_nav_menu('main-menu', __('Main Menu'));
}
add_action('init', 'register_my_menu');

// Adiciona suporte ao thumbnail de posts e remove a exibição da barra de administração quando logado
add_action('init', function () {
    add_theme_support('post-thumbnails');
    show_admin_bar(false);
});

// Retorna alguma opção do tema customizado
function returnThemeObject($prop)
{
    echo get_theme_mod($prop);
}

function the_thumbnail($size = null)
{
    if ($thumb = get_thumbnail($size, null)) {
        echo $thumb->src;
    }
}

function get_the_thumbnail($size = null)
{
    if ($thumb = get_thumbnail($size, null)) {
        return $thumb->src;
    }
    return '';
}

function get_thumbnail($size = null, $ID = null)
{
    if ($ID != null) {
        $attachment = get_post($ID);
        $meta = json_decode(json_encode(wp_get_attachment_metadata($ID)));
    } else {
        global $post;
        $attachment = get_post(get_post_thumbnail_id($post->ID));
        $meta = json_decode(json_encode(wp_get_attachment_metadata(get_post_thumbnail_id($post->ID))));
    }
    $src = $attachment->guid;
    if ($size != null) {
        if (!empty($meta->sizes->{$size})) {
            $a = explode('/', $meta->file);
            $file = $a[count($a) - 1];
            $src = str_replace($file, $meta->sizes->{$size}->file, $src);
        }
    }
    return (object)array(
        'alt' => get_post_meta($attachment->ID, '_wp_attachment_image_alt', true),
        'caption' => $attachment->post_excerpt,
        'description' => $attachment->post_content,
        'href' => get_permalink($attachment->ID),
        'src' => $src,
        'title' => $attachment->post_title
    );
}

// Adiciona reticencias no final do excerpt
function new_excerpt_more($more)
{
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

//Quantidade do excerpt diferente do padrão

function limit_excerpt($limit)
{
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt) >= $limit) {
        array_pop($excerpt);
        $excerpt = implode(" ", $excerpt) . '...';
    } else {
        $excerpt = implode(" ", $excerpt);
    }
    $excerpt = preg_replace('`[[^]]*]`', '', $excerpt);
    return $excerpt;
}

// Limite de caracteres do excerpt

function the_excerpt_30($length)
{
    return 30;
}
add_filter('excerpt_length', 'the_excerpt_30');

function returnDateEvent($postId)
{
    return date_format(date_create(get_post_meta($postId, '_event_date', true)), 'd');
}

function returnMonthEvent($postId)
{
    return date_format(date_create(get_post_meta($postId, '_event_date', true)), 'M');
}

function returnFullDateEvent($postId)
{
    return date_format(date_create(get_post_meta($postId, '_event_date', true)), 'd-m-Y');
}

function checkCustomObject($name)
{
    $custom = get_post_custom();
    $customObject = $custom[$name][0];

    if (empty($customObject)) {
        return false;
    } else {
        return true;
    }
}

function returnCustomObject($name)
{
    $custom = get_post_custom();
    $customObject = $custom[$name][0];
    return $customObject;
}

function returnLinkFile($postId)
{
    $custom = get_post_meta($postId, 'midia_pdf', true);
    $fieldData = $custom['url'];
    return $fieldData;
}

function returnCartaFile($postId)
{
    $custom = get_post_meta($postId, 'carta_pdf', true);
    $fieldData = $custom['url'];
    return $fieldData;
}

function returnInformeFile($postId)
{
    $custom = get_post_meta($postId, 'informe_pdf', true);
    $fieldData = $custom['url'];
    return $fieldData;
}

function returnRelatorioFile($postId)
{
    $custom = get_post_meta($postId, 'relatorio_pdf', true);
    $fieldData = $custom['url'];
    return $fieldData;
}
// Personalização da galeria

function my_post_gallery($output, $attr)
{
    global $post;

    if (isset($attr['orderby'])) {
        $attr['orderby'] = sanitize_sql_orderby($attr['orderby']);
        if (!$attr['orderby'])
            unset($attr['orderby']);
    }

    extract(shortcode_atts(array(
        'order' => 'ASC',
        'orderby' => 'menu_order ID',
        'id' => $post->ID,
        'itemtag' => 'dl',
        'icontag' => 'dt',
        'captiontag' => 'dd',
        'columns' => 3,
        'size' => 'thumbnail',
        'include' => '',
        'exclude' => ''
    ), $attr));

    $id = intval($id);
    if ('RAND' == $order) $orderby = 'none';

    if (!empty($include)) {
        $include = preg_replace('/[^0-9,]+/', '', $include);
        $_attachments = get_posts(array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby));

        $attachments = array();
        foreach ($_attachments as $key => $val) {
            $attachments[$val->ID] = $_attachments[$key];
        }
    }

    if (empty($attachments)) return '';

    // Here's your actual output, you may customize it to your need
    $output = "<div id='lightgallery' class='lightgallery'>\n";
    foreach ($attachments as $id => $attachment) {
        // Fetch the thumbnail (or full image, it's up to you)
        $img = wp_get_attachment_image_src($id, 'medium-square');
        $imgBig = wp_get_attachment_image_src($id, 'original');
        $imgData = get_post($id);

        $imgDescription =  $imgData->post_excerpt;
        $linkImg = $imgBig[0];
        $img_src = $img[0];

        $output .= "<a href='$linkImg'><img src='$img_src' alt='$imgDescription'/></a>\n";
    }
    $output .= "</div>\n";

    return $output;
}

add_filter('post_gallery', 'my_post_gallery', 10, 2);

function customNavButtons()
{
    return "class='btn-link'";
}

add_filter('next_posts_link_attributes', 'customNavButtons');
add_filter('previous_posts_link_attributes', 'customNavButtons');

/**
 * Register Custom Navigation Walker
 */
function register_navwalker()
{
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');

add_filter('nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3);
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 *
 * @param array    $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post  $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
function prefix_bs5_dropdown_data_attribute($atts, $item, $args)
{
    if (is_a($args->walker, 'WP_Bootstrap_Navwalker')) {
        if (array_key_exists('data-toggle', $atts)) {
            unset($atts['data-toggle']);
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}

function get_convenio_category($post_type)
{
    $term = get_object_taxonomies($post_type);
    return $term[0];
}
