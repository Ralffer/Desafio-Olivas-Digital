<?php

function wpcurso_customizer( $wp_customize ){
    // Copyright

    $wp_customize->add_section(
        'sec_copyright', array(
            'title' => __( 'Copyright', 'wpcurso' ),
            'description' => __( 'Copyright Section', 'wpcurso' )
        )
    );

    $wp_customize->add_setting(
        'set_copyright', array(
            'type' => 'theme_mod',
            'default' => __( 'Copyright - All right reserved', 'wpcurso' ),
            'Sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );

    $wp_customize->add_control(
        'set_copyright', array(
            'label' => __( 'Copyright', 'wpcurso' ),
            'description' => __( "Choose whether to show the Servises section on not", 'wpcurso' ),
            'section' => 'sec_copyright',
            'type' => 'text'
        )
    );

    $wp_customize->add_control(
        'set_map_apikey', array(
            'label' => __( 'API Key', 'wpcurso' ),
            'description' => sprintf( 
                __( 'Get yout key <a target="blank" href="%s">here</a>', 'wpcurso' ),
                'https://console.developers.google.com/flows/enableapi?apiid=maps_backend'
            ),
            'section' => 'sec_map',
            'type' => 'text'
        )
    );

    // Address
    $wp_customize->add_setting(
        'set_map_address', array(
            'type' => 'theme_mod',
            'default' => '',
            'Sanitize_callback' => 'esc_textarea'
        )
    );

    $wp_customize->add_control(
        'set_map_address', array(
            'label' => __( 'Type your address here', 'wpcurso' ),
            'description' => __( "No special charecteres allowed", 'wpcurso' ),
            'section' => 'sec_map',
            'type' => 'textarea'
        )
    );

    //Slider
    $wp_customize->add_section(
        'sec_slide', array(
            'title' => __( 'slider', 'wpcurso' ),
            'description' => __( 'Slider Section', 'wpcurso' )
        )
    );

    $wp_customize->add_setting(
        'set_slider_option', array(
            'type' => 'theme_mod',
            'default' => '1',
            'Sanitize_callback' => 'wpcurso_sanitize_select'
        )
    );

    $wp_customize->add_control(
        'set_slider_option', array(
            'label' => __( 'Choose your design type here', 'wpcurso' ),
            'description' => __( "Choose your design type", 'wpcurso' ),
            'section' => 'sec_slide',
            'type' => 'select',
            'choices' => array(
                '1' => __( 'Design Type 1', 'wpcurso' ),
                '2' => __( 'Design Type 2', 'wpcurso' ),
                '3' => __( 'Design Type 3', 'wpcurso' ),
                '4' => __( 'Design Type 4', 'wpcurso' ),
            )
        )
    );

    // Limit
    $wp_customize->add_setting(
        'set_slider_limit', array(
            'type' => 'theme_mod',
            'default' => '5',
            'Sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(
        'set_slider_limit', array(
            'label' => __( 'Number of posts to dislay', 'wpcurso' ),
            'description' => __( "Number of posts to be displayed", 'wpcurso' ),
            'section' => 'sec_slide',
            'type' => 'number'
        )
    );
}

add_action( 'customize_register', 'wpcurso_customizer' );

function wpcurso_sanitize_select( $input, $setting ){
    //input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
    $input = sanitize_key($input);

    //get the list of possible select options 
    $choices = $setting->manager->get_control( $setting->id )->choices;
                      
    //return input if valid or return default option
    return ( array_key_exists( $input, $choices ) ? $input : $setting->default );                
}