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

<header id="header" class="header">
    <div class="wrapper-container">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-2">
                <div class="header__logo">
                    <a href="<?php echo home_url( '/' ); ?>">ЗМК <br/> <span>Семеновский</span></a>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="header__header-menu header-menu">
                    <?php
                    wp_nav_menu( array(
                            'theme_location' => 'top_menu',
                            'container'      => false,
                            'depth'          => 3,
                            'fallback_cb'    => false,
                            'menu_class'     => 'list-unstyled ',
                        )
                    );
                    ?>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="header__right">
                    <a href="#" class="btn btn-default">Заказать звонок</a>
                </div><!--header-right-->
            </div><!--col-sm-2-->
        </div><!--row-->
    </div><!--container-->
    </div>
</header><!--header-->


