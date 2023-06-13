<?php
    /*
    Plugin Name: PBMB Renderer
    Description: A plugin to render comics in a way catered specifically to the Prababameister himself.
    Version 1.0
    Author: Prabhvir Babra
    */

    define( 'PLUGIN_SLUG', 'pbmb-renderer' );
    define( 'PLUGIN_ROLE', 'manage_options' );

    add_action( 'admin_menu', 'register_renderer_setup' );

    function pbmb_dashboard () {
        echo '<p> Hello </p>';
    }

    function register_renderer_setup () {
        add_menu_page(
            'PBMB Renderer',
            'PBMB Renderer',
            PLUGIN_ROLE,
            PLUGIN_SLUG,
            false,
            '',
            null,// Add a smiley face icon
        );

        add_submenu_page(
            PLUGIN_SLUG,
            'PBMB Renderer',
            'Dashboard',
            PLUGIN_ROLE,
            PLUGIN_SLUG,
            'pbmb_dashboard',
        );
    }
?>
