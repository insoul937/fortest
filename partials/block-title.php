
<?php $page_id = get_queried_object_id();?>

<div class="page-title">
    <?php
    if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb( '<div class=" breadcrumbs wrapper-container"><div class="container"><div class="breadcrumbs__content" >','</div></div></div>' );
    }
    ?>
    <div class="wrapper-container">
        <div class="container">
            <?php if(is_singular('projects')):?>
            <div class="row align-items-center">
                <div class="col col-lg-auto">
                    <h1><?php the_title();?></h1>
                </div><!--col-->
                <div class="col col-lg-auto">
                    <?php if($subtitle = get_field('subtitle')):?>
                    <div class="project-single__subtitle"><?php echo $subtitle;?></div>
                    <?php endif;?>
                </div><!--col-->
            </div><!--row-->
            <?php elseif(is_single()):?>
            <div class="row">
                <div class="col-sm-6">
                    <h1><?php the_title();?></h1>
                    <div class="single-news__date"><?php the_time('F d Y'); ?></div>
                </div>
            </div><!--row-->
            <?php else:?>
                <h1>
                    <?php if(is_404()):?>Ошибка 404
                    <?php elseif(is_home()):?>
                        <?php single_post_title(); ?>
                    <?php elseif(is_post_type_archive()):?>
                        <?php echo post_type_archive_title();?>
                    <?php else:?>
                        <?php the_title();?>
                    <?php endif;?>
                </h1>
            <?php endif;?>

        </div><!--container-->
    </div><!--wrapper-container-->
</div><!--page-title-->
