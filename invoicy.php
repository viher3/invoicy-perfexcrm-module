<?php

defined('BASEPATH') or exit('No direct script access allowed');

/*
Module Name: Invoicy
Description: Add invoices as attachments
Version: 0.1
Requires at least: 2.3.*
*/

define('INVOICY_MODULE_NAME', 'invoicy');

hooks()->add_action('admin_init', 'invoicy_module_init_menu_items');

/**
 * Register language files, must be registered if the module is using languages
 */
register_language_files(INVOICY_MODULE_NAME, [INVOICY_MODULE_NAME]);

/**
 * Init module menu items in setup in admin_init hook
 * @return null
 */
function invoicy_module_init_menu_items()
{
    $CI = &get_instance();

    $CI->app->add_quick_actions_link([
        'name' => 'invoicy',
        'url' => 'invoicy'
    ]);

    $CI->app_menu->add_sidebar_children_item('sales', [
        'slug' => 'utility_invoicy',
        'name' => _l('invoicy_title'),
        'href' => admin_url('invoicy')
    ]);
}

/**
 * Register activation module hook
 */
register_activation_hook(INVOICY_MODULE_NAME, 'invoicy_module_activation_hook');

function invoicy_module_activation_hook()
{
    $CI = &get_instance();
    require_once(__DIR__ . '/install.php');
}
