<?php
/**
 * Default Events Template
 * This file is the basic wrapper template for all the views if 'Default Events Template'
 * is selected in Events -> Settings -> Template -> Events Template.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/default-template.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

get_header(); ?>

<div class="entry-content events-pages">
    <?php
    if ( !( tribe_is_event() && is_single() ) ) {
    ?>
        <header class="events-header">
            <div class="wrap">
                <h1 class="entry-title">Events</h1>
            </div>
        </header>
    <?php 
    } else { ?>
        <header class="events-header">
            <div class="wrap">
        <?php the_title( '<h1 class="tribe-events-single-event-title summary entry-title">', '</h1>' ); ?>
            </div>
        </header>
    <?php } ?>
	<div class="wrap">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">        
            	<div id="tribe-events-pg-template">
        		    <?php tribe_events_before_html(); ?>
                    <?php tribe_get_view(); ?>
                    <?php tribe_events_after_html(); ?>
            	</div> <!-- #tribe-events-pg-template -->
            </main><!-- #main -->
        </div><!-- #primary -->

        <div id="sidebar" class="sidebar">
            <?php get_sidebar(); ?>
        </div>
    </div><!-- .wrap -->
</div><!-- .entry-content -->

<?php get_footer(); ?>

