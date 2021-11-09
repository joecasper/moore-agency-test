<div class="blog-excerpt" <?php if ( is_category() ): ?>data-aos="fade-up" <?php if ( $anim_delay ): ?>data-aos-delay="300"<?php endif; ?><?php endif; ?>>
    <a href="<?= the_permalink() ?>" class="blog-excerpt__image-link">
        <?php the_post_thumbnail('medium', array('class' => 'blog-excerpt__image')); ?>
    </a>
    <h3 class="blog-excerpt__title"><?= the_title() ?></h3>
    <p class="blog-excerpt__copy"><?= the_field("subheading") ?></p>
    <p class="blog-excerpt__author">
        <?php
            $author = get_field('author');
            $post_tags = get_the_tags();
            $post_cat = get_the_category( $post->ID );
            
            if ( $post_tags ) {
                $tags_html = '';
                $total_tags = count( $post_tags );
                $count = 0;

                foreach ( $post_tags as $tag ) {
                    $tags_html .= '<a href="/category/' . $post_cat[0]->slug . '/?term_ids=' . $tag->term_id . '">';
                    $tags_html .= "{$tag->name}</a>";

                    if ( $count != ($total_tags - 1) ) {
                        $tags_html .= ", ";
                    }
                    
                    $count++;
                }

                $meta_string = 'By: ' . $author . ', ' . $tags_html;
                echo $meta_string;
            } else {
                echo 'By: ' . $author;
            }
        ?>    
    </p>
    <a href="<?= the_permalink() ?>" class="arrow-link "><?= $post_link_text ?><div class="arrow-link__arrow">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 27">
                <path d="M38.5.5l13 13m-13 13l13-13m-51 0h50" fill="none" stroke="#ea168c" stroke-linecap="square" />
            </svg>
        </div>
    </a>
</div>