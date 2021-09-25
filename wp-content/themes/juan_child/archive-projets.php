<?php
/*
Template Name: projets
*/
?>

<?php get_header(); ?>

<h1 class="projets_titre">Mes projets</h1>

<body>

    <div class="principal_projets_template">
    
        <div class="projets_projets_template">
            <div class="projets_content_projets_template">

                <?php
                    $recent_posts = wp_get_recent_posts(array('post_type'=>'projet', 'numberposts'=>15));
                    foreach( $recent_posts as $recent ){
                        echo '<div class="foreach_wrapper_projets_template">';
                            echo '<h3><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a></h3> ';
                            
                            // echo '<h3>' .get_field('projet_titre',$recent["ID"]).'</h3>';

                            if ( has_post_thumbnail( $recent["ID"]) ) {
                                echo  get_the_post_thumbnail($recent["ID"],'format');
                            }
                                
                            echo '<p class="projet_description">'.get_field('projet_description', $recent["ID"]);
                            
                        echo '</a></div>';
                            // if (has_excerpt($recent["ID"]) ){
                                
                            //     echo '<p class="excerpt">' . get_the_excerpt($recent["ID"],'the_excerpt') . '</p>';
                            // }
                        }
                ?>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</body>
