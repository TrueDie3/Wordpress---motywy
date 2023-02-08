<?php add_theme_support('post_thumbnails');?>

<?php add_theme_support( 'custom-logo',[
    		'height'               => 165,
            'width'                => 180,
            'flex-height'          => false,
            'flex-width'           => false,
            'header-text'          => ['site-title', 'site-description'],
        ]);?>


<?php function custom_excerpt_length( $length ) {
    return 40;
}?>
