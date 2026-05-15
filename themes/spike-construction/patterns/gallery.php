<?php
/**
 * Title: Gallery
 * Slug: spike-construction/gallery
 * Categories: gallery
 */
$spike_construction_img = array(
    SPIKE_CONSTRUCTION_URL . 'assets/images/gallery-img1.jpg',
    SPIKE_CONSTRUCTION_URL . 'assets/images/gallery-img2.jpg',
    SPIKE_CONSTRUCTION_URL . 'assets/images/gallery-img3.jpg',
    SPIKE_CONSTRUCTION_URL . 'assets/images/blog-img2.jpg',
    SPIKE_CONSTRUCTION_URL . 'assets/images/gallery-img5.jpg',
    SPIKE_CONSTRUCTION_URL . 'assets/images/blog-img1.jpg',
);
?>

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large","left":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|large"},"blockGap":{"top":"0"}}}} -->
<div class="wp-block-columns" style="margin-bottom:var(--wp--preset--spacing--large)"><!-- wp:column {"width":"20%"} -->
<div class="wp-block-column" style="flex-basis:20%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="font-style:normal;font-weight:700"><?php echo esc_html__( 'OUR COMPLETE PROJECTS', 'spike-construction' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:cover {"url":"<?php echo esc_url($spike_construction_img[0]); ?>","id":140,"isUserOverlayColor":true,"minHeight":250,"customGradient":"linear-gradient(0deg,rgba(12,44,97,0.62) 21%,rgba(12,44,97,0) 100%)","contentPosition":"bottom center","style":{"layout":{"selfStretch":"fit","flexSize":null},"border":{"radius":"0px"},"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"0","margin":{"bottom":"var:preset|spacing|medium"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="border-radius:0px;margin-bottom:var(--wp--preset--spacing--medium);padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--medium);min-height:250px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(0deg,rgba(12,44,97,0.62) 21%,rgba(12,44,97,0) 100%)"></span><img class="wp-block-cover__image-background wp-image-140" alt="" src="<?php echo esc_url($spike_construction_img[0]); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.2"},"spacing":{"margin":{"top":"var:preset|spacing|x-small"}},"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}}},"textColor":"accent-text","fontSize":"medium"} -->
<h4 class="wp-block-heading has-accent-text-color has-text-color has-link-color has-medium-font-size" style="margin-top:var(--wp--preset--spacing--x-small);font-style:normal;font-weight:700;line-height:1.2"><?php echo esc_html__( 'MEASUREMENT', 'spike-construction' ); ?></h4>
<!-- /wp:heading --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url($spike_construction_img[1]); ?>","id":141,"isUserOverlayColor":true,"minHeight":450,"customGradient":"linear-gradient(0deg,rgba(12,44,97,0.62) 42%,rgba(255,255,255,0) 100%)","contentPosition":"bottom center","style":{"layout":{"selfStretch":"fit","flexSize":null},"border":{"radius":"0px"},"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="border-radius:0px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small);min-height:450px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(0deg,rgba(12,44,97,0.62) 42%,rgba(255,255,255,0) 100%)"></span><img class="wp-block-cover__image-background wp-image-141" alt="" src="<?php echo esc_url($spike_construction_img[1]); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.2"},"spacing":{"margin":{"top":"var:preset|spacing|x-small"}},"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}}},"textColor":"accent-text"} -->
<h5 class="wp-block-heading has-accent-text-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--x-small);font-style:normal;font-weight:700;line-height:1.2"><?php echo esc_html__( 'ANALYZING PROJECTS', 'spike-construction' ); ?></h5>
<!-- /wp:heading --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:cover {"url":"<?php echo esc_url($spike_construction_img[2]); ?>","id":146,"isUserOverlayColor":true,"minHeight":450,"customGradient":"linear-gradient(0deg,rgba(12,44,97,0.62) 42%,rgba(255,255,255,0) 100%)","contentPosition":"bottom center","style":{"layout":{"selfStretch":"fit","flexSize":null},"border":{"radius":"0px"},"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"0","margin":{"bottom":"var:preset|spacing|medium"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="border-radius:0px;margin-bottom:var(--wp--preset--spacing--medium);padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small);min-height:450px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(0deg,rgba(12,44,97,0.62) 42%,rgba(255,255,255,0) 100%)"></span><img class="wp-block-cover__image-background wp-image-146" alt="" src="<?php echo esc_url($spike_construction_img[2]); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.2"},"spacing":{"margin":{"top":"var:preset|spacing|x-small"}},"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}}},"textColor":"accent-text"} -->
<h5 class="wp-block-heading has-accent-text-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--x-small);font-style:normal;font-weight:700;line-height:1.2"><?php echo esc_html__( 'MODERN EQUIPMENT', 'spike-construction' ); ?></h5>
<!-- /wp:heading --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url($spike_construction_img[3]); ?>","id":244,"isUserOverlayColor":true,"minHeight":250,"customGradient":"linear-gradient(0deg,rgba(12,44,97,0.48) 21%,rgba(12,44,97,0) 100%)","contentPosition":"bottom center","style":{"layout":{"selfStretch":"fit","flexSize":null},"border":{"radius":"0px"},"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"0","margin":{"bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="border-radius:0px;margin-bottom:0;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--medium);min-height:250px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(0deg,rgba(12,44,97,0.48) 21%,rgba(12,44,97,0) 100%)"></span><img class="wp-block-cover__image-background wp-image-244" alt="" src="<?php echo esc_url($spike_construction_img[3]); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.2"},"spacing":{"margin":{"top":"var:preset|spacing|x-small"}},"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}}},"textColor":"accent-text"} -->
<h5 class="wp-block-heading has-accent-text-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--x-small);font-style:normal;font-weight:700;line-height:1.2"><?php echo esc_html__( 'DISCUSSING PROJECT', 'spike-construction' ); ?></h5>
<!-- /wp:heading --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:cover {"url":"<?php echo esc_url($spike_construction_img[4]); ?>","id":361,"isUserOverlayColor":true,"minHeight":250,"customGradient":"linear-gradient(0deg,rgba(12,44,97,0.48) 21%,rgba(12,44,97,0) 100%)","contentPosition":"bottom center","style":{"layout":{"selfStretch":"fit","flexSize":null},"border":{"radius":"0px"},"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"0","margin":{"bottom":"var:preset|spacing|medium"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="border-radius:0px;margin-bottom:var(--wp--preset--spacing--medium);padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--medium);min-height:250px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(0deg,rgba(12,44,97,0.48) 21%,rgba(12,44,97,0) 100%)"></span><img class="wp-block-cover__image-background wp-image-361" alt="" src="<?php echo esc_url($spike_construction_img[4]); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.2"},"spacing":{"margin":{"top":"var:preset|spacing|x-small"}},"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}}},"textColor":"accent-text"} -->
<h5 class="wp-block-heading has-accent-text-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--x-small);font-style:normal;font-weight:700;line-height:1.2"><?php echo esc_html__( 'CONSULTING PROJECTS', 'spike-construction' ); ?></h5>
<!-- /wp:heading --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url($spike_construction_img[5]); ?>","id":239,"isUserOverlayColor":true,"minHeight":450,"customGradient":"linear-gradient(0deg,rgba(12,44,97,0.62) 42%,rgba(255,255,255,0) 100%)","contentPosition":"bottom center","style":{"layout":{"selfStretch":"fit","flexSize":null},"border":{"radius":"0px"},"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="border-radius:0px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small);min-height:450px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(0deg,rgba(12,44,97,0.62) 42%,rgba(255,255,255,0) 100%)"></span><img class="wp-block-cover__image-background wp-image-239" alt="" src="<?php echo esc_url($spike_construction_img[5]); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.2"},"spacing":{"margin":{"top":"var:preset|spacing|x-small"}},"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}}},"textColor":"accent-text"} -->
<h5 class="wp-block-heading has-accent-text-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--x-small);font-style:normal;font-weight:700;line-height:1.2"><?php echo esc_html__( 'FLOORING TILES', 'spike-construction' ); ?></h5>
<!-- /wp:heading --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->