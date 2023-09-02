<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Enginnering
 */

?>
<div class="main-footer">
            <section class="contat_us" id="contacts">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="title_contact">
                                <h2>
                                    Contact us
                                </h2>
                            </div>
                            <span class="line line_h2-contact"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <div class="from-contact">
                                <?php echo do_shortcode( '[contact-form-7 id="86f0bce" title="COntact form footer"]' ); ?>
                                <div class="error_block">
                                    <div id="errorName"></div>
                                    <div id="errorMail"></div>
                                    <div id="errorMessage"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="contacts_list">
                                <div class="contacts_list-email">
                                    <span>Email</span>
                                    <div class="d-flex item_contact">
                                        <img src="<?php echo get_bloginfo('template_url') ?>/img/mail-img.svg" alt="Email">
                                        <a href="mailto:contact@es.ae">contact@es.ae</a>
                                    </div>
                                </div>
                                <div class="contscts_list-phone">
                                    <span>Phone</span>
                                    <div class="d-flex item_contact">
                                        <img src="<?php echo get_bloginfo('template_url') ?>/img/phone-img.svg" alt="Email">
                                        <a href="tel:+97111111-11-11">+971 (111) 111-11-11</a>
                                    </div>
                                </div>
                                <div class="contacts_list-addres">
                                    <span>Address</span>
                                    <div class="d-flex item_contact">
                                        <img src="<?php echo get_bloginfo('template_url') ?>/img/addres-img.svg" alt="Email">
                                        <a href="https://goo.gl/maps/swoURBWo5epXUmCj6">1 Sheikh Mohammed bin Rashid Blvd - Downtown Dubai</a>
                                    </div>
                                </div>
                            </div>
                            <div id="map"></div>
                            <script>(g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})
                                ({key: "AIzaSyB4rx_VuE8TmDT1Sq4-TZ5MeVVIaHFKRng", v: "weekly"});</script>
                        </div>
                    </div>
                </div>
            </section>
            <section class="about_info">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="about_info-items">
                                <div class="dark_logo">
                                    <a href="<?php echo home_url(); ?>">
                                        <img src="<?php echo get_bloginfo('template_url') ?>/img/black_logo.svg" alt="Engineering Supervision">
                                        <span>Engineering Supervision</span>
                                    </a>
                                </div>
                                <div class="bottom_menu">
									<?php
										wp_nav_menu( array(
											'menu'              => 'footer_menu',
											'menu_class'        => 'menu',
											'menu_id'           => '',
											'container'         => 'div',
											'container_class'   => '',
											'container_id'      => '',
											'fallback_cb'       => 'wp_page_menu',
											'before'            => '',
											'after'             => '',
											'link_before'       => '',
											'link_after'        => '',
											'echo'              => true,
											'depth'             => 0,
											'walker'            => '', 
											'theme_location'    => '', 
											'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',
												'item_spacing'      => 'preserve',
										) );
									?>
                                    <div class="social_menu">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img src="<?php echo get_bloginfo('template_url') ?>/img/facebook.svg" alt="facebook">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="<?php echo get_bloginfo('template_url') ?>/img/insta.svg" alt="Instagram">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="<?php echo get_bloginfo('template_url') ?>/img/twitter.svg" alt="Twitter">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="politics_section">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="politics_menu">
                                <ul>
                                    <li><a href="#">Terms and Conditions</a></li>
                                    <li><a href="#">Terms of Access</a></li>
                                    <li><a href="#">Cookie Policy</a></li>
                                    <li><a href="#">Cookie Preferences</a></li>
                                    <li><a href="#">Privacy at ES</a></li>
                                    <li><a href="#">© 2023 Engineering Supervision</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div id="overlay" style="display: none;"></div>
            <div id="modal" style="display: none;">
                <div class="modal-body">
                    <div id="close-btn" class="close-btn">
					<img src="<?php echo get_bloginfo('template_url') ?>/img/close_modal.svg" alt="Close">
                    </div>
                    <div class="img-popup">
					<img src="<?php echo get_bloginfo('template_url') ?>/img/ok_form.svg" alt="Submit-ok">
                    </div>
                    <div class="text-success">
                        <p>Your submission has been sent!</p>
                    </div>
                    
                </div>
            </div>
       
			<?php wp_footer(); ?>
    </body>

</html> 
