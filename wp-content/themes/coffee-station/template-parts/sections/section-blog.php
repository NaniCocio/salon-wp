<?php  
	$coffeestation_hs_blog 			= esc_attr(get_theme_mod('hs_blog','1'));
	$coffeestation_blog_title 		= esc_attr(get_theme_mod('blog_title'));
	$coffeestation_blog_subtitle		= esc_attr(get_theme_mod('blog_subtitle')); 
	$coffeestation_blog_description	= esc_attr(get_theme_mod('blog_description'));
	$coffeestation_blog_num			= esc_attr(get_theme_mod('blog_display_num','3'));
	if($coffeestation_hs_blog=='1'):
?>

<section id="blog-section" class="blog-area home-blog">

	<div class="container">
		<div class="row justify-content-center text-center ">
			<div class="h-section">
				<h3 class="section-title"><?php echo esc_html(get_theme_mod('blog_heading')); ?>
				</h3>			
			</div>
		 </div> 
		<?php if(!empty($coffeestation_blog_title) || !empty($coffeestation_blog_subtitle) || !empty($coffeestation_blog_description)): ?>
			<div class="title">
				<?php if(!empty($coffeestation_blog_title)): ?>
					<h6><?php echo wp_kses_post($coffeestation_blog_title); ?></h6>
				<?php endif; ?>
				
				<?php if(!empty($coffeestation_blog_subtitle)): ?>
					<h2><?php echo wp_kses_post($coffeestation_blog_subtitle); ?></h2>
					<span class="shap"></span>
				<?php endif; ?>
				
				<?php if(!empty($coffeestation_blog_description)): ?>
					<p><?php echo wp_kses_post($coffeestation_blog_description); ?></p>
				<?php endif; ?>
			</div>
		<?php endif; ?> 

			<div class="row m-0">
			<?php 	
				$coffeestation_blogs_args = array( 'post_type' => 'post', 'posts_per_page' => $coffeestation_blog_num,'post__not_in'=>get_option("sticky_posts")) ; 	
				$coffeestation_blog_wp_query = new WP_Query($coffeestation_blogs_args);
				if($coffeestation_blog_wp_query)
				{	
				while($coffeestation_blog_wp_query->have_posts()):$coffeestation_blog_wp_query->the_post(); ?>
				<div class="col-lg-4 col-md-6 col-sm-12 ">
					<div class="blogbx">
							<?php if (has_post_thumbnail( $post->ID ) ): ?>
							<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
							<a href="<?php echo esc_url( get_permalink() ); ?>">	
								<div class="blog-image" >
									<!-- <img class="blog-img" src="</?php echo $img; ?>"> -->
									<img class="blog-img" src="<?php echo esc_url($image[0]); ?>" alt="">
								</div>
							</a>
							
							<?php else: 
								$img = get_template_directory_uri().'/assets/images/default.png';
								?>
							<?php endif; ?>

						<div class="clearfix"></div>
						<div class="blog-content">
							
							<div class="box-admin">
								<div class="row m-0">
									<div class="col-md-9 col-sm-9 auth pl-0">
										<i class="fa fa-calendar" aria-hidden="true"></i>
										<?php echo get_the_date( 'j' ); ?>
										<?php echo get_the_date( 'M' ); ?>
										<?php echo get_the_date( 'Y' ); ?>
									</div> 
									<div class="col-md-3 col-sm-3 comm pl-0">
										<i class="fa fa-comment-o" aria-hidden="true"></i>
										<?php echo esc_html(get_comments_number($post->ID)); ?> 
									</div>
								</div>
							</div>
							<?php 
								if ( is_single() ) :
									
								the_title('<h6 class="post-title">', '</h6>' );
								
								else:
								
								the_title( sprintf( '<h6 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h6>' );
								
								endif; 
							?> 
							<p><?php echo wp_trim_words(get_the_content(), 20);	?></p>
									
							<div class="blog-btn">
								<a href="<?php echo esc_url( get_permalink() ); ?>"><?php esc_html_e('Read More','coffee-station'); ?> <i class="fa fa-long-arrow-right" ></i>
								</a>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>

			<?php endwhile; 
				}
				wp_reset_postdata();
			?>
			</div>

	</div>

</section>
<?php endif; ?>