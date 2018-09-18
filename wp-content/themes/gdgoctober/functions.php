<?php 

function create_post_event() {
	register_post_type( 'events',
		array(
			'labels'       => array(
				'name'       => __( 'Events' ),
			),
			'public'       => true,
			'supports'     => false
			
		)
	);
}
add_action( 'init', 'create_post_event' );

function add_your_fields_meta_box() {
	add_meta_box(
		'your_fields_meta_box', // $id
		'Event', // $title
		'show_your_fields_meta_box', // $callback
		'events', // $screen
		'normal', // $context
		'high' // $priority
	);
}
add_action( 'add_meta_boxes', 'add_your_fields_meta_box' );
function show_your_fields_meta_box() {
	global $post;
	  
		$meta = get_post_meta( $post->ID, 'your_fields', true ); ?>

	<input type="hidden" name="your_meta_box_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">

    <!-- All fields will go here -->
	<p>
	<label for="your_fields[text]">Name</label>
	<br>
	<input type="text" name="your_fields[text]" id="your_fields[text]" class="regular-text" value="">
</p>
	<?php }
	function save_your_fields_meta( $post_id ) {   
		
		$old = get_post_meta( $post_id, 'your_fields', true );
		$new = $_POST['your_fields'];
		$a = $new[text];
		$link = mysqli_connect("localhost","root","","gdg");
		mysqli_query($link,"INSERT INTO events ('name' ,'description', 'place', 'form')
						VALUES ('$a','dao','ldaks','fasok')")or die(mysqli_error($link));
		
	}
	add_action( 'save_post', 'save_your_fields_meta' );

?>