<?php

 function contactform_add_scripts() {

 // Register the style for the Contact form
            wp_register_style( 'contactform-style',  get_stylesheet_directory_uri(). '/vcnValForm1.css');
            wp_enqueue_style( 'contactform-style' );

            wp_register_script( 'jquery-validate-script', get_stylesheet_directory_uri() . '/js/jquery.validate.min.js' ,array( 'jquery'));
            wp_enqueue_script( 'jquery-validate-script' );

            wp_register_script( 'contactform-script', get_stylesheet_directory_uri() . '/js/contactform.js' ,array( 'jquery','jquery-validate-script'));
            wp_enqueue_script( 'contactform-script' );

        }

/** end of validation section
*/
 //Add CSS and other scripts for the Contact form.
 add_action('wp_enqueue_scripts','contactform_add_scripts');





function my_theme_enqueue_styles() {

$parent_style = 'parent-style';

wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
wp_enqueue_style( 'child-style',
get_stylesheet_directory_uri() . '/style.css',
array( $parent_style )
);
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
?>

