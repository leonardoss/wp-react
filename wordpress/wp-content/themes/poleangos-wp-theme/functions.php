<?php
    /**
	 * @package Poleangos
	 */

    wp_enqueue_style( 'poleangos-style-dist', get_stylesheet_directory_uri() . '/dist/style.css');
    wp_enqueue_style( 'poleangos-style', get_stylesheet_uri() );
    wp_enqueue_script( 'scrollmagic', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js' , array( 'jquery' ), '1.0', false );    
    
    wp_enqueue_script( 'poleangos-script', get_stylesheet_directory_uri() . '/dist/app.js' , array(), '1.0', true );

    $url = trailingslashit( home_url() );
    $path = trailingslashit( parse_url( $url, PHP_URL_PATH ) );

    wp_scripts()->add_data( 'poleangos-script', 'data', sprintf( 'var PoleangosSettings = %s;', wp_json_encode( array(
        'title' => get_bloginfo( 'name', 'display' ),
        'path' => $path,
        'URL' => array(
            'api' => esc_url_raw( get_rest_url( null, '/wp/v2/' ) ),
            'root' => esc_url_raw( $url ),
        )
    ))));


    // Add various fields to the JSON output
    function poleangos_register_fields() {
        // Add Author Name
        register_rest_field( 'post',
            'author_name',
            array(
                'get_callback'      => 'poleangos_get_author_name',
                'update_callback'   => null,
                'schema'            => null
            )
        );
        // Add Featured Image
        register_rest_field( 'post',
            'featured_image_src',
            array(
                'get_callback'      => 'poleangos_get_image_src',
                'update_callback'   => null,
                'schema'            => null
            )
    );
        // Add Published Date
        register_rest_field( 'post',
        'published_date',
        array(
            'get_callback'      => 'poleangos_published_date',
            'update_callback'   => null,
            'schema'            => null
        )
        );
    }
    add_action( 'rest_api_init', 'poleangos_register_fields' );

    function poleangos_get_author_name( $object, $field_name, $request ) {
        return get_the_author_meta( 'display_name' );
    }
    function poleangos_get_image_src( $object, $field_name, $request ) {
    if($object[ 'featured_media' ] == 0) {
        return $object[ 'featured_media' ];
    }
        $feat_img_array = wp_get_attachment_image_src( $object[ 'featured_media' ], 'thumbnail', true );
    return $feat_img_array[0];
    }
    function poleangos_published_date( $object, $field_name, $request ) {
        return get_the_time('F j, Y');
    }
?>