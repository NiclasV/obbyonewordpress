<!DOCTYPE html>

<html lang="en">
    <head>
    <meta charset="utf-8">
    <title>obbyone</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="http://localhost/wp-content/themes/obbyone/style.css">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300i,400,700i" rel="stylesheet">  
    <link href="https://fonts.googleapis.com/css?family=Raleway:500" rel="stylesheet">
    </head>

    <body>

    <div class="site">

    <!-- PRIMARY MENU -->
    <?php if ( has_nav_menu( 'primary' ) ) : ?>
        <nav id="site-navigation" class="main-navigation" role="navigation">
            <div class="nav-left-logo">
               <?php
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                echo '<img src="';
                echo " $image[0] ";
                echo '">';
                ?>
            </div>

            <div class="nav-right-menu">
                <?php
                    // Primary navigation menu.
                    wp_nav_menu( array(
                        'menu_class'     => 'nav-menu',
                        'theme_location' => 'primary',
                    ) );
                ?>
            </div>
        </nav><!-- .main-navigation -->

    <?php endif; ?><!-- END PRIMARY MENU -->

    <hr>
