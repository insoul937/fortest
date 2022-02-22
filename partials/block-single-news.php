<div class="wrapper-container">
    <div class="container">
        <div class="block-news">
            <div class="row">
                <div class="col-sm-2">
                    <div class="block-news__date">
                        <?php echo get_the_date('F j, Y');?>
                    </div>
                </div><!--col-sm-2-->
                <div class="col-sm-6">
                    <a href="<?php echo get_the_permalink();?>" class="block-news__title">
                        <?php the_title();?>
                    </a>
                </div>
            </div><!--row-->
        </div><!--block-news-->
    </div>
</div>


