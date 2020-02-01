<?php
// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Habilitar Menus
add_theme_support('menus');


// Função para gerar meus tamanhos de imagem
function my_custom_sizes (){
    add_image_size('large', 1400, 380, true);
    add_image_size('medium', 768, 380, true);
}
add_action('after_setup_theme', 'my_custom_sizes');

// Custom post types
function custom_post_type_produtos() {
    register_post_type('produtos', array(
        'label' => 'Produtos',
        'description' => 'Produtos',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'hierarchical' => false,
        'rewrite' => array('slug' => 'produtos', 'with_front' => true),
        'query_var' => true,
        'supports' => array('title', 'editor', 'page-attributes','post-formats'),

        'labels' => array (
            'name' => 'Produtos',
            'singular_name' => 'Produto',
            'menu_name' => 'Produtos',
            'add_new' => 'Adicionar Novo',
            'add_new_item' => 'Adicionar Novo Produto',
            'edit' => 'Editar',
            'edit_item' => 'Editar Produto',
            'new_item' => 'Novo Produto',
            'view' => 'Ver Produto',
            'view_item' => 'Ver Produto',
            'search_items' => 'Procurar Produtos',
            'not_found' => 'Nenhum Produto Encontrado',
            'not_found_in_trash' => 'Nenhum Produto Encontrado no Lixo',
        )
    ));
}
add_action('init', 'custom_post_type_produtos');
?>