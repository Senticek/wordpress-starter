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
            <!-- Portfolio Grid Items-->
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
                <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#<?php the_title();?>">
                        
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i
                                    class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
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