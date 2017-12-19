    <?php define( 'WP_USE_THEMES', false ); get_header(); ?>


        <main class="content" role="main">
        
            <h1>This is my index</h1>

            <?php if (have_posts()) :
   while (have_posts()) :
      the_post();
         the_content();
   endwhile;
   
endif; ?>

        </main>




    <?php get_footer(); ?>