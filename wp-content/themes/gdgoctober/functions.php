<?php 
function wpt_event_post_type() {
	$labels = array(
		'name'               => __( 'Events' ),
		'singular_name'      => __( 'Event' ),
		'add_new'            => __( 'Add New Event' ),
		'add_new_item'       => __( 'Add New Event' ),
		'edit_item'          => __( 'Edit Event' ),
		'new_item'           => __( 'Add New Event' ),
		'view_item'          => __( 'View Event' )
	);
	
	$args = array(
		'labels'               => $labels,
		'public'               => true,
		'capability_type'      => 'post',
		'rewrite'              => array( 'slug' => 'events' ),
		'menu_icon'            => 'dashicons-calendar-alt',
	);
	register_post_type( 'events', $args );
}
add_action( 'init', 'wpt_event_post_type' );

function Location()
{
	wp_nonce_field(basename(__FILE__), "meta-box-nonce");

    ?>
        <div>
            <input name="Location" type="text" value="<?php echo get_post_meta($object->ID, "meta-box-text", true); ?>">
        </div>
    <?php    
}
function Form()
{
	wp_nonce_field(basename(__FILE__), "meta-box-nonce");

    ?>
        <div>
            <input name="Form" type="text" value="<?php echo get_post_meta($object->ID, "meta-box-text", true); ?>">
        </div>
    <?php    
}

function add_custom_meta_box()
{
	add_meta_box("location", "Location","Location", "Events", "side", "high", null);
	add_meta_box("form", "Form", "Form", "Events", "side", "high", null);

}

add_action("add_meta_boxes", "add_custom_meta_box");
function save_custom_meta_box()
{
	global $wpdb;
	$wpdb->insert($wpdb->events, array( "form" => $_POST["Form"], "location" => $_POST["Location"]), array("%s", "%s"));   
}
add_action("save_post", "save_custom_meta_box", 10, 3);



?>