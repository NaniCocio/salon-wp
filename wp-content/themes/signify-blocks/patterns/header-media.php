<?php

/**
 * Title: Header Media
 * Slug: signify-blocks/header-media
 * Categories: signify-blocks, header
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url(get_parent_theme_file_uri('/assets/images/header-media-bg.jpg')); ?>","dimRatio":0,"align":"full","className":"wp-block-custom-header-media wp-block-section wp-block-no-padding"} -->
<div class="wp-block-cover alignfull wp-block-custom-header-media wp-block-section wp-block-no-padding"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url(get_parent_theme_file_uri('/assets/images/header-media-bg.jpg')); ?>" data-object-fit="cover" />
	<div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","layout":{"inherit":true,"type":"constrained"}} -->
		<div class="wp-block-group alignwide"><!-- wp:media-text {"mediaPosition":"right","mediaType":"image","verticalAlignment":"center"} -->
			<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-center">
				<div class="wp-block-media-text__content"><!-- wp:group {"layout":{"type":"constrained","contentSize":"550px","justifyContent":"left"}} -->
					<div class="wp-block-group"><!-- wp:paragraph {"align":"left","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","letterSpacing":"2.1px"},"spacing":{"margin":{"bottom":"7px"}}},"fontSize":"tiny"} -->
						<p class="has-text-align-left has-tiny-font-size" style="margin-bottom:7px;font-style:normal;font-weight:700;letter-spacing:2.1px;text-transform:uppercase"><?php esc_html_e('Collection 2023', 'signify-blocks'); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:heading {"textAlign":"left","style":{"spacing":{"margin":{"bottom":"0","top":"0px"}},"typography":{"lineHeight":1.3}},"fontSize":"huge"} -->
						<h2 class="wp-block-heading has-text-align-left has-huge-font-size" style="margin-top:0px;margin-bottom:0;line-height:1.3"><?php esc_html_e('Unleash Your Creativity', 'signify-blocks'); ?></h2>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"align":"left","style":{"typography":{"letterSpacing":"2.1px"},"spacing":{"margin":{"top":"28px"}}},"className":"is-style-default"} -->
						<p class="has-text-align-left is-style-default" style="margin-top:28px;letter-spacing:2.1px"><?php esc_html_e('Our Versatile Multipurpose Block Theme with Dynamic Features.', 'signify-blocks'); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"21px"}}}} -->
						<div class="wp-block-buttons" style="margin-top:21px"><!-- wp:button -->
							<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('Shop Now', 'signify-blocks'); ?></a></div>
							<!-- /wp:button -->
						</div>
						<!-- /wp:buttons -->
					</div>
					<!-- /wp:group -->
				</div>
				<figure class="wp-block-media-text__media"><img src="" alt="" /></figure>
			</div>
			<!-- /wp:media-text -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->
