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
		'supports'			   => false,
		'menu_icon'            => 'dashicons-calendar-alt',
	);
	register_post_type( 'events', $args );
}
add_action( 'init', 'wpt_event_post_type' );
function Name()
{
	wp_nonce_field(basename(__FILE__), "meta-box-nonce");

    ?>
        <div>
            <input name="Name" type="text" value= <?php $event_name ?>>
        </div>
    <?php    
}

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
function Description()
{
	wp_nonce_field(basename(__FILE__), "meta-box-nonce");

    ?>
        <div>
            <input name="Description" type="text" value="<?php echo get_post_meta($object->ID, "meta-box-text", true); ?>">
        </div>
    <?php    
}

function add_custom_meta_box()
{
	add_meta_box("location", "Location","Location", "Events", "side", "high", null);
	add_meta_box("form", "Form", "Form", "Events", "side", "high", null);
	add_meta_box("description", "Description", "Description", "Events", "side", "high", null);
	add_meta_box("name", "Name", "Name", "Events", "side", "high", null);


}

add_action("add_meta_boxes", "add_custom_meta_box");
function save_event_details(){
	global $post;
	  global $wpdb;
	
	
	 if ( get_post_type($post) == 'events'){  
	
	  // $post->post_status='publish';
		  $check=$wpdb->insert( 
						'events', 
						array( 
							'description' => $post['Description'],
						  'name' => $post['Name'],
						  'place' => $post['Location'],
						  'form' => $post['Form']
						)
					  );
	   }
	 
	}
	add_action('publish_event', 'save_event_details');


?>