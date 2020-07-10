<?php
// Funzione creazione Custom Post
function mrc_create_posttype() {
 
    register_post_type( 'libri',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Libri' ),
                'singular_name' => __( 'Libro' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'libri'),
            'show_in_rest' => true,
 
        )
    );
}
// Hook funzione
add_action( 'init', 'mrc_create_posttype' );
?>
