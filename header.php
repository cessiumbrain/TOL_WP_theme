<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/x-icon" href="<?php echo get_theme_file_uri() . '/assets/favicon.ico'?>"/>
    <?php
    wp_head();
    ?>
    <title>Document</title>
</head>
<?php    wp_nav_menu( array(
        'theme_location' => 'primary',
        'menu_class'     => 'header-nav',
         ) );; ?>
<header>

<div class="hero-container">
    <video autoplay muted  loop src="<?php echo get_theme_file_uri() . '/assets/tol.mp4?autoplay=1'?>"></video>

</div>
<!-- <div class="hero-container" style="background: url('<?php echo get_theme_file_uri() . '/03.jpeg'?>'); background-size: cover">


        </div> -->

    </header>