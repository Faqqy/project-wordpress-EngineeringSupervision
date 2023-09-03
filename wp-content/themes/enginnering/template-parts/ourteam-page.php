<?php 
/* Template Name: OurTeam Page */

$editOurteamTitle = carbon_get_the_post_meta('engineering_banner_ourteam_title');
$editOurteamParagraph = carbon_get_the_post_meta('engineering_banner_ourteam_paragraph');
$editOurteamTitleWrapper = carbon_get_the_post_meta('engineering_banner_ourteam_title_wrapper');
$editOurteamParagraphWrapper = carbon_get_the_post_meta('engineering_banner_ourteam_paragraph_wrapper');

get_header();
?>

<div class="wrapper">
            <?php
                $ourBgImage = carbon_get_the_post_meta('engineering_background_image_our');
                $photo = $ourBgImage ? wp_get_attachment_image_src($ourBgImage, 'full') : '';
            ?>
            <section class="section_banner-team" style="background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.40) 0%, rgba(0, 0, 0, 0.40) 100%), linear-gradient(0deg, rgba(255, 235, 57, 0.09) 0%, rgba(255, 235, 57, 0.09) 100%), url('<?php echo $photo[0];?>');">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="title_page-team">
                                <div class="header_banner-title">
                                    <h1>
                                        <?php echo $editOurteamTitle; ?>                                        
                                    </h1>
                                    <span class="line"></span>
                                </div>
                                <div class="body_banner">
                                    <p>
                                        <?php echo $editOurteamParagraph; ?>  
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="picture_our-team">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="picture_our-team-text">
                                <h2>
                                    <?php echo $editOurteamTitleWrapper; ?>  
                                </h2>
                                <p>
                                    <?php echo $editOurteamParagraphWrapper; ?>  
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

<?php
    get_footer();
?>