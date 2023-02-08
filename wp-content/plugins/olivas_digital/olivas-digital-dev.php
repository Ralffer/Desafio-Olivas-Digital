<?php
/**
 * Olivas Digital 
 * 
 * Plugin Name: Olivas_Digital
 * Plugin <URI: https://www.olivas.digital/
 * Description: Plugin simples para atender requisito do desafio.
 * Version: 1.0.0
 * Author: Ralffer Sathler Ferreira
 * License: GPLv2 or later
 * Text Domain: olivas-digital-dev
 * 
 * O proposito deste plug-in é atender os requisitos do desafio para a oportunidade DEV WOrdpress da Olivas Digital
 * 
 **/

 if ( ! defined('ABSPATH') ) {
    die('Invalid request.' );
 }

 class Olivas_Digital {
    public function __construct(){
        add_action( 'init', Array($this, 'create_custom_post_type_modulo') );

 }
 public function create_custom_post_type_modulo(){
    $labels =array(
        'name'                          => _x( 'Olivas_Digital', 'olivas_digital', 'text_domain' ) 
             ,
        'Singular_name'                 => _x( 'Olivas_Digital', 'olivas_digital', 'text_domain' ),
        'menu_name'                     => __( 'Olivas_Digital', 'text_domain' ),
        'name_admin_bar'                => __( 'Olivas_DigitaL', 'text_domain' ),
    );

    $args = array(
        'label'                         => __('Olivas_Digital', 'text-domain' ),
        'description'                   => __('Descrição do olivas_digital', 'text_domain' ),
        'labels'                        =>$labels,
        'supports'                      => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt'),
        'taxonomies'                    => array ('category', 'post_tag'),
        'hierarchical'                  => false,
        'public'                        => true,
        'show_ui'                       => true,
        'show_in_menu'                  => true,
        'menu_position'                 => 3,
        'show_in_admin_bar'             => true,
        'show_in_nav_menus'             => true,
        'can_export'                    => true,
        'menu_icon'                     => 'dashicons-format-video',
        'has_archive'                   => true,
        'exclude_from_search'           => false,
        'publicly_queryable'            => true,
        'capability_type'               => 'page',
            
    );
    register_post_type( 'Olivas_Digital', $args );
}
public function activate(){

    $this->create_custom_post_type_modulo();
    flush_rewrite_rules();

    #se aplicavel ao iniciar
    global $wpdb;
    $wpdb->get_results("INSERT INTO wp_posts (post_author, post_content, post_title, post_status, comment_status, ping_status,post_type,
    comment_count) VALUES (1, 'Teste Ralffer', 'Teste ralffer', 'publish' , 'open', 'modulo', 0);");

}

public function deactivate(){

}

public function uninstal() {
    
 }

  }

  if ( class_exists( 'Olivas_Digital') ){
    $didoxModulo = new Olivas_Digital();
    register_activation_hook( __FILE__, array( $didoxModulo, 'activate') );
    register_deactivation_hook( __FILE__, array($didoxModulo, 'deactivation') );
    register_uninstall_hook(__FILE__, array( $didoxModulo, 'uninstall') );
    
  }