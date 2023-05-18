<?php
function custom_template_directory( $dirs ) {
    $dirs[] = get_stylesheet_directory() . '/custom-templates';
    return $dirs;
}
add_filter( 'theme_page_templates', 'custom_template_directory' );

function baigiamasis_theme_support(){
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('page-templates');
add_theme_support('custom-logo');
}

add_action('after_setup_theme','baigiamasis_theme_support');

function baigiamasis_menus() {
    
        $locations = array(
            'primary-menu' => __( 'Primary Menu'),
            'footer-menu' => __( 'Footer Menu' ),
        );
        register_nav_menus($locations);
}
add_action( 'init', 'baigiamasis_menus' );


function baigiamasis_styles() {
    wp_enqueue_style( 'style-css', get_template_directory_uri() . '/assets/css/style.css' );
   
    wp_enqueue_style( 'bootstrap',  'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css');
    wp_enqueue_style( 'fonts',  'https://fonts.googleapis.com/css2?family=Lora&display=swap');
    

 
}
add_action( 'wp_enqueue_scripts', 'baigiamasis_styles' );



function baigiamasis_scripts() {
   
   
    wp_enqueue_script( 'baigiamasis-script', get_template_directory_uri() . '/assets/js/main.js', array(), 'all',true );
    wp_enqueue_script( 'bootstrap-script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js', array(), '5.3.0', true );
    wp_enqueue_script( 'jquery-script', 'https://code.jquery.com/jquery-3.6.0.js', array(), 'all',true ); 
    
    
    

 
}
add_action( 'wp_enqueue_scripts', 'baigiamasis_scripts' );

function baigiamasis_widget_areas(){
    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
      
            'name' => 'Sidebar Area',
            'id' => 'sidebar-1',
            'description' => 'Sidebar Widget Area'
        )
        );

        register_sidebar(
            array(
                'before_title' => '',
                'after_title' => '',
                'before_widget' => '',
                'after_widget' => '',
          
                'name' => 'Footer Area',
                'id' => 'footer-1',
                'description' => 'Footer Widget Area'
            )
            );

            register_sidebar(
                array(
                    'before_title' => '',
                    'after_title' => '',
                    'before_widget' => '',
                    'after_widget' => '',
              
                    'name' => 'Header Area',
                    'id' => 'header-1',
                    'description' => 'Header Widget Area'
                )
                );

                register_sidebar(
                    array(
                        'before_title' => '',
                        'after_title' => '',
                        'before_widget' => '',
                        'after_widget' => '',
                  
                        'name' => 'Banner Area',
                        'id' => 'banner-1',
                        'description' => 'Banner Widget Area'
                    )
                    );
}

add_action('widgets_init', 'baigiamasis_widget_areas');





function create_gallery_post_type() {
    $labels = array(
        'name'               => 'Galleries',
        'singular_name'      => 'Gallery',
        'menu_name'          => 'Galleries',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Gallery',
        'edit_item'          => 'Edit Gallery',
        'new_item'           => 'New Gallery',
        'view_item'          => 'View Gallery',
        'search_items'       => 'Search Galleries',
        'not_found'          => 'No galleries found',
        'not_found_in_trash' => 'No galleries found in Trash',
        'parent_item_colon'  => 'Parent Gallery:',
        'all_items'          => 'All Galleries',
        'archives'           => 'Gallery Archives',
        'insert_into_item'   => 'Insert into gallery',
        'uploaded_to_this_item' => 'Uploaded to this gallery',
        'featured_image'        => 'Gallery Cover Image',
        'set_featured_image'    => 'Set cover image',
        'remove_featured_image' => 'Remove cover image',
        'use_featured_image'    => 'Use as cover image',
        'menu_icon'             => 'dashicons-format-gallery',
        'public'                => true,
        'hierarchical'          => false,
        'has_archive'           => true,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'rewrite'               => array( 'slug' => 'gallery' ),
    );

    $args = array(
        'labels'        => $labels,
        'description'   => 'Manage image galleries',
        'public'        => true,
        'menu_position' => 5,
        'menu_icon'     => 'dashicons-format-gallery',
        'supports'      => array( 'title', 'editor', 'thumbnail' ),
        'has_archive'   => true,
        'rewrite'       => array( 'slug' => 'gallery' ),
    );

    register_post_type( 'gallery', $args );
}
add_action( 'init', 'create_gallery_post_type' );

function create_recipe_post_type() {
    $labels = array(
        'name'               => 'Receptūros',
        'singular_name'      => 'Receptūra',
        'add_new'            => 'Pridėti naują',
        'add_new_item'       => 'Pridėti naują receptūrą',
        'edit_item'          => 'Redaguoti receptūrą',
        'new_item'           => 'Nauja receptūra',
        'view_item'          => 'Peržiūrėti receptūrą',
        'search_items'       => 'Ieškoti receptūrų',
        'not_found'          => 'Receptūrų nerasta',
        'not_found_in_trash' => 'Šiukšlių dėžutėje receptūrų nerasta',
        'parent_item_colon'  => '',
        'menu_name'          => 'Receptūros'
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'query_var'           => true,
        'rewrite'             => array( 'slug' => 'receptura' ),
        'capability_type'     => 'post',
        'has_archive'         => true,
        'hierarchical'        => false,
        'menu_position'       => null,
        'supports'            => array( 'title', 'editor', 'thumbnail', 'custom-fields' )
    );

    register_post_type( 'receptura', $args );
}
add_action( 'init', 'create_recipe_post_type' );




?>


