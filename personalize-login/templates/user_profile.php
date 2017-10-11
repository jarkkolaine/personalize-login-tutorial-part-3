<div id="profile-info">
<?php 
	$current_user = get_current_user_id();
	$user_info = get_userdata( $current_user );

if ( !is_user_logged_in() ) {
	_e( 'Please log in to view your profile: ', 'personalize-login' );
	wp_loginout();
} else {
?>

<div class="profile-intro">
	<p><?php echo 'Hello, ' . $user_info->first_name . ' ' . $user_info->last_name . '!'; ?></p>
	<a href="<?php echo wp_logout_url(); ?>">Logout</a> &nbsp;
	<a href="<?php echo get_author_posts_url( $current_user ); ?>"><?php _e('Public Profile', 'franchiseportal');?></a>
</div>
<div class="profile-image">
	<?php echo get_avatar( $current_user ); ?>
</div>

<h2><?php _e( 'Change Profile Data', 'personalize-login' ); ?></h2>

<?php echo do_shortcode('[custom-editprofile]'); ?>
  
</div>
