<?php

/**
 * Title: Hero Content
 * Slug: signify-blocks/hero-content
 * Categories: signify-blocks, page
 */
?>

<!-- wp:group {"align":"full","className":"wp-block-section  wp-block-hero-content"} -->
<div class="wp-block-group alignfull wp-block-section wp-block-hero-content">
	<!-- wp:group {"layout":{"inherit":false}} -->
	<div class="wp-block-group">
		<!-- wp:group {"style":{"color":{}},"layout":{"inherit":true,"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:media-text {"mediaLink":"#","mediaType":"image"} -->
			<div class="wp-block-media-text alignwide is-stacked-on-mobile">
				<figure class="wp-block-media-text__media"><img src="<?php echo esc_url(get_parent_theme_file_uri('/assets/images/hero-content.png')); ?>" alt="" /></figure>
				<div class="wp-block-media-text__content">
					<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"14px"}},"className":"alignwide wp-block-group-heading"} -->
					<div class="wp-block-group alignwide wp-block-group-heading"><!-- wp:heading {"textAlign":"left","level":6,"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","lineHeight":1.8}},"textColor":"primary","fontSize":"extra-small","fontFamily":"open-sans"} -->
						<h6 class="wp-block-heading has-text-align-left has-primary-color has-text-color has-open-sans-font-family has-extra-small-font-size" style="font-style:normal;font-weight:700;line-height:1.8;text-transform:uppercase"><?php esc_html_e('About Us', 'signify-blocks'); ?></h6>
						<!-- /wp:heading -->

						<!-- wp:heading {"textAlign":"left","fontSize":"product-heading"} -->
						<h2 class="wp-block-heading has-text-align-left has-product-heading-font-size"><?php esc_html_e('Unveiling Our Purpose', 'signify-blocks'); ?></h2>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"align":"left"} -->
						<p class="has-text-align-left"><?php esc_html_e('Discover the Story Behind', 'signify-blocks'); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:paragraph {"align":"left"} -->
					<p class="has-text-align-left"><?php esc_html_e('Welcome to our About Us section! We are very excited to share our values and story with you that drives our organization. Our team is comprised of passionate individuals from diverse backgrounds who share a common vision.', 'signify-blocks'); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
					<div class="wp-block-buttons">
						<!-- wp:button -->
						<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('Read More', 'signify-blocks'); ?></a>
						</div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
			</div>
			<!-- /wp:media-text -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
