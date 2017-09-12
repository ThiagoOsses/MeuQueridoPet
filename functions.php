<?php
/**
    * The template for Functions.
    *
    *
    * @package  zoo WordPress Theme
    * @copyright    Copyright (C) 2015, OrdaSoft
    * @license  http://www.gnu.org/licenses/gpl-2.0.html  GNU General Public License v2 or later
    * @author   AUTHOR <www.ordasoft.com>
    * zoo is distributed under the terms of the GNU GPL
*/
function zoo_customize_css() {
    ?>
    <style>
    body {
        color:<?php echo esc_attr(get_theme_mod( 'zoo_font_color', '#333;' )); ?>;
        font-family:<?php echo esc_attr(get_theme_mod( 'zoo_body_font', 'Abel,sans-serif' )); ?>;
        font-size:<?php echo esc_attr(get_theme_mod( 'zoo_font_size', '14px' )); ?>;
    }
    body a {
        color:<?php echo esc_attr(get_theme_mod( 'zoo_link_color', '#000' )); ?>;
        text-decoration:<?php echo esc_attr(get_theme_mod( 'zoo_link_underline', 'none' )); ?>;
        font-family:<?php echo esc_attr(get_theme_mod( 'zoo_body_links_font', 'Abel,sans-serif' )); ?>;
        font-size:<?php echo esc_attr(get_theme_mod( 'zoo_links_size', '14px' )); ?>;
    }
    body a:hover {
        text-decoration:<?php echo esc_attr(get_theme_mod( 'zoo_link_underline_hover', 'none' )); ?>;
        color:<?php echo esc_attr(get_theme_mod( 'zoo_link_hover_color', '#39dff3' )); ?>;
    }
    ul.nav-menu > li.menu-item > a,
    .nav-menu ul > li > a,
    ul.main_menu.nav.navbar-nav > li > a {
        font-size:<?php echo esc_attr(get_theme_mod( 'zoo_main_font_size', '12px' )); ?>;
        color:<?php echo esc_attr(get_theme_mod( 'zoo_main_color', '#1E73BE' )); ?>;
        text-decoration:<?php echo esc_attr(get_theme_mod( 'zoo_main_underline', 'none;' )); ?>;
        font-family:<?php echo esc_attr(get_theme_mod( 'zoo_main_font', 'Arial,sans-serif' )); ?>;
    }
     ul.nav-menu > li.menu-item > a:hover,
     .nav-menu ul > li > a:hover,
     ul#menu-menu .current_page_ancestor > a,
    ul#menu-menu > li > a:hover {
        text-decoration:<?php echo esc_attr(get_theme_mod( 'zoo_main_underline_hover', 'none;' )); ?>;
        color:<?php echo esc_attr(get_theme_mod( 'zoo_main_hover_color', '#1E73BE' )); ?>;
    }
    div#copyright p,
    div#copyright a{
        font-family:<?php echo esc_attr(get_theme_mod( 'zoo_copyright_font', 'Arial,sans-serif' )); ?>;
        font-size:<?php echo esc_attr(get_theme_mod( 'zoo_copyright_font_size', '14px' )); ?>;
        color:<?php echo esc_attr(get_theme_mod( 'zoo_copyright_color', '#ccc' )); ?>;
        text-decoration:<?php echo esc_attr(get_theme_mod( 'zoo_copyright_underline', 'none' )); ?>;
    }
    div#copyright a:hover{
        color:<?php echo esc_attr(get_theme_mod( 'zoo_copyright_hover_color', '#ccc' )); ?>;
        text-decoration:<?php echo esc_attr(get_theme_mod( 'zoo_copyright_underline_hover', 'none' )); ?>;
    }
    .soc-links a,
    .soc_links a{
        font-size:<?php echo esc_attr(get_theme_mod( 'zoo_soc_size', '14px' )); ?>;
        color:<?php echo esc_attr(get_theme_mod( 'zoo_soc_color', '#ccc' )); ?>;
    }
    .soc-links a:hover,
    .soc_links a:hover{
        color:<?php echo esc_attr(get_theme_mod( 'zoo_soc_color_hover', '#000' )); ?>;
    }
    body h1 {
        font-family:<?php echo esc_attr(get_theme_mod( 'zoo_h1_font', 'Francois One,sans-serif' )); ?>;
    }
    body h2 {
        font-family:<?php echo esc_attr(get_theme_mod( 'zoo_h2_font', 'Francois One,sans-serif' )); ?>;
    }
    body h3 {
        font-family:<?php echo esc_attr(get_theme_mod( 'zoo_h3_font', 'Francois One,sans-serif' )); ?>;
    }
    body h4 {
        font-family:<?php echo esc_attr(get_theme_mod( 'zoo_h4_font', 'Francois One,sans-serif' )); ?>;
    }
    body h5 {
        font-family:<?php echo esc_attr(get_theme_mod( 'zoo_h5_font', 'Francois One,sans-serif' )); ?>;
    }
    body h6 {
        font-family:<?php echo esc_attr(get_theme_mod( 'zoo_h6_font', 'Francois One,sans-serif' )); ?>;
    }
    .site-header {
        <?php if(!is_front_page()) echo "background:none;";?>
    }
    #header {
        <?php if(is_front_page()) echo "padding-bottom:117px;";?>
    }
    </style>
<?php
}
add_action( 'wp_head', 'zoo_customize_css');

function zoo_customize_preview_js() {
    wp_enqueue_script( 'zoo-customizer', get_template_directory_uri() . '/js/theme-customizer.js', array( 'customize-preview' ), '20120187', true );
}

function zoo_after_setup_theme() {
    add_action( 'customize_preview_init', 'zoo_customize_preview_js' );
}
add_action( 'after_setup_theme', 'zoo_after_setup_theme' );

function zoo_callback(){
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-background' );
    $args = array(
        'flex-width'    => true,
        'width'         => 980,
        'flex-height'    => true,
        'height'        => 400,
    );
    add_theme_support( 'custom-header', $args );
    add_editor_style( get_template_directory_uri() . '/css/editor-style.css' );
    add_theme_support( 'post-formats', array( 'aside','link','gallery','image','quote','status','video','audio','chat' ) );
    load_theme_textdomain('zoo', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'zoo_callback');
//--------Settings themplate
//Add register Menu
register_nav_menu( 'primary', __( 'Navigation Menu', 'zoo' ) );

//require get_template_directory() . '/inc/plugin.php';

require get_template_directory() . '/inc/settings_template.php';

//--------IE-------
add_action( 'wp_head', 'zoo_head_callback' );
    function zoo_head_callback() {
        global $wp_styles;
        wp_enqueue_style( 'zoo-ie', get_template_directory_uri() . "/css/ie.css", array( 'zoo' )  );
        $wp_styles->add_data( 'zoo-ie', 'conditional', 'lt IE 8' ); ?>
        <!--[if IE]><script src="<?php echo get_template_directory_uri();
 ?>/js/html5.js"></script><![endif]-->
 <?php
 } // end wp_head callback

if ( ! isset( $content_width ) )
    $content_width = 604;

if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) wp_enqueue_script('comment-reply');

//--------Widgets
function zoo_sidebar_init() {
    register_sidebar(
        array(
            'name'          => __( 'SideBar', 'zoo' ),
            'id'            => 'sidebar_content',
            'description'   => __( 'Appears in the left column of the site.', 'zoo' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget_title_left">',
            'after_title'   => '</h3>',
    ) );
    register_sidebar(
        array(
                'id' => 'footer_left',
                'name' => __( 'Footer: Left', 'zoo'),
                'description' => __( 'Footer: Left', 'zoo' ),
                'before_widget' => '<div id="%1$s" class="%2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h3 class="widget_title_footer_left">',
                'after_title' => '</h3>'
            ) );
    register_sidebar(
        array(
                'id' => 'footer_right',
                'name' => __( 'Footer: Right', 'zoo'),
                'description' => __( 'Footer: Right', 'zoo' ),
                'before_widget' => '<div id="%1$s" class="%2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h3 class="widget_title_footer_right">',
                'after_title' => '</h3>'
            ) );
}
add_action( 'widgets_init', 'zoo_sidebar_init' );

//css styles connect to the admin

function zoo_style_backend() {
    wp_enqueue_style( 'admin_style', get_template_directory_uri()  .  '/css/admin_style.css' );
    wp_enqueue_style( 'font-awesomes', get_template_directory_uri()  .  "/css/font-awesome.min.css" );
}
add_action( 'admin_enqueue_scripts', 'zoo_style_backend' );


//styles and scripts

function zoo_rigistre_scripts() {
    $zoo_uri = get_template_directory_uri();

    wp_enqueue_script('zoo_bootstrap_script', $zoo_uri . '/bootstrap/js/bootstrap.js', array( 'jquery' ), false);

    wp_enqueue_script('zoo_viewportchecker_script', $zoo_uri . '/js/jquery.viewportchecker.js', array( 'jquery' ), false);

    wp_enqueue_script('zoo_swiper_script',   $zoo_uri . '/js/swiper.min.js','','1.0', array( 'jquery' ), true);

    wp_enqueue_script( 'zoo_script', $zoo_uri . '/js/functions.js', array( 'jquery' ), '20140319', true );

     wp_enqueue_script('zoo_isotop_script',   $zoo_uri . '/js/isotope.pkgd.js','','2.2.0' , array( 'jquery' ), true);

     wp_enqueue_script('zoo_custom_script',   $zoo_uri . '/js/custom.js','','1.0', array( 'jquery' ), false);


    wp_enqueue_style('zoo_bootstrap_style', get_template_directory_uri() . '/bootstrap/css/bootstrap.css');

    wp_enqueue_style('zoo_style_main',   get_stylesheet_uri(), array() );

    wp_enqueue_style('zoo_style_swiper',   $zoo_uri . '/css/swiper.min.css');

    wp_enqueue_style('zoo_style_animate',   $zoo_uri . '/css/animate.css');

    wp_enqueue_style('zoo_style_font-awesome',  $zoo_uri . '/css/font-awesome.min.css');

    wp_enqueue_style('zoo_style_ionicons',   $zoo_uri . '/css/ionicons.min.css');

    wp_enqueue_style('zoo_style_diamonds',   $zoo_uri . '/css/diamonds.css');

    wp_enqueue_style('fonts','http://fonts.googleapis.com/css?family=Cuprum:700italic,400,400italic,700|Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic|Special+Elite|Orbitron:400,500,700,900|Alegreya+SC:400,400italic,700,700italic,900,900italic|Comfortaa:400,300,700|Abel|Dosis:400,200,300,500,600,700,800|Droid+Sans:400,700|Francois+One|Exo:100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic|Tangerine:400,700|Josefin+Sans:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic|Lato:400,100,300,400italic,300italic,100italic,700,700italic,900,900italic|Lobster|Lora:400,400italic,700,700italic|Oswald:300,400,700|Open+Sans+Condensed:300,300italic,700|Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800italic,800|Oswald:400,300,700|Oxygen:400,300,700|Philosopher:400,700,400italic,700italic|Playfair+Display+SC:400,400italic,700,700italic,900,900italic|PT+Sans+Narrow:400,700|PT+Sans:400,400italic,700,700italic|Prosto+One|Quicksand:400,300,700|Roboto+Condensed:400,300,300italic,400italic,700,700italic|Share:400,400italic,700,700italic|Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic|Merriweather:400,300italic,300,400italic,700,700italic,900,900italic|Ubuntu+Condensed|Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic|Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic&subset=latin,cyrillic-ext,latin-ext,cyrillic');
}
add_action( 'wp_enqueue_scripts', 'zoo_rigistre_scripts' );

//excerpt
function zoo_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'zoo_excerpt_length');

//content limit
function zoo_content($limit) {
    $content = explode(' ', get_the_content(), $limit);
    if (count($content)>=$limit) {
        array_pop($content);
        $content = implode(" ",$content).'...';
    } else {
        $content = implode(" ",$content);
    }
    $content = preg_replace('/\[.+\]/','', $content);
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]&gt;', $content);
    return $content;
}
function zoo_post_nav() {
    // Don't print empty markup if there's nowhere to navigate.
    $previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
    $next     = get_adjacent_post( false, '', false );

    if ( ! $next && ! $previous ) {
        return;
}
?>
<nav class="navigation post-navigation" role="navigation">
    <h1 class="screen-reader-text"><?php _e( 'Post navigation', 'zoo' ); ?></h1>
    <div class="nav-links">
        <?php
        if ( is_attachment() ) :
            previous_post_link( '%link', __( '<span class="meta-nav">Published In</span>%title', 'zoo' ) );
        else :
            previous_post_link( '%link', __( '<span class="meta-nav">Previous Post: </span>%title', 'zoo' ) );
            next_post_link( '%link', __( '<span class="meta-nav">Next Post: </span>%title', 'zoo' ) );
        endif;
        ?>
    </div><!-- .nav-links -->
</nav><!-- .navigation -->
    <?php
}


function zoo_entry_date( $echo = true ) {
    if ( has_post_format( array( 'chat', 'status' ) ) )
        $format_prefix = _x( '%1$s on %2$s', '1: post format name. 2: date', 'zoo' );
    else
        $format_prefix = '%2$s';

        $date = sprintf( '<span class="date"><i class="ion-ios-clock-outline"></i><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a></span>',
        esc_url( get_permalink() ),
        esc_attr( sprintf( __( 'Permalink to %s', 'zoo' ), the_title_attribute( 'echo=0' ) ) ),
        esc_attr( get_the_date( 'c' ) ),
        esc_html( sprintf( $format_prefix, get_post_format_string( get_post_format() ), get_the_date() ) )
    );

    if ( $echo )
        echo $date;

    return $date;
};




function zoo_entry_meta() {
    if ( is_sticky() && is_home() && ! is_paged() )
        echo '<span class="featured-post">' . __( 'Sticky', 'zoo' ) . '</span>';

    // Translators: used between list items, there is a space after the comma.
    $categories_list = get_the_category_list( __( ', ', 'zoo' ) );
    if ( $categories_list ) {
        echo '<span class="categories-links"><i class="ion-ios-list-outline"></i>' . $categories_list . '</span>';
    }

    // Translators: used between list items, there is a space after the comma.
    $tag_list = get_the_tag_list( '', __( ', ', 'zoo' ) );
    if ( $tag_list ) {
        echo '<span class="tags-links"><i class="ion-ios-pricetag-outline"></i>' . $tag_list . '</span>';
    }

    // Post author
    if ( 'post' == get_post_type() ) {
        printf( '<span class="author vcard"><i class="ion-ios-person-outline"></i><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
        esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
        esc_attr( sprintf( __( 'View all posts by %s', 'zoo' ), get_the_author() ) ),
        get_the_author()
        );
    }
};


function zoo_the_attached_image() {
    /**
    * Filter the image attachment size to use.
    * @param array $size {
    *  @type int The attachment height in pixels.
    *  @type int The attachment width in pixels.
    * }
    */
    $attachment_size     = apply_filters( 'zoo_attachment_size', array( 724, 724 ) );
    $next_attachment_url = wp_get_attachment_url();
    $post                = get_post();

    /*
    * Grab the IDs of all the image attachments in a gallery so we can get the URL
    * of the next adjacent image in a gallery, or the first image (if we're
    * looking at the last image in a gallery), or, in a gallery of one, just the
    * link to that image file.
    */
    $attachment_ids = get_posts( array(
        'post_parent'    => $post->post_parent,
        'fields'         => 'ids',
        'numberposts'    => -1,
        'post_status'    => 'inherit',
        'post_type'      => 'attachment',
        'post_mime_type' => 'image',
        'order'          => 'ASC',
        'orderby'        => 'menu_order ID'
    ) );

    // If there is more than 1 attachment in a gallery...
    if ( count( $attachment_ids ) > 1 ) {
        foreach ( $attachment_ids as $attachment_id ) {
        if ( $attachment_id == $post->ID ) {
            $next_id = current( $attachment_ids );
        break;
        }
    }

    // get the URL of the next image attachment...
    if ( $next_id )
        $next_attachment_url = get_attachment_link( $next_id );

    // or get the URL of the first image attachment.
    else
        $next_attachment_url = get_attachment_link( array_shift( $attachment_ids ) );
    }

    printf( '<a href="%1$s" title="%2$s" rel="attachment">%3$s</a>',
    esc_url( $next_attachment_url ),
    the_title_attribute( array( 'echo' => false ) ),
    wp_get_attachment_image( $post->ID, $attachment_size )
    );
}

function zoo_pagenavi($post_type ='',$posts_per_page = '') {

   $count_posts = wp_count_posts();


    $big = 999999999;
    $args = array(
        'base' => str_replace( $big, '%#%', get_pagenum_link( $big, false ) )
        ,'format' => ''
        ,'current' => max( 1, get_query_var('paged') )
        ,'total' => ceil($count_posts->publish/$posts_per_page  )

    );
    $result = paginate_links( $args );
    $result = str_replace( '/page/1"', '"', $result );

    echo $result;
}
