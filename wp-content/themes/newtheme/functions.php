<?php
function wpb_adding_styles() {
wp_register_style('style', get_template_directory_uri('style.css', __FILE__));
wp_enqueue_style( 'style' ); 
wp_register_style('color', get_template_directory_uri('css/color.css', __FILE__));
wp_register_style('animate', get_template_directory_uri('css/animate.css', __FILE__));
wp_register_style('bootstrap.min', get_template_directory_uri('css/bootstrap.min.css', __FILE__));
wp_register_style('font-awesome.min', get_template_directory_uri('css/font-awesome.min.css', __FILE__));
wp_register_style('font-icons', get_template_directory_uri('css/font-icons.css', __FILE__));
wp_register_style('magnific-popup', get_template_directory_uri('css/magnific-popup.css', __FILE__));
wp_register_style('responsive', get_template_directory_uri('css/responsive.css', __FILE__));
wp_register_style('rev-slider', get_template_directory_uri('css/rev-slider.css', __FILE__));
wp_register_style('sliders', get_template_directory_uri('css/sliders.css', __FILE__));
wp_register_style('spacing', get_template_directory_uri('css/spacing.css', __FILE__));

wp_enqueue_style( 'color' ); 
wp_enqueue_style( 'animate' ); 
wp_enqueue_style( 'bootstrap.min' ); 
wp_enqueue_style( 'font-awesome.min' ); 
wp_enqueue_style( 'font-icons'); 
wp_enqueue_style( 'magnific-popup' ); 
wp_enqueue_style( 'responsive' ); 
wp_enqueue_style( 'rev-slider'); 
wp_enqueue_style( 'sliders'); 
wp_enqueue_style( 'spacing' ); 

}


function wpb_adding_scripts() {
    wp_register_script('scripts',  get_template_directory_uri('js/scripts.js', __FILE__), array('jquery'), true);
    wp_enqueue_script('scripts');
    wp_register_script('bootstrap.min',  get_template_directory_uri('js/bootstrap.min.js', __FILE__), true);
    wp_enqueue_script('bootstrap.min');
    wp_register_script('gmap3',  get_template_directory_uri('js/gmap3.js', __FILE__), array('jquery'), true);
    wp_enqueue_script('gmap3');
    wp_register_script('jquerry.min',  get_template_directory_uri('js/jquerry.min.js', __FILE__), array('jquery'), true);
    wp_enqueue_script('jquerry.min');
    wp_register_script('plugins',  get_template_directory_uri('js/plugins.js', __FILE__), array('jquery'), true);
    wp_enqueue_script('plugins');
    wp_register_script('rev-slider',  get_template_directory_uri('js/rev-slider.js', __FILE__), array('jquery'), true);
    wp_enqueue_script('rev-slider');





    }
?>

