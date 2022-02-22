<?php
/**
 * Template Name: Home
 */

get_header(); ?>

    <section id="content">
        <?php if($slider = get_field('slider')):?>
            <div class="slider-container">
                <div class="home-slider owl-carousel">
                    <?php foreach ($slider as $sl):?>
                        <div class="item">
                            <?php if($sl['image']):?>
                                <img src="<?php echo $sl['image']['url'];?>" alt="<?php echo $sl['image']['title'];?>" class="sl-img" />
                            <?php endif;?>
                            <div class="sl-text">
                                <div class="container">
                                    <div class="row">
                                        <div class="offset-sm-3 col-sm-6">
                                            <div class="sl-t">
                                                <div class="sl-t-img">
                                                    <a href="<?php echo $sl['link']?>">
                                                        <img src="<?php echo $sl['image_brand']['url'];?>" alt="<?php echo $sl['image_brand']['title'];?>" />
                                                    </a>
                                                </div>
                                                <div class="sl-t-text">
                                                    <div class="sl-t-title"><a href="<?php echo $sl['link']?>"><?php echo $sl['title'];?></a></div>
                                                    <div class="sl-t-address"><?php echo $sl['address'];?></div>
                                                </div><!--sl-t-text-->
                                            </div><!--sl-t-->
                                            <div class="hr"></div>
                                        </div><!--col-sm-6-->
                                    </div><!--row-->
                                </div><!--container-->
                            </div><!--sl-text-->
                        </div><!--item-->
                    <?php endforeach;?>
                </div><!--home-slider-->
            </div><!--slider-container-->
        <?php endif;?>
       <?php if($top_text = get_field('top_text')):?>
           <div class="top-main-container">
               <div class="container">
                   <div class="row">
                       <div class="offset-sm-1 col-sm-10">
                           <?php echo $top_text;?>
                       </div>
                   </div><!--row-->
               </div><!--container-->
           </div><!--top-main-container-->
        <?php endif;?>
        <?php if($left_image = get_field('left_image')):?>
            <div class="bottom-main">
                <div class="container">
                    <div class="row">
                        <div class="offset-sm-1 col-sm-11">
                            <div class="bottom-container">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <img src="<?php echo $left_image['url'];?>" alt="<?php echo $left_image['title'];?>" class="img-fluid" />
                                    </div>
                                    <div class="offset-sm-1 col-sm-6">
                                        <div class="bottom-right">
                                            <?php the_field('right_text');?>
                                        </div><!--bottom-right-->
                                    </div><!--col-sm-6-->
                                </div><!--row-->
                            </div><!--bottom-container-->
                        </div><!--col-sm-11-->
                    </div><!--row-->
                </div><!--container-->
            </div><!--bottom-main-->
        <?php endif;?>
    </section><!--content-->
<?php get_footer();?>
