<?php
/**
 * Template part for displaying posts
 *
 * @link https://costech.wordpress.org/Template_Hierarchy
 *
 * @package stech
 */
?>
	<!-- BLOG QUERY -->
	<!-- SINGLE BLOG -->
	<div class="col-md-4 col-sm-6 col-xs-12 grid-item">
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="stech-single-blog">				
				<!-- BLOG THUMB -->
				<?php if(has_post_thumbnail()){?>
					<div class="stech-blog-thumb ">
						<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('stech-blog-default'); ?> </a>
					</div>									
				<?php } ?>
				<!-- BLOG CONTENT -->
				<div class="em-blog-content-area ">												
					<!-- BLOG META -->
					<div class="stech-blog-meta-left "><span>
						<i class="flaticon flaticon-calendar"></i>
						<?php echo get_the_time(get_option('date_format')); ?></span>
					</div>

					<!-- BLOG TITLE -->
					<div class="blog-page-title ">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>			
					</div>

					<!-- BLOG META Bottom -->
					<div class="stech-blog-meta-bottom">
						<ul class="blog-meta-bottom-list clearfix">
							<li>
								<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>">
									<i class="flaticon flaticon-user-3"></i> <?php the_author(); ?></a>
							</li>
							<li>
								<a class="meta_comments" href="<?php comments_link(); ?>">
									<i class="flaticon flaticon-chat-2"></i>
									<?php comments_number( esc_html__('0 Comments','stech'), esc_html__('1 Comments','stech'), esc_html__('% Comments','stech') );?>
								</a>
							</li>
							<li>
								<a href="<?php the_permalink(); ?>">
									<i class="flaticon flaticon-right-arrow"></i>
								</a>
							</li>
						</ul>
					</div>							
				</div>	
				
			</div>
			
			
		</div> <!--  END SINGLE BLOG -->
	</div><!-- #post-## -->
