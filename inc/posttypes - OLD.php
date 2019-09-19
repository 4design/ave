<?php 
function ave_posttype_tours() {
    $labels = array(
        'name'                  => _x( 'Tours', 'ave' ),
        'singular_name'         => _x( 'Tour',  'ave' ),
        'menu_name'             => _x( 'Tours', 'Admin Menu text', 'ave' ),
        'name_admin_bar'        => _x( 'Tour', 'Add New on Toolbar', 'ave' ),
        'add_new'               => __( 'Agregar Nuevo', 'ave' ),
        'add_new_item'          => __( 'Agregar Nuevo Tour', 'ave' ),
        'new_item'              => __( 'Nuevo Tour', 'ave' ),
        'edit_item'             => __( 'Editar Tour', 'ave' ),
        'view_item'             => __( 'Ver Tour', 'ave' ),
        'all_items'             => __( 'Todos los Tours', 'ave' ),
        'search_items'          => __( 'Buscar Tours', 'ave' ),
        'parent_item_colon'     => __( 'Padre Tours:', 'ave' ),
        'not_found'             => __( 'No se encontraron Tours.', 'ave' ),
        'not_found_in_trash'    => __( 'No se encontrar Tours en la Papelera', 'ave' ),
        'featured_image'        => _x( 'Imagen Destacada', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'ave' ),
        'set_featured_image'    => _x( 'Agregar imagen Destacada', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'ave' ),
        'remove_featured_image' => _x( 'Borrar imagen destacada', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'ave' ),
        'use_featured_image'    => _x( 'Usar Imagen destacada', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'ave' ),
        'archives'              => _x( 'Archivo de Tours', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'ave' ),
        'insert_into_item'      => _x( 'Insertar en Tours', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'ave' ),
        'uploaded_to_this_item' => _x( 'Cargadas En Tour', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'ave' ),
        'filter_items_list'     => _x( 'Filtrar Lista de Tours', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'ave' ),
        'items_list_navigation' => _x( 'Tours navegación', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'ave' ),
        'items_list'            => _x( 'Tours lista', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'ave' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'tours' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'menu_icon'          => 'dashicons-admin-site',
        // true como paginas (pueden tener hijos), false como posts (no tienen hijos)
        'taxonomies'         => array( 'category' ),
        //'taxonomies'         => array( 'category', 'post_tag' ),
        'hierarchical'       => false,
        'menu_position'      => 6,
        'supports'           => array( 'title', 'editor',  'thumbnail', 'page-attributes' ),
        'show_in_rest'       => true,
        'rest_base'          => 'ave-tours'
    );
 
    register_post_type( 'ave_tours', $args );
}
 
add_action( 'init', 'ave_posttype_tours' );

// /* Agrega el post type de Chefs Instructores */
// function edc_posttype_chefs_instructores() {
//     $labels = array(
//         'name'                  => _x( 'Chefs / Instructores', 'ave' ),
//         'singular_name'         => _x( 'Chef / Instructor',  'ave' ),
//         'menu_name'             => _x( 'Chefs / Instructores', 'Admin Menu text', 'ave' ),
//         'name_admin_bar'        => _x( 'Chefs / Instructores', 'Add New on Toolbar', 'ave' ),
//         'add_new'               => __( 'Agregar ', 'ave' ),
//         'add_new_item'          => __( 'Agregar Nuevo Chef', 'ave' ),
//         'new_item'              => __( 'Nuevo Chef', 'ave' ),
//         'edit_item'             => __( 'Editar Chef', 'ave' ),
//         'view_item'             => __( 'Ver Chef', 'ave' ),
//         'all_items'             => __( 'Todos los Chef', 'ave' ),
//         'search_items'          => __( 'Buscar Chefs / Instructores', 'ave' ),
//         'parent_item_colon'     => __( 'Padre Chefs / Instructores:', 'ave' ),
//         'not_found'             => __( 'No se encontraron Chefs.', 'ave' ),
//         'not_found_in_trash'    => __( 'No se encontrar Chefs en la Papelera', 'ave' ),
//         'featured_image'        => _x( 'Imagen Destacada', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'ave' ),
//         'set_featured_image'    => _x( 'Agregar imagen Destacada', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'ave' ),
//         'remove_featured_image' => _x( 'Borrar imagen destacada', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'ave' ),
//         'use_featured_image'    => _x( 'Usar Imagen destacada', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'ave' ),
//         'archives'              => _x( 'Archivo de Chefs', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'ave' ),
//         'insert_into_item'      => _x( 'Insertar en Chefs', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'ave' ),
//         'uploaded_to_this_item' => _x( 'Cargadas En Chefs', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'ave' ),
//         'filter_items_list'     => _x( 'Filtrar Lista de Chefs', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'ave' ),
//         'items_list_navigation' => _x( 'Chefs navegación', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'ave' ),
//         'items_list'            => _x( 'Chefs lista', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'ave' ),
//     );
 
//     $args = array(
//         'labels'             => $labels,
//         'public'             => true,
//         'publicly_queryable' => true,
//         'show_ui'            => true,
//         'show_in_menu'       => true,
//         'query_var'          => true,
//         'rewrite'            => array( 'slug' => 'chefs-instructores' ),
//         'capability_type'    => 'post',
//         'has_archive'        => true,
//         'menu_icon'          => 'dashicons-admin-users',
//         // true como paginas (pueden tener hijos), false como posts (no tienen hijos)
//         'hierarchical'       => false,
//         'menu_position'      => 7,
//         'supports'           => array( 'title', 'editor',  'thumbnail' ),
//         'show_in_rest'       => true,
//         'rest_base'          => 'chefs-instructores'
//     );
 
//     register_post_type( 'chefs', $args );
// }
 
// add_action( 'init', 'edc_posttype_chefs_instructores' );