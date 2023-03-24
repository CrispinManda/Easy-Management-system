<?php
/*-------------------------------------------------------------------------*/
/*                        REGISTER CUSTOM NAVIGATION WALKER                */
/*-------------------------------------------------------------------------*/

if ( ! file_exists( get_template_directory() . '/class-bootstrap-5-navwalker.php' ) ) {
    // File does not exist... return an error.
    return new WP_Error( 'class-bootstrap-5-navwalker-missing', __( 'It appears the class-bootstrap-5-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
    // File exists... require it.
    require_once get_template_directory() . '/class-bootstrap-5-navwalker.php';
}

/*-------------------------------------------------------------------------*/
/*                        ENQUEUE ALL THE THINGS                           */
/*-------------------------------------------------------------------------*/

function wp_custom_styles(){
    wp_register_style('bootstrap5', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '5.3.0', 'all');
    wp_enqueue_style('bootstrap5');
    wp_register_style('custom', get_template_directory_uri().'/assets/css/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style('custom');
    wp_register_style('addproject', get_template_directory_uri().'/assets/css/add_project.css', array(), '1.0.0', 'all');
    wp_enqueue_style('addproject');
    wp_register_style('dashcss', get_template_directory_uri().'/assets/css/add_project.css', array(), '1.0.0', 'all');
    wp_enqueue_style('dashcss');
}
add_action('wp_enqueue_scripts', 'wp_custom_styles');

function wp_custom_scripts(){
    wp_register_script('bootstrap-js', get_template_directory_uri(). 'assets/js/bootstrap.min.js', array(), '5.3.0', true);
    wp_enqueue_script('bootstrap-js');
    wp_register_script('custom-js', get_template_directory_uri(). 'assets/js/custom.js', array(), '1.0.0', true);
    wp_enqueue_script('custom-js');
}
add_action('wp_enqueue_scripts', 'wp_custom_scripts');
/*-------------------------------------------------------------------------*/
/*                        REGISTER WIDGETS AND MENUS                       */
/*-------------------------------------------------------------------------*/

function wp_custom_menus(){
    add_theme_support('menus');

    register_nav_menus(array(
        'primary' => 'Main Menu',
        'secondary' => 'Footer Menu'
    ));
}
add_action('init', 'wp_custom_menus');

function wp_register_sidebar(){
    add_theme_support('widgets');

    register_sidebar( array(
		'name'          => __( 'Primary Sidebar', 'theme_name' ),
		'id'            => 'sidebar-1',
        'description'   => __( 'A short description of the sidebar.' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Secondary Sidebar', 'theme_name' ),
		'id'            => 'sidebar-2',
        'description'   => __( 'A short description of the sidebar.' ),
		'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li></ul>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action('widgets_init', 'wp_register_sidebar');

/*-------------------------------------------------------------------------*/
/*                        ADD PROJECT TO DATABASE                          */
/*-------------------------------------------------------------------------*/


/*-------------------------------------------------------------------------*/
/*                        PASS PROJECT DATA TO DATABASE                          */
/*-------------------------------------------------------------------------*/



/*-------------------------------------------------------------------------*/
/*                        ADD THEME SUPPORT                                */
/*-------------------------------------------------------------------------*/
function custom_theme_setup() {
    add_theme_support( 'html5', array( 'comment-list' ) );
	
	add_theme_support('post-thumbnails');

	add_theme_support( 'title-tag' );

	add_theme_support('custom-header');

	add_theme_support('custom-background');

	add_theme_support('post-formats', array('aside', 'image', 'video'));
}
add_action( 'after_setup_theme', 'custom_theme_setup' );

/*-------------------------------------------------------------------------*/
/*                        ADD THEME SUPPORT                                */
/*-------------------------------------------------------------------------*/
function recent_posts_transient(){
	if(false!==get_transient('recent_posts')){
		delete_transient('recent_posts');
	}
}
add_action('save_post', 'recent_posts_transient');

/*-------------------------------------------------------------------------*/
/*                        LIMIT LOGIN ATTEMPTS                             */
/*-------------------------------------------------------------------------*/
// function check_attempted_login( $user, $username, $password ) {
//     if ( get_transient( 'attempted_login' ) ) {
//         $datas = get_transient( 'attempted_login' );

//         if ( $datas['tried'] >= 3 ) {
//             $until = get_option( '_transient_timeout_' . 'attempted_login' );
//             $time = time_to_go( $until );

//             return new WP_Error( 'too_many_tried',  sprintf( __( '<strong>ERROR</strong>: You have reached authentication limit, you will be able to try again in %1$s.' ) , $time ) );
//         }
//     }

//     return $user;
// }

// add_filter( 'authenticate', 'check_attempted_login', 30, 3 ); 

// function login_failed( $username ) {
//     if ( get_transient( 'attempted_login' ) ) {
//         $datas = get_transient( 'attempted_login' );
//         $datas['tried']++;

//         if ( $datas['tried'] <= 3 )
//             set_transient( 'attempted_login', $datas , 300 );
//     } else {
//         $datas = array(
//             'tried'     => 1
//         );
//         set_transient( 'attempted_login', $datas , 300 );
//     }
// }

// add_action( 'wp_login_failed', 'login_failed', 10, 1 ); 

// function time_to_go($timestamp){

//     // converting the mysql timestamp to php time
//     $periods = array(
//         "second",
//         "minute",
//         "hour",
//         "day",
//         "week",
//         "month",
//         "year"
//     );
//     $lengths = array(
//         "60",
//         "60",
//         "24",
//         "7",
//         "4.35",
//         "12"
//     );
//     $current_timestamp = time();
//     $difference = abs($current_timestamp - $timestamp);
//     for ($i = 0; $difference >= $lengths[$i] && $i < count($lengths) - 1; $i ++) {
//         $difference /= $lengths[$i];
//     }
//     $difference = round($difference);
//     if (isset($difference)) {
//         if ($difference != 1)
//             $periods[$i] .= "s";
//             $output = "$difference $periods[$i]";
//             return $output;
//     }
// }
/*-------------------------------------------------------------------------*/
/*             SHOW DIFFERENT DASHBOARD DEPENDING ON USER                  */
/*-------------------------------------------------------------------------*/
function dashboard_page_template($template) {
    if(!is_user_logged_in()) return $template;
  
    $current_page = get_queried_object();
    if($current_page && $current_page->post_name === 'dashboard') { // modify only if the current page is 'dashboard'
        $new_template = '';
        $current_user = wp_get_current_user();
        $user = new WP_User( $current_user->ID);

        if(in_array('project_manager', $user->roles) || in_array('administrator', $user->roles)){
            $new_template = locate_template( array( 'dashboard-pm.php' ) );
        }
        elseif(in_array('developer', $user->roles)){
            $new_template = locate_template( array( 'dashboard-d.php' ) );
        }else{
            $new_template = locate_template( array( 'front-page.php' ) );
        }
        if ( '' != $new_template ) {
            $template = $new_template;
        }
    }
    return $template;
}
add_filter( 'template_include', 'dashboard_page_template' );


// function developers_page_template($template) {
//     if(!is_user_logged_in()) return $template;
  
//     $current_page = get_queried_object();
//     if($current_page && $post_name == 'developer') { 
//         $new_template = '';
//         $current_user = wp_get_current_user();
//         $user = new WP_User( $current_user->ID);

//         if(in_array('project_manager', $user->roles) || in_array('administrator', $user->roles)){
//             $new_template = locate_template( array( 'page-employees.php' ) );
//         }
//         elseif(in_array('developer', $user->roles)){
//             $new_template = locate_template( array( 'page-other-employees.php' ) );
//         }else{
//             $new_template = locate_template( array( 'front-page.php' ) );
//         }
//         if ( '' != $new_template ) {
//             $template = $new_template;
//         }
//     }
//     return $template;
// }
// add_filter( 'template_include', 'developers_page_template' );


// function projects_page_template($template) {
//     if(!is_user_logged_in()) return $template;
  
//     $current_page = get_queried_object();
//     if($current_page && $post_name === 'projects') { 
//         $new_template = '';
//         $current_user = wp_get_current_user();
//         $user = new WP_User( $current_user->ID);

//         if(in_array('project_manager', $user->roles) || in_array('administrator', $user->roles)){
//             $new_template = locate_template( array( 'page-projects.php' ) );
//         }
//         elseif(in_array('developer', $user->roles)){
//             $new_template = locate_template( array( 'page-project-users.php' ) );
//         }else{
//             $new_template = locate_template( array( 'front-page.php' ) );
//         }
//         if ( '' != $new_template ) {
//             $template = $new_template;
//         }
//     }
//     return $template;
// }
// add_filter( 'template_include', 'projects_page_template' );

// function profile_page_template($template) {
//     if(!is_user_logged_in()) return $template;
  
//     $current_page = get_queried_object();
//     if($current_page && $post_name === 'user-profile') { 
//         $new_template = '';
//         $current_user = wp_get_current_user();
//         $user = new WP_User( $current_user->ID);

//         if(in_array('project_manager', $user->roles) || in_array('administrator', $user->roles)){
//             $new_template = locate_template( array( 'page-profile.php' ) );
//         }
//         elseif(in_array('developer', $user->roles)){
//             $new_template = locate_template( array( 'page-profile-member.php' ) );
//         }else{
//             $new_template = locate_template( array( 'front-page.php' ) );
//         }
//         if ( '' != $new_template ) {
//             $template = $new_template;
//         }
//     }
//     return $template;
// }
// add_filter( 'template_include', 'profile_page_template' );

function wpb_recently_registered_users() { 
 
    global $wpdb;
     
    $wp_users = '<ul class="recently-user">';
     
    $usernames = $wpdb->get_results("SELECT user_nicename, user_url, user_email FROM $wpdb->users WHERE user_login != 'admin' ORDER BY ID DESC LIMIT 5");
     
    foreach ($usernames as $username) {
     
    if (!$username->user_url) :
     
    $wp_users .= '<li>' .get_avatar($username->user_email, 45) .$username->user_nicename."</a></li>";
     
    else :
     
    $wp_users .= '<li>' .get_avatar($username->user_email, 45).'<a href="'.$username->user_url.'">'.$username->user_nicename."</a></li>";
     
    endif;
    }
    $wp_users .= '</ul>';
     
    return $wp_users;
}

add_filter( 'deprecated_constructor_trigger_error', '__return_false' );
add_filter( 'deprecated_function_trigger_error', '__return_false' );
add_filter( 'deprecated_file_trigger_error', '__return_false' );
add_filter( 'deprecated_argument_trigger_error', '__return_false' );
add_filter( 'deprecated_hook_trigger_error', '__return_false' );

function my_custom_authenticate_user( WP_User $user  ) {
    if ( get_user_meta( $user->ID, 'registration_status', true ) === 'pending' ) {
        remove_action( 'wp_authenticate_user', 'wp_authenticate_username_password', 20 );
        add_filter( 'wp_authenticate_user', 'my_custom_login_error_message', 20, 3 );
    }

    return $user;
}
add_filter( 'wp_authenticate_user', 'my_custom_authenticate_user', 10, 1 );

function my_custom_login_error_message( $username, $password ) {
    $error = new WP_Error();
    $error->add( 'pending', __( 'Your account is pending approval. Please try again later.' ) );
    return $error;
}



/////////////////////////////////////////////////////////////
function register_rest_api_routes() {
    register_rest_route( 'projects/v1', 'api', array(
        'methods'  => 'GET',
        'callback' => 'get_projects',
    ) );
}
add_action( 'rest_api_init', 'register_rest_api_routes' );

function get_projects( $request ) {
    $args = array(
        'post_type'      => 'project',
        'posts_per_page' => 5,
        'post_status'    => 'publish',
    );

    $new_query = new WP_Query( $args );
    $projects = $new_query->posts;

    $response = array();
    foreach ( $projects as $project ) {
        $meta = get_post_meta( $project->ID );
        $response[] = array(
            'id' => $project->ID,
            'title' => $project->post_title,
            'content' => $project->post_content,
            'meta' => $meta,
        );
    }

    return $response;
}



////////////////////////////////////////////////////////////////////////////////

//To restrict pending accounts or pending users from logging in to the Easy-Manage app,
add_filter( 'wp_authenticate_user', 'easy_manage_restrict_pending_users', 10, 2 );
function easy_manage_restrict_pending_users( $user, $password ) {
    $user_status = get_user_meta( $user->ID, 'easy_manage_user_status', true );
    if ( $user_status === 'pending' ) {
        // Redirect the user to a custom page or display an error message.
        wp_redirect( home_url( '/account-pending/' ) );
        exit;
    }
    return $user;
}

remove_role('subscriber');
remove_role('contributor');
remove_role('Author');
remove_role('editor');
remove_role('user');
////////////////////////////////////////////////////////////////////////////////
//handle routes UserController

// Define hook for user registration
///add_action( 'wp_ajax_register_user', array( 'UserController', 'register_user' ) );

// Define hook for user login
//add_action( 'wp_ajax_login_user', array( 'UserController', 'login_user' ) );

// Define hook for user logout
//add_action( 'wp_ajax_logout_user', array( 'UserController', 'logout_user' ) );

// Define hook for user search
//add_action( 'wp_ajax_search_user', array( 'UserController', 'search_user' ) );

//handle routes AdminController

// Define hook for user deactivation
//add_action( 'wp_ajax_deactivate_user', array( 'AdminController', 'deactivate_user' ) );

// Define hook for project creation
//add_action( 'wp_ajax_create_project', array( 'AdminController', 'create_project' ) );

// Define hook for project assignment
//add_action( 'wp_ajax_assign_project', array( 'AdminController', 'assign_project' ) );

// Define hook for viewing user locations
//add_action( 'admin_menu', array( 'AdminController', 'add_location_page' ) );


//handle routes ProjectController
// Define hook for project completion
//add_action( 'wp_ajax_complete_project', array( 'ProjectController', 'complete_project' ) );

// Define hook for project reassignment
//add_action( 'wp_ajax_reassign_project', array( 'ProjectController', 'reassign_project' ) );

// Define hook for displaying project details
//add_shortcode( 'project_details', array( 'ProjectController', 'display_project_details' ) );







    

  
















