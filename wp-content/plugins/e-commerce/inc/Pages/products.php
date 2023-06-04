<?php
/*
Plugin Name: e-commerce
Version: 1.0
Author: Nicholas Kirui
*/

namespace Inc\Pages;
class products {
    public function __construct() {
        add_action('rest_api_init', array($this, 'register_routes'));
    }

    public function register_routes() {
        register_rest_route('ecommerce/v1', '/products', array(
            'methods' => 'POST',
            'callback' => array($this, 'create_product'),
            'permission_callback' => array($this, 'check_permission'),
        ));

        register_rest_route('ecommerce/v1', '/products/(?P<id>\d+)', array(
            'methods' => 'PUT',
            'callback' => array($this, 'update_product'),
            'permission_callback' => array($this, 'check_permission'),
        ));

        register_rest_route('ecommerce/v1', '/products/(?P<id>\d+)', array(
            'methods' => 'GET',
            'callback' => array($this, 'get_product'),
            'permission_callback' => array($this, 'check_permission'),
        ));

        register_rest_route('ecommerce/v1', '/products/(?P<id>\d+)', array(
            'methods' => 'DELETE',
            'callback' => array($this, 'delete_product'),
            'permission_callback' => array($this, 'check_permission'),
        ));
    }
    public function check_permission() {
        return true;
    }
    public function create_product($request) {
    }
    public function update_product($request) {
    }
    public function get_product($request) {
    }
    public function delete_product($request) {
    }
}

$ecommerce_rest_api = new products();
