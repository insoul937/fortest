<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <!--[if lt IE 9]>

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header id="header">
    <div class="nav-menu">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="hd-menu">
                        <?php
                        wp_nav_menu( array(
                                'theme_location' => 'footer_menu',
                                'container'      => false,
                                'depth'          => 3,
                                'fallback_cb'    => false,
                                'menu_class'     => 'list-unstyled ',
                            )
                        );
                        ?>
                    </div>
                    <?php if($facebook = get_field('facebook','options')):?>
                        <div class="social-links">
                            <a href="<?php echo $facebook;?>" target="_blank"><i class="fa fa-facebook"></i></a>
                            <?php if($instagram = get_field('instagram','options')):?>
                                <a href="<?php echo $instagram;?>"><i class="fa fa-instagram"></i></a>
                            <?php endif;?>
                        </div><!--social-link-->
                    <?php endif;?>
                </div>
                <div class="col-sm-6">
                    <div class="text-right">
                        <?php if($address = get_field('address',18)):?>
                            <div class="address">
                                <?php echo $address;?>
                            </div><!--address-->
                        <?php endif;?>
                        <?php if($phone_in = get_field('phone_call_number','options')):?>
                            <div class="footer-phone"><a href="tel:<?php echo $phone_in;?>"><?php the_field('phone_on_site','options');?></a></div>
                        <?php endif;?>
                        <?php if($email = get_field('email','options')):?>
                            <a href="mailto:<?php echo $email;?>" class="email"><?php echo $email;?></a>
                        <?php endif;?>
                        <?php if($working_hours = get_field('working_hours',18)):?>
                            <div class="working-hours">
                                <?php echo $working_hours;?>
                            </div>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="logo"><a href="<?php echo home_url( '/' ); ?>"><img src="<?php echo get_template_directory_uri();?>/assets/images/logo-main.png" alt="logo" class="img-fluid"></a></div>
    <div class="header-menu">
        <div class="container">
            <div class="row align-items-center">
                <?php if($phone_in = get_field('phone_call_number','options')):?>
                <div class="col-sm-3">
                    <div class="header-phone"><i class="fa fa-phone"></i><a href="tel:<?php echo $phone_in;?>"><?php the_field('phone_on_site','options');?></a></div>
                </div>
                <?php endif;?>
                <div class="offset-sm-8 col-sm-1">
                    <div class="header-nav">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </div>
                </div>
            </div><!--row-->
        </div><!--container-->
    </div><!--header-menu-->
    <div class="video-abs">
        <video width="1920" height="1070" loop muted autoplay="true" poster="video/duel.jpg">
            <source src="<?php echo get_template_directory_uri();?>/assets/video-man.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
        </video>
    </div>
</header><!--header-->

