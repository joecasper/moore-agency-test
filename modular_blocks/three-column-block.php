<?php
    $anchor_id = get_sub_field('anchor_id');
?>

<section <?php if ( $anchor_id ): ?> id="<?= $anchor_id ?>" <?php endif; ?> class="main-padding">
    <?php if( have_rows('columns') ):?>
        <div class="split-blocks split-blocks--triple">
            <?php $counter = 0; ?>
            <?php while( have_rows('columns') ) : the_row(); ?>
                <?php
                    $image = get_sub_field('image');
                    $heading = get_sub_field('heading');
                    $content = get_sub_field('content');
                    $has_cta_buttons = get_sub_field('has_cta_button');
                ?>
                <div class="split-block" data-aos="fade-up" <?php if($counter != 0) { echo 'data-aos-delay="300"'; } ?>>
                    <div class="split-block__image">
                        <div class="split-block__image-bg js-pattern"></div>
                        <?php echo wp_get_attachment_image( $image['ID'], 'split-block-thumb', '', array( "class" => "w-full" ) );  ?>
                    </div>
                    <div class="text-block">
                        <h3><?= $heading ?></h3>
                        <?= $content ?>
                        <?php if ( $has_cta_buttons ): ?>
                            <?php if( have_rows('cta_buttons') ): ?>
                                <?php while( have_rows('cta_buttons') ) : the_row(); ?>
                                    <?php
                                        $button_text = get_sub_field('button_text');
                                        
                                        $link_type = get_sub_field('link_type');
                                        if ( $link_type == 'download' ) {
                                            $link_url = get_sub_field('download_link');
                                        } elseif ( $link_type == 'external' ) {
                                            $link_url = get_sub_field('external_link');
                                        } elseif ( $link_type == 'email' ) {
                                            $link_url = 'mailto:' . get_sub_field('email_link');
                                        } else {
                                            $link_url = get_sub_field('internal_link');
                                        }
                                    ?>
                                    <a href="<?= $link_url ?>" class="arrow-link " <?php if ( $link_type == 'download' ):?>download<?php endif;?>><?= $button_text ?><div class="arrow-link__arrow">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 27">
                                                <path d="M38.5.5l13 13m-13 13l13-13m-51 0h50" fill="none" stroke="#ea168c" stroke-linecap="square" />
                                            </svg>
                                        </div>
                                    </a>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <?php $counter++ ?>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
</section>