<?php
/**
 * Template Name: О Нас
 */

get_header();?>
<?php the_post();?>
<section id="content">
    <div class="page-title-about">
        <div class="container">
            <?php
            if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '<div class="breadcrumbs">','</div>' );
            }
            ?>
            <h1><?php the_title();?></h1>
        </div><!--container-->
    </div><!--page-title-about-->
    <?php if($slider = get_field('slider')):?>

    <div class="about-slider-container">
        <div class="about-slider owl-carousel">
            <?php foreach($slider as $sl):?>
                <div class="item">
                    <div class="about-single" style="background-image: url('<?php echo $sl['bg']['url'];?>')">
                        <div class="container">
                            <div class="about-text">
                                <div class="row">
                                    <div class="col-sm-7">
                                        <?php echo $sl['text'];?>
                                        <a href="#" class="btn btn-default add-cons"><span class="icon-chat_1"></span> Получить консультацию</a>
                                    </div>
                                </div>

                            </div>
                        </div><!--container-->
                    </div>
                </div>
            <?php endforeach;?>
        </div>
        <div class="about-slider-control">
            <div id="counter"></div>
            <div id="carousel-custom-dots"></div>
            <div class="customNextBtn" id="customNextBtn">далее <i class="fa fa-long-arrow-right"></i></div>
        </div>
    </div>
    <?php endif;?>
    <div class="wrapper-container">
        <div class="container">
        <?php the_content();?>
        <?php get_template_part('partials/block','team');?>
        </div>
    </div>
    <?php get_template_part('partials/bottom','block');?>
</section>
<?php get_footer();?>
