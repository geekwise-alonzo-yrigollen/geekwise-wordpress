<?php
function theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
?>


 

<?php if(is_home) { ?>
<?php if( get_header_image() ): ?>
<div id="custom-img-header"><img src="<?php echo header_image(); ?>" alt="" /></div>
<?php endif; ?>
<?php } ?>



<div class="banner">
<?php if(get_post_meta($post->ID, 'banner', true)) : ?>
<img src="<?php echo get_post_meta($post->ID, 'banner', true); ?>" />
<?php else : ?>
<?php the_title(); ?>
<?php endif; ?>
<div>