<?php
    $delay = 0; 
    $delay = $counter * 100;
?>

<a href="mailto:<?= the_field('contact_email_address'); ?>" class="office" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
    <div class="office__top">
        <div class="office__photo">
            <?php  the_post_thumbnail( 'full', array( 'class' => 'office__image' ) ); ?>
        </div>
        <div class="office__info">
            <div class="office__bar"></div>
            <div class="office__text">
                <h2 class="office__location"><?= the_title(); ?></h2>
                <div class="office__link">
                    <span class="text-brand-gray-900 mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                        </svg>
                    </span>
                    Email <?= the_field('abbreviation'); ?> Office
                </div>
            </div>
        </div>
    </div>
</a>
<?php $counter++ ?>