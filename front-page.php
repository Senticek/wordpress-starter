<?php get_template_part('includes/header');?>
    <!-- Portfolio Section-->
    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0"><?php echo get_theme_mod('basic-titles-callout-titlePortfolio');?></h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <div class="row justify-content-center">
                    <?php
                        // WP Query arguments
                    $args = array('numberposts' => '-1'); // -1 get all posts
                        // WP Query
                    $query = new WP_Query($args);
                        // Get posts
                    $posts = get_posts($args);
                        // Loop through posts
                       
                    foreach ($posts as $post) :
                            setup_postdata($post);
                    ?>
                     <!-- Portfolio Grid Items-->
                <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal-<?php echo get_the_ID();?>">
                        
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i
                                    class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
                    </div>
                </div>
                            <!-- Portfolio Modals-->
                <div class="portfolio-modal modal fade" id="portfolioModal-<?php echo get_the_ID()?>" tabindex="-1" role="dialog"
                                aria-labelledby="portfolioModal-<?php echo get_the_ID()?>Label" aria-hidden="true">
                                <div class="modal-dialog modal-xl" role="document">
                                    <div class="modal-content">
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true"><i class="fas fa-times"></i></span>
                                        </button>
                                        <div class="modal-body text-center">
                                            <div class="container">
                                                <div class="row justify-content-center">
                                                    <div class="col-lg-8">
                                                        <!-- Portfolio Modal - Title-->
                                                        <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0"
                                                            id="portfolioModal-<?php echo get_the_ID()?>Label"><?php the_title(); ?></h2>
                                                        <!-- Icon Divider-->
                                                        <div class="divider-custom">
                                                            <div class="divider-custom-line"></div>
                                                            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                                            <div class="divider-custom-line"></div>
                                                        </div>
                                                        <!-- Portfolio Modal - Image-->
                                                        <img class="img-fluid rounded mb-5" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
                                                        <!-- Portfolio Modal - Text-->
                                                        <p class="mb-5">
                                                        <?php the_content(); ?>
                                                        </p>
                                                        <button class="btn btn-primary" data-dismiss="modal">
                                                            <i class="fas fa-times fa-fw"></i>
                                                            Close Window
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        endforeach;
                        wp_reset_postdata();
                        ?>
         </div>
    </section>
    <!-- About Section-->
    <section class="page-section bg-primary text-white mb-0" id="about">
        <div class="container">
            <!-- About Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-white"><?php echo get_theme_mod('basic-titles-callout-titleUS'); ?></h2>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- About Section Content-->
            <div class="row">
                <div class="col-lg-12 ml-auto">
                    <?php 
                        $aboutUS = get_theme_mod('basic-titles-callout-textUS');
                        if ($aboutUS != '') {
                            echo '<p class="lead text-center">' . $aboutUS .'</p>';
                        } else {
                            echo "Edit this by going to your Dashboard -> Appearance -> Customise -> Author Editor";
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section-->
    <section class="page-section" id="contact">
        <div class="container">
            <!-- Contact Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0"><?php echo get_theme_mod('basic-titles-callout-titleContact'); ?></h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Contact Section Form-->
            <div class="row">
                <div class="col-lg-8 mx-auto">
                <?php echo do_shortcode('[contact-form-7 id="87" title="Form"]')?> 
                </div>
            </div>
        </div>
    </section>
<?php get_template_part('includes/footer');?>
</html>