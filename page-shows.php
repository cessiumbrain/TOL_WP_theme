
<?php wp_head();?>
<?php    wp_nav_menu( array(
        'theme_location' => 'primary',
        'menu_class'     => 'header-nav',
         ) );; ?>
<body class="shows-body">

<div style="background: url('<?php echo get_theme_file_uri() . '/04.jpeg' ?>'); background-size: cover;"class="shows-hero">
    <h1>Upcoming Shows</h1>
</div>
<div class="shows-container">
    
    <?php
        $the_query = new WP_Query([
            "post_type" => "tourdate"
        ]);

        if ( $the_query->have_posts() ) : 

            while ( $the_query->have_posts() ) : $the_query->the_post();
                ?>
                <div class="show-row">
                <div class="date-circle">
                <?php print_r(get_post_custom()["date"][0]);?>
                </div>
                <div class="center-div">
                <h1><?php the_title()?></h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap i</p>
                </div>
                <?php
                the_content();
                the_title();
                ?>

                </div>
                <?php
            endwhile;
            else :
                echo "no posts";
            wp_reset_postdata(); 
        endif; 
        ?>
    </div>

</body>