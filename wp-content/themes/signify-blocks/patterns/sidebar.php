<?php

/**
 * Title: Sidebar
 * Slug: signify-blocks/sidebar
 * Categories: signify-blocks, page
 */
?>

<!-- wp:group {"className":"wp-block-widget-area wp-block-sidebar"} -->
<div class="wp-block-group wp-block-widget-area wp-block-sidebar"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"backgroundColor":"secondary","className":"wp-block-widget"} -->
	<div class="wp-block-group wp-block-widget has-secondary-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"28px","left":"0px"}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"fontSize":"medium","fontFamily":"open-sans"} -->
		<h2 class="wp-block-heading has-text-align-center has-open-sans-font-family has-medium-font-size" id="follow-us" style="margin-top:0px;margin-right:0px;margin-bottom:28px;margin-left:0px;font-style:normal;font-weight:700;text-transform:uppercase"><?php esc_html_e('Follow Us', 'signify-blocks'); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:social-links {"iconColor":"foreground","iconColorValue":"#ffffff","style":{"spacing":{"blockGap":{"top":"7px","left":"7px"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
		<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

			<!-- wp:social-link {"url":"#","service":"twitter"} /-->

			<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

			<!-- wp:social-link {"url":"#","service":"WordPress"} /-->
		</ul>
		<!-- /wp:social-links -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"backgroundColor":"secondary","className":"wp-block-widget"} -->
	<div class="wp-block-group wp-block-widget has-secondary-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"28px","left":"0px"}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"fontSize":"medium","fontFamily":"open-sans"} -->
		<h2 class="wp-block-heading has-text-align-center has-open-sans-font-family has-medium-font-size" id="search" style="margin-top:0px;margin-right:0px;margin-bottom:28px;margin-left:0px;font-style:normal;font-weight:700;text-transform:uppercase"><?php esc_html_e('search', 'signify-blocks'); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search...","buttonText":"Search","buttonUseIcon":true} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"backgroundColor":"secondary","className":"wp-block-widget"} -->
	<div class="wp-block-group wp-block-widget has-secondary-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"28px","left":"0px"}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"fontSize":"medium","fontFamily":"open-sans"} -->
		<h2 class="wp-block-heading has-text-align-center has-open-sans-font-family has-medium-font-size" id="about" style="margin-top:0px;margin-right:0px;margin-bottom:28px;margin-left:0px;font-style:normal;font-weight:700;text-transform:uppercase"><?php esc_html_e('About', 'signify-blocks'); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_parent_theme_file_uri( '/assets/images/featured-services.jpg' ) ); ?>" alt="" /></figure>
		<!-- /wp:image -->

		<!-- wp:paragraph -->
		<p><?php esc_html_e('Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Maecenas odio lacus, dignissim sollicitudin finibus commodo, rhoncus et ante.', 'signify-blocks'); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"backgroundColor":"secondary","className":"wp-block-widget"} -->
	<div class="wp-block-group wp-block-widget has-secondary-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"28px","left":"0px"}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"fontSize":"medium","fontFamily":"open-sans"} -->
		<h2 class="wp-block-heading has-text-align-center has-open-sans-font-family has-medium-font-size" id="category" style="margin-top:0px;margin-right:0px;margin-bottom:28px;margin-left:0px;font-style:normal;font-weight:700;text-transform:uppercase"><?php esc_html_e('categories', 'signify-blocks'); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:categories {"showPostCounts":true} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"backgroundColor":"secondary","className":"wp-block-widget"} -->
	<div class="wp-block-group wp-block-widget has-secondary-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"28px","left":"0px"}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"fontSize":"medium","fontFamily":"open-sans"} -->
		<h2 class="wp-block-heading has-text-align-center has-open-sans-font-family has-medium-font-size" id="recent-post" style="margin-top:0px;margin-right:0px;margin-bottom:28px;margin-left:0px;font-style:normal;font-weight:700;text-transform:uppercase"><?php esc_html_e('Latest post', 'signify-blocks'); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:latest-posts {"postsToShow":3,"displayPostDate":true,"displayFeaturedImage":true,"featuredImageAlign":"left","addLinkToFeaturedImage":true} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"backgroundColor":"secondary","className":"wp-block-widget"} -->
	<div class="wp-block-group wp-block-widget has-secondary-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"28px","left":"0px"}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"fontSize":"medium","fontFamily":"open-sans"} -->
		<h2 class="wp-block-heading has-text-align-center has-open-sans-font-family has-medium-font-size" id="archives" style="margin-top:0px;margin-right:0px;margin-bottom:28px;margin-left:0px;font-style:normal;font-weight:700;text-transform:uppercase"><?php esc_html_e('Archives', 'signify-blocks'); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:archives {"showPostCounts":true,"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
