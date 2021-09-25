<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Juan
 */

get_header();
?>
<div class="content-container">
    <?php if ( is_home() ) : ?>
        <h1 class="page-title"><?php single_post_title(); ?></h1>
    <?php endif; ?>
	<div class="container">
    <div class="row">
        <div class="blog-posts col-md-8">
        <?php if ( have_posts() ): ?>
            <?php while( have_posts() ): ?>
                <?php the_post(); ?>
                <div class="blog-post">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php if ( has_post_thumbnail() ) :
                        $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'medium' ); ?>
                        <div class="blog-post-thumb">
                            <a href="<?php the_permalink(); ?>"><img src="<?php echo $featured_image[0]; ?>" alt='' /></a>
                        </div>
                    <?php endif; ?>
                    <?php the_excerpt(); ?>
                    <a class="read-more-link" href="<?php the_permalink(); ?>"><?php _e( 'Read More' ); ?></a>
                    <div class="posted-in">
                        <span><?php _e( 'Posted In', 'nd_dosth' ); ?></span>
                        <span><?php the_category( ', ' ); ?></span>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p><?php _e( 'No Blog Posts found', 'nd_dosth' ); ?></p>
        <?php endif; ?>
        </div>
        <div id="blog-sidebar" class="col-md-4">
            
        </div>
    </div>
</div>
</div>
	

<?php
get_sidebar();
get_footer();
