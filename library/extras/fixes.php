<?php
/**
 * Ajustes para WordPress
 * @package cmschild
 * 
 **/

add_action( 'after_setup_theme', 'cms_remove_custom_logo_from_child_theme', 11 ); 

function cms_remove_custom_logo_from_child_theme() {

    // This will remove support for post thumbnails on ALL Post Types
    remove_theme_support( 'custom-logo' );

    // Add this line in to re-enable support for just Posts
    add_theme_support( 'custom-logo', array(
                                        'width'       => 0,
                                        'height'      => 0,
                                        'flex-width'  => true,
                                        'flex-height' => true
	                                ) );
}

function cms_change_post_menu_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Noticias';
    $submenu['edit.php'][5][0] = 'Noticias';
    $submenu['edit.php'][10][0] = 'Añadir Noticias';
    echo '';
}

function cms_postlabels() {
	global $wp_post_types;
		
		$labels = &$wp_post_types['post']->labels;
        $labels->name = 'Noticias';
        $labels->singular_name = 'Noticia';
        $labels->add_new = 'Añadir Noticia';
        $labels->add_new_item = 'Añadir Noticia';
        $labels->edit_item = 'Editar Noticia';
        $labels->new_item = 'Nueva Noticia';
        $labels->view_item = 'Ver Noticia';
        $labels->search_items = 'Buscar Noticias';
        $labels->not_found = 'No se encontraron Noticias';
        $labels->not_found_in_trash = 'No se encontraron noticias en papelera';
}

add_action( 'init', 'cms_postlabels' );
add_action( 'admin_menu', 'cms_change_post_menu_label' );

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');