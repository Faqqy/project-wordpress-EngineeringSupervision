<?php 
/* Template Name: Inspection Page */


$editInspectionTitle = carbon_get_the_post_meta('engineering_banner_inspection_title');
$editInspectionParagraph = carbon_get_the_post_meta('engineering_banner_inspection_paragraph');
$editInspectionTitleWrapper = carbon_get_the_post_meta('engineering_banner_inspection_title_wrapper');
$editInspectionParagraphWrapper = carbon_get_the_post_meta('engineering_banner_inspection_paragraph_tile');

    get_header();
?>

<div class="wrapper">
            <?php
                $inspectionBgImage = carbon_get_the_post_meta('engineering_background_image_inspection');
                $photo = $inspectionBgImage ? wp_get_attachment_image_src($inspectionBgImage, 'full') : '';
            ?>
            <section class="section_banner-team inspection" style="  background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.40) 0%, rgba(0, 0, 0, 0.40) 100%), linear-gradient(0deg, rgba(255, 235, 57, 0.09) 0%, rgba(255, 235, 57, 0.09) 100%), url('<?php echo $photo[0];?>');">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="title_page-team inspection">
                                <div class="header_banner-title inspection">
                                    <h1>
                                       <?php echo $editInspectionTitle; ?>                                     
                                    </h1>
                                    <span class="line"></span>
                                </div>
                                <div class="body_banner">
                                    <p>
                                        <?php echo $editInspectionParagraph; ?>   
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
                                    <?php echo $editInspectionTitleWrapper; ?>   
                                </h2>
                                <p>
                                    <?php echo $editInspectionParagraphWrapper; ?>  
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
                            <div class="we_provide-grid inspection">
                                <?php
                                    $slides = carbon_get_the_post_meta( 'engineering_inspection_slides' );
                                    
                                    foreach ( $slides as $slide ) {
                                        echo '<div class="we_provide-grid__item inspection">';
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