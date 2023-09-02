<?php

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;
 
add_action( 'carbon_fields_register_fields', 'engineering_carbon' );
function engineering_carbon() {
 
	Container::make( 'post_meta', 'Edit Home Page' )
		->where( 'post_type', '=', 'page' )
        ->where( 'post_template', '=', 'template-parts/home-page.php' )
        ->add_fields( [
            Field::make( 'text', 'engineering_banner_section_title', __( 'Change title' ) ),
            Field::make( 'text', 'engineering_banner_section_paragraph', __( 'Edit paragraph' ) )
        ] );
 
}

?>