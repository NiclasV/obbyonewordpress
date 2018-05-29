    <?php define( 'WP_USE_THEMES', false ); get_header(); ?>


        <main class="content" role="main">
        
            <h1>This is my index</h1>
        <section class="posts-flex">
        <?php 
            //THE WORDPRESS LOOP
            if( have_posts() ) : while( have_posts() ) : the_post();
                
                    //WHAT TO POST TO EACH POST
                    echo '<div class="post-item">';
                    echo '<div class="img-container">';
                    the_post_thumbnail();
                    echo '</div>';
                    echo '<h2>'; the_title(); echo '</h2>';
                    the_category();
                    the_content();
                    echo '</div>';

                endwhile;
            endif;
        ?>
        </section>
        </main>
        
    <?php get_footer(); ?>
