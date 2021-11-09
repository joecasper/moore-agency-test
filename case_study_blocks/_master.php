<?php if( have_rows('content_blocks') ):         
    while ( have_rows('content_blocks') ) : the_row();
        if( get_row_layout() == 'wysiwyg_block' ):
            include( 'wysiwyg-block.php' );
        elseif( get_row_layout() == 'section_heading_block' ):
            include( 'section-heading-block.php' );
        elseif( get_row_layout() == 'video_embed_block' ):
            include( 'video-embed-block.php' );
        elseif( get_row_layout() == 'full_image_block' ):
            include( 'full-image-block.php' );
        elseif( get_row_layout() == 'two_column_image_block' ):
            include( 'two-column-image-block.php' );
        elseif( get_row_layout() == 'three_column_image_block' ):
            include( 'three-column-image-block.php' );
        elseif( get_row_layout() == 'testimonials_block' ):
            include( 'testimonials-block.php' );
        elseif( get_row_layout() == 'feature_callouts_block' ):
            include( 'feature-callouts-block.php' );
        endif;
    endwhile;
endif; ?> 