<?php
if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {

    function mytheme_register_nav_menu(){
        register_nav_menus( array(
            'primary_menu' => __( 'Primary Menu', 'text_domain' ),
            'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
            'header_menu'  => __( 'Header Menu', 'text_domain' ),
        ) );
    }
    add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
}

function arphabet_widgets_init() {

  register_sidebar( array(
    'name'          => 'logo',
    'id'            => 'logo',
    'before_widget' => '<div class="col-logo">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="title">',
    'after_title'   => '</h2>',
  ) );

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

  register_sidebar( array(
    'name'          => 'Footer Col 1',
    'id'            => 'footer_col_1',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="title">',
    'after_title'   => '</h2>',
  ) );

  register_sidebar( array(
    'name'          => 'Footer Col 2',
    'id'            => 'footer_col_2',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="title">',
    'after_title'   => '</h2>',
  ) );

  register_sidebar( array(
    'name'          => 'Sidebar',
    'id'            => 'sidebar',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="sidebar">',
    'after_title'   => '</h2>',
  ) );



}
add_action( 'widgets_init', 'arphabet_widgets_init' );
?>
