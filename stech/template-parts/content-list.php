<?php
/**
 * Template part for displaying archive posts
 *
 * @link https://costech.wordpress.org/Template_Hierarchy
 *
 * @package stech
 */
?>
<!-- ARCHIVE QUERY -->
	<div class="col-md-12 col-sm-12 col-xs-12 blog-right-content">
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>																							
			<div class="stech-single-blog stech-lt">				
				<!-- BLOG THUMB -->
				<?php if(has_post_thumbnail()){?>
					<div class="stech-blog-thumb ">
						<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('stech-blog-single'); ?> </a>
						<div class="stech-blog-meta-top">
							<?php the_category();?>
						</div>
					</div>									
				<?php } ?>
				<!-- BLOG CONTENT -->
				<div class="em-blog-content-area ">												
					<div class="stech-blog-meta-left">
                        <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"> <?php the_author(); ?></a>	
                        <span><?php echo get_the_time(get_option('date_format')); ?></span>
						<a class="meta_comments" href="<?php comments_link(); ?>">
							<?php comments_number( esc_html__('0 Comments','stech'), esc_html__('1 Comments','stech'), esc_html__('% Comments','stech') );?>
						</a>
					</div>		
					<!-- BLOG TITLE -->
					<div class="blog-page-title ">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>			
					</div>
					<!-- BLOG TITLE AND CONTENT -->
					<div class="blog-inner">
						<div class="blog-content ">					
							<p><?php echo wp_trim_words( get_the_content(), 37, ' ' ); ?></p>
						</div>
					</div>
				</div>	
				
			</div>
		</div> <!--  END SINGLE BLOG -->
	</div><!-- #post-## -->
