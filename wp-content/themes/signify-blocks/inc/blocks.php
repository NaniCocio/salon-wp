<?php
/**
 * Blocks
 *
 * @package Signify_Blocks
 * @since 1.0
 */

/**
 * Add Custom block category for custom blocks.
 *
 * @param array $categories
 * @return void
 */
function signify_blocks_add_block_category( $categories ) {
	$categories[] = array(
		'slug'  => 'signify-blocks',
		'title' => esc_html__( 'Signify Blocks', 'signify-blocks' ),
	);

	return $categories;
}
add_filter(	'block_categories_all', 'signify_blocks_add_block_category', 10, 2 );
