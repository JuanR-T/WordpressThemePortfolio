<?php get_header();?>

<body>

    <div class="principal_single_template">
    
        <div class="projets_projets_template">
            <div class="projets_content_single_template">

				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', get_post_type() );

					the_post_navigation(
						array(
							'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'juan' ) . '</span> <span class="nav-title">%title</span>',
							'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'juan' ) . '</span> <span class="nav-title">%title</span>',
						)
					);

					
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile;
				?>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</body>