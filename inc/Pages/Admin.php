<?php 

namespace Inc\Pages; 

use \Inc\Base\BaseController;

class Admin extends BaseController {

    function register() {
        

        add_action( 'admin_menu', array( $this, 'add_admin_pages' ) );
        
    //	add_filter( "plugin_action_links_$this->plugin", array( $this, 'settings_links' ) );
    }
        
    function add_admin_pages () {
        add_menu_page(
            esc_html__('HookMeUp Settings', 'hookmeup'),
            esc_html__('HookMeUp', 'hookmeup'),
            'manage_options',
            'hookeMeUp',
            array($this, 'hookeMeUp_display_settings_page'),
            'dashicons-admin-generic',
            null
        );
    
        
        add_submenu_page(
            'hookeMeUp',
            esc_html__('Import Products', 'hookmeup'),
            esc_html__('Import Products', 'hookmeup'),
            'manage_options',
            'hookmeup_import',
            array($this, 'hookeMeUp_show_data_page')
        );
        add_submenu_page(
            'hookeMeUp',
            esc_html__('New Products', 'hookmeup'),
            esc_html__('New Products', 'hookmeup'),
            'manage_options',
            'hookmeup_new_products',
            array($this, 'hookeMeUp_new_products_page')
        );

    }
    function hookeMeUp_display_settings_page () {
       require_once $this->plugin_path.'template/admin-menu.php';
        
    }
    function hookeMeUp_show_data_page () {
       require_once $this->plugin_path.'template/import-page.php';
    }
    function hookeMeUp_new_products_page () {
       require_once $this->plugin_path.'template/product-page.php';
    }
}