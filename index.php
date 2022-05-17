<?php 
/*
Template Name: Home page
*/
get_header();
?>
<?php get_template_part('templates/headertop');?>
    <div class="about" id="about" style="background: url(<?= get_field('background_white') ?>) center 100% repeat-x,
                url(<?= get_field('background_black') ?>) center 100% repeat-x,
                #1d1d1d;">
        <div class="container">
            <div class="about__inner">
                <?php
                $loop=get_field('cards');
                foreach ($loop as $row) {
                    ?>
                    <div class="about__item">
                        <div class="about__year"><?= $row ['card_year']?></div>
                        <div class="about__text"><?= $row['card_text']?></div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
    <div class="team" id="team">
        <div class="container">
            <div class="block__head">
                <h2 class="block__title"><?= get_field('team_title') ?></h2>
                <p class="block__text"><?= get_field('team_text') ?></p>
            </div>
            <div class="team__inner">

        <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <?php
                $loop=get_field('team_members');
                foreach ($loop as $row) {
                    ?>
                    <div class="swiper-slide">
                    <div class="team__item">
                    <img class="team__item-img" src="<?= $row ['member_image']?>" alt="">
                    <h3 class="team__item-title"><?= $row ['member_name']?></h3>
                    <p class="team__item-text"><?= $row ['member_position']?></p>
                    <div class="team__icon-box">
                        <?php
                            if(!empty($row ['member_social_fb']['url'])){
                                ?>
                                    <a href="<?= $row ['member_social_fb']['url']?>" target="<?= $row ['member_social_fb']['target']?>"><i class="icon-facebook-1"></i></a>
                                <?php
                            }
                            if(!empty($row ['member_social_tw']['url'])){
                                ?>
                                    <a href="<?= $row ['member_social_tw']['url']?>" target="<?= $row ['member_social_tw']['target']?>"><i class="icon-twitter"></i></a>
                                <?php
                            }
                            if(!empty($row ['member_social_ins']['url'])){
                                ?>
                                    <a href="<?= $row ['member_social_ins']['url']?>" target="<?= $row ['member_social_ins']['target']?>"><i class="icon-instagram"></i></a>
                                <?php
                            }
                            ?>
                    </div>
                </div>
            </div>
                    <?php
                }
                ?>
                        
        </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
        </div>
            </div>
        </div>
    </div>
    <div class="provide" id="provide">
        <div class="container">
            <div class="block__head inverse">
                <h2 class="block__title"><?= get_field('provide_title') ?></h2>
                <p class="block__text"><?= get_field('provide_text') ?></p>
            </div>
            <div class="provide__inner">
            <?php
                $loop= get_field('provide_icons');
                foreach ($loop as $row) {
                    ?>
                    <div class="provide__item">
                    <img class="team__item-img" src="<?= $row ['icon_image']?>" alt="">
                    <h3 class="provide__item-title"><?= $row ['provide_icon_title']?></h3>
                    <p class="provide__item-text"><?= $row ['provide_icon_text']?></p>
                </div>
                    <?php
                }
                ?>
            </div>

            
        </div>
    </div> 
    <div class="contact" id="contact">
        <div class="container">
            <div class="block__head">
                <h2 class="block__title"><?= get_field('contact_title') ?></h2>
                <p class="block__text"><?= get_field('contact_text') ?></p>
            </div>
            <div class="contact__inner">
                <div class="contact__icon-box">
                    <div class="contact__item">
                        <i class="icon-phone"></i>
                        <div class="contact__text"><a href="tel:<?= get_field('contact_phone_numer') ?>"><?= get_field('contact_phone_numer') ?></a></div>
                    </div>
                        <div class="contact__item">
                        <i class="icon-location"></i> 
                            <div class="contact__text">
                                    <a href="<?= get_field('contact_location_adress')['url']?>" 
                                    target="<?= get_field('contact_location_adress')['target']?>">
                                    <?= get_field('contact_location_adress')['text'] ?>
                                    </a>
                            </div>
                        </div>
                    
                    <div class="contact__item">
                        <i class="icon-mail-alt"></i>
                        <div class="contact__text"><a href="mailto:<?= get_field('contact_mail_box') ?>"><?= get_field('contact_mail_box') ?></a></div>
                    </div>
                    </div>
                </div>
                <?php echo do_shortcode('[contact-form-7 id="22" title="Contact Us"]'); ?>
        </div>
    </div>
<?php get_footer();?>