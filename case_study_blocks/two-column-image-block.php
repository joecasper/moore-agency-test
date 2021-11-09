<?php if( have_rows('images') ):?>
    <?php 
        $counter = 1; 
        $delay = 0;    
    ?>
    <div class="work-blocks__two-image">
        <?php while( have_rows('images') ) : the_row(); ?>
            <?php
                $image = get_sub_field('image');

                if ( $counter == 2 ) {
                    $delay = 300;
                }
            ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
        <?php endwhile; ?>
    </div>
<?php endif; ?>