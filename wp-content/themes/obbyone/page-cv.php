<?php /* Template Name: CV*/ ?>

<?php get_header(); ?>
   

    <main class="content">
        <div class="profileinfo">
            <div class="img-wrapper"><div class="img"></div></div>
            <div class="profiledetails">
                <h1 class="uppercase">Niclas <br>Victorsson</h1>
                <p class="roles uppercase"><span class="lightblue"> Grafisk Formgivare</span>  //  
                    <span class="lightblue">Front-end utvecklare</span>  //  
                    <span class="lightblue">Fotograf</span></p>
            </div>
        </div>

    <?php
        // TO SHOW THE PAGE CONTENTS
        while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
            <div class="entry-content-page">
                <?php the_content(); ?> <!-- Page Content -->
            </div><!-- .entry-content-page -->

        <?php
        endwhile; //resetting the page loop
        wp_reset_query(); //resetting the page query
    ?>
                
    </main>




<?php get_footer(); ?>