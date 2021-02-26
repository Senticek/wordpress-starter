<?php
class Custom_Customizer {
	public function __construct() {
		add_action( 'customize_register', array( $this, 'register_customize_sections' ) );
	}
	public function register_customize_sections( $wp_customize ) {
        /*
        * Add settings to sections.
        */
        $this->titles_callout_section( $wp_customize );
    }
    
    /* Sanitize Inputs */
    public function sanitize_custom_option($input) {
        return ( $input === "No" ) ? "No" : "Yes";
    }
    public function sanitize_custom_text($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }
    public function sanitize_custom_url($input) {
        return filter_var($input, FILTER_SANITIZE_URL);
    }
    public function sanitize_custom_email($input) {
        return filter_var($input, FILTER_SANITIZE_EMAIL);
    }
    public function sanitize_hex_color( $color ) {
        if ( '' === $color ) {
            return '';
        }
        // 3 or 6 hex digits, or the empty string.
        if ( preg_match( '|^#([A-Fa-f0-9]{3}){1,2}$|', $color ) ) {
            return $color;
        }
    }
  
    /* BasicTitles Section */
    private function titles_callout_section( $wp_customize ) {
		// New panel for "Layout".
        $wp_customize->add_section('basic-titles-callout-section', array(
            'title' => 'BasicTitles',
            'priority' => 2,
            'description' => __('Edit for basic titles and texts'),
        ));
        $wp_customize->add_setting('basic-titles-callout-display', array(
            'default' => 'No',
            'sanitize_callback' => array( $this, 'sanitize_custom_option' )
        ));
        //MainTitle Edit
        $wp_customize->add_setting('basic-titles-callout-titleMain', array(
            'default' => '',
            'sanitize_callback' => array( $this, 'sanitize_custom_text' )
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-titles-callout-control-Main', array(
            'label' => 'main title',
            'section' => 'basic-titles-callout-section',
            'settings' => 'basic-titles-callout-titleMain',
            'type' => 'text'
        )));
        //SubTitle Edit
        $wp_customize->add_setting('basic-titles-callout-titleSub', array(
            'default' => '',
            'sanitize_callback' => array( $this, 'sanitize_custom_text' )
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-titles-callout-control-Sub', array(
            'label' => 'subtitle',
            'section' => 'basic-titles-callout-section',
            'settings' => 'basic-titles-callout-titleSub',
            'type' => 'text'
        )));
         //Portfolio title Edit
         $wp_customize->add_setting('basic-titles-callout-titlePortfolio', array(
            'default' => '',
            'sanitize_callback' => array( $this, 'sanitize_custom_text' )
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-titles-callout-control-titlePortfolio', array(
            'label' => 'title of portfolio section',
            'section' => 'basic-titles-callout-section',
            'settings' => 'basic-titles-callout-titlePortfolio',
            'type' => 'text'
        )));
          //About US title edit
          $wp_customize->add_setting('basic-titles-callout-titleUS', array(
            'default' => '',
            'sanitize_callback' => array( $this, 'sanitize_custom_text' )
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-titles-callout-control-titleUs', array(
            'label' => 'About us title',
            'section' => 'basic-titles-callout-section',
            'settings' => 'basic-titles-callout-titleUS',
            'type' => 'text'
            
        )));
         //About Us text edit
         $wp_customize->add_setting('basic-titles-callout-textUS', array(
            'default' => '',
            'sanitize_callback' => array( $this, 'sanitize_custom_text' )
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-titles-callout-control-Us', array(
            'label' => 'About us',
            'section' => 'basic-titles-callout-section',
            'settings' => 'basic-titles-callout-textUS',
            'type' => 'textarea'
            
        )));
        $wp_customize->add_setting('basic-titles-callout-image', array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => array( $this, 'sanitize_custom_url' )
        ));
    
        $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'basic-titles-callout-image-control', array(
            'label' => 'Main Image control',
            'section' => 'basic-titles-callout-section',
            'settings' => 'basic-titles-callout-image',
        )));
    }
}