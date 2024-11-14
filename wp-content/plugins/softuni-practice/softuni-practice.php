<?php
/**
 * Plugin Name: Softuni Practice
 * Author: Trayana Boykova
 * Description: This is a playground plugin for the practice session.
 */

/**
 * Changing the title of a blog post
 * 
 * @param [type] $title
 * @return void
 */

function change_the_title( $title ) {
    return 'The title of ' . $title . ' has been changed.';
}

add_filter( 'the_title', 'change_the_title' );

/**
 * Just a test function to display a greeting message
 * 
 * @return void
 */

function add_greetings_to_the_dashboard() {
    echo 'Hello from the plugin';
}

add_action ( 'init', 'add_greetings_to_the_dashboard');


/**
 * Loading CSS and JavaScript into the dashboard
 */

 function add_dashboard_assets() {

    $plugin_dir = plugin_dir_url(__FILE__);

    wp_enqueue_style( 'softuni-dashboard-style', $plugin_dir . '/assets/styles/style.css');

    wp_enqueue_script( 'softuni-dashboard-script', $plugin_dir . '/assets/scripts/scripts.js');

 }

 add_action( 'admin_enqueue_scripts', 'add_dashboard_assets');

 // show body_class examples

 // example with wp_enqueue_script and styles

 function add_body_class( $classes ) {
    if ( get_the_ID() == '56' ) {
        $classes[] = 'my-custom-class';
    }
    return $classes;
 }

 add_filter( 'body_class', 'add_body_class' );

 function softuni_custom_loop( ) {

    $current_post_id = get_the_ID();

    $args = array(
       'post_type'      => 'post',
       'post_status'    => 'publish',
       'posts_per_page' =>  3,
       'post_not_in'    => array ( $current_post_id )
    ); 

    $content = '';

    $related_posts = new WP_Query( $args );
    ?>

    <?php if ( $related_posts->have_posts() ) : ?>
    <ul>
        <?php while( $related_posts->have_posts() ) : ?>
            <?php $related_posts->the_post(); ?>
            <li><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></li>
            <?php endwhile; ?>
    </ul>
<?php endif; ?>
<?php 

    return $content;
}

 function content_playground ( $content ) {
    $related_posts = softuni_custom_loop();
    return $content;
 }

add_filter( 'the_content', 'content_playground', 10 );

