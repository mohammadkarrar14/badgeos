<?php

// use widgets_init action hook to execute custom function
add_action( 'widgets_init', 'badgeos_register_widgets' );

 //register our widget
function badgeos_register_widgets() {

	register_widget( 'earned_user_achievements_widget' );
	register_widget( 'earned_user_ranks_widget' );
	register_widget( 'earned_user_points_widget' );
	if( badgeos_first_time_installed() ) {
		register_widget( 'credly_credit_issuer_widget' );
	}
}

require_once( badgeos_get_directory_path() .'includes/widgets/earned-user-achievements-widget.php' );
require_once( badgeos_get_directory_path() .'includes/widgets/earned-user-ranks-widget.php' );
require_once( badgeos_get_directory_path() .'includes/widgets/earned-user-points-widget.php' );
if( badgeos_first_time_installed() ) {
	require_once( badgeos_get_directory_path() .'includes/widgets/credly-credit-issuer-widget.php' );
}