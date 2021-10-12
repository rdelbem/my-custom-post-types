<?php 

defined('ABSPATH') || exit;

$Name = ucfirst(basename(__FILE__, '.php'));//first letter must be capital
$name = strtolower($Name);
$Plural = '';
$Plural = $Plural !== '' ? $Plural : $Name;
$plural = strtolower($plural);

$args = [
    'labels'             => [
        'name'                  => _x( $Plural, 'Post type general name', $name ),
        'singular_name'         => _x( $Name, 'Post type singular name', $name ),
        'menu_name'             => _x( $Plural, 'Admin Menu text', $name ),
        'name_admin_bar'        => _x( $Name, 'Add New on Toolbar', $name ),
        'add_new'               => __( 'Add New', $name ),
        'add_new_item'          => __( 'Add New ' . $name, $name ),
        'new_item'              => __( 'New' . $name . '', $name ),
        'edit_item'             => __( 'Edit ' . $name, $name ),
        'view_item'             => __( 'View ' .$name, $name ),
        'all_items'             => __( 'All '.$plural, $name ),
        'search_items'          => __( 'Search ' .$plural, $name ),
        'parent_item_colon'     => __( 'Parent '.$plural.' :', $name ),
        'not_found'             => __( 'No '.$plural.' found.', $name ),
        'not_found_in_trash'    => __( 'No '.$plural.' found in Trash.', $name ),
        'featured_image'        => _x( $Name . ' Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', $name ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', $name ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', $name ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', $name ),
        'archives'              => _x( $Name . ' archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', $name ),
        'insert_into_item'      => _x( 'Insert into ' . $name, 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', $name ),
        'uploaded_to_this_item' => _x( 'Uploaded to this ' . $name, 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', $name ),
        'filter_items_list'     => _x( 'Filter '.$plural.' list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', $name ),
        'items_list_navigation' => _x( $Plural . ' list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', $name ),
        'items_list'            => _x( $Plural . ' list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', $name ),    
    ],
    'description'        => $Name . ' custom post type.',
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => ['slug' => $name],
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => 20,
    'supports'           => ['title', 'editor', 'author', 'thumbnail'],
    'taxonomies'         => ['category', 'post_tag'],
    'show_in_rest'       => true
];
