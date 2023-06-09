<?php

/**
 * @package wordpressCohortplugin
 */

/**
 *Plugin Name: wordpressCohort
 Plugin URI: http://...	
 Description: This is a plugin built to help add and view members of wordpress cohort
 version: 1.0.0
 Author: Hope Murithi
 Author URI: https://hope-murithi.netlify.app/
 */

//security check
if (!defined('ABSPATH')) {
    die;
}


//check if composer is installed
if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
    require_once(dirname(__FILE__) . '/vendor/autoload.php');
}


use Inc\Base;

//activate plugin
function activate_wordpresscohort_plugin()
{
   Base\Activate::activate();
}

//deactivate plugin
function deactivate_wordpressCohort_plugin()
{
    Base\Deactivate::deactivate();
}

register_activation_hook(__FILE__, 'activate_wordpressCohort_plugin');

register_deactivation_hook(__FILE__, 'deactivate_wordpressCohort_plugin');


// to add the plugin services
use  Inc\Init;
if (class_exists('Inc\\Init')) {
    Init::register_services();
}

