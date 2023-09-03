<?php 
/* Template Name: Vacancies Page */

$editVacanciesTitle = carbon_get_the_post_meta('engineering_banner_vacancies_title');
$editVacanciesParagraph = carbon_get_the_post_meta('engineering_banner_vacancies_paragraph');
$editVacanciesTitleWrapper = carbon_get_the_post_meta('engineering_banner_vacancies_title_wrapper');
$editVacanciesParagraphWrapper = carbon_get_the_post_meta('engineering_banner_vacancies_paragraph_wrapper');

get_header();
?>

<div class="wrapper">
            <?php
                $vacanciesBgImage = carbon_get_the_post_meta('engineering_background_image_vac');
                $photo = $vacanciesBgImage ? wp_get_attachment_image_src($vacanciesBgImage, 'full') : '';
            ?>
            <section class="section_banner-team careers" style="background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.40) 0%, rgba(0, 0, 0, 0.40) 100%), linear-gradient(0deg, rgba(255, 235, 57, 0.09) 0%, rgba(255, 235, 57, 0.09) 100%), url('<?php echo $photo[0];?>');">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="title_page-team careers">
                                <div class="header_banner-title">
                                    <h1>
                                        <?php echo $editVacanciesTitle; ?>                                        
                                    </h1>
                                    <span class="line"></span>
                                </div>
                                <div class="body_banner">
                                    <p>
                                        <?php echo $editVacanciesParagraph; ?>   
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
                                    <?php echo $editVacanciesTitleWrapper; ?>  
                                </h2>
                                   <p>
                                   <?php echo $editVacanciesParagraphWrapper; ?>  
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