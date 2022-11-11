<?php 
function load_admin_style() {
    wp_register_style( 'admin_css', get_template_directory_uri() . '/assets/admin_style/css/admin-style.css', false, '1.0.0' );
    wp_enqueue_style( 'admin_css', get_template_directory_uri() . '/assets/admin_style/css/admin-style.css', false, '1.0.0' );
}
?>