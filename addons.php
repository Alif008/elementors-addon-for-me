<?php


function kabir_tt_one_child_widgets( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/hello-world.php' );
	

	$widgets_manager->register( new \Kabir_Hello_World_Widget() );
	

}
add_action( 'elementor/widgets/register', 'kabir_tt_one_child_widgets' );