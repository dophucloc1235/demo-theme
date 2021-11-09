<?php

/* SĐT Email*/
define('NAMEPK', 'Đa Khoa Quốc Tế Nhân Ái');
define('SDT','0888 091 358');
define('EMAIL','dakhoanhanai170@gmail.com');
define('ADDRESS','170 Nguyễn Văn Cừ, phường Võ Cường, thành phố Bắc Ninh.');
// define('LIVE_CHAT','https://byt.zoosnet.net/LR/Chatpre.aspx?id=BYT71591376&cid=b9145f17be3a40279f51711dccb4411d&lng=en'); 
define('LIVE_CHAT','https://nim.zoosnet.net/LR/Chatpre.aspx?id=NIM71591376&lng=en'); 
define('LIVE_CHAT_URL','https://nim.zoosnet.net/JS/LsJS.aspx?siteid=NIM71591376&float=1&lng=en');
define('GGMAP_MAPS', 'https://goo.gl/maps/5SiNtX1q6pw1m8QL7');
define('OPEN_TIME','08:00 - 20:00');
define('TEN_PK','Phòng khám đa khoa Nhân Ái');
define('KHUVUC','TP Bắc Ninh');


function lighthouse() {
    if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Lighthouse') === false):
        return true;
endif;
return false;
}
/**
@ Khai bao chuc nang cua theme 
**/
if ( !function_exists('dakhoanhanai_theme_setup') ) {
	function dakhoanhanai_theme_setup() {

		/* Tu dong them link RSS len <head> **/
		add_theme_support( 'automatic-feed-links' );

		/* Them post thumbnail */
		add_theme_support( 'post-thumbnails' );

		/* Post Format */
		add_theme_support( 'post-formats', array(
			'image',
			'video',
			'gallery',
			'quote',
			'link'
		) );

		/* Them title-tag */
		add_theme_support( 'title-tag' );

		/* Them custom background */
		$default_background = array(
			'default-color' => '#e8e8e8'
		);
		add_theme_support( 'custom-background', $default_background );
        // Tắt editor mới
        add_filter('use_block_editor_for_post', '__return_false');

        // Crop hình
        add_image_size( 'crop-thumbnail', 150, 100, true );
        add_image_size( 'crop-medium', 300, 200, true );
        add_image_size( 'crop-medium-square', 300, 300, true );
        add_image_size( 'crop-large', 600, 400, true );
        /* Tao sidebar */
        $sidebar = array(
           'name' => __('Main Sidebar', 'logicweb'),
           'id' => 'main-sidebar',
           'description' => __('Default sidebar'),
           'class' => 'main-sidebar',
           'before_title' => '<h3 class="widgettitle">',
           'after_title' => '</h3>'
       );
        register_sidebar( $sidebar );

    }
    add_action( 'init', 'dakhoanhanai_theme_setup' );
}
//* Add new image sizes to post or page editor
add_filter( 'image_size_names_choose', 'mytheme_image_sizes' );
function mytheme_image_sizes( $sizes ) {

    $mythemesizes = array(
        'crop-thumbnail'       => __( 'Crop thumbnail' ),
        'crop-medium'   => __( 'Crop medium' ),
        'crop-medium-square'    => __( 'Crop medium square' ),
        'crop-large'    => __( 'Crop large' ),
    );
    $sizes = array_merge( $sizes, $mythemesizes );

    return $sizes;
}
/*--------
TEMPLATE FUNCTIONS */
if (!function_exists('dakhoanhanai_header')) {
	function dakhoanhanai_header() { ?>
		<div class="site-name">
			<?php
            global $tp_options;

            if( $tp_options['logo-on'] == 0 ) :
             ?>
             <?php
             if ( is_home() ) {
              printf( '<h1><a href="%1$s" title="%2$s">%3$s</a></h1>',
                  get_bloginfo('url'),
                  get_bloginfo('description'),
                  get_bloginfo('sitename') );
          } else {
              printf( '<p><a href="%1$s" title="%2$s">%3$s</a></p>',
                  get_bloginfo('url'),
                  get_bloginfo('description'),
                  get_bloginfo('sitename') );			
          }
          ?>

          <?php
      else : 
         ?>
         <img src="<?php echo $tp_options['logo-image']['url']; ?>" />
     <?php endif; ?>
 </div>
 <div class="site-description"><?php bloginfo('description'); ?></div><?php 
}
}
/**
Ham tao phan trang don gian
**/
if ( !function_exists('dakhoanhanai_pagination') ) {
	function dakhoanhanai_pagination() {
		if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
			return '';
		} ?>
		<nav class="pagination" role="navigation">
			<?php if ( get_next_posts_link() ) : ?>
				<div class="prev"><?php next_posts_link( __('Older Posts', 'dakhoanhanai') ); ?></div>
			<?php endif; ?>
			<?php if ( get_previous_posts_link() ) : ?>
				<div class="next"><?php previous_posts_link( __('Newest Posts', 'dakhoanhanai') ); ?></div>
			<?php endif; ?>
		</nav>
	<?php }
}

/**
dakhoanhanai_entry_tag = hien thi tag 
**/
if ( !function_exists('dakhoanhanai_entry_tag') ) {
	function dakhoanhanai_entry_tag() {
		if ( has_tag() ) :
			echo '<div class="entry-tag mt-40">';
			printf( __('Từ khóa: %1$s', 'logicweb'), get_the_tag_list( '', ', ' ) );
			echo '</div>';
		endif;
	}
}

/**
wpbeginner_numeric_posts_nav = hien thi nav archive
**/
function wpbeginner_numeric_posts_nav() {

    if( is_singular() )
        return;

    global $wp_query;

    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;

    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );

    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;

    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
//        $links[] = $paged - 2;
    }

    if ( ( $paged + 2 ) <= $max ) {
//        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<div class="navigation text-center"><ul>' . "\n";

    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li>%s</li>' . "\n", get_previous_posts_link('Trước') );

    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';

        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }

    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }

    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";

        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }

    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li>%s</li>' . "\n", get_next_posts_link('Sau') );

    echo '</ul></div>' . "\n";

}

// Breadcrumbs
function custom_breadcrumbs() {

    // Settings
        // $separator          = '&raquo;';
    $separator          = '';
    $breadcrums_id      = 'breadcrumbs';
    $breadcrums_class   = 'breadcrumbs';
    $home_title         = "<i class='fa fa-home'></i> Trang chủ";
    
        // If you have any custom post types with custom taxonomies, put the taxonomy name below (e.g. product_cat)
    $custom_taxonomy    = 'product_cat';
    
        // Get the query & post information
    global $post,$wp_query;
    
        // Do not display on the homepage
    if ( !is_front_page() ) {

            // Build the breadcrums
        echo '<ul id="' . $breadcrums_id . '" class="' . $breadcrums_class . '">';
        
            // Home page
        echo '<li class="item-home"><a class="bread-link bread-home" href="' . get_home_url() . '" title="' . $home_title . '">' . $home_title . '</a></li>';
            //echo '<li class="separator separator-home"> ' . $separator . ' </li>';
        
        if ( is_archive() && !is_tax() && !is_category() && !is_tag() ) {

            echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . post_type_archive_title($prefix, false) . '</strong></li>';
            
        } else if ( is_archive() && is_tax() && !is_category() && !is_tag() ) {

                // If post is a custom post type
            $post_type = get_post_type();
            
                // If it is a custom post type display name and link
            if($post_type != 'post') {

                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);
                
                echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
                    //echo '<li class="separator"> ' . $separator . ' </li>';
                
            }
            
            $custom_tax_name = get_queried_object()->name;
            echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . $custom_tax_name . '</strong></li>';
            
        } else if ( is_single() ) {

                // If post is a custom post type
            $post_type = get_post_type();
            
                // If it is a custom post type display name and link
            if($post_type != 'post') {

                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);
                
                echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
                
            }
            
                // Get post category info
            $category = get_the_category();
            
            if(!empty($category)) {

                    // Get last category post is in
                $last_category = array_values($category);
                $last_category = end($last_category);
                
                    // Get parent any categories and create array
                $get_cat_parents = rtrim(get_category_parents($last_category->term_id, true, ','),',');
                $cat_parents = explode(',',$get_cat_parents);
                
                    // Loop through parent categories and store in variable $cat_display
                $cat_display = '';
                foreach($cat_parents as $parents) {
                    $cat_display .= '<li class="item-cat">'.$parents.'</li>';
                        //$cat_display .= '<li class="separator"> ' . $separator . ' </li>';
                }
                
            }
            
                // If it's a custom post type within a custom taxonomy
            $taxonomy_exists = taxonomy_exists($custom_taxonomy);
            if(empty($last_category) && !empty($custom_taxonomy) && $taxonomy_exists) {

                $taxonomy_terms = get_the_terms( $post->ID, $custom_taxonomy );
                $cat_id         = $taxonomy_terms[0]->term_id;
                $cat_nicename   = $taxonomy_terms[0]->slug;
                $cat_link       = get_term_link($taxonomy_terms[0]->term_id, $custom_taxonomy);
                $cat_name       = $taxonomy_terms[0]->name;
                
            }
            
                // Check if the post is in a category
            if(!empty($last_category)) {
                echo $cat_display;
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
                
                    // Else if post is in a custom taxonomy
            } else if(!empty($cat_id)) {

                echo '<li class="item-cat item-cat-' . $cat_id . ' item-cat-' . $cat_nicename . '"><a class="bread-cat bread-cat-' . $cat_id . ' bread-cat-' . $cat_nicename . '" href="' . $cat_link . '" title="' . $cat_name . '">' . $cat_name . '</a></li>';
                    //echo '<li class="separator"> ' . $separator . ' </li>';
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
                
            } else {

                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
                
            }
            
        } else if ( is_category() ) {

                // Category page
            echo '<li class="item-current item-cat"><strong class="bread-current bread-cat">' . single_cat_title('', false) . '</strong></li>';
            
        } else if ( is_page() ) {

                // Standard page
            if( $post->post_parent ){

                    // If child page, get parents
                $anc = get_post_ancestors( $post->ID );
                
                    // Get parents in the right order
                $anc = array_reverse($anc);
                
                    // Parent page loop
                if ( !isset( $parents ) ) $parents = null;
                foreach ( $anc as $ancestor ) {
                    $parents .= '<li class="item-parent item-parent-' . $ancestor . '"><a class="bread-parent bread-parent-' . $ancestor . '" href="' . get_permalink($ancestor) . '" title="' . get_the_title($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';
                    $parents .= '<li class="separator separator-' . $ancestor . '"> ' . $separator . ' </li>';
                }
                
                    // Display parent pages
                echo $parents;
                
                    // Current page
                echo '<li class="item-current item-' . $post->ID . '"><strong title="' . get_the_title() . '"> ' . get_the_title() . '</strong></li>';
                
            } else {

                    // Just display current page if not parents
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '"> ' . get_the_title() . '</strong></li>';
                
            }
            
        } else if ( is_tag() ) {

                // Tag page

                // Get tag information
            $term_id        = get_query_var('tag_id');
            $taxonomy       = 'post_tag';
            $args           = 'include=' . $term_id;
            $terms          = get_terms( $taxonomy, $args );
            $get_term_id    = $terms[0]->term_id;
            $get_term_slug  = $terms[0]->slug;
            $get_term_name  = $terms[0]->name;
            
                // Display the tag name
            echo '<li class="item-current item-tag-' . $get_term_id . ' item-tag-' . $get_term_slug . '"><strong class="bread-current bread-tag-' . $get_term_id . ' bread-tag-' . $get_term_slug . '">' . $get_term_name . '</strong></li>';
            
        } elseif ( is_day() ) {

                // Day archive

                // Year link
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
                //echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';
            
                // Month link
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><a class="bread-month bread-month-' . get_the_time('m') . '" href="' . get_month_link( get_the_time('Y'), get_the_time('m') ) . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</a></li>';
                //echo '<li class="separator separator-' . get_the_time('m') . '"> ' . $separator . ' </li>';
            
                // Day display
            echo '<li class="item-current item-' . get_the_time('j') . '"><strong class="bread-current bread-' . get_the_time('j') . '"> ' . get_the_time('jS') . ' ' . get_the_time('M') . ' Archives</strong></li>';
            
        } else if ( is_month() ) {

                // Month Archive

                // Year link
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
                //echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';
            
                // Month display
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><strong class="bread-month bread-month-' . get_the_time('m') . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</strong></li>';
            
        } else if ( is_year() ) {

                // Display year archive
            echo '<li class="item-current item-current-' . get_the_time('Y') . '"><strong class="bread-current bread-current-' . get_the_time('Y') . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</strong></li>';
            
        } else if ( is_author() ) {

                // Auhor archive

                // Get the author information
            global $author;
            $userdata = get_userdata( $author );
            
                // Display author name
            echo '<li class="item-current item-current-' . $userdata->user_nicename . '"><strong class="bread-current bread-current-' . $userdata->user_nicename . '" title="' . $userdata->display_name . '">' . 'Author: ' . $userdata->display_name . '</strong></li>';
            
        } else if ( get_query_var('paged') ) {

                // Paginated archives
            echo '<li class="item-current item-current-' . get_query_var('paged') . '"><strong class="bread-current bread-current-' . get_query_var('paged') . '" title="Page ' . get_query_var('paged') . '">'.__('Trang') . ' ' . get_query_var('paged') . '</strong></li>';
            
        } else if ( is_search() ) {

                // Search results page
            echo '<li class="item-current item-current-' . get_search_query() . '"><strong class="bread-current bread-current-' . get_search_query() . '" title="Search results for: ' . get_search_query() . '">Kết quả tìm kiếm cho: ' . get_search_query() . '</strong></li>';
            
        } elseif ( is_404() ) {

                // 404 page
            echo '<li>' . 'Error 404' . '</li>';
        }
        
        echo '</ul>';
        
    }
    
}

    // function to display number of posts.
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count;
}

// function to count views.
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

// Xoa jQuery mac dinh của WP
function my_jquery_enqueue() {
    wp_deregister_script('jquery');
}
add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
// REMOVE EMOJI ICONS
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

function my_deregister_scripts(){
   wp_dequeue_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );

/* Tạo Shortcode Tư Vấn */
add_shortcode('tuvan', function(){
	$tuvan = '<span class="center-block text-center "><a class="tu-van-ads" href="'.LIVE_CHAT.'"  rel="noopener noreferrer" target="_blank"><img src="'.get_template_directory_uri().'/assets/images/call_sigle_mobile.gif" style="margin:15px 0" alt="Tư Vấn Trực Tuyến Miễn Phí" /></a></span>';
	return $tuvan;
});
add_shortcode('tuvantt', function(){
	$tuvantt = '<a class="tu-van-ads" href="'.LIVE_CHAT.'"  rel="noopener noreferrer" target="_blank"><strong><span style="color: #ff0000;">[ TƯ VẤN TRỰC TUYẾN ]</span></strong></a>';
	return $tuvantt;
});
add_shortcode('sodt', function(){
	$sodt = 'Hotline: <a class="call-ads" href="tel:'.SDT.'"><strong><span style="color: #ff0000;" class="sdt_7">'.SDT.'</span></strong></a>';
	return $sodt;
});
add_shortcode('sdt', function(){
	$sodt = 'Hotline: <a class="call-ads" href="tel:'.SDT.'"><strong><span style="color: #ff0000;" class="sdt_7">'.SDT.'</span></strong></a>';
	return $sodt;
});
add_shortcode('diachi', function(){
	$str = ADDRESS;
	return $str;
});
add_shortcode('open_time', function(){
	$open_time = '<span style="color:#ff0000;">'.OPEN_TIME.'</span>';
	return $open_time;
});

add_shortcode('tenpk', function(){
	$tenpk = '<span>'.TEN_PK.'</span>';
	return $tenpk;
});

add_shortcode('khuvucpk', function(){
	$khuvucpk = '<span>'.KHUVUC.'</span>';
	return $khuvucpk;
});

// hooks your functions into the correct filters
function custom_add_mce_button() {
    // check user permissions
    if ( !current_user_can( 'edit_posts' ) &&  !current_user_can( 'edit_pages' ) ) {
     return;
 }
   // check if WYSIWYG is enabled
 if ( 'true' == get_user_option( 'rich_editing' ) ) {
     add_filter( 'mce_external_plugins', 'custom_add_tinymce_plugin' );
     add_filter( 'mce_buttons_3', 'custom_register_mce_button' );
 }
}
add_action('init', 'custom_add_mce_button');

// register new button in the editor
function custom_register_mce_button( $buttons ) {
    array_push( $buttons, 'custom_mce_button' );
    return $buttons;
}

// declare a script for the new button
// the script will insert the shortcode on the click event
function custom_add_tinymce_plugin( $plugin_array ) {
    $plugin_array['custom_mce_button'] = get_stylesheet_directory_uri() .'/assets/js/shortcode.js';
    return $plugin_array;
}


// excerpt trim
function excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
    } else {
        $excerpt = implode(" ",$excerpt);
    }
    $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
    return $excerpt;
}
// hide admin bar
add_filter('show_admin_bar', '__return_false');


