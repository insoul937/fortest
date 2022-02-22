<?php get_header();?>
<section id="content" class="mb-50px">
    <div class="wrapper-container archive-top">
        <div class="container">
            <h1>наши <span>Проекты</span></h1>
            <div class="row">
                <div class="col-sm-10">
                    <?php if($projects_subtitle = get_field('projects_subtitle','options')):?>
                        <div class="archive-top__subtitle"><?php echo $projects_subtitle;?></div>
                    <?php endif;?>
                </div><!--col-sm-6-->
                <div class="col-sm-2">
                    <div class="project-single-slider__controls">
                        <div id="customPrevBtn3" class="project-single-slider__prev"><i class="icon-Arrow_1"></i></div>
                        <div id="counter3"></div>
                        <div id="customNextBtn3" class="project-single-slider__next"><i class="icon-Arrow_1"></i></div>
                    </div>
                </div>
            </div><!--row-->
        </div><!--container-->
    </div><!--wrapper-container-->
    <?php if($projects_slider = get_field('projects_slider','options')):?>
        <div class="archive-top__archive-slider archive-slider owl-carousel">
            <?php foreach($projects_slider as $ps):?>
                <div class="item">
                    <img src="<?php echo $ps['image']['url'];?>" alt="<?php echo $ps['image']['title'];?>" class="img-fluid" />
                    <div class="archive-slider__block">
                        <div class="container">
                            <div class="row ">
                                <div class="col-sm-5">
                                    <div class="archive-slider__bg">
                                        <div class="archive-slider__info">
                                            <div class="archive-slider__title"><?php echo $ps['title'];?></div>
                                            <?php if($ps['projects_info']):?>
                                                <div class="archive-slider__about">
                                                    <?php foreach($ps['projects_info'] as $pss):?>
                                                        <div class="archive-slider__list">
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-2">
                                                                    <div class="archive-slider__image">
                                                                        <img src="<?php echo $pss['image']['url']; ?>" alt="<?php echo $pss['image']['title']; ?>" class="img-fluid">
                                                                    </div>
                                                                </div><!--col-sm-2-->
                                                                <div class="col-sm-10">
                                                                    <div class="archive-slider__text"><?php echo $pss['text'];?></div>
                                                                </div><!--col-sm-10-->
                                                            </div><!--row-->
                                                        </div><!--archive-slider-list-->
                                                    <?php endforeach;?>
                                                </div><!--archive-slider__about-->
                                            <?php endif;?>
                                            <a href="<?php echo $ps['btn_link'];?>" class="btn btn-white"><?php echo $ps['text_btn'];?></a>
                                        </div><!--archive-slider__info-->
                                    </div><!--archive-slider__bg-->
                                </div><!--col-sm-5-->
                            </div><!--row-->
                        </div><!--container-->
                    </div><!--archive-slider__block-->
                </div><!--item-->
            <?php endforeach;?>
        </div><!--archive-slider-->
    <?php endif;?>
    <?php get_template_part('partials/block','title');?>
    <div class="wrapper-container archive-after-list">
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <?php if($title_after_list = get_field('title_after_list','options')):?>
                        <div class="block-title"><?php echo $title_after_list;?></div>
                    <?php endif;?>
                    <?php if($text_after_list = get_field('text_after_list','options')):?>
                        <?php echo $text_after_list;?>
                    <?php endif;?>
                    <?php if($btn_text_after_list = get_field('btn_text_after_list','options')):?>
                        <a href="<?php the_field('link_after_list','options');?>" class="btn btn-default"><?php echo $btn_text_after_list;?></a>
                    <?php endif;?>
                    <?php if($numbers_after_list = get_field('numbers_after_list','options')):?>
                        <div class="row numbers-list">
                            <?php foreach($numbers_after_list as $nal):?>
                                <div class="col-sm-4">
                                    <div class="numbers-list__single">
                                        <div class="numbers-list__single-title"><?php echo $nal['number'];?></div>
                                        <div class="numbers-list__single-text"><?php echo $nal['text'];?></div>
                                    </div><!--numbers-list__single-->
                                </div><!--col-sm-4-->
                            <?php endforeach;?>
                        </div><!--row-->
                    <?php endif;?>
                </div><!--col-sm-7-->
                <div class="col-sm-5">
                    <?php if($image_after_list = get_field('image_after_list','options')):?>
                        <div class="vklad-container__image">
                            <img src="<?php echo $image_after_list['url'];?>" alt="<?php echo $image_after_list['title'];?>" class="img-fluid" />
                        </div><!--vklad-container-image-->
                    <?php endif;?>
                </div><!--col-sm-5-->
            </div><!--row-->
        </div><!--container-->
    </div><!--wrapper-container-->
    <?php if($bottom_text = get_field('bottom_block_projects','options')):?>
        <div class="wrapper-container bottom-block">
            <div class="container">
                <?php echo $bottom_text;?>
            </div><!--container-->
        </div><!--bottom-block-->
    <?php endif;?>
</section><!--content-->
<?php get_footer(); ?>
