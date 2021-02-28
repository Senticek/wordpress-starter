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
        $this->footer_callout_section( $wp_customize );
        $this->link_callout_section( $wp_customize );
        $this->socials_callout_section($wp_customize);
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
        //image edit
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
         //contact section title edit
           $wp_customize->add_setting('basic-titles-callout-titleContact', array(
            'default' => '',
            'sanitize_callback' => array( $this, 'sanitize_custom_text' )
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-titles-callout-control-titleContact', array(
            'label' => 'About us title',
            'section' => 'basic-titles-callout-section',
            'settings' => 'basic-titles-callout-titleContact',
            'type' => 'text'
            
        )));
    }

     /* Footer address edit */
     private function footer_callout_section( $wp_customize ) {
		// New panel for "Layout".
        $wp_customize->add_section('basic-footer-callout-section', array(
            'title' => 'Footer Address Edit',
            'priority' => 2,
            'description' => __('Edit for basic footer titles and texts'),
        ));
        $wp_customize->add_setting('basic-footer-callout-display', array(
            'default' => 'No',
            'sanitize_callback' => array( $this, 'sanitize_custom_option' )
        ));
        //Adress Edit
        $wp_customize->add_setting('basic-footer-callout-address', array(
            'default' => '',
            'sanitize_callback' => array( $this, 'sanitize_custom_text' )
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-footer-callout-control-address', array(
            'label' => 'address',
            'section' => 'basic-footer-callout-section',
            'settings' => 'basic-footer-callout-address',
            'type' => 'text'
        )));
         //Psc Edit
         $wp_customize->add_setting('basic-footer-callout-psc', array(
            'default' => '',
            'sanitize_callback' => array( $this, 'sanitize_custom_text' )
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-footer-callout-control-psc', array(
            'label' => 'psc',
            'section' => 'basic-footer-callout-section',
            'settings' => 'basic-footer-callout-psc',
            'type' => 'text'
        )));
    }

    /*Footer link Edit*/ 
    private function link_callout_section( $wp_customize ) {
		// New panel for "Layout".
        $wp_customize->add_section('basic-link-callout-section', array(
            'title' => 'Footer link Edit',
            'priority' => 2,
            'description' => __('Edit for basic footer titles and texts'),
        ));
        $wp_customize->add_setting('basic-link-callout-display', array(
            'default' => 'No',
            'sanitize_callback' => array( $this, 'sanitize_custom_option' )
        ));
          //text Edit
        $wp_customize->add_setting('basic-link-callout-text', array(
            'default' => '',
            'sanitize_callback' => array( $this, 'sanitize_custom_text' )
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-link-callout-control-text', array(
            'label' => 'text',
            'section' => 'basic-link-callout-section',
            'settings' => 'basic-link-callout-text',
            'type' => 'text'
        )));
        //url edit
        $wp_customize->add_setting('basic-link-callout-link', array(
            'default' => '',
            'sanitize_callback' => array( $this, 'sanitize_custom_url' )
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-link-callout-control-link', array(
            'label' => 'url',
            'section' => 'basic-link-callout-section',
            'settings' => 'basic-link-callout-link',
            'type' => 'url'
        )));
        //clickable url text
        $wp_customize->add_setting('basic-link-callout-clickable', array(
            'default' => '',
            'sanitize_callback' => array( $this, 'sanitize_custom_text' )
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-link-callout-control-clickable', array(
            'label' => 'clickable url text',
            'section' => 'basic-link-callout-section',
            'settings' => 'basic-link-callout-clickable',
            'type' => 'text'
        )));

    }
     /*Footer link Edit*/ 
     private function socials_callout_section( $wp_customize ) {
		// New panel for "Layout".
        $wp_customize->add_section('basic-socials-callout-section', array(
            'title' => 'Socials link Edit',
            'priority' => 2,
            'description' => __('Edit for basic socials urls'),
        ));
        $wp_customize->add_setting('basic-socials-callout-display', array(
            'default' => 'No',
            'sanitize_callback' => array( $this, 'sanitize_custom_option' )
        ));
          //Facebook Edit
        $wp_customize->add_setting('basic-socials-callout-FB', array(
            'default' => '',
            'sanitize_callback' => array( $this, 'sanitize_custom_url' )
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-socials-callout-control-FB', array(
            'label' => 'fb Url',
            'section' => 'basic-socials-callout-section',
            'settings' => 'basic-socials-callout-FB',
            'type' => 'url'
        )));
          //twitter Edit
          $wp_customize->add_setting('basic-socials-callout-twitter', array(
            'default' => '',
            'sanitize_callback' => array( $this, 'sanitize_custom_url' )
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-socials-callout-control-twitter', array(
            'label' => 'twitter Url',
            'section' => 'basic-socials-callout-section',
            'settings' => 'basic-socials-callout-twitter',
            'type' => 'url'
        )));
          //linkedin Edit
          $wp_customize->add_setting('basic-socials-callout-linkedin', array(
            'default' => '',
            'sanitize_callback' => array( $this, 'sanitize_custom_url' )
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-socials-callout-control-linkedin', array(
            'label' => 'linkedin Url',
            'section' => 'basic-socials-callout-section',
            'settings' => 'basic-socials-callout-linkedin',
            'type' => 'url'
        )));
          //dribble Edit
          $wp_customize->add_setting('basic-socials-callout-dribble', array(
            'default' => '',
            'sanitize_callback' => array( $this, 'sanitize_custom_url' )
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-socials-callout-control-dribble', array(
            'label' => 'dribble Url',
            'section' => 'basic-socials-callout-section',
            'settings' => 'basic-socials-callout-dribble',
            'type' => 'url'
        )));
      

    }
  
}