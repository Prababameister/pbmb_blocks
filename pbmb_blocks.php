<?php
/*
Plugin Name: PBMB Blocks
Description: A plugin to render comics in a way catered specifically to the Prababameister himself.
Version 1.0
Author: Prabhvir Babra
*/

function pbmb_blocks_script_register() {
    wp_enqueue_script( 'pbmb-login-block',
                       plugin_dir_url(__FILE__).'blocks/pbmb-login-block/index.js',
                       array( 'wp-blocks', 'wp-i18n', 'wp-editor' ),
                       true,
                       false );
}
add_action( 'enqueue_block_editor_assets', 'pbmb_blocks_script_register' );

?>
