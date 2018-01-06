<!--FOOTER START START-->
<footer class="footer bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                &copy; 2017 Tymur Tolochko
                <div class="social-wrap">
                    <ul>
                        <?php if ( have_posts() ) : query_posts('cat=3');
                            while (have_posts()) : the_post(); ?>
                                <li>
                                    <a href="<?php echo get_post_meta($post-> ID, 'social_url', true); ?>" target="_blank" title="<?php the_title();?>"><i class="fa <?php echo get_post_meta($post-> ID, 'font_awesome', true);?>" aria-hidden="true""></i></a>
                                </li>
                            <? endwhile; endif; wp_reset_query(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--FOOTER START END-->


<div class="hidden"></div>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/libs/html5shiv/es5-shim.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/libs/html5shiv/html5shiv.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/libs/respond/respond.min.js"></script>
<![endif]-->


<script src="<?php echo get_template_directory_uri(); ?>/libs/jquery/dist/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/libs/waypoints/waypoints.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/libs/animate/animate-css.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/common.min.js"></script>

<?php wp_footer(); ?>

<!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
<!-- Google Analytics counter --><!-- /Google Analytics counter -->
</body>
</html>