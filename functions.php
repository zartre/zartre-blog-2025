<?php
/* Enqueue Styles */
if ( ! function_exists('zarte_twentyfive_enqueue_style') ) {
    function zarte_twentyfive_enqueue_style() {
		    wp_enqueue_style( 'twenty-twenty-five-custom-style', get_stylesheet_directory_uri() .'/custom-style.css', array(), wp_get_theme()->get('Version') );
    }
    add_action('wp_enqueue_scripts', 'zarte_twentyfive_enqueue_style');
}

function meta_theme_color(){
?>
    <meta name="theme-color" content="#fff6f4">
<?php
}
function gtag_js(){
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
add_action('wp_head', 'gtag_js');
