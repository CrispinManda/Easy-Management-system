<?php 
/**
 * Template Name: Create Project
*/
get_header();?>



<head>
<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Profile Page Template</title>
    <link rel="stylesheet" href="wp-content/themes/wp_bootstrap5_theme/assets/css/front.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  
    .row.content {height: 550px}
    

    .sidenav {
      background-color: #f1f1f1;
      height:100%;
      margin-top:20px;
      background-color: #37362A;
      color:white;
    }
    .topnav {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color:#37362A;
  margin-top:-70px;

}

ul.topnav li {float: left;}

ul.topnav li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 50px;
  text-decoration: none;
  margin-left: 100px;
}

ul.topnav li a:hover:not(.active) {background-color: #111;}

ul.topnav li a.active {background-color: #37362A;}

ul.topnav li.right {float: right;}

 
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
  </style>
</head>

<style>
    #nav{
        height: 300px;
    }
    .nav .navbar-nav{
        display: inline;

        
    }

    .container-fluid{
        height: 600px;
    }


</style>


<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 col-md-2  sidenav hidden-xs">
  
      <ul class="nav nav-pills ">
        <li   class="active"><a href="easyM/dashboard">Dashboard</a></li>
        <li ><a href="../../easyM/users"><ion-icon name="people" style="margin-right: 10px;font-size: 20px;"></ion-icon>Users</a></li>
        <li><a href="../../easyM/profile/"><ion-icon name="person-outline" style="margin-right: 10px;font-size: 20px; "></ion-icon>Profile</a></li>
        <li><a href="../../easyM/project"><ion-icon name="stats-chart" style="margin-right: 10px;font-size: 20px; "></ion-icon>Projects List</a></li>
        <li><a href="#section3"><ion-icon name="settings" style="margin-right: 10px;font-size: 20px; "></ion-icon>Account Settings</a></li>

      </ul><br>
    </div>
    <br>
    <style>
        .col-sm-9 .well{
            margin-top:20px;
            
        }
        .nav-pills{
            display:flex;
            flex-direction: column;
            gap:20px;
        }
        #well{
          display:flex;
          flex-direction:row;
        
          justify-content:space-between;
          flex-wrap:wrap;
        }
        #well button{
          background-color:red;
          color:white;
          width:100px;
          border-radius:20px;
          border:1px solid black;
        }

        #well h6 button {
          background-color:green;
          color:white;
          width:100px;
          border-radius:20px;
          border:1px solid black;
        }
        #edit button{
          background-color:#10A54BC9;
          color:white;
          border:1px solid black;
          border-radius:5px;
          width:50px;


        }
        /* .space{
            height: 100px;
        }
  */
        
        
 
    </style>
    <div class="col-sm-9 col-md-10">
      <div class="well" id="well" style='background-color: #37362A; color:white;'>
        <h4>Welcome to Easy Manage</h4>
        <!-- <button><h6>Add Project</h6></button> -->
        <button style="background-color: #960018; width: 70px; border-radius: 5px;">
  <a href="<?php echo wp_logout_url( home_url() ); ?>" style="color: white; text-decoration: none;">Logout</a>
</button>

     </div> 

     <div class="space">

     </div>
        
      <div class="container my-5">
    <div class="row">
        <div class="col">
        <?php

if (isset( $_POST['cpt_nonce_field'] ) && wp_verify_nonce( $_POST['cpt_nonce_field'], 'cpt_nonce_action' ) ) {

    // Check if the user already has an assigned project
    $developer_id = $_POST['user'];
    $assigned_projects = get_posts( array(
        'post_type' => 'project',
        'meta_query'    => array(
            [
                'key'   => 'project_user',
                'value' => $developer_id,
            ],
            [
                'key'   => 'project_status_select',
                'value' => array( 'Pending', 'In Progress' ),
                'compare' => 'IN',
            ],
        ),
    ) );

    if ( ! empty( $assigned_projects ) ) {
        // Developer already has an assigned project, don't assign another
        $alert_type = 'danger';
        $alert_message = 'Developer already has an assigned project.';
    } else {
        // create post object with the form values
                // Create a new project post
        $project_title = sanitize_text_field($_POST['title']);
        $project_content = sanitize_text_field($_POST['content']);
        $project_start_date = sanitize_text_field($_POST['start']);
        $project_due_date = sanitize_text_field($_POST['deadline']);
        $project_status = 'Pending';
        $project_user = intval($_POST['user']);

        $new_project = array(
            'post_title'    => $project_title,
            'post_content'  => $project_content,
            'post_status'   => 'publish',
            'post_type'     => $_POST['project'],
            'meta_input'    => array(
                'project_start' => $project_start_date,
                'project_end' => $project_due_date,
                'project_status_select' => $project_status,
                'project_user' => $project_user,
            ),
        );
        // insert the post into the database
        $project_start = $_POST['start'];

        global $post;
        $post_id = $post->ID;
        $project_id = wp_insert_post( $new_project);
        //add_post_meta($cpt_id,'project_start',$project_start);
        if ($project_id) {
            $alert_type = 'success';
            $alert_message = 'Project assigned successfully.';
        } else {
            $alert_type = 'danger';
            $alert_message = 'Error assigning project. Please try again.';
        }
    }

}

?>
            <form class="form card shadow p-4"action="" method="post">
                <?php if (isset($alert_message)) : ?>
                    <div class="alert alert-<?php echo $alert_type; ?> mb-3" role="alert">
                        <?php echo $alert_message; ?>
                    </div>
                <?php endif; ?>
                <h3 class="text-center text-primary">Add Project</h3>
                <div class="form-group mt-2">
                    <label for="title"><?php _e('Enter the Project Title:', 'mytextdomain'); ?></label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Project Title" required>
                </div>
                <div class="form-group mt-2">
                    <label for="content"><?php _e('Enter the Project Description:', 'mytextdomain'); ?></label>
                    <textarea rows="3" class="form-control" id="content" name="content" placeholder="Enter Project Description here" required></textarea>
                </div>
                <div class="form-group mt-2">
                    <label for="content">Start Date:</label>
                    <input type="date" class="form-control" id="start_date" name="start" placeholder="Enter Project Start Date here" required>
                </div>
                <div class="form-group mt-2">
                    <label for="content">Due Date:</label>
                    <input type="date" class="form-control" id="due_date" name="deadline" placeholder="Enter Project Deadline here" required>
                </div>
                <div class="form-group mt-2">
                    <input type="hidden" class="form-control" id="status" name="status" value="Pending" placeholder="Project Status">
                </div>
                <?php
                // Get all users with the "User" role
                $users = get_users( array(
                    'role'    => 'developer',
                    'orderby' => 'user_nicename',
                ) );
                $user_options = array();
                foreach ( $users as $user ) {
                    $user_options[ $user->ID ] = $user->display_name;
                }
                ?>
                <div class="form-group mt-2">
                    <select class="form-control" id="user" name="user">
                        <option value="">Select Developer</option>
                        <?php foreach ( $user_options as $user_id => $user_name ) : ?>
                            <option value="<?php echo $user_id; ?>"><?php echo $user_name; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group mt-2 text-center">
                    <button class="btn btn-primary px-5" type="submit"><?php _e('Submit', 'mytextdomain') ?></button>
                    <input type='hidden' name='project' id='project' value='project' />
                    <!-- <input class="btn btn-primary px-5" type="button" value="Submit" name="projectsubmit"> -->
                </div>
                <?php wp_nonce_field( 'cpt_nonce_action', 'cpt_nonce_field' ); ?>
            </form>
        </div>
    </div>
</div>

      </div>

    </div>
  </div>
</div>







<?php// get_footer();?>