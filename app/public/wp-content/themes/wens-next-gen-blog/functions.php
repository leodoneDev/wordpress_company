<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;


function wens_next_gen_blog_scripts(){
   // enqueue parent style
	wp_enqueue_style('wens-next-gen-blog-parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'wens_next_gen_blog_scripts');


function wens_next_gen_blog_register_block_pattern_categories(){
    register_block_pattern_category(
        'wens-next-gen-blog',
        array( 'label' => __( 'WENS Next Gen Blog', 'wens-next-gen-blog' ) )
    );

}
add_action('init', 'wens_next_gen_blog_register_block_pattern_categories');
