<?php

get_header();?>
<?php the_post();?>
<section id="content">
    <?php get_template_part('partials/block','title');?>
    <div class="wrapper-container project-single-sliders">
        <div class="container">
            <div class="row">
                <?php if($left_slider = get_field('left_slider')):?>
                    <div class="col-sm-6">
                       <div class="project-single-slider owl-carousel">
                           <?php foreach ($left_slider as $ls):?>
                                <div class="item">
                                    <img src="<?php echo $ls['image']['url'];?>" alt="<?php echo $ls['image']['title'];?>" class="img-fluid" />
                                </div><!--item-->
                           <?php endforeach;?>
                       </div><!--left-slider-->
                        <div class="project-single-slider__content">
                            <?php if($left_slider_title = get_field('left_slider_title')):?>
                                <div class="project-single-slider__title"><?php echo $left_slider_title;?></div>
                            <?php endif;?>
                            <?php if($left_slider_text = get_field('left_slider_text')):?>
                                <div class="project-single-slider__text"><?php echo $left_slider_text;?></div>
                            <?php endif;?>
                        </div><!--project-single-slider__content-->
                        <div class="project-single-slider__controls">
                            <div id="customPrevBtn" class="project-single-slider__prev"><i class="icon-Arrow_1"></i></div>
                            <div id="counter"></div>
                            <div id="customNextBtn" class="project-single-slider__next"><i class="icon-Arrow_1"></i></div>
                        </div>
                    </div><!--col-sm-6-->
                <?php endif;?>
                <?php if($right_slider = get_field('right_slider')):?>
                    <div class="col-sm-6">
                        <div class="project-single-slider__second owl-carousel">
                            <?php foreach ($right_slider as $rs):?>
                                <div class="item">
                                    <img src="<?php echo $rs['image']['url'];?>" alt="<?php echo $rs['image']['title'];?>" class="img-fluid" />
                                </div><!--item-->
                            <?php endforeach;?>
                        </div><!--left-slider-->
                        <div class="project-single-slider__content">
                            <?php if($right_slider_title = get_field('right_title')):?>
                                <div class="project-single-slider__title"><?php echo $right_slider_title;?></div>
                            <?php endif;?>
                            <?php if($right_slider_text = get_field('right_slider_text')):?>
                                <div class="project-single-slider__text"><?php echo $right_slider_text;?></div>
                            <?php endif;?>
                        </div><!--project-single-slider__content-->
                        <div class="project-single-slider__controls">
                            <div id="customPrevBtn2" class="project-single-slider__prev"><i class="icon-Arrow_1"></i></div>
                            <div id="counter2"></div>
                            <div id="customNextBtn2" class="project-single-slider__next"><i class="icon-Arrow_1"></i></div>
                        </div>
                    </div><!--col-sm-6-->
                <?php endif;?>
            </div><!--row-->
        </div><!--container-->
    </div>
    <?php if($project_title = get_field('project_title')):?>
        <div class="wrapper-container about-project">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="block-title"><?php echo $project_title;?></div>
                    </div>
                    <?php if($project_text = get_field('project_text')):?>
                    <div class="col-sm-8">
                        <?php echo $project_text;?>
                    </div><!--col-sm-8-->
                    <?php endif;?>
                </div><!--row-->
            </div><!--container-->
        </div><!--about-project-->
    <?php endif;?>
    <?php if($number_title = get_field('number_title')):?>
        <div class="wrapper-container numbers-container">
            <div class="container">
                <div class="block-title"><?php echo $number_title;?></div>
                <?php if($numbers = get_field('numbers')):?>
                    <div class="row">
                        <?php foreach ($numbers as $number):?>
                            <div class="col-sm-3">
                                <div class="numbers-container_number-single number-single">
                                    <div class="number-single__text"><?php echo $number['number'];?></div>
                                    <div class="number-single__description"><?php echo $number['text'];?></div>
                                </div><!--number-single-->
                            </div><!--col-sm-3-->
                        <?php endforeach;?>
                    </div><!--row-->
                <?php endif;?>
            </div><!--container-->
        </div><!--wrapper-container-->
    <?php endif;?>
    <?php if($vklad_title = get_field('vklad_title')):?>
        <div class="wrapper-container vklad-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="block-title"><?php echo $vklad_title;?></div>
                        <?php if($vklad_text = get_field('vklad_text')):?>
                            <?php echo $vklad_text;?>
                        <?php endif;?>
                    </div><!--col-sm-7-->
                    <div class="col-sm-5">
                        <?php if($vklad_image = get_field('vklad_image')):?>
                            <div class="vklad-container__image">
                                <img src="<?php echo $vklad_image['url'];?>" alt="<?php echo $vklad_image['title'];?>" class="img-fluid" />
                            </div>
                        <?php endif;?>
                    </div><!--col-sm-5-->
                </div><!--row-->
            </div><!--container-->
        </div><!--vklad-container-->
    <?php endif;?>
    <?php if($bottom_text = get_field('bottom_text')):?>
        <div class="wrapper-container bottom-block">
            <div class="container">
                <?php echo $bottom_text;?>
            </div><!--container-->
        </div><!--bottom-block-->
    <?php endif;?>
</section>
<?php get_footer();?>
