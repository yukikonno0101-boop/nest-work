<?php
function nest_work_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script' ) );
}
add_action( 'after_setup_theme', 'nest_work_setup' );

function nest_work_scripts() {
    wp_enqueue_style( 'nest-work', get_stylesheet_uri(), array(), filemtime( get_theme_file_path( 'style.css' ) ) );
    wp_enqueue_script( 'nest-work', get_theme_file_uri( 'js/main.js' ), array(), filemtime( get_theme_file_path( 'js/main.js' ) ), true );
    if ( is_page( 'plans' ) ) {
        wp_enqueue_script( 'nest-work-pricing', get_theme_file_uri( 'js/pricing.js' ), array(), filemtime( get_theme_file_path( 'js/pricing.js' ) ), true );
    }
}
add_action( 'wp_enqueue_scripts', 'nest_work_scripts' );

function nest_work_url( $path = '' ) {
    $slug = trim( $path, '/' );
    if ( '' === $slug ) {
        return home_url( '/' );
    }
    if ( 'news' === $slug && get_option( 'page_for_posts' ) ) {
        return get_permalink( (int) get_option( 'page_for_posts' ) );
    }
    $page = get_page_by_path( $slug );
    return $page ? get_permalink( $page ) : home_url( '/' . $slug . '/' );
}

function nest_work_navigation() {
    $links = array( '' => 'ホーム', 'facilities' => '施設・設備', 'plans' => '料金・プラン', 'access' => 'アクセス・FAQ', 'news' => 'お知らせ' );
    foreach ( $links as $slug => $label ) {
        $current = '' === $slug ? is_front_page() : is_page( $slug );
        if ( 'news' === $slug ) {
            $current = is_home() || is_singular( 'post' ) || is_category() || is_tag() || is_date();
        }
        printf( '<a href="%s"%s>%s</a>', esc_url( nest_work_url( $slug ) ), $current ? ' aria-current="page"' : '', esc_html( $label ) );
    }
}
