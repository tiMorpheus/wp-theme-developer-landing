<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Заголовок</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="favicon.png" />


    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/skins/<?php
    $options = get_option('sample_theme_options');
    echo $options['selectinput'];
    ?>.css" />

    <?php wp_head()?>
</head>
<body>

<!--PRELOADER-->
<div class="loader">
    <div class="loader-inner"></div>
</div>
<!--PRELOADER-->

<!--HEADER START-->
<header class="main-header parallax" data-z-index="1">
    <div class="container">
        <div class="row">

            <!--LOGO START-->
            <div class="col-md-12">
                <div class="logo-container">
                   <?php dynamic_sidebar('logo')?>
                </div>
            </div>
            <!--LOGO END-->
            <button class="toggle-menu">
					<span class="sandwich">
						<span class="sw-topper"></span>
						<span class="sw-bottom"></span>
						<span class="sw-footer"></span>
					</span>
            </button>
            <nav class="top-menu">
                <ul class="menu-list">
                    <li><a href="#about">About Me</a></li>
                    <li><a href="#resume">Resume</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>


    </div>
    <div class="top-wrapper">
        <div class="top-content">
            <h1 class="" data-aos="fade-down" data-aos-delay="400"><?php  echo get_bloginfo("name"); ?></h1>
            <p data-aos="fade-up" data-aos-delay="800"><?php echo  get_bloginfo('description'); ?></p>
        </div>
    </div>
</header>
<!--HEADER END-->