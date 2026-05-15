<?php
/**
 * Title: Hero Banner
 * Slug: spike-construction/hero-banner
 * Categories: banner
 */
$spike_construction_img = array(
    SPIKE_CONSTRUCTION_URL . 'assets/images/banner-img1.jpg',
    SPIKE_CONSTRUCTION_URL . 'assets/images/banner-img2.png',
);
?>

<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:cover {"url":"<?php echo esc_url($spike_construction_img[0]); ?>","id":15,"dimRatio":90,"overlayColor":"secondary","isUserOverlayColor":true,"focalPoint":{"x":0.5,"y":0.8},"minHeight":650,"style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"200px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xx-large);padding-bottom:200px;min-height:650px"><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-90 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-15" alt="" src="<?php echo esc_url($spike_construction_img[0]); ?>" style="object-position:50% 80%" data-object-fit="cover" data-object-position="50% 80%"/><div class="wp-block-cover__inner-container"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|small","left":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"50%","className":"is-style-default","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-column is-style-default" style="padding-top:0;padding-bottom:0;flex-basis:50%"><!-- wp:heading {"textAlign":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|small","left":"0","right":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"accent-text","fontSize":"xxx-large"} -->
<h2 class="wp-block-heading has-text-align-left has-accent-text-color has-text-color has-link-color has-xxx-large-font-size" style="margin-top:0;margin-right:0;margin-bottom:var(--wp--preset--spacing--small);margin-left:0;font-style:normal;font-weight:700"><?php echo esc_html__( 'SPECIALIZATION IN SITES CONSTRUCTION', 'spike-construction' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|medium","left":"0","right":"0"}}}} -->
<p class="has-text-align-left" style="margin-top:0;margin-right:0;margin-bottom:var(--wp--preset--spacing--medium);margin-left:0"><?php echo esc_html__( 'Donec sed odio dui. Sed posuere consectetur est at lobortis. Praesent commodo cursus magna, vel scelerisque nis.', 'spike-construction' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"0px"},"spacing":{"padding":{"left":"var:preset|spacing|medium","right":"var:preset|spacing|medium","top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="border-radius:0px;padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--medium)"><?php echo esc_html__( 'LEARN MORE', 'spike-construction' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"style":{"border":{"radius":"0px"},"spacing":{"padding":{"left":"var:preset|spacing|medium","right":"var:preset|spacing|medium","top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="border-radius:0px;padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--medium)"><?php echo esc_html__( 'CONTACT US', 'spike-construction' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:50%"><!-- wp:image {"id":18,"width":"567px","height":"auto","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($spike_construction_img[1]); ?>" alt="" class="wp-image-18" style="width:567px;height:auto"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->