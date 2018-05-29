<?php /* Template Name: CV*/ ?>

<?php get_header(); ?>
   
<main class="content">

    <!-- PROFILINFO SECTION -->
    <div class="profileinfo">

        <div class="img-wrapper">
            <!-- Print the Gravatar image  -->
            <?php echo get_avatar( 'obbybobson@gmail.com', 300 ); ?>
        </div>

        <div class="profiledetails">
            <?php //Get current user info to display first and last name
            $user_info = get_userdata(1);
            $first_name = $user_info->first_name;
            $last_name = $user_info->last_name;
            ?>
      
            <h1 class="uppercase">
                <? echo $first_name;?><br>
                <? echo $last_name;?>
            </h1>

            <p class="roles uppercase"><span class="lightblue"> Grafisk Formgivare</span>  //  
            <span class="lightblue">Front-end utvecklare</span>  //  
            <span class="lightblue">Fotograf</span></p>
            <div class="contact-details">
                <div class="contact-item">
                    <a href="http://github.com/niclasV" target="_blank">
                    <i class="fab fa-github-square fa-3x"></i><br>
                    <span class="contact-text">Me @ Github</span></a>
                </div>
                <div class="contact-item">
                    <a href="https://www.linkedin.com/in/niclas-victorsson-3b03713a/" target="_blank">
                    <i class="fab fa-linkedin fa-3x"></i><br>
                    <span class="contact-text">Me @ LinkedIn</span></a>
                </div>
                <div class="contact-item">
                    <a href="tel:0768124922" target="_blank">
                    <i class="fas fa-phone-square fa-3x"></i><br>
                    <span class="contact-text">0768124922</span></a>    
                </div>
                <div class="contact-item">
                    <a href="mailto:obbybobson@gmail.com?Subject=Tjena%20Nicke!">
                    <i class="fas fa-envelope-square fa-3x"></i><br>
                    <span class="contact-text">obbybobson@gmail.com</span></a>
                </div>
            </div>
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