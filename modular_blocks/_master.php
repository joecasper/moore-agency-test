<?php if( have_rows('content_blocks') ):         
    while ( have_rows('content_blocks') ) : the_row();
        if( get_row_layout() == 'wysiwyg_block' ):
            include( 'wysiwyg-block.php' );
        elseif( get_row_layout() == 'heading_callout_block' ):
            include( 'heading-callout-block.php' );
        elseif( get_row_layout() == 'video_embed_block' ):
            include( 'video-embed-block.php' );
        elseif( get_row_layout() == 'full_image_block' ):
            include( 'full-image-block.php' );
        elseif( get_row_layout() == 'two_column_block' ):
            include( 'two-column-block.php' );
        elseif( get_row_layout() == 'three_column_block' ):
            include( 'three-column-block.php' );
        elseif( get_row_layout() == 'case_studies_block' ):
            include( 'case-studies-block.php' );
        elseif( get_row_layout() == 'team_members_block' ):
            include( 'team-members-block.php' );
        elseif( get_row_layout() == 'featured_blog_post_block' ):
            include( 'featured-blog-post-block.php' );
        elseif( get_row_layout() == 'testimonials_block' ):
            include( 'testimonials-block.php' );
        elseif( get_row_layout() == 'office_locations_block' ):
            include( 'office-locations-block.php' );
        elseif( get_row_layout() == 'clients_block' ):
            include( 'clients-block.php' );
        elseif( get_row_layout() == 'mantras_block' ):
            include( 'mantras-block.php' );
        elseif( get_row_layout() == 'feature_callouts_block' ):
            include( 'feature-callouts-block.php' );
        elseif( get_row_layout() == 'timeline_block' ):
            include( 'timeline-block.php' );
        elseif( get_row_layout() == 'form_block' ):
            include( 'form-block.php' );
        endif;
    endwhile;
endif; ?> 