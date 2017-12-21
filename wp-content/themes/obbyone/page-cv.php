<?php /* Template Name: CV*/ ?>

<?php get_header(); ?>
   
<main class="content">

    <!-- PROFILINFO SECTION -->
    <div class="profileinfo">
        <div class="img-wrapper">
        
        <?php 
            //Get current user for displaying the avatar from Gravatar
            $user = wp_get_current_user(); if ( $user ) :
        ?>      
                                    <!-- Print the Gravatar image  -->
        <img class="profilepic" src="<?php echo esc_url( get_avatar_url( $user->ID)); ?>" />
        <?php endif; ?> 
        </div>

        <div class="profiledetails">

            <?php //Get current user info to display first and last name
                global $current_user; get_currentuserinfo();
            ?>
            <h1 class="uppercase">
                <? echo $current_user->user_firstname?><br>
                <? echo $current_user->user_lastname?>
            </h1>

            <p class="roles uppercase"><span class="lightblue"> Grafisk Formgivare</span>  //  
                <span class="lightblue">Front-end utvecklare</span>  //  
                <span class="lightblue">Fotograf</span></p>
        </div>
    </div> <!-- END PROFILEINFO -->


<?php
    // TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
        <div class="entry-content-page">
            <?php the_content(); ?> <!-- Page Content -->
        </div><!-- entry-content-page -->

    <?php
    endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query
?>

</main>




<?php get_footer(); ?>