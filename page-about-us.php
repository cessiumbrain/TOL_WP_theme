<head>
    <?php
    wp_head();
    ?>
</head>
<body class="about-us-body">
<?php    wp_nav_menu( array(
        'theme_location' => 'primary',
        'menu_class'     => 'header-nav',
         ) );; ?>

<div class="about-us-grid">
    <div class="card-outer">
        <div class="card-inner">
        <div class="bio-pic">
            </div>
        <div class="bio">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
        </div>
        
    </div>
    <div class="card-outer">
        <div class="card-inner">
        <div class="bio-pic">
            </div>
        <div class="bio">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
        </div>
        
    </div>
    <div class="card-outer">
        <div class="card-inner">
            <div class="bio-pic">
            </div>
            <div class="bio">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
        </div>
        
    </div>

</div>

<?php
get_footer();
?>
</body>
