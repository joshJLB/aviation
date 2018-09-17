<?php
/*
Widget Name: JLB Links Section
Description: This is for the Links Section module displayed on the Child Page Mockup.
Author:JLB (Josh Kincheloe)
*/
class JLB_Links_Section extends SiteOrigin_Widget {
  function get_template_name($instance) {
    return 'jlb-links-section-template';
  }
  function get_template_dir($instance) {
    return 'jlb-links-section-templates';
  }
  function initialize() {
    $this->register_frontend_styles(
      array(
        array( 'jlb-links-section-css', '/wp-content/plugins/extend-widgets-bundle/css/jlb-links-section.min.css', array() ),
      )
    );
    
    $this->register_frontend_scripts(
      array(
        array( 'jlb-links-section-js', '/wp-content/plugins/extend-widgets-bundle/js/jlb-links-section.js', array( 'jquery' ), '1.0')
      )
    );
    
  }
  function __construct() {
    //Call the parent constructor with the required arguments.
    parent::__construct(
      // The unique id for your widget.
      'jlb-links-section',
      // The name of the widget for display purposes.
      __('JLB Links Section', 'jlb-links-section-text-domain'),
      // The widget_options array, which is passed through to WP_Widget.
      // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
      array(
        'description' => __('JLB Links Section', 'jlb-links-section-text-domain'),
      ),
      //The base_folder path string.
      plugin_dir_path(__FILE__)
    );
  }
  function get_widget_form() {
    // https://siteorigin.com/docs/widgets-bundle/form-building/form-fields/
    return array(
      // put all fields here
        'title' => array(
          'type' => 'text',
          'label' => __('Title', 'widget-form-fields-text-domain')
        ),
        'image' => array(
          'type' => 'media',
          'label' => __('Choose an Image', 'widget-form-fields-text-domain'),
          'choose' => __( 'Choose image', 'widget-form-fields-text-domain' ),
          'update' => __( 'Set image', 'widget-form-fields-text-domain' ),
          'library' => 'image',
        ),
        'links_repeater' => array(
          'type' => 'repeater',
          'label' => __('Links Repeater', 'widget-form-fields-text-domain'),
          'item_name' => __('', 'widget-form-fields-text-domain'),
          'fields' => array(
            'item' => array(
              'type' => 'text',
              'label' => __('Item', 'widget-form-fields-text-domain')
            ),
          )
        ),
        'link_text' => array(
          'type' => 'text',
          'label' => __('Link Text', 'widget-form-fields-text-domain')
        ),
        'link_url' => array(
          'type' => 'text',
          'label' => __('Link URL', 'widget-form-fields-text-domain')
        ),
    );
  }
}
siteorigin_widget_register('jlb-links-section', __FILE__, 'JLB_Links_Section');