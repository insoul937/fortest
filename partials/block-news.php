<div class="col-sm-4">
    <div class="futured-news__single">
        <a href="<?php echo get_the_permalink();?>" class="futured-news__single-image">
            <?php the_post_thumbnail('full',array('class'=>'img-fluid'));?>
        </a><!--futured-news__single-image-->
        <div class="futured-news__single-date"><?php echo get_the_date('F j, Y');?></div>
        <a href="<?php echo get_the_permalink();?>" class="futured-news__single-title">
            <?php the_title();?>
        </a>
    </div><!--futured-news__single-->
</div><!--col-sm-4-->
