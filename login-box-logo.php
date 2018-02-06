<?php
/*
Plugin Name: Login Box Logo and branding
Plugin URI: http://northwestmediacollective.com
Description: Displays a logo under login and admin branding
Version: 1.5.1
Author: Travis Buck
Author URI: http://northwestmediacollective.com
License: GPLv3
*/


// Adds to do_action('login_footer'); 

add_action('login_form', 'my_addition_to_login_footer');
function my_addition_to_login_footer() {
     echo '<div style="text-align: center; padding:2px;">';
	echo ' <div style="float:left;">';
	 echo '<img src="' . plugins_url( 'nwmc-login-logo/imgs/nwmc-pill.jpg', dirname(__FILE__) ) . '" > ';
	echo ' </div>';
	 echo '<div style="float:left;"><h4>NW Media Collective</h4></div>';
	echo ' <br />';
	echo ' <br />';
	echo ' </div>';
}
// modifys the default wordpress admin text in footer
function remove_footer_admin () {
 
echo 'Fueled by <a href="http://www.wordpress.org" target="_blank">WordPress</a> | Designed by <a href="http://northwestmediacollective.com" target="_blank">NW Media Collective Inc</a> | Trouble Ticket: <a href="https://nwmediacollective.on.spiceworks.com/portal/tickets" target="_blank">Submit</a></p>';
 
}
 
add_filter('admin_footer_text', 'remove_footer_admin');
?>