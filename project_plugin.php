<?php
// Introduction
/**
 * Plugin Name: Project Plugin
 * Description: Enables custom messages for users. 
 * Version: 1.0.0
 */

//  Basic Security i.e if not accessed through the wordpress application that means, script should die
if(!defined('ABSPATH')){
    die('You cannot be here!');
}

//define and instantiate a class: to avoid naming clashes with other plugin's code
if(!class_exists('projectPlugin')){

    class projectPlugin{
        //constructor function 
        public function __construct()
        {
            define("MY_PLUGIN_PATH",plugin_dir_path(__FILE__)); //plugin directory path 
        }
        // create functions
        public function initialize(){
            // include scripts 
            include_once(MY_PLUGIN_PATH.'/includes/last_login.php');
            include_once(MY_PLUGIN_PATH.'/includes/project_plugin_func.php'); //for notice display

        }
    }
    $projectPlugin=new projectPlugin;
    $projectPlugin->initialize();
}
