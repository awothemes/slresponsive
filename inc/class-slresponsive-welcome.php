<?php
/**
 * SlResponsive Welcome Class
 *
 * @author   AwoThemes
 * @package  slresponsive
 * @since    2.8
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class slresponsive_welcome {

	/**
	 * Constructor
	 * Sets up the welcome screen
	 */
	public function __construct() {

		add_action( 'admin_menu', array( $this, 'slresponsive_welcome_register_menu' ) );
		add_action( 'load-themes.php', array( $this, 'slresponsive_activation_admin_notice' ) );

		add_action( 'slresponsive_welcome', array( $this, 'slresponsive_welcome_intro' ), 				10 );
		add_action( 'slresponsive_welcome', array( $this, 'slresponsive_welcome_who' ), 				20 );

	} // end constructor

	/**
	 * Adds an admin notice upon successful activation.
	 * @since 1.3.4
	 */
	public function slresponsive_activation_admin_notice() {
		global $pagenow;

		if ( is_admin() && 'themes.php' == $pagenow && isset( $_GET['activated'] ) ) { // input var okay
			add_action( 'admin_notices', array( $this, 'slresponsive_welcome_admin_notice' ), 99 );
		}
	}

	/**
	 * Display an admin notice linking to the welcome screen
	 * @since 1.3.4
	 */
	public function slresponsive_welcome_admin_notice() {
		?>
			<div class="updated fade">
				<p><?php echo sprintf( esc_html__( 'Thanks for choosing slresponsive!', 'slresponsive')); ?></p>
				<p><a href="<?php echo esc_url( admin_url( 'themes.php?page=slresponsive-welcome' ) ); ?>" class="button" style="text-decoration: none;"><?php _e( 'Get started with slresponsive', 'slresponsive' ); ?></a></p>
			</div>
		<?php
	}

	/**
	 * Creates the dashboard page
	 * @see  add_theme_page()
	 * @since 1.3.4
	 */
	public function slresponsive_welcome_register_menu() {
		add_theme_page( 'SlResponsive', 'SlResponsive', 'read', 'slresponsive-welcome', array( $this, 'slresponsive_welcome_screen' ) );
	}

	/**
	 * The welcome screen
	 * @since 1.3.4
	 */
	public function slresponsive_welcome_screen() {
		require_once( ABSPATH . 'wp-load.php' );
		require_once( ABSPATH . 'wp-admin/admin.php' );
		require_once( ABSPATH . 'wp-admin/admin-header.php' );
		?>
		<div class="wrap about-wrap">

			<?php
			/**
			 * @hooked slresponsive_welcome_intro - 10
			 * @hooked slresponsive_welcome_who - 20
			 */
			do_action( 'slresponsive_welcome' ); ?>

		</div>
		<?php
	}

	/**
	 * welcome screen intro
	 * @since 1.3.4
	 */
	public function slresponsive_welcome_intro() {
		$slresponsive = wp_get_theme( 'slresponsive' );

		?>
<section class="pattern" id="twocolumnlayout2">

<div class="wrap">

	<h1 style="margin-bottom:1em;">SLRESPONSIVE</h1>

	<div id="poststuff">

		<div id="post-body" class="metabox-holder columns-2">

			<!-- main content -->
			<div id="post-body-content">

				<div class="meta-box-sortables">

					<div class="postbox">

						<div class="handlediv" title="Click to toggle"><br></div>
						<!-- Toggle -->
						
						<div class="inside">

						<div class="inside">
							<h3><?php _e( 'Theme description:', 'slresponsive' ); ?></h3>
							<p>Clean & Fast responsive multi-column theme for business and personal purpose with built-in visual page builder. Built on a fully responsive grid, SlResponsive looks good on tablets and phone screens as it does on desktop.</p>
								<p><a target="blank" href="http://demo.awothemes.pro/slresponsive" class="button-primary"><?php _e( 'View Demo', 'slresponsive' ); ?></a>
								<a target="blank" href="http://awothemes.pro/docs/slresponsive" class="button-secondary"><?php _e( 'Documentation', 'slresponsive' ); ?></a></p>
 
						</div>

						<!-- .inside -->
						</div>
					</div>
					<div class="postbox">

						<div class="handlediv" title="Click to toggle"><br></div>
						<!-- Toggle -->
						
						<div class="inside">

						<div class="inside">
							<h3><?php _e( 'Can\'t find a feature or found a bug?', 'slresponsive' ); ?></h3>
							<p><?php echo sprintf( esc_html__( 'Please suggest ideas or report an error at the %sSlResponsive Support Forum%s.', 'slresponsive' ), '<a target="blank" href="https://wordpress.org/support/theme/slresponsive">', '</a>' ); ?></p>
						</div>
						<!-- .inside -->

						<div class="inside">
							<h3><?php _e( 'Are you enjoying SlResponsive?', 'slresponsive' ); ?></h3>
							<p><?php echo sprintf( esc_html__( 'Why not leave a review on %sWordPress.org%s? We\'d really appreciate it! :-)', 'slresponsive' ), '<a target="blank" href="https://wordpress.org/support/theme/slresponsive/reviews/#new-post">', '</a>' ); ?></p>
						</div>
						<!-- .inside -->
						
						<div class="inside">
							<h3><?php _e( 'Can I Contribute?', 'slresponsive' ); ?></h3>
							<p><?php _e( 'Want to contribute a patch or create a new feature? GitHub is the place to go!', 'slresponsive' ); ?></p>
							<p><a target="blank" href="https://github.com/awothemes/slresponsive" class="button-primary"><?php _e( 'SlResponsive at GitHub', 'slresponsive' ); ?></a></p>
						</div>
						<!-- .inside -->
						</div>
					</div>
					<!-- .postbox -->

				</div>
				<!-- .meta-box-sortables .ui-sortable -->

			</div>
			<!-- post-body-content -->

			<!-- sidebar -->
			<div id="postbox-container-1" class="postbox-container">
				<div class="meta-box-sortables">
					
					<div class="postbox">
						<div class="inside">
							<h3 class="hndl">Meet Our WordPress Themes:</h3>
						</div>
					</div>
				</div>
				<div class="meta-box-sortables">
					
					<div class="postbox">
						<!--<div class="inside">-->	
							<a target="blank" href="https://wordpress.org/themes/glutton"><img src="<?php echo esc_url( 'demo.awothemes.pro/glutton/wp-content/themes/glutton/screenshot.png' ); ?>" alt="slresponsive" /></a>
							<h2><span><a target="blank" href="https://wordpress.org/themes/glutton">Glutton WordPress Theme</a></span></h2>
					<!--</div>-->
					</div>
					<!-- .postbox -->

				</div>
				<!-- .meta-box-sortables -->

			</div>
			<!-- #postbox-container-1 .postbox-container -->

		</div>
		<!-- #post-body .metabox-holder .columns-2 -->

		<br class="clear">
	</div>
	<!-- #poststuff -->

</div> <!-- .wrap -->
</section>

		<?php
	}

	/**
	 * welcome screen who section
	 * @since 1.3.4
	 */
	public function slresponsive_welcome_who() {
		?>

		<?php
	}
}
return new slresponsive_welcome();

