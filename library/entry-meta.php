<?php
/**
 * Entry meta information for posts
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

if ( ! function_exists( 'foundationpress_entry_meta' ) ) :
	function foundationpress_entry_meta() {
		if(get_post_type($post->ID) == 'post'):
		/* translators: %1$s: current date, %2$s: current time */
		echo '<time class="updated" datetime="' . get_the_time( 'c' ) . '">' . get_the_time(get_option('date_format') ). '</time>';
		//echo '<p class="byline author">' . __( 'Written by', 'foundationpress' ) . ' <a href="' . get_author_posts_url( get_the_author_meta( 'ID' ) ) . '" rel="author" class="fn">' . get_the_author() . '</a></p>';
		elseif(get_post_type($post->ID) == 'mtaller') :
			$ptypeobj = get_post_type_object(get_post_type());
			echo '<span class="post-type-label">' . $ptypeobj->labels->name . '</span>';
		endif;
	}
endif;
