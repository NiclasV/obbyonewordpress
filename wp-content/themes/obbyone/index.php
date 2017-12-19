    <?php define( 'WP_USE_THEMES', false ); get_header(); ?>


        <main class="content" role="main">
        
            <h1>This is my index</h1>

        <?php 
            //THE WORDPRESS LOOP
            if( have_posts() ):
                while( have_posts() ) : the_post();
                
                    //WHAT TO POST TO EACH POST
                    the_title();
                    echo "<br>";
                    the_author();
                    echo "<br>";
                    the_time(); the_date();
                    the_category();
                    the_content();

                endwhile;
            endif;
        ?>

        </main>




    <?php get_footer(); ?>