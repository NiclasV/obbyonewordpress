<?php get_header(); ?>
   

    <main class="content">

        <!-- TO SHOW THE PAGE CONTENTS -->
        <?php while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
        
        <div class="entry-content-page">
            <?php the_content(); ?> <!-- Page Content -->
        </div><!-- entry-content-page -->

        <?php
            endwhile; //resetting the page loop
            wp_reset_query(); //resetting the page query
        ?>

                
    </main>

<?php get_footer(); ?>