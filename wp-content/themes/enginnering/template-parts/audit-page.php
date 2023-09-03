<?php 
/* Template Name: Audit Page */

$editAuditTitle = carbon_get_the_post_meta('engineering_banner_audit_title');
$editAuditParagraph = carbon_get_the_post_meta('engineering_banner_audit_paragraph');
$editAuditTitleWrapper = carbon_get_the_post_meta('engineering_banner_audit_title_wrapper');
$editAuditParagraphWrapper = carbon_get_the_post_meta('engineering_banner_audit_paragraph_tile');

    get_header();
?>


<div class="wrapper">
            <?php
                $auditBgImage = carbon_get_the_post_meta('engineering_background_image_audit');
                $photo = $auditBgImage ? wp_get_attachment_image_src($auditBgImage, 'full') : '';
            ?>
            <section class="section_banner-team audit" style="background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.40) 0%, rgba(0, 0, 0, 0.40) 100%), linear-gradient(0deg, rgba(255, 235, 57, 0.09) 0%, rgba(255, 235, 57, 0.09) 100%), url('<?php echo $photo[0];?>');">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="title_page-team audit">
                                <div class="header_banner-title audit">
                                    <h1>
                                        <?php echo $editAuditTitle; ?>                                      
                                    </h1>
                                    <span class="line"></span>
                                </div>
                                <div class="body_banner">
                                    <p>
                                        <?php echo $editAuditParagraph; ?>   
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
                                    <?php echo $editAuditTitleWrapper; ?> 
                                </h2>
                                <p>
                                    <?php echo $editAuditParagraphWrapper; ?> 
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
                            <div class="we_provide-grid audit">
                            <?php
                                    $slides = carbon_get_the_post_meta( 'engineering_audit_slides' );
                                    
                                    foreach ( $slides as $slide ) {
                                        echo '<div class="we_provide-grid__item audit">';
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