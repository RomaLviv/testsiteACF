<div class="header__content">
            <div class="container">
            <!-- Присвоєння значень -->
            <!-- <?php
            $title = get_field('title') ?: 'Your testimonial here...';
            ?>
                <h1 class="header__title"><?= $title; ?></h1> -->
            <!-- Звичайний вивід -->
                <h1 class="header__title"><?= get_field('title'); ?></h1>
                <p class="header__text"><?= get_field('sub_title'); ?></p>
                <a href="#about" class="header__button"><?= get_field('headet_button'); ?></a>
            </div>
</div>