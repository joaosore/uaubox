<?php 


//Cria o Post Contatos
function create_banners_post_types() {
    register_post_type( 'banners',
        array(
            'labels' => array(
                'name' => __( 'Banners' ),
                'singular_name' => __( 'Banners' )
            ),
            'public' => true,
            'hierarchical' => true,
            'show_ui' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'menu_icon' => 'dashicons-email-alt',
            'supports' => array( 'title'),
            'rewrite' => array( 'slug' => 'banners', 'with_front' => false ),
        )
    );
}
add_action( 'init', 'create_banners_post_types' );

function get_banners() {

    $arr = array(
        'post_type' => 'banners',
        'post_status' => 'publish',
        'posts_per_page' => -1,
    );

    $query = new WP_Query($arr);

    $banners = [];

    while ($query->have_posts()) {
        $query->the_post();
        $post_id = get_the_ID();

        $banners[] = (object) array(
            'titulo' => get_the_title($post_id),
            'descricao' => get_dados('descricao', $post_id),
            'botao' => get_dados('batao', $post_id),
            'img' => get_dados('banner', $post_id),
        );
    }

    return (object) $banners;
}