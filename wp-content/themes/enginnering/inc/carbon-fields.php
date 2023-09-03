<?php

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;
 
add_action( 'carbon_fields_register_fields', 'engineering_carbon' );
function engineering_carbon() {

    //Theme options

    Container::make( 'theme_options', 'Theme options' )
	->set_icon( 'dashicons-carrot' )
    ->add_tab('Footer', array(
        Field::make( 'text', 'engineering_social_facebook_link', __( 'Facebook link' ) )
            ->set_width(30),
        Field::make( 'text', 'engineering_social_inst_link', __( 'Inst link' ) )
            ->set_width(30),
        Field::make( 'text', 'engineering_social_twitter_link', __( 'Twitter link' ) )
            ->set_width(30),
        Field::make( 'text', 'engineering_contact_mail', __( 'Email' ) )
            ->set_width(50),
        Field::make( 'text', 'engineering_contact_phone', __( 'Phone' ) )
            ->set_width(50),
        Field::make( 'text', 'engineering_contact_address', __( 'Address' ) )
            ->set_width(50),
        Field::make( 'text', 'engineering_contact_address_link', __( 'Add Link Address to google maps' ) )
            ->set_width(50),
	) )
    ->add_tab('Cards', array(
        Field::make( 'html', 'engineering_information_text_first' )
            ->set_html( '<h1>Edit first card</h1>' ),
		Field::make( 'image', 'engineering_card_image_first', __( 'Card Image' ) ),
        Field::make( 'text', 'engineering_card_title_first', __( 'Card Title' ) ),
        Field::make( 'text', 'engineering_card_paragraph_first', __( 'Card Paragraph' ) ),
        Field::make( 'text', 'engineering_card_hidden_text_first', __( 'Card Hidden Text' ) ),

        Field::make( 'html', 'engineering_information_text_second' )
            ->set_html( '<h1>Edit second card</h1>' ),
        Field::make( 'image', 'engineering_card_image_second', __( 'Card Image' ) ),
        Field::make( 'text', 'engineering_card_title_second', __( 'Card Title' ) ),
        Field::make( 'text', 'engineering_card_paragraph_second', __( 'Card Paragraph' ) ),
        Field::make( 'text', 'engineering_card_hidden_text_second', __( 'Card Hidden Text' ) ),

        Field::make( 'html', 'engineering_information_text_third' )
            ->set_html( '<h1>Edit third card</h1>' ),
        Field::make( 'image', 'engineering_card_image_third', __( 'Card Image' ) ),
        Field::make( 'text', 'engineering_card_title_third', __( 'Card Title' ) ),
        Field::make( 'text', 'engineering_card_paragraph_third', __( 'Card Paragraph' ) ),
        Field::make( 'text', 'engineering_card_hidden_text_third', __( 'Card Hidden Text' ) ),
	) );

    //Home page
 
	Container::make( 'post_meta', 'Edit Home Page' )
		->where( 'post_type', '=', 'page' )
        ->where( 'post_template', '=', 'template-parts/home-page.php' )
        ->add_fields( [
            Field::make( 'html', 'engineering_information_text_section_banner' )
                ->set_html( '<h1>Edit banner section</h1>' ),
            Field::make( 'text', 'engineering_banner_section_title', __( 'Change title' ) ),
            Field::make( 'text', 'engineering_banner_section_paragraph', __( 'Edit paragraph' ) ),
            Field::make( 'image', 'engineering_background_image_home', __( 'Background Image' ) ),
            Field::make( 'html', 'engineering_information_text_section_services' )
                ->set_html( '<h1>Edit services section</h1>' ),
            Field::make( 'text', 'engineering_services_section_title', __( 'Change title' ) ),
            Field::make( 'text', 'engineering_services_section_left_text', __( 'Change left text' ) ),
            Field::make( 'text', 'engineering_services_section_right_text', __( 'Change right text' ) ),
            Field::make( 'html', 'engineering_information_text_section_work' )
                ->set_html( '<h1>Edit work section</h1>' ),
            Field::make( 'text', 'engineering_work_section_title', __( 'Change title' ) ),
            Field::make( 'text', 'engineering_work_section_left_text', __( 'Change Paragraph' ) ),
            Field::make( 'image', 'engineering_background_image_work', __( 'Background Image' ) ),
        ] );

    //Services page

    Container::make( 'post_meta', 'Edit Services Page' )
    ->where( 'post_type', '=', 'page' )
    ->where( 'post_template', '=', 'template-parts/services-page.php' )
    ->add_fields( [
        Field::make( 'html', 'engineering_information_text_services_page' )
            ->set_html( '<h1>Edit services banner section</h1>' ),
        Field::make( 'text', 'engineering_banner_services_title', __( 'Change title' ) ),
        Field::make( 'text', 'engineering_banner_services_paragraph', __( 'Edit paragraph' ) ),
        Field::make( 'image', 'engineering_background_image_services', __( 'Background Image' ) )
    ] );

    //Vacancies page

    Container::make( 'post_meta', 'Edit Vacancies Page' )
    ->where( 'post_type', '=', 'page' )
    ->where( 'post_template', '=', 'template-parts/vacancies-page.php' )
    ->add_fields( [
        Field::make( 'html', 'engineering_information_text_vacancies_page' )
            ->set_html( '<h1>Edit vacancies banner section</h1>' ),
        Field::make( 'text', 'engineering_banner_vacancies_title', __( 'Change title' ) ),
        Field::make( 'text', 'engineering_banner_vacancies_paragraph', __( 'Edit paragraph' ) ),
        Field::make( 'image', 'engineering_background_image_vac', __( 'Background Image' ) ),
        Field::make( 'html', 'engineering_information_text_vacancies_page_wrapper' )
            ->set_html( '<h1>Edit vacancies wrapper section</h1>' ),
        Field::make( 'text', 'engineering_banner_vacancies_title_wrapper', __( 'Change title' ) ),
        Field::make( 'rich_text', 'engineering_banner_vacancies_paragraph_wrapper', __( 'Edit paragraph' ) )
    ] );

    //Our Team page

    Container::make( 'post_meta', 'Edit Our Team Page' )
    ->where( 'post_type', '=', 'page' )
    ->where( 'post_template', '=', 'template-parts/ourteam-page.php' )
    ->add_fields( [
        Field::make( 'html', 'engineering_information_text_ourteam_page' )
            ->set_html( '<h1>Edit ourteam banner section</h1>' ),
        Field::make( 'text', 'engineering_banner_ourteam_title', __( 'Change title' ) ),
        Field::make( 'text', 'engineering_banner_ourteam_paragraph', __( 'Edit paragraph' ) ),
        Field::make( 'image', 'engineering_background_image_our', __( 'Background Image' ) ),
        Field::make( 'html', 'engineering_information_text_ourteam_page_wrapper' )
            ->set_html( '<h1>Edit ourteam wrapper section</h1>' ),
        Field::make( 'text', 'engineering_banner_ourteam_title_wrapper', __( 'Change title' ) ),
        Field::make( 'rich_text', 'engineering_banner_ourteam_paragraph_wrapper', __( 'Edit paragraph' ) )
    ] );

    //Inspection page

    Container::make( 'post_meta', 'Edit Inspection Page' )
    ->where( 'post_type', '=', 'page' )
    ->where( 'post_template', '=', 'template-parts/inspection-page.php' )
    ->add_fields( [
        Field::make( 'html', 'engineering_information_text_inspection_page' )
            ->set_html( '<h1>Edit inspection banner section</h1>' ),
        Field::make( 'text', 'engineering_banner_inspection_title', __( 'Change title' ) ),
        Field::make( 'text', 'engineering_banner_inspection_paragraph', __( 'Edit paragraph' ) ),
        Field::make( 'image', 'engineering_background_image_inspection', __( 'Background Image' ) ),
        Field::make( 'html', 'engineering_information_text_inspection_page_wrapper' )
            ->set_html( '<h1>Edit inspection wrapper section</h1>' ),
        Field::make( 'text', 'engineering_banner_inspection_title_wrapper', __( 'Change title' ) ),
        Field::make( 'rich_text', 'engineering_banner_inspection_paragraph_tile', __( 'Edit paragraph' ) ),

        Field::make( 'html', 'engineering_information_text_inspection_page_tile')
            ->set_html( '<h1>Edit tile grid</h1>' ),
        Field::make( 'complex', 'engineering_inspection_slides', 'Grid Tile' )
            ->add_fields( [
                Field::make( 'text', 'title', 'Grid Tile title' ),
                Field::make( 'text', 'link', 'Grid Tile paragraph' ),
                ] ),
    ] );

    //Expediting page

    Container::make( 'post_meta', 'Edit Expediting Page' )
    ->where( 'post_type', '=', 'page' )
    ->where( 'post_template', '=', 'template-parts/expediting-page.php' )
    ->add_fields( [
        Field::make( 'html', 'engineering_information_text_expediting_page' )
            ->set_html( '<h1>Edit expediting banner section</h1>' ),
        Field::make( 'text', 'engineering_banner_expediting_title', __( 'Change title' ) ),
        Field::make( 'text', 'engineering_banner_expediting_paragraph', __( 'Edit paragraph' ) ),
        Field::make( 'image', 'engineering_background_image_expediting', __( 'Background Image' ) ),
        Field::make( 'html', 'engineering_information_text_expediting_page_wrapper' )
            ->set_html( '<h1>Edit expediting wrapper section</h1>' ),
        Field::make( 'text', 'engineering_banner_expediting_title_wrapper', __( 'Change title' ) ),
        Field::make( 'rich_text', 'engineering_banner_expediting_paragraph_tile', __( 'Edit paragraph' ) ),

        Field::make( 'html', 'engineering_information_text_expediting_page_tile')
            ->set_html( '<h1>Edit tile grid</h1>' ),
        Field::make( 'complex', 'engineering_expediting_slides', 'Grid Tile' )
            ->add_fields( [
                Field::make( 'text', 'title', 'Grid Tile title' ),
                Field::make( 'text', 'link', 'Grid Tile paragraph' ),
                ] ),
    ] );

    //Audit page

    Container::make( 'post_meta', 'Edit Audit Page' )
    ->where( 'post_type', '=', 'page' )
    ->where( 'post_template', '=', 'template-parts/audit-page.php' )
    ->add_fields( [
        Field::make( 'html', 'engineering_information_text_audit_page' )
            ->set_html( '<h1>Edit audit banner section</h1>' ),
        Field::make( 'text', 'engineering_banner_audit_title', __( 'Change title' ) ),
        Field::make( 'text', 'engineering_banner_audit_paragraph', __( 'Edit paragraph' ) ),
        Field::make( 'image', 'engineering_background_image_audit', __( 'Background Image' ) ),
        Field::make( 'html', 'engineering_information_text_audit_page_wrapper' )
            ->set_html( '<h1>Edit audit wrapper section</h1>' ),
        Field::make( 'text', 'engineering_banner_audit_title_wrapper', __( 'Change title' ) ),
        Field::make( 'rich_text', 'engineering_banner_audit_paragraph_tile', __( 'Edit paragraph' ) ),

        Field::make( 'html', 'engineering_information_text_audit_page_tile')
            ->set_html( '<h1>Edit tile grid</h1>' ),
        Field::make( 'complex', 'engineering_audit_slides', 'Grid Tile' )
            ->add_fields( [
                Field::make( 'text', 'title', 'Grid Tile title' ),
                Field::make( 'text', 'link', 'Grid Tile paragraph' ),
                ] ),
    ] );
 
}

?>