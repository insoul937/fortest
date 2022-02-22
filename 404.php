<?php get_header();?>
<?php the_post();?>
    <section id="content" class="all-pages">
        <?php get_template_part('partials/block','title');?>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-12">
                        <div class="text-center error-page">
                            <h3 class="go-to mb-40px">Страница не найдена. <br/> Перейдите на <a
                                     href="/">Главную</a> </h3>
                        </div>
                        </div><!--col-sm-9-->
                    </div><!--row-->
                </div><!--col-sm-8-->
            </div><!--row-->
        </div>
    </section><!--all-pages-->
<?php get_footer();?>
