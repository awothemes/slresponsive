<?php 
function sample_admin_notice__success() {
    ?>
    <div class="notice notice-success is-dismissible">
        <p><?php _e( 'Need help with theme setup? Vizit our <a target="_blank" href="https://awothemes.pro/setup-service/?utm_source=slresponsive">WordPress Theme Setup Service</a> page', 'slresponsive' ); ?></p>
    </div>
    <?php
}
add_action( 'admin_notices', 'sample_admin_notice__success' );
