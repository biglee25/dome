<?php

function bootstrapstarter_enqueue_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.css' );
    $dependencies = array('bootstrap');
	wp_enqueue_style( 'bootstrapstarter-style', get_stylesheet_uri(), $dependencies ); 
}


function bootstrapstarter_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/bootstrap.js', $dependencies, '', true );
}

add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_scripts' );




/* Custom Navigation Walker */

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}


add_action( 'after_setup_theme', 'register_navwalker' );

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );


/* Register Sidebar */

    function my_custom_sidebar() {
        register_sidebar(
            array (
                'name' => __( 'Custom', 'your-theme-domain' ),
                'id' => 'custom-side-bar',
                'description' => __( 'Custom Sidebar', 'your-theme-domain' ),
                'before_widget' => '<div class="widget-content">',
                'after_widget' => "</div>",
                'before_title' => '<p class="widget-title">',
                'after_title' => '</p>',
            )
        );
    }
    add_action( 'widgets_init', 'my_custom_sidebar' );

    function bootstrapstarter_wp_setup() {
        add_theme_support( 'title-tag' );
    }

    function wpb_custom_new_menu() {
        register_nav_menu('primary',__( 'primary' ));
    }


        add_action( 'init', 'wpb_custom_new_menu' );

        add_action( 'after_setup_theme', 'bootstrapstarter_wp_setup' );


/* Reduce Woocommerce title excerpt */
   
    add_action( 'woocommerce_after_shop_loop_item_title', 'shop_overview_extra_header_div_new', 5);
    function shop_overview_extra_header_div_new() {
        global $post;
        $limit = 5;
        $text = $post->post_excerpt;
        if (str_word_count($text, 0) > $limit) {
            $arr = str_word_count($text, 2);
            $pos = array_keys($arr);
            $text = substr($text, 0, $pos[$limit]) . '...';
            // $text = force_balance_tags($text); // may be you dont need this…
        }
        echo '<div class="excerpt">' . $text . '</div>';
    
    }

    // Change button text in Woocommerce

    add_filter( 'woocommerce_product_add_to_cart_text' , 'custom_woocommerce_product_add_to_cart_text' );
        function custom_woocommerce_product_add_to_cart_text() {
            global $product;    
            $product_type = $product->product_type;  
            switch ( $product_type ) {
        case 'variable':
                    return __( 'OPTIONS', 'woocommerce' );
                break;
        default:
                return __('ADD TO BASKET', 'woocommerce');
        }
} 

    

?>

