<?php get_header(); ?>
<!--ABOUT START-->
<section id="about" class="section-about bg-light">

    <div class="section-header" data-aos="fade-up" data-aos-delay="500">
        <h2><?php echo get_cat_name(2)?></h2>
        <div class="description-wrapper">
            <div class="section-description"><?php echo category_description(2) ?></div>
        </div>
    </div>


    <div class="section-content">
        <div class="container">
            <div class="row">

                <?php if( have_posts() ) : query_posts('p=8');
                    while (have_posts()) : the_post(); ?>
                        <div class="col-md-4 col-md-push-4" data-aos="flip-left" data-aos-duration="3000">
                            <h3>Photo</h3>
                            <div class="person"  >

                                <a href="<?php echo get_template_directory_uri();?>/img/photo2.jpg" class="popup"><img src="<?php echo get_template_directory_uri(); ?>/img/photo.png"  alt="<?php echo get_bloginfo('name')?>">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-md-pull-4" data-aos="fade-right" data-aos-duration="3000">
                            <h3><?php the_title()?></h3>
                            <?php the_content() ?>
                        </div>
                    <? endwhile; endif; wp_reset_query(); ?>




                    <div class="col-md-4" data-aos="fade-left" data-aos-duration="3000">
                        <?php if ( have_posts() ) : query_posts('p=15');
                        while (have_posts()) : the_post(); ?>
                            <h3><?php the_title(); ?></h3>
                            <h2 class="personal-title"><?php echo get_bloginfo('name')?></h2>
                            <?php the_content(); ?>
                        <? endwhile; endif; wp_reset_query(); ?>

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
    </div>
</section>
<!--ABOUT END-->

<!--RESUME START-->
<section id="resume" class="section-resume bg-white">
    <div class="section-header"  data-aos="fade-up" data-aos-delay="700">
        <h2><?php echo get_cat_name(4);?></h2>
        <div class="description-wrapper">
            <div class="section-description"><?php echo category_description(4);?></div>
        </div>
    </div>


    <div class="section-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 work"  >
                    <h3><?php echo get_cat_name(5);?></h3>
                    <div class="resume-icon">
                        <i class="fa fa-briefcase" aria-hidden="true"></i>
                    </div>
                    <div class="item-grid-wrap">

                        <?php if ( have_posts() ) : query_posts('cat=5');
                            while (have_posts()) : the_post(); ?>

                                <div class="resume-item" data-aos="fade-right" data-aos-delay="300" data-aos-duration="3000">
                                    <div class="year"><?php echo get_post_meta($post-> ID, 'resume-years', true); ?></div>
                                    <div class="resume-description">
                                        <?php echo get_post_meta($post-> ID, 'resume-place', true); ?>
                                        <strong><?php the_title(); ?></strong>
                                    </div>
                                    <?php the_content(); ?>
                                </div>
                            <? endwhile; endif; wp_reset_query(); ?>


                    </div>

                </div>
                <div class="col-md-6 col-sm-6 education">
                    <h3><?php echo get_cat_name(6);?></h3>
                    <div class="resume-icon">
                        <i class="fa fa-book" aria-hidden="true"></i>
                    </div>
                    <div class="item-grid-wrap">

                        <?php if ( have_posts() ) : query_posts('cat=6');
                            while (have_posts()) : the_post(); ?>



                                <div class="resume-item " data-aos="fade-left" data-aos-delay="300" data-aos-duration="3000">
                                    <div class="year"> <?php echo get_post_meta($post-> ID, 'resume-years', true); ?></div>
                                    <div class="resume-description">
                                        <strong><?php the_title(); ?></strong>
                                        <?php echo get_post_meta($post-> ID, 'resume-place', true); ?>
                                    </div>
                                    <?php the_content(); ?>
                                </div>
                            <? endwhile; endif; wp_reset_query(); ?>



                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!--RESUME END-->

<!--PORTFOLIO START-->
<section id="portfolio" class="section-portfolio bg-dark">
    <div class="section-header"  data-aos="fade-up" data-aos-delay="700">
        <h2><?php echo get_cat_name(7);?></h2>
        <div class="description-wrapper">
            <div class="section-description"><?php echo category_description(7);?></div>
        </div>
    </div>


    <div class="section-content">
        <div class="container">
            <div class="row">
                <div class="filter-div controls	">
                    <ul class="">
                        <li class="filter active" data-filter="all">All</li>
                        <li class="filter" data-filter=".category1">Sites</li>
                        <li class="filter" data-filter=".category2">Design</li>
                        <li class="filter" data-filter=".category3">Music</li>
                        <li class="filter" data-filter=".category4">Logos</li>
                        <li class="filter" data-filter=".category5">Filter1</li>
                        <li class="filter" data-filter=".category6">Filter2</li>
                    </ul>
                </div>
                <div id="portfolio-grid">
                    <div class="mix col-md-3 col-sm-6 col-xs-12 portfolio-item category1 category8">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/1.jpg" alt="portfolioItem1">
                        <div class="portfolio-item-content">
                            <h3>Project title</h3>
                            <p>project description</p>
                            <a href="#" class="popup-content">View</a>
                        </div>
                        <div class="hidden">
                            <div class="modal-wrap">
                                <div class="modal-box-content">
                                    <button class="mfp-close" type="button" title="Esc">×</button>
                                    <h3>Project title</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum cupiditate,
                                        dignissimos quo. Dolore, omnis totam quibusdam voluptatibus cum, nulla dolores
                                        sunt iste? Sunt nam illum, animi magni veniam adipisci non.
                                    </p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/1.jpg" alt="Alt" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mix col-md-3 col-sm-6 col-xs-12 portfolio-item category1 category2 category8 category3 ">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/2.jpg" alt="portfolioItem1">
                        <div class="portfolio-item-content">
                            <h3>Project title</h3>
                            <p>project description</p>
                            <a href="#" class="popup-content">View</a>
                        </div>
                        <div class="hidden">
                            <div class="modal-wrap">
                                <div class="modal-box-content">
                                    <button class="mfp-close" type="button" title="Esc">×</button>
                                    <h3>Project title</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum cupiditate,
                                        dignissimos quo. Dolore, omnis totam quibusdam voluptatibus cum, nulla dolores
                                        sunt iste? Sunt nam illum, animi magni veniam adipisci non.
                                    </p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/2.jpg" alt="Alt" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mix col-md-3 col-sm-6 col-xs-12 portfolio-item category3">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/3.jpg" alt="portfolioItem1">
                        <div class="portfolio-item-content">
                            <h3>Project title</h3>
                            <p>project description</p>
                            <a href="#" class="popup-content">View</a>
                        </div>
                        <div class="hidden">
                            <div class="modal-wrap">
                                <div class="modal-box-content">
                                    <button class="mfp-close" type="button" title="Esc">×</button>
                                    <h3>Project title</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum cupiditate,
                                        dignissimos quo. Dolore, omnis totam quibusdam voluptatibus cum, nulla dolores
                                        sunt iste? Sunt nam illum, animi magni veniam adipisci non.
                                    </p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/3.jpg" alt="Alt" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mix col-md-3 col-sm-6 col-xs-12 portfolio-item category4 category8">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/4.jpg" alt="portfolioItem1">
                        <div class="portfolio-item-content">
                            <h3>Project title</h3>
                            <p>project description</p>
                            <a href="#" class="popup-content">View</a>
                        </div>
                        <div class="hidden">
                            <div class="modal-wrap">
                                <div class="modal-box-content">
                                    <button class="mfp-close" type="button" title="Esc">×</button>
                                    <h3>Project title</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum cupiditate,
                                        dignissimos quo. Dolore, omnis totam quibusdam voluptatibus cum, nulla dolores
                                        sunt iste? Sunt nam illum, animi magni veniam adipisci non.
                                    </p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/4.jpg" alt="Alt" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mix col-md-3 col-sm-6 col-xs-12 portfolio-item category1 category5 category4">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/3.jpg" alt="portfolioItem1">
                        <div class="portfolio-item-content">
                            <h3>Project title</h3>
                            <p>project description</p>
                            <a href="#" class="popup-content">View</a>
                        </div>
                        <div class="hidden">
                            <div class="modal-wrap">
                                <div class="modal-box-content">
                                    <button class="mfp-close" type="button" title="Esc">×</button>
                                    <h3>Project title</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum cupiditate,
                                        dignissimos quo. Dolore, omnis totam quibusdam voluptatibus cum, nulla dolores
                                        sunt iste? Sunt nam illum, animi magni veniam adipisci non.
                                    </p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/3.jpg" alt="Alt" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mix col-md-3 col-sm-6 col-xs-12 portfolio-item category6 category4">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/6.jpg" alt="portfolioItem1">
                        <div class="portfolio-item-content">
                            <h3>Project title</h3>
                            <p>project description</p>
                            <a href="#" class="popup-content">View</a>
                        </div>
                        <div class="hidden">
                            <div class="modal-wrap">
                                <div class="modal-box-content">
                                    <button class="mfp-close" type="button" title="Esc">×</button>
                                    <h3>Project title</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum cupiditate,
                                        dignissimos quo. Dolore, omnis totam quibusdam voluptatibus cum, nulla dolores
                                        sunt iste? Sunt nam illum, animi magni veniam adipisci non.
                                    </p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/6.jpg" alt="Alt" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mix col-md-3 col-sm-6 col-xs-12 portfolio-item category7 category4 category3">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/5.jpg" alt="portfolioItem1">
                        <div class="portfolio-item-content">
                            <h3>Project title</h3>
                            <p>project description</p>
                            <a href="#" class="popup-content">View</a>
                        </div>
                        <div class="hidden">
                            <div class="modal-wrap">
                                <div class="modal-box-content">
                                    <button class="mfp-close" type="button" title="Esc">×</button>
                                    <h3>Project title</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum cupiditate,
                                        dignissimos quo. Dolore, omnis totam quibusdam voluptatibus cum, nulla dolores
                                        sunt iste? Sunt nam illum, animi magni veniam adipisci non.
                                    </p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/5.jpg" alt="Alt" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mix col-md-3 col-sm-6 col-xs-12 portfolio-item category1 category8">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/1.jpg" alt="portfolioItem1">
                        <div class="portfolio-item-content">
                            <h3>Project title</h3>
                            <p>project description</p>
                            <a href="#" class="popup-content">View</a>
                        </div>
                        <div class="hidden">
                            <div class="modal-wrap">
                                <div class="modal-box-content">
                                    <button class="mfp-close" type="button" title="Esc">×</button>
                                    <h3>Project title</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum cupiditate,
                                        dignissimos quo. Dolore, omnis totam quibusdam voluptatibus cum, nulla dolores
                                        sunt iste? Sunt nam illum, animi magni veniam adipisci non.
                                    </p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/1.jpg" alt="Alt" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!--PORTFOLIO END-->

<!--CONTACTS START-->
<section id="contact" class="section-contact bg-light">
    <div class="section-header"  data-aos="fade-up" data-aos-delay="700">
        <h2>Contacts</h2>
        <div class="description-wrapper">
            <div class="section-description">Leave me your message</div>
        </div>
    </div>


    <div class="section-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="contact-item">
                        <h3><i class="fa fa-map-marker" aria-hidden="true"></i>My Address:</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, eveniet?</p>
                    </div>
                    <div class="contact-item">
                        <h3><i class="fa fa-phone" aria-hidden="true"></i>My Phone:</h3>
                        <p>+380669789606</p>
                    </div>
                    <div class="contact-item">
                        <h3><i class="fa fa-bitcoin" aria-hidden="true"></i>My WebSite:</h3>
                        <p><a href="https://github.com/tiMorpheus">https://github.com/tiMorpheus</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <form action="https://formspree.io/tymurtolochko@gmail.com" method="post" class="main-form" novalidate target="_blank">
                        <label class="form-group">
                            <span class="color-element">*</span>
                            Your Name
                            <input type="text" name="name" placeholder="Your Name..." data-validation-required-message="You do not entered ya name" required>
                            <span class="help-block text-danger"></span>
                        </label>
                        <label class="form-group">
                            <span class="color-element">*</span>
                            Your Email
                            <input type="email" name="email" placeholder="Your Email..." data-validation-required-message="You do not entered ya email" required>
                            <span class="help-block text-danger"></span>
                        </label>
                        <label class="form-group">
                            <span class="color-element">*</span>
                            Your Message
                            <textarea name="message" placeholder="Your Message..." data-validation-required-message="You do not entered ya mesage" required></textarea>
                            <span class="help-block text-danger"></span>
                        </label>
                        <button>Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>
<!--CONTACTS END-->

<?php get_footer(); ?>