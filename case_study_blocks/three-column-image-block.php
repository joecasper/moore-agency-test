<?php if( have_rows('images') ):?>
    <?php 
        $counter = 1; 
        $delay = 0;    
    ?>
    <div class="work-blocks__three-image">
        <?php while( have_rows('images') ) : the_row(); ?>
            <?php
                $image = get_sub_field('image');

                if ( $counter == 2 ) {
                    $delay = 200;
                } elseif ( $counter == 3 ) {
                    $delay = 400;
                }
            ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="work-blocks__three-image" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
            <?php $counter++; ?>
        <?php endwhile; ?>
    </div>
<?php endif; ?>