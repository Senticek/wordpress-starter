<!DOCTYPE html>
<html lang="cs">
<footer class="footer text-center">
        <div class="container">
            <div class="row">
                <!-- Footer Location-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Adresa</h4>
                    <p class="lead mb-0">
                    <?php echo get_theme_mod('basic-footer-callout-address');?>
                        <br />
                    <?php echo get_theme_mod('basic-footer-callout-psc');?>
                    </p>
                </div>
                <!-- Footer Social Icons-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Sociální sítě</h4>
                    <a class="btn btn-outline-light btn-social mx-1" href="<?php echo get_theme_mod('basic-socials-callout-FB')?>"><i
                            class="fab fa-fw fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="<?php echo get_theme_mod('basic-socials-callout-twitter')?>"><i class="fab fa-fw fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="<?php echo get_theme_mod('basic-socials-callout-linkedin')?>"><i
                            class="fab fa-fw fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="<?php echo get_theme_mod('basic-socials-callout-dribble')?>"><i class="fab fa-fw fa-dribbble"></i></a>
                </div>
                <!-- Footer About Text-->
                <div class="col-lg-4">
                    <h4 class="text-uppercase mb-4">Odkazy</h4>
                    <p class="lead mb-0">
                    <?php echo get_theme_mod('basic-link-callout-text');?>
                    <a href="<?php echo get_theme_mod('basic-link-callout-link')?>"><?php echo get_theme_mod('basic-link-callout-clickable');?></a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
     <!-- Copyright Section-->
 <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright © Depth Charge Software s.r.o.</small></div>
    </div>
    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
    <div class="scroll-to-top d-lg-none position-fixed">
        <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i
                class="fa fa-chevron-up"></i></a>
    </div>
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
    
                <?php
                        endforeach;
                        wp_reset_postdata();
                        ?>
       
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/main.js"></script>
    <?php wp_footer();?>
   
   
</div>
