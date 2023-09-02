<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Enginnering
 */

?>

<!DOCTYPE html>
	<html <?php language_attributes(); ?>>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php wp_title(''); ?></title>
		<?php wp_head(); ?>
	</head>

    <body>

        <div class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="top_line">
                            <div class="logo_header">
                                <a href="<?php echo home_url(); ?>">
                                    <img src="<?php echo get_bloginfo('template_url') ?>/img/logo.svg" alt="Engineering Supervision">
                                    <span>Engineering Supervision</span>
                                </a>
                            </div>
                            <div class="menu_header">
									<?php
										wp_nav_menu( array(
											'menu'              => 'header_menu',
											'menu_class'        => 'big_menu',
										) );
									?>
                                <div class="button_contact-us">
									<a href="#contacts">
                                        <button>CONTACT US</button>
                                    </a>
                                </div>
                                <div id="openMenu" class="button_menu">
                                    <button>MENU</button>
                                </div>
                                <div id="overlay_menu" class="overlay_menu"></div>
                                <div id="mobile_menu" class="mobile_menu">
									<?php
										wp_nav_menu( array(
											'menu'              => 'header_menu'
										) );
									?>
                                    <div id="button_contact-us-mobile" class="button_contact-us-mobile">
                                        <a href="#contacts">
                                            <button>CONTACT US</button>
                                        </a>
                                    </div>
								</div>
                                <div id="openMenu2" class="button-mini_menu">
                                    <button class="closedMenu"><img src="<?php echo get_bloginfo('template_url') ?>/img/mini_menu.svg" alt="Menu"></button>
                                    <button class="openMenu"><img src="<?php echo get_bloginfo('template_url') ?>/img/closemenu.svg" alt="Menu"></button> 
                                </div>
                                <div id="mobile_menu2" class="mobile_menu2">
									<?php
										wp_nav_menu( array(
											'menu'              => 'header_menu'
										) );
									?>
                                    <div id="button_contact-us-mobile2" class="button_contact-us-mobile">
                                        <a href="#contacts">
                                            <button>CONTACT US</button>
                                        </a>
                                    </div>
								</div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
