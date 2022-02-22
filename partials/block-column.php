<div class="wrapper-container single-news">
    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <div class="single-news__content">
                    <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                    <div class="single-news__date"><?php the_time('F d Y'); ?></div>
                    <?php the_excerpt();?>
                    <a href="<?php echo get_the_permalink();?>" class="read-more">Читать полностью <i class="fa fa long-arrow-right"></i></a>
                </div>
            </div><!--col-sm-3-->
            <div class="offset-sm-1 col-sm-4">
                <a href="<?php the_permalink();?>" class="single-news__image">
                    <?php if(has_post_thumbnail()):?>
                      <?php the_post_thumbnail('full',array('class'=>'img-fluid'));?>
                    <?php endif;?>
                </a><!--single-image-->
            </div><!--col-sm-8-->
        </div><!--row-->
    </div>
</div><!--single-news-block-->
