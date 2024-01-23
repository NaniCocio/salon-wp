<?php

/**
 * Title: Featured Content Default
 * Slug: signify-blocks/featured-content-default
 * Categories: signify-blocks, page
 */
?>

<!-- wp:group {"align":"full","className":"wp-block-section wp-block-feature-content-default","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull wp-block-section wp-block-feature-content-default">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"14px"}},"className":"alignwide wp-block-group-heading"} -->
	<div class="wp-block-group alignwide wp-block-group-heading"><!-- wp:heading {"textAlign":"center","level":6,"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","lineHeight":1.8}},"textColor":"primary","fontSize":"extra-small","fontFamily":"open-sans"} -->
		<h6 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-open-sans-font-family has-extra-small-font-size" style="font-style:normal;font-weight:700;line-height:1.8;text-transform:uppercase"><?php esc_html_e('Featured', 'signify-blocks'); ?></h6>
		<!-- /wp:heading -->

		<!-- wp:heading {"textAlign":"center","fontSize":"product-heading"} -->
		<h2 class="wp-block-heading has-text-align-center has-product-heading-font-size"><?php esc_html_e('Trending', 'signify-blocks'); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center"><?php esc_html_e('You can manage it from front page in site editor.', 'signify-blocks'); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"align":"wide","className":"wp-block-group-content"} -->
	<div class="wp-block-group alignwide wp-block-group-content">
		<!-- wp:columns {"align":"wide"} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"wp-block-post-group"} -->
				<div class="wp-block-group wp-block-post-group">
					<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_parent_theme_file_uri('/assets/images/featured-content-1.jpg')); ?>" alt="" class="" /></figure>
					<!-- /wp:image -->
					<!-- wp:group {"className":"wp-block-entry-content"} -->
					<div class="wp-block-group wp-block-entry-content">
						<!-- wp:heading {"fontSize":"content-heading"} -->
						<h2 class="has-content-heading-font-size"><?php esc_html_e('Little Known Ways', 'signify-blocks'); ?></h2>
						<!-- /wp:heading -->
						<!-- wp:paragraph -->
						<p><?php esc_html_e('Visualize yourself completing the task and achieving the goals. This will help to accomplish more in less time.', 'signify-blocks'); ?></p>
						<!-- /wp:paragraph -->
						<!-- wp:buttons -->
						<div class="wp-block-buttons">
							<!-- wp:button {"className":"is-style-outline"} -->
							<div class="wp-block-button is-style-outline">
								<a class="wp-block-button__link"><?php esc_html_e('Read More', 'signify-blocks'); ?></a>
							</div>
							<!-- /wp:button -->
						</div>
						<!-- /wp:buttons -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"wp-block-post-group"} -->
				<div class="wp-block-group wp-block-post-group">
					<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_parent_theme_file_uri('/assets/images/featured-content-2.jpg')); ?>" alt="" class="" /></figure>
					<!-- /wp:image -->
					<!-- wp:group {"className":"wp-block-entry-content"} -->
					<div class="wp-block-group wp-block-entry-content">
						<!-- wp:heading {"fontSize":"content-heading"} -->
						<h2 class="has-content-heading-font-size"><?php esc_html_e('Fun Travel', 'signify-blocks'); ?></h2>
						<!-- /wp:heading -->
						<!-- wp:paragraph -->
						<p><?php esc_html_e('Feed your adventurous spirit with exciting activities like zip-lining, skydiving, bungee jumping, or white-water rafting.', 'signify-blocks'); ?></p>
						<!-- /wp:paragraph -->
						<!-- wp:buttons -->
						<div class="wp-block-buttons">
							<!-- wp:button {"className":"is-style-outline"} -->
							<div class="wp-block-button is-style-outline">
								<a class="wp-block-button__link"><?php esc_html_e('Read More', 'signify-blocks'); ?></a>
							</div>
							<!-- /wp:button -->
						</div>
						<!-- /wp:buttons -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"wp-block-post-group"} -->
				<div class="wp-block-group wp-block-post-group">
					<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_parent_theme_file_uri('/assets/images/featured-content-3.jpg')); ?>" alt="" class="" /></figure>
					<!-- /wp:image -->
					<!-- wp:group {"className":"wp-block-entry-content"} -->
					<div class="wp-block-group wp-block-entry-content">
						<!-- wp:heading {"fontSize":"content-heading"} -->
						<h2 class="has-content-heading-font-size"><?php esc_html_e('Style Up', 'signify-blocks'); ?></h2>
						<!-- /wp:heading -->
						<!-- wp:paragraph -->
						<p><?php esc_html_e('Explore different fashion styles with various looks to find out your personal style. Try out from classic to edgy.', 'signify-blocks'); ?></p>
						<!-- /wp:paragraph -->
						<!-- wp:buttons -->
						<div class="wp-block-buttons">
							<!-- wp:button {"className":"is-style-outline"} -->
							<div class="wp-block-button is-style-outline">
								<a class="wp-block-button__link"><?php esc_html_e('Read More', 'signify-blocks'); ?></a>
							</div>
							<!-- /wp:button -->
						</div>
						<!-- /wp:buttons -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
