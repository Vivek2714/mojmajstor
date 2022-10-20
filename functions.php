<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
add_action( 'wp_enqueue_scripts', 'enqueue_twentytwenty_child' );
function enqueue_twentytwenty_child(){
  wp_enqueue_style('twentytwenty-css', './twentytwenty/style.css' );
  wp_enqueue_style('twentytwenty-child-css', './twentytwenty-child/style.css');
  wp_enqueue_script('twentytwenty-child-js', './twentytwenty-child/js/script.js', array( 'jquery' ), '1.0', true );
}

## Register wordpress menu positions
function register_my_menu() {
  register_nav_menu('main-menu',__( 'Main menu' ));
  register_nav_menu('footer-menu-1',__( 'Footer Menu 1' ));
  register_nav_menu('footer-menu-2',__( 'Footer Menu 2' ));
  register_nav_menu('footer-menu-3',__( 'Footer Menu 3' ));
  register_nav_menu('footer-menu-4',__( 'Footer Menu 4' ));
}
add_action( 'init', 'register_my_menu' );

## Add class to navigation links
add_filter( 'nav_menu_link_attributes', function($atts) {
	$atts['class'] = "nav-link scrollto";
	return $atts;
}, 100, 1 );

## Register Post type handyman
add_action( 'init', 'post_type_handyman' );
function post_type_handyman(){

  /*
  * The $labels describes how the post type appears.
  */
  $labels = array(
    'name'          => 'Handyman', // Plural name
    'singular_name' => 'Handyman'   // Singular name
  );  

  /*
  * The $supports parameter describes what the post type supports
  */
  $supports = array(
    
  );

  /*
  * The $args parameter holds important parameters for the custom post type
  */
  $args = array(
    'labels'              => $labels,
    'description'         => 'Post type Handyman', // Description
    'supports'            => $supports,
    'supports'            => [ 'title', 'thumbnail', 'editor' ],
    'hierarchical'        => false, // Allows hierarchical categorization, if set to false, the Custom Post Type will behave like Post, else it will behave like Page
    'public'              => true,  // Makes the post type public
    'show_ui'             => true,  // Displays an interface for this post type
    'show_in_menu'        => true,  // Displays in the Admin Menu (the left panel)
    'show_in_nav_menus'   => true,  // Displays in Appearance -> Menus
    'show_in_admin_bar'   => true,  // Displays in the black admin bar
    'menu_position'       => 10,     // The position number in the left menu
    'menu_icon'           => true,  // The URL for the icon used for this post type
    'can_export'          => true,  // Allows content export using Tools -> Export
    'has_archive'         => true,  // Enables post type archive (by month, date, or year)
    'exclude_from_search' => false, // Excludes posts of this type in the front-end search result page if set to true, include them if set to false
    'publicly_queryable'  => true,  // Allows queries to be performed on the front-end part if set to true
    'capability_type'     => 'post' // Allows read, edit, delete like “Post”,
  );
  register_post_type('handyman', $args); //Create a post type with the slug is iframe-settings and arguments in $args.
}

## Register Post type offers
add_action( 'init', 'post_type_offers' );
function post_type_offers(){

  /*
  * The $labels describes how the post type appears.
  */
  $labels = array(
    'name'          => 'Offers & discount', // Plural name
    'singular_name' => 'Offers & discount'   // Singular name
  );  

  /*
  * The $supports parameter describes what the post type supports
  */
  $supports = array(
    
  );

  /*
  * The $args parameter holds important parameters for the custom post type
  */
  $args = array(
    'labels'              => $labels,
    'description'         => 'Post type Offers & discount', // Description
    'supports'            => $supports,
    'supports'            => [ 'title', 'thumbnail', 'editor' ],
    'hierarchical'        => false, // Allows hierarchical categorization, if set to false, the Custom Post Type will behave like Post, else it will behave like Page
    'public'              => true,  // Makes the post type public
    'show_ui'             => true,  // Displays an interface for this post type
    'show_in_menu'        => true,  // Displays in the Admin Menu (the left panel)
    'show_in_nav_menus'   => true,  // Displays in Appearance -> Menus
    'show_in_admin_bar'   => true,  // Displays in the black admin bar
    'menu_position'       => 10,     // The position number in the left menu
    'menu_icon'           => true,  // The URL for the icon used for this post type
    'can_export'          => true,  // Allows content export using Tools -> Export
    'has_archive'         => true,  // Enables post type archive (by month, date, or year)
    'exclude_from_search' => false, // Excludes posts of this type in the front-end search result page if set to true, include them if set to false
    'publicly_queryable'  => true,  // Allows queries to be performed on the front-end part if set to true
    'capability_type'     => 'post' // Allows read, edit, delete like “Post”,
  );
  register_post_type('offers_deals', $args); //Create a post type with the slug is iframe-settings and arguments in $args.
}

## Register Post type news
add_action( 'init', 'post_type_news' );
function post_type_news(){

  /*
  * The $labels describes how the post type appears.
  */
  $labels = array(
    'name'          => 'News', // Plural name
    'singular_name' => 'News'   // Singular name
  );  

  /*
  * The $supports parameter describes what the post type supports
  */
  $supports = array(
    
  );

  /*
  * The $args parameter holds important parameters for the custom post type
  */
  $args = array(
    'labels'              => $labels,
    'description'         => 'Post type News', // Description
    'supports'            => $supports,
    'supports'            => [ 'title', 'thumbnail', 'editor' ],
    'hierarchical'        => false, // Allows hierarchical categorization, if set to false, the Custom Post Type will behave like Post, else it will behave like Page
    'public'              => true,  // Makes the post type public
    'show_ui'             => true,  // Displays an interface for this post type
    'show_in_menu'        => true,  // Displays in the Admin Menu (the left panel)
    'show_in_nav_menus'   => true,  // Displays in Appearance -> Menus
    'show_in_admin_bar'   => true,  // Displays in the black admin bar
    'menu_position'       => 10,     // The position number in the left menu
    'menu_icon'           => true,  // The URL for the icon used for this post type
    'can_export'          => true,  // Allows content export using Tools -> Export
    'has_archive'         => true,  // Enables post type archive (by month, date, or year)
    'exclude_from_search' => false, // Excludes posts of this type in the front-end search result page if set to true, include them if set to false
    'publicly_queryable'  => true,  // Allows queries to be performed on the front-end part if set to true
    'capability_type'     => 'post' // Allows read, edit, delete like “Post”,
  );
  register_post_type('news', $args); //Create a post type with the slug is iframe-settings and arguments in $args.
}

## Register Post type partner
add_action( 'init', 'post_type_partners' );
function post_type_partners(){

  /*
  * The $labels describes how the post type appears.
  */
  $labels = array(
    'name'          => 'Partners', // Plural name
    'singular_name' => 'Partner'   // Singular name
  );  

  /*
  * The $supports parameter describes what the post type supports
  */
  $supports = array(
    
  );

  /*
  * The $args parameter holds important parameters for the custom post type
  */
  $args = array(
    'labels'              => $labels,
    'description'         => 'Post type Partners', // Description
    'supports'            => $supports,
    'supports'            => [ 'title', 'thumbnail' ],
    'hierarchical'        => false, // Allows hierarchical categorization, if set to false, the Custom Post Type will behave like Post, else it will behave like Page
    'public'              => true,  // Makes the post type public
    'show_ui'             => true,  // Displays an interface for this post type
    'show_in_menu'        => true,  // Displays in the Admin Menu (the left panel)
    'show_in_nav_menus'   => true,  // Displays in Appearance -> Menus
    'show_in_admin_bar'   => true,  // Displays in the black admin bar
    'menu_position'       => 10,     // The position number in the left menu
    'menu_icon'           => true,  // The URL for the icon used for this post type
    'can_export'          => true,  // Allows content export using Tools -> Export
    'has_archive'         => true,  // Enables post type archive (by month, date, or year)
    'exclude_from_search' => false, // Excludes posts of this type in the front-end search result page if set to true, include them if set to false
    'publicly_queryable'  => true,  // Allows queries to be performed on the front-end part if set to true
    'capability_type'     => 'post' // Allows read, edit, delete like “Post”,
  );
  register_post_type('partner', $args); //Create a post type with the slug is iframe-settings and arguments in $args.
}

## Get partners
function get_custom_posts( $post_type = "post", $limit = 5, $excludePosts = 0, $orderBy = 'ID' ){
  $args = array(
    'post_type'      => $post_type,
    'orderby'        => $orderBy,
    'order'          => 'DESC', 
    'post_status'    => 'publish',
    'posts_per_page' => $limit,
    'post__not_in'   => array( $excludePosts ),
  );
  $query = new WP_Query( $args );    
  $news = [];
  if ( $query-> have_posts() ){
    $i = 0;
    while ( $query->have_posts() ){
      $query->the_post();
      $thumbnail = wp_get_attachment_url( get_post_thumbnail_id() );
      if( empty( $thumbnail ) ){
        continue;
      }
      $news[$i]['id']    = get_the_id();
      $news[$i]['title'] = get_the_title();
      $news[$i]['image'] = $thumbnail;
      $news[$i]['date']  = date( 'M / d / Y', strtotime( get_the_date() ) );
      $i++;
    }
  }
  wp_reset_query();
  return $news;
}

## Custom sidebar
add_action( 'widgets_init', 'custom_sidebar' );
function custom_sidebar() {
  register_sidebar( 
    array(
      'name' => 'Landing page sidebar',
      'id'   => 'sidebar',
    )
  );
}

## Custom sidebar
add_action( 'widgets_init', 'custom_heder_icons' );
function custom_heder_icons() {
  register_sidebar( 
    array(
      'name' => 'Header Icons',
      'id'   => 'header_icons',
    )
  );
}


## Add custom widget for button
class Custom_Button_widget extends WP_Widget {

	function __construct() {

		parent::__construct(
			'custom_button',  // Base ID
			'Custom button'   // Name
		);

		add_action( 'widgets_init', function() {
			register_widget( 'Custom_Button_widget' );
		});

	}

	public $args = array(
		'before_title'  => '<h4 class="widgettitle">',
		'after_title'   => '</h4>',
		'before_widget' => '<div class="widget-wrap">',
		'after_widget'  => '</div></div>'
	);

	public function widget( $args, $instance ) {
    if( empty(['_custom_button_text']) ){
      return;
    }
    ?>
    <li id="block-21" class="widget widget_block">
      <div class="wp-container-2 is-content-justification-center wp-block-buttons">
        <div class="wp-block-button btn-wrap cs-btn btn-pd-10 mb-3">
          <a class="wp-block-button__link" href="<?php echo $instance['_custom_button_link']; ?>"><?php echo $instance['_custom_button_text']; ?></a>
        </div>
      </div>
    </li>
    <?php
	}

	public function form( $instance ) {
		$title = ! empty( $instance['_custom_button_text'] ) ? $instance['_custom_button_text'] : esc_html__( '', 'text_domain' );
		$button = ! empty( $instance['_custom_button_link'] ) ? $instance['_custom_button_link'] : esc_html__( '', 'text_domain' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( '_custom_button_text' ) ); ?>"><?php echo esc_html__( 'Text:', 'text_domain' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( '_custom_button_text' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( '_custom_button_text' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( '_custom_button_link' ) ); ?>"><?php echo esc_html__( 'Link:', 'text_domain' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( '_custom_button_link' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( '_custom_button_link' ) ); ?>" type="url" cols="30" rows="10"><?php echo esc_attr( $button ); ?></input>
		</p>
		<?php
	}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['_custom_button_text'] = ( !empty( $new_instance['_custom_button_text'] ) ) ? strip_tags( $new_instance['_custom_button_text'] ) : '';
		$instance['_custom_button_link'] = ( !empty( $new_instance['_custom_button_link'] ) ) ? $new_instance['_custom_button_link'] : '';
		return $instance;
	}

}

if( class_exists('Custom_Button_widget') ){
  new Custom_Button_widget();
}
?>