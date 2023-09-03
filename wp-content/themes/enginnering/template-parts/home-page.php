<?php 
/* Template Name: Home Page */

//Banner section
$edittexttitle = carbon_get_the_post_meta('engineering_banner_section_title');
$edittextparagraph = carbon_get_the_post_meta('engineering_banner_section_paragraph');

//Services section
$editServicesTitle = carbon_get_the_post_meta('engineering_services_section_title');
$editServicesLeftText = carbon_get_the_post_meta('engineering_services_section_left_text');
$editServicesRightText = carbon_get_the_post_meta('engineering_services_section_right_text');

//Work  section
$editWorkTitle = carbon_get_the_post_meta('engineering_work_section_title');
$editWorkParagraph = carbon_get_the_post_meta('engineering_work_section_left_text');

//Cards
$firstCardTitle = carbon_get_theme_option('engineering_card_title_first');
$firstCardParagraph = carbon_get_theme_option('engineering_card_paragraph_first');
$firstCardParagraphHidden = carbon_get_theme_option('engineering_card_hidden_text_first');

$secondCardTitle = carbon_get_theme_option('engineering_card_title_second');
$secondCardParagraph = carbon_get_theme_option('engineering_card_paragraph_second');
$secondCardParagraphHidden = carbon_get_theme_option('engineering_card_hidden_text_second');

$thirdCardTitle = carbon_get_theme_option('engineering_card_title_third');
$thirdCardParagraph = carbon_get_theme_option('engineering_card_paragraph_third');
$thirdCardParagraphHidden = carbon_get_theme_option('engineering_card_hidden_text_third');

get_header();
?>
<div class="wrapper">
            <?php
                $firstCardImage = carbon_get_the_post_meta('engineering_background_image_home');
                $photo = $firstCardImage ? wp_get_attachment_image_src($firstCardImage, 'full') : '';
            ?>
            <section class="section_banner" style="background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.63) 0%, rgba(0, 0, 0, 0.63) 100%), url('<?php echo $photo[0];?>'); ">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="title_page">
                                <div class="header_banner-title">
                                    <h1>
                                        <?php echo $edittexttitle; ?>
                                    </h1>
                                    <span class="line"></span>
                                </div>
                                <div class="body_banner">
                                    <p>
                                        <?php echo $edittextparagraph; ?>
                                    </p>
                                </div>
                                <div class="footer_banner">
                                    <div class="button_about-us">
                                        <button>About us</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section_services">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="title_services">
                                <h2>
                                    <?php echo $editServicesTitle; ?>
                                </h2>
                            </div>
                            <span class="line line_h1"></span>
                            <div class="items_box">
                                <div class="item-front">
                                    <?php
                                        $firstCardImage = carbon_get_theme_option('engineering_card_image_first');
                                        $photo = $firstCardImage ? wp_get_attachment_image_src($firstCardImage, 'full') : '';
                                    ?>
                                    <img src="<?php echo $photo[0];?>" alt="">
                                    <div class="mobile_activation">
                                        <h2><?php echo $firstCardTitle; ?></h2>
                                        <span class="line"></span>
                                        <p class="body_copy">
                                            <?php echo $firstCardParagraph; ?>
                                        </p>
                                        <p class="additional-text">
                                            <?php echo $firstCardParagraphHidden; ?>
                                        </p>
                                        <div class="button_read-more">

                                            <a href="<?php echo get_permalink(25); ?>">
                                                <button>Read more</button>
                                            </a>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="item-front">
                                    <?php
                                        $secondCardImage = carbon_get_theme_option('engineering_card_image_second');
                                        $photo = $secondCardImage ? wp_get_attachment_image_src($secondCardImage, 'full') : '';
                                    ?>
                                    <img src="<?php echo $photo[0];?>" alt="">
                                    <div class="mobile_activation">
                                        <h2><?php echo $secondCardTitle; ?></h2>
                                        <span class="line"></span>
                                        <p class="body_copy">
                                            <?php echo $secondCardParagraph; ?>
                                        </p>
                                        <p class="additional-text">
                                            <?php echo $secondCardParagraphHidden; ?>
                                        </p>
                                        <div class="button_read-more">
                                            <a href="<?php echo get_permalink(27); ?>">
                                                <button>Read more</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-front">
                                    <?php
                                        $thirdCardImage = carbon_get_theme_option('engineering_card_image_third');
                                        $photo = $thirdCardImage ? wp_get_attachment_image_src($thirdCardImage, 'full') : '';
                                    ?>
                                    <img src="<?php echo $photo[0];?>" alt="">
                                    <div class="mobile_activation">
                                        <h2><?php echo $thirdCardTitle; ?></h2>
                                        <span class="line"></span>
                                        <p class="body_copy">
                                            <?php echo $thirdCardParagraph; ?>
                                        </p>
                                        <p class="additional-text">
                                            <?php echo $thirdCardParagraphHidden; ?>
                                        </p>
                                        <div class="button_read-more">
                                            <a href="<?php echo get_permalink(29); ?>">
                                                <button>Read more</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </section>

                <div class="container">
                    <div class="desktop_version">
                        <div class="row g-0">     
                            <div class="col-md-6 col-sm-12">
                                <div class="broken_text-left">
                                    <p>
                                        <?php echo $editServicesLeftText; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="broken_text-right">
                                    <p>
                                        <?php echo $editServicesRightText; ?>
                                        <span class="line_dark"></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mobile_version">
                        <div class="row g-0"> 
                            <div class="col-lg-6 col-md-12">
                                <div class="broken_text-right">
                                    <p>
                                        <?php echo $editServicesRightText; ?>
                                        <span class="line_dark"></span>
                                    </p>
                                </div>
                            </div>    
                            <div class="col-lg-6 col-md-12">
                                <div class="broken_text-left">
                                    <p>
                                        <?php echo $editServicesLeftText; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>  
            <?php
                $firstCardImage2 = carbon_get_the_post_meta('engineering_background_image_work');
                $photo = $firstCardImage2 ? wp_get_attachment_image_src($firstCardImage2, 'full') : '';
            ?>
            <section class="work_section" style="background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.63) 0%, rgba(0, 0, 0, 0.63) 100%), url('<?php echo $photo[0];?>');">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="title_work align-middle">
                                <h2>
                                    <?php echo $editWorkTitle; ?>                             
                                </h2>
                                <span class="line"></span>
                                <p>
                                    <?php echo $editWorkParagraph; ?>  
                                </p>
                                <div class="button_view-careers">
                                    <a href="<?php echo get_permalink(13); ?>">
                                        <button>VIEW CAREERS</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
<?php 
    get_footer();
?>