<?php
/* Enqueue Styles */
if ( ! function_exists('zarte_twentyfive_enqueue_style') ) {
    function zarte_twentyfive_enqueue_style() {
		    wp_enqueue_style( 'twenty-twenty-five-custom-style', get_stylesheet_directory_uri() .'/custom-style.css', array(), wp_get_theme()->get('Version') );
    }
    add_action('wp_enqueue_scripts', 'zarte_twentyfive_enqueue_style');
}

function meta_theme_color() {
?>
    <meta name="theme-color" content="#fff6f4">
<?php
}

function gtag_js() {
?>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-KWWBK7EN1L"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-KWWBK7EN1L');
    </script>
<?php
}

function og_required() {
    $site_name = get_bloginfo('name');
    echo '<meta property="og:url" content="' . get_permalink() . '" />';
    echo '<meta property="og:site_name" content="' . $site_name . '" />';
    echo '<meta name="twitter:creator" content="@zartre" />';
    if( is_single() ) {
        echo '<meta property="og:title" content="' . get_the_title() . ' - ' . $site_name . '" />';
        echo '<meta property="og:type" content="article" />';
        echo '<meta name="twitter:title" content="' . get_the_title() . ' - ' . $site_name . '" />';
    }
}

function og_image() {
    if( is_single() ) {
        $feat_img = get_the_post_thumbnail_url(get_the_ID(), 'full');
        if ($feat_img == false) {
            $feat_img = get_stylesheet_directory_uri() . '/images/ogimage.png';
        }
        echo '<meta property="og:image" content="' . $feat_img . '" />';
        echo '<meta name="twitter:card" content="summary_large_image" />';
        echo '<meta name="twitter:image" content="' . $feat_img . '" />';
    }
}

add_action('wp_head', 'meta_theme_color');
add_action('wp_head', 'gtag_js');
add_action('wp_head', 'og_required');
add_action('wp_head', 'og_image');
