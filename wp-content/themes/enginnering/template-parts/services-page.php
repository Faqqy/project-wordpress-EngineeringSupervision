<?php 
/* Template Name: Services Page */

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

$editServicesTitle = carbon_get_the_post_meta('engineering_banner_services_title');
$editServicesParagraph = carbon_get_the_post_meta('engineering_banner_services_paragraph');

get_header();
?>

<div class="wrapper">
            <?php
                $servicesBgImage = carbon_get_the_post_meta('engineering_background_image_services');
                $photo = $servicesBgImage ? wp_get_attachment_image_src($servicesBgImage, 'full') : '';
            ?>
            <section class="section_banner-team services" style="background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.40) 0%, rgba(0, 0, 0, 0.40) 100%), linear-gradient(0deg, rgba(255, 235, 57, 0.09) 0%, rgba(255, 235, 57, 0.09) 100%), url('<?php echo $photo[0];?>');">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="title_page-team services">
                                <div class="header_banner-title">
                                    <h1>
                                        <?php echo $editServicesTitle; ?>                                      
                                    </h1>
                                    <span class="line"></span>
                                </div>
                                <div class="body_banner">
                                    <p>
                                        <?php echo $editServicesParagraph; ?>
                                    </p>
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
        </div>
<?php
    get_footer();
?>