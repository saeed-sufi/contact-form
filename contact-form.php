<?php

/**
 * Plugin Name: Contact Form
 * Description: This is my contact form plugin
 * Version: 1.0.0
 * Text Domain: options-plugin
 *  
 */
// Here we keep the logic of our plugin

// WP system uses absolute path to access its files and plugins. No one on the internet can have access to absolute path so:
if (!defined('ABSPATH')) {
  die('Sorry, You\'re note supposed to visit here!');
}

// Always check another class with the same name as the class you're going to define exist: 
if (!class_exists('ContactPlugin')) {
  class ContactPlugin
  {
    public function __construct() 
    {
      // any plugin that is installed using Composer which we're going to use inside our own plugin, will be loaded  by adding the `autoload.php` from the vendor folder: 
      require_once(plugin_dir_path(__FILE__)). '/vendor/autoload.php';
    }
  }

  new ContactPlugin;
}
