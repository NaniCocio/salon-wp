<?php

/**
 * Title: Recent Blog Posts
 * Slug: signify-blocks/recent-blog-posts
 * Categories: signify-blocks, page
 */
?>

<!-- wp:group {"align":"full","className":"wp-block-section wp-block-recent-blog-posts","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull wp-block-section wp-block-recent-blog-posts">
	<!-- wp:group {"align":"wide","className":"alignwide wp-block-group-heading"} -->
	<div class="wp-block-group alignwide wp-block-group-heading">
		<!-- wp:heading {"textAlign":"center","level":6,"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","lineHeight":1.8}},"textColor":"primary","fontSize":"extra-small","fontFamily":"open-sans"} -->
		<h6 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-open-sans-font-family has-extra-small-font-size" style="font-style:normal;font-weight:700;line-height:1.8;text-transform:uppercase"><?php esc_html_e('Blog', 'signify-blocks'); ?></h6>
		<!-- /wp:heading -->

		<!-- wp:heading {"textAlign":"center","fontSize":"product-heading"} -->
		<h2 class="wp-block-heading has-text-align-center has-product-heading-font-size"><?php esc_html_e('Recent Posts', 'signify-blocks'); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"align":"wide","className":"wp-block-group-content"} -->
	<div class="wp-block-group alignwide wp-block-group-content">

		<!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list","columns":3},"align":"wide","layout":{"type":"constrained"}} -->
		<div class="wp-block-query alignwide"><!-- wp:post-template -->
			<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|80","left":"var:preset|spacing|80"},"padding":{"bottom":"var:preset|spacing|80","top":"0"},"margin":{"bottom":"var:preset|spacing|80"}},"border":{"bottom":{"color":"var:preset|color|border-color","width":"1px"}}}} -->
			<div class="wp-block-columns" style="border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;margin-bottom:var(--wp--preset--spacing--80);padding-top:0;padding-bottom:var(--wp--preset--spacing--80)">
				<!-- wp:column {"width":"54%"} -->
				<div class="wp-block-column" style="flex-basis:54%">
					<!-- wp:post-featured-image {"isLink":true,"align":"full"} /-->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"width":"46%"} -->
				<div class="wp-block-column" style="flex-basis:46%">
					<!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|meta"}}},"typography":{"textDecoration":"none"},"spacing":{"margin":{"bottom":"7px"}}}} /-->

					<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"right":"0px","bottom":"0px","left":"0px","top":"0px"}}}} /-->

					<!-- wp:group {"style":{"spacing":{"margin":{"top":"14px","bottom":"0"}}},"className":"wp-block-post-meta","layout":{"type":"flex","allowOrientation":false}} -->
					<div class="wp-block-group wp-block-post-meta" style="margin-top:14px;margin-bottom:0">
						<!-- wp:post-date {"isLink":true,"style":{"typography":{"fontSize":"12px","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|meta"}}}}} /-->

						<!-- wp:post-author {"showAvatar":false,"style":{"typography":{"fontSize":"12px","textTransform":"uppercase"}},"textColor":"meta"} /-->
					</div>
					<!-- /wp:group -->

					<!-- wp:post-excerpt {"moreText":"Read More","style":{"spacing":{"margin":{"top":"28px"}}}} /-->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
			<!-- /wp:post-template -->

			<!-- wp:query-pagination {"align":"full","layout":{"type":"flex","justifyContent":"center"}} -->
			<!-- wp:query-pagination-previous {"fontSize":"small"} /-->

			<!-- wp:query-pagination-next {"fontSize":"small"} /-->
			<!-- /wp:query-pagination -->
		</div>
		<!-- /wp:query -->

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
