<div class="search">
	<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
	<input type="text" name="s" value="<?php the_search_query(); ?>" placeholder="<?php esc_attr_e( 'Search Here', 'stech' ) ?>" title="<?php esc_attr_e( 'Search for:', 'stech' ) ?>" />
	<button  type="submit" class="icons">
		<i class="fa fa-search"></i>
	</button>
	</form>
</div>

		
		
		
