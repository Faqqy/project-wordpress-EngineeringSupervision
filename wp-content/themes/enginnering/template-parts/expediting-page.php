<?php 
/* Template Name: Expediting Page */


$editExpeditingTitle = carbon_get_the_post_meta('engineering_banner_expediting_title');
$editExpeditingParagraph = carbon_get_the_post_meta('engineering_banner_expediting_paragraph');
$editExpeditingTitleWrapper = carbon_get_the_post_meta('engineering_banner_expediting_title_wrapper');
$editExpeditingParagraphWrapper = carbon_get_the_post_meta('engineering_banner_expediting_paragraph_tile');

    get_header();
?>

<div class="wrapper">
            <?php
                $expeditingBgImage = carbon_get_the_post_meta('engineering_background_image_expediting');
                $photo = $expeditingBgImage ? wp_get_attachment_image_src($expeditingBgImage, 'full') : '';
            ?>
            <section class="section_banner-team expediting" style="background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.40) 0%, rgba(0, 0, 0, 0.40) 100%), linear-gradient(0deg, rgba(255, 235, 57, 0.09) 0%, rgba(255, 235, 57, 0.09) 100%), url('<?php echo $photo[0];?>');">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="title_page-team expediting">
                                <div class="header_banner-title expediting">
                                    <h1>
                                        <?php echo $editExpeditingTitle; ?>                                       
                                    </h1>
                                    <span class="line"></span>
                                </div>
                                <div class="body_banner">
                                    <p>
                                        <?php echo $editExpeditingParagraph; ?>  
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
                                    <?php echo $editExpeditingParagraph; ?> 
                                </h2>
                                <p>
                                    <?php echo $editExpeditingParagraphWrapper; ?> 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="we_provide">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="we_provide-text">
                                <h2>
                                    We Provide
                                </h2>
                                <span class="line"></span>
                            </div>
                            <div class="we_provide-grid expediting">
                            <?php
                                    $slides = carbon_get_the_post_meta( 'engineering_expediting_slides' );
                                    
                                    foreach ( $slides as $slide ) {
                                        echo '<div class="we_provide-grid__item expediting">';
                                        if( $slide[ 'title' ] ) {
                                            echo '<h3>' . $slide['title'] . '</h3>';
                                            echo '<p>' .  $slide['link'] . '</p>';
                                        }
                                     
                                        echo '</div>';
                                    }
                                    
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

<?php
    get_footer();
?>