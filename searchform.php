<?php
/**
 * The template for displaying search forms in 3Q Digital
 *
 * @package 3Q Digital
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php _ex( 'Search for:', 'label', 'three_q_digital' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'three_q_digital' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Search for:', 'label', 'three_q_digital' ); ?>">
	</label>
	<!--<input type="submit" class="search-submit" value="<?php echo esc_attr_x( '&#xF002;', 'submit button', 'three_q_digital' ); ?>">-->
	<button type="submit" class="search">
                <i class="icon-search icon-large"></i>
    </button>
</form>
