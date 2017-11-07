<?php
require_once get_template_directory(). '/inc/wp-bootstrap-navwalker.php';

// Membuat Fungsi untuk Mendaftarkan
// CSS & Scripts

function my_script(){
    // Membuat variabel berisi direktori theme
    $theme_path = get_template_directory_uri();

    // Mendaftarkan CSS
    wp_enqueue_style('bootstrap-base',$theme_path.'/assets/css/bootstrap.min.css'); // Memanggil bootstrap css
    wp_enqueue_style('wordpress-base',$theme_path.'/assets/css/base.css'); // Memanggil base.css
    wp_enqueue_style('style', get_stylesheet_uri()); // Memanggil style.css utama di direktori theme

    // Mendaftarkan Script
    wp_enqueue_script('jquery'); // Include jquery.js yang sudah ada di paketan core WordPress
    wp_enqueue_script( 'bootstraps', $theme_path.'/assets/js/bootstrap.min.js' ,'',false,true);
};

add_action( 'wp_enqueue_scripts', 'my_script' );

// Register nav menu
add_action( 'init', function(){
    register_nav_menus([
        'menu-utama'=>'Menu Utama',
        'menu-footer'=>'Menu Footer'
        ]);

    register_sidebar([
        'name'=>'Sidebar Utama',
        'id'=>'sidebar-utama'
        ]);
});



// Action Hook Example: Send Tweet
/// Tweet dikirim saat event publish post

function publish_post_tweet($post_ID) {
  global $post;
  // Code to send a tweet with post info
}
add_action('publish_post', 'publish_post_tweet');

// Filter Hook Example: Edit Jumlah Kata dalam Excerpt

function excerpt_length_example() {
 return 15;
}
add_filter( 'excerpt_length', 'excerpt_length_example' );