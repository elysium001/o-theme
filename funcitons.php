<?php
/**
 * O Theme Functions
 */

// Enqueue styles
function o_block_theme_styles() {
    wp_enqueue_style(
        'o-block-theme-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'o_block_theme_styles');

// Add theme support
function o_block_theme_setup() {
    // Add support for editor styles
    add_theme_support('editor-styles');
    
    // Add support for responsive embeds
    add_theme_support('responsive-embeds');
    
    // Add support for post thumbnails
    add_theme_support('post-thumbnails');
    
    // Add support for custom line height
    add_theme_support('custom-line-height');
    
    // Add support for custom units
    add_theme_support('custom-units');
    
    // Add support for link color
    add_theme_support('link-color');
    
    // Add support for block templates
    add_theme_support('block-templates');
    
    // Add support for block template parts
    add_theme_support('block-template-parts');
}
add_action('after_setup_theme', 'o_block_theme_setup');

// Register block patterns
function o_block_theme_register_patterns() {
    register_block_pattern(
        'o-block-theme/hero-section',
        array(
            'title'       => __('Hero Section', 'o-block-theme'),
            'description' => __('A simple hero section with title and description.', 'o-block-theme'),
            'content'     => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}},"backgroundColor":"light"} -->
<div class="wp-block-group alignfull has-light-background-color has-background">
<!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-x-large-font-size">Welcome to Our Site</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"secondary"} -->
<p class="has-text-align-center has-secondary-color has-text-color">This is a beautiful hero section that showcases your content.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->',
            'categories'  => array('featured'),
        )
    );
}
add_action('init', 'o_block_theme_register_patterns');