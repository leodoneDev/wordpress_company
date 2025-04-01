<?php
/**
 * Title: Footer
 * Slug: wens-next-gen-blog/footer
 * Categories: wens-next-gen-blog
 *
 * @package wens-next-gen-blog
 * @since 1.0.0
 */

?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"20px","left":"20px","top":"60px","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|custom-color-3"}}}},"backgroundColor":"custom-color-1","textColor":"custom-color-3","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-custom-color-3-color has-custom-color-1-background-color has-text-color has-background has-link-color" style="padding-top:60px;padding-right:20px;padding-bottom:0;padding-left:20px"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"60px"}}}} -->
    <div class="wp-block-columns alignwide"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"30px"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontSize":"20px"}}} -->
    <p style="font-size:20px"><strong><?php echo esc_html__( 'About Me', 'wens-next-gen-blog' ); ?></strong></p>
    <!-- /wp:paragraph -->
    
    <!-- wp:image {"id":214,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"10px"}}} -->
    <figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/seven.jpg" alt="" class="wp-image-214" style="border-radius:10px"/></figure>
    <!-- /wp:image -->
    
    <!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"}}} -->
    <p style="font-size:16px"><strong><?php echo esc_html__( 'Lorem Ipsum', 'wens-next-gen-blog' ); ?></strong>&nbsp;<?php echo esc_html__( 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'wens-next-gen-blog' ); ?></p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"30px"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontSize":"20px"}}} -->
    <p style="font-size:20px"><strong><?php echo esc_html__( 'Recent Post', 'wens-next-gen-blog' ); ?></strong></p>
    <!-- /wp:paragraph -->
    
    <!-- wp:group {"className":"padding-top","layout":{"type":"constrained"}} -->
    <div class="wp-block-group padding-top"><!-- wp:query {"queryId":2,"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"asc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]}} -->
    <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"0"}}} -->
    <!-- wp:group {"style":{"spacing":{"margin":{"top":"16px","bottom":"16px"},"blockGap":"12px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
    <div class="wp-block-group" style="margin-top:16px;margin-bottom:16px"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","width":"","height":"50px","style":{"border":{"radius":"5px"}}} /-->
    
    <!-- wp:post-title {"level":5,"isLink":true,"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"textColor":"black"} /--></div>
    <!-- /wp:group -->
    <!-- /wp:post-template --></div>
    <!-- /wp:query --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"30px"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontSize":"20px"}}} -->
    <p style="font-size:20px"><strong><?php echo esc_html__( 'Gallery', 'wens-next-gen-blog' ); ?></strong></p>
    <!-- /wp:paragraph -->
    
    <!-- wp:gallery {"linkTo":"none"} -->
<figure class="wp-block-gallery has-nested-images columns-default is-cropped"><!-- wp:image {"id":81,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/one.jpg" alt="" class="wp-image-81"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":80,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/two.jpg" alt="" class="wp-image-80"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":65,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/three.jpg" alt="" class="wp-image-65"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":66,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/four.jpg" alt="" class="wp-image-66"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":64,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/five.jpg" alt="" class="wp-image-64"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":63,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/six.jpg" alt="" class="wp-image-63"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":63,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/one.jpg" alt="" class="wp-image-63"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":63,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/two.jpg" alt="" class="wp-image-63"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":63,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/three.jpg" alt="" class="wp-image-63"/></figure>
<!-- /wp:image --></figure>
<!-- /wp:gallery -->
    
    <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:buttons {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px"},"margin":{"top":"-255px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons" style="margin-top:-255px;padding-top:20px;padding-bottom:20px"><!-- wp:button -->
    <div class="wp-block-button"><a href="#" class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Follow Us', 'wens-next-gen-blog' ); ?></a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons -->
    
    <!-- wp:social-links {"align":"center"} -->
    <ul class="wp-block-social-links aligncenter"><!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
    <!-- /wp:social-links --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    
    <!-- wp:group {"align":"wide","style":{"border":{"top":{"width":"1px"},"right":[],"bottom":[],"left":[]},"spacing":{"padding":{"top":"20px","bottom":"20px"},"margin":{"top":"40px"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide" style="border-top-width:1px;margin-top:40px;padding-top:20px;padding-bottom:20px"><!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center"><?php echo esc_html__( 'Copyright @ 2025 WENS Nextgenblog, All Rights Reserved', 'wens-next-gen-blog' ); ?></p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->