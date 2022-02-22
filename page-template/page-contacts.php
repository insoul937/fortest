<?php
/**
 * Template Name: Контакты
 */

get_header();?>
<?php the_post();?>
<section id="content">
        <?php get_template_part('partials/block','title');?>
    <div class="wrapper-container contacts-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="contacts-info">
                        <div class="contacts-info__icon">
                            <div class="icon-call_1"></div>
                        </div>
                        <div class="contacts-info__block">
                            <div class="contacts-info__title"><h4>ТЕЛЕФОН</h4></div>
                                <?php if($phones = get_field('phones','options')):?>
                                    <?php foreach ($phones as $phone):?>
                                    <div class="contacts-info__phone"><a href="tel:<?php echo $phone['phone_in'];?>"><?php echo $phone['phone_out'];?></a></div>
                                    <?php endforeach;?>
                                <?php endif;?>
                                <?php if($work_date = get_field('work-date')):?>
                                    <div class="contacts-info__time"><?php echo $work_date;?></div>
                                <?php endif;?>
                            </div>
                    </div><!--contacts-info-->
                    <div class="contacts-info">
                        <div class="contacts-info__icon">
                            <div class="icon-message_1"></div>
                        </div>
                        <div class="contacts-info__block">
                            <div class="contacts-info__title"><h4>Любые вопросы</h4></div>
                            <div class="footer__footer-socials footer-socials">
                                <?php if($facebook = get_field('facebook','options')):?>
                                    <div class="footer-socials__single"><a class="footer-socials__single-link" href="<?php echo $facebook;?>" target="_blank"><i class="fa fa-facebook"></i></a></div>
                                <?php endif;?>
                                <?php if($whatsapp = get_field('whatsapp','options')):?>
                                    <div class="footer-socials__single"><a class="footer-socials__single-link" href="<?php echo $whatsapp;?>" target="_blank"><div class="icon-whatsapp"></div></a></div>
                                <?php endif;?>
                                <?php if($telegram = get_field('telegram','options')):?>
                                    <div class="footer-socials__single"><a class="footer-socials__single-link" href="<?php echo $telegram;?>" target="_blank"><div class="icon-telegram"></div></a></div>
                                <?php endif;?>
                            </div><!--footer-socials-->
                        </div>
                    </div><!--contacts-info-->
                    <div class="contacts-info">
                        <div class="contacts-info__icon">
                            <div class="icon-mail_1"></div>
                        </div>
                        <div class="contacts-info__block">
                            <div class="contacts-info__title"><h4>Электронная почта</h4></div>
                            <?php if($email = get_field('email','options')):?>
                                <div class="contacts-info__email"><a href="mailto:<?php echo $email;?>"><?php echo $email;?></a></div>
                            <?php endif;?>
                        </div>
                    </div><!--contacts-info-->
                </div><!--col-sm-4-->
                <div class="offset-sm-2 col-sm-6">
                    <div class="contacts-info">
                        <div class="contacts-info__block">
                            <div class="contacts-info__title"><h4>Реквезиты</h4></div>
                            <?php if($inn = get_field('inn','options')):?>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="contacts-info__descr">ИНН:</div>
                                    </div><!--col-sm-6-->
                                    <div class="col-sm-8">
                                        <div class="contacts-info__text"><?php echo $inn;?></div>
                                    </div>
                                </div><!--row-->
                            <?php endif;?>
                            <?php if($kpp = get_field('kpp','options')):?>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="contacts-info__descr">КПП:</div>
                                    </div><!--col-sm-6-->
                                    <div class="col-sm-8">
                                        <div class="contacts-info__text"><?php echo $kpp;?></div>
                                    </div>
                                </div><!--row-->
                            <?php endif;?>
                            <?php if($ogrn = get_field('ogrn','options')):?>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="contacts-info__descr">ОГРН:</div>
                                    </div><!--col-sm-6-->
                                    <div class="col-sm-8">
                                        <div class="contacts-info__text"><?php echo $ogrn;?></div>
                                    </div>
                                </div><!--row-->
                            <?php endif;?>
                            <?php if($okpo = get_field('okpo','options')):?>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="contacts-info__descr">ОКПО:</div>
                                    </div><!--col-sm-6-->
                                    <div class="col-sm-8">
                                        <div class="contacts-info__text"><?php echo $okpo;?></div>
                                    </div>
                                </div><!--row-->
                            <?php endif;?>
                            <?php if($rs = get_field('rs','options')):?>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="contacts-info__descr">Рас./ счет:</div>
                                    </div><!--col-sm-6-->
                                    <div class="col-sm-8">
                                        <div class="contacts-info__text"><?php echo $rs;?></div>
                                    </div>
                                </div><!--row-->
                            <?php endif;?>
                            <?php if($ks = get_field('ks','options')):?>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="contacts-info__descr">Корр./ счет:</div>
                                    </div><!--col-sm-6-->
                                    <div class="col-sm-8">
                                        <div class="contacts-info__text"><?php echo $ks;?></div>
                                    </div>
                                </div><!--row-->
                            <?php endif;?>
                            <?php if($bik = get_field('bik','options')):?>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="contacts-info__descr">БИК:</div>
                                    </div><!--col-sm-6-->
                                    <div class="col-sm-8">
                                        <div class="contacts-info__text"><?php echo $bik;?></div>
                                    </div>
                                </div><!--row-->
                            <?php endif;?>
                            <?php if($bank = get_field('bank','options')):?>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="contacts-info__descr">Банк:</div>
                                    </div><!--col-sm-6-->
                                    <div class="col-sm-8">
                                        <div class="contacts-info__text"><?php echo $bank;?></div>
                                    </div>
                                </div><!--row-->
                            <?php endif;?>
                            <?php if($gen_dir = get_field('gen_dir','options')):?>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="contacts-info__descr">Генеральный директор:</div>
                                    </div><!--col-sm-6-->
                                    <div class="col-sm-8">
                                        <div class="contacts-info__text"><?php echo $gen_dir;?></div>
                                    </div>
                                </div><!--row-->
                            <?php endif;?>
                        </div>
                    </div><!--contacts-info-->
                </div>
            </div><!--row-->
        </div><!--container-->
    </div><!--wrapper-container-->
    <div class="wrapper-container contacts-bottom">
        <div class="container">
            <?php if($nashi_adresa = get_field('nashi_adresa','options')):?>
                <div class="row">
                     <?php foreach($nashi_adresa as $na):?>
                        <div class="col-sm-6">
                            <div class="address-container__single">
                                <div class="address-container__single-title"><?php echo $na['name'];?></div>
                                <div class="address-container__single-text"><?php echo $na['adress'];?></div>
                                <div class="address-container__single-time"><?php echo $na['work_date'];?></div>
                                <div class="adress-container__single-map">
                                    <?php echo $na['map'];?>
                                </div>
                            </div><!--address-container-single-->
                        </div><!--col-sm-6-->
                    <?php endforeach;?>
                </div><!--row-->
            <?php endif;?>
        </div><!--container-->
    </div><!--wrapper-container-->

</section>
<?php get_footer();?>
