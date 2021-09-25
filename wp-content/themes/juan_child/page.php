<?php
/*
Template Name: homepage
*/
?>

<?php get_header(); ?>



<body>

    <div class="principal">

        <div class="square">
            <div class="square_one">
                <div class="square_two">
                    <h1><?php the_field('titre-hero');  ?> </h1>

                    <div class="circle">
                        <?php 
                            $image = get_field('photo_hero');
                            if( !empty( $image ) ): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" class="photojuan"/>
                        <?php endif; ?>
                    </div>
                        
                    <h2><?php the_field('sous-titre'); ?> </h2>
                </div>
            </div>
        </div>
        
        <div class="projets">
            <h3><?php the_field('projets_recents');?></h3>
            <div class="projets_content">

                <?php
                    $recent_posts = wp_get_recent_posts(array('post_type'=>'projet', 'numberposts'=>3));
                    foreach( $recent_posts as $recent ){
                        
                        echo '<div class="foreach_wrapper">';
                            echo '<h3><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a></h3> ';
                            // echo '<h3>'.get_field('projet_titre',$recent["ID"]).'</h3>';

                            if ( has_post_thumbnail( $recent["ID"]) ) {
                                echo  get_the_post_thumbnail($recent["ID"],'format');
                            }
                            
                            echo '<p class="projet_description">'.get_field('projet_description', $recent["ID"]);
                        
                        echo '</div>';
                        // if (has_excerpt($recent["ID"]) ){
                            
                        //     echo '<p class="excerpt">' . get_the_excerpt($recent["ID"],'the_excerpt') . '</p>';
                        // }
                    }
                ?>
            </div>
           <button class="projets_content_btn"><a href="http://localhost/wordpress/projets/">Voir plus</a></button>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</body>