<?php
    function load_scripts(){
	/* ---------- All CSS file Register and Enqueue ------------- */ 

    wp_register_style('font-awesome-css','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('font-awesome-css');

    wp_register_style('style-css',get_template_directory_uri().'/assets/css/style.css');
    wp_enqueue_style('style-css');

    wp_register_style('slick-css',get_template_directory_uri().'/assets/css/slick.css');
    wp_enqueue_style('slick-css');

    wp_register_style('slick-theme-css',get_template_directory_uri().'/assets/css/slick-theme.css');
    wp_enqueue_style('slick-theme-css');

    wp_register_style('all-min-css',get_template_directory_uri().'/assets/css/all.min.css');
    wp_enqueue_style('all-min-css');

    wp_register_style('autoptimize-css',get_template_directory_uri().'/assets/css/autoptimize_af6bc69c9193f9d3dfa98637c356f677.css');
    wp_enqueue_style('autoptimize-css');

    wp_register_style('global-style-css',get_template_directory_uri().'/assets/css/global-style.css');
    wp_enqueue_style('global-style-css');


    wp_register_style('custom-scc-1-css',get_template_directory_uri().'/assets/css/custom-scc-1.css');
    wp_enqueue_style('custom-scc-1-css');

    wp_register_style('custom-css-2-css',get_template_directory_uri().'/assets/css/custom-css-2.css');
    wp_enqueue_style('custom-css-2-css');

    wp_register_style('slick_min_css','https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css');
    wp_enqueue_style('slick_min_css');

    wp_register_style('slick-theme_min','https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css');
    wp_enqueue_style('slick-theme_min');

	/* ------------ All JS file Register and Enqueue --------------- */
    wp_register_script('webfont-js',get_template_directory_uri().'/assets/webfont.js');
    wp_enqueue_script('webfont-js');

    wp_register_script('recaptcha-js',get_template_directory_uri().'/assets/js/recaptcha__en.js');
	wp_enqueue_script( 'recaptcha-js');

    wp_register_script('gtm-js',get_template_directory_uri().'/assets/js/gtm.js');
    wp_enqueue_script('gtm-js');

    wp_register_script('custom-js',get_template_directory_uri().'/assets/js/custom-js-1.js');
    wp_enqueue_script('custom-js');

    wp_register_script('script-js',get_template_directory_uri().'/assets/js/script.js');
    wp_enqueue_script('script-js');

    wp_register_script('banner-js',get_template_directory_uri().'/assets/js/banner.js');
    wp_enqueue_script('banner-js');

    wp_register_script('custom-2-js',get_template_directory_uri().'/assets/js/custom-js2.js');
    wp_enqueue_script('custom-2-js');

    wp_register_script('custom-3-js',get_template_directory_uri().'/assets/js/custom-js-3.js');
    wp_enqueue_script('custom-3-js');


    wp_register_script('fontawesome-js','https://kit.fontawesome.com/a076d05399.js');//not available to access
    wp_enqueue_script('fontawesome-js');

    wp_register_script('custom-4-js',get_template_directory_uri().'/assets/js/custom-js-4.js');
    wp_enqueue_script('custom-4-js');

    wp_register_script('common-js',get_template_directory_uri().'/assets/js/common.js');
    wp_enqueue_script('common-js');

    // wp_register_script('util-js',get_template_directory_uri().'/assets/util.js'); //not found
    // wp_enqueue_script('util-js');

    wp_register_script('map-js',get_template_directory_uri().'/assets/js/map.js');
    wp_enqueue_script('map-js');

    wp_register_script('marker-js',get_template_directory_uri().'/assets/js/marker.js');
    wp_enqueue_script('marker-js');

    wp_register_script('overlay-js',get_template_directory_uri().'/assets/js/overlay.js');
    wp_enqueue_script('overlay-js');

    // wp_register_script('wp-emoji-release-js',get_template_directory_uri().'/assets/wp-emoji-release.min.js');
    // wp_enqueue_script('wp-emoji-release-js'); //not found

    wp_register_script('infowindow-js',get_template_directory_uri().'/assets/js/infowindow.js');
    wp_enqueue_script('infowindow-js');

    wp_register_script('c-js-5-js',get_template_directory_uri().'/assets/js/c-js-5.js');
    wp_enqueue_script('c-js-5-js');

    wp_register_script('c-js-6-js',get_template_directory_uri().'/assets/js/c-js-6.js');
    wp_enqueue_script('c-js-6-js');

    wp_register_script( 'lazysizes-js',get_template_directory_uri().'/assets/js/lazysizes.min.js');
	wp_enqueue_script( 'lazysizes-js');

    wp_register_script( 'api-js',get_template_directory_uri().'/assets/js/api.js');
	wp_enqueue_script( 'api-js');

    wp_register_script( 'wp-polyfill-js',get_template_directory_uri().'/assets/js/wp-polyfill-inert.min.js');
	wp_enqueue_script( 'wp-polyfill-js');

    wp_register_script( 'regenerator-js',get_template_directory_uri().'/assets/js/regenerator-runtime.min.js');
	wp_enqueue_script( 'regenerator-js');

    wp_register_script( 'wp-polyfill-min-js',get_template_directory_uri().'/assets/js/wp-polyfill.min.js');
	wp_enqueue_script( 'wp-polyfill-min-js');

  //  wp_register_script( 'slick-min-js',get_template_directory_uri().'/assets/js/slick.min.js');
//	wp_enqueue_script( 'slick-min-js');

    wp_register_script( 'c-js',get_template_directory_uri().'/assets/js/c-js-6.js');
	wp_enqueue_script( 'c-js');

    wp_register_script( 'markerclustererplus-js',get_template_directory_uri().'/assets/js/markerclustererplus.min.js');
	wp_enqueue_script( 'markerclustererplus-js');

    wp_register_script( 'demo-js',get_template_directory_uri().'/assets/js');
	wp_enqueue_script( 'demo-js');

    wp_register_script( 'autoptimize-js',get_template_directory_uri().'/assets/js/autoptimize_ea32a7f515121674b2ef19078e08c731.js');
	wp_enqueue_script( 'autoptimize-js');

    wp_register_script( 'c-js-8-js',get_template_directory_uri().'/assets/js/c-js-8.js');
	wp_enqueue_script( 'c-js-8-js');

        // Enqueue jQuery and slick.min.js start 
  //  wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), '3.3.1', true);

  //  wp_enqueue_script('jquery2', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array(), '1.9.0', true);
    
   // Enqueue jQuery and slick.min.js end\

  }
  add_action('wp_enqueue_scripts','load_scripts');
 
  register_nav_menus( array(
    'primary'   => __( 'Primary Menu', 'myfirsttheme' ),
    
) );
