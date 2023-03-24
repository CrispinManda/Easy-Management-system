<?php
/**
 * Template Name: Profile Page Template
 */
get_header();
?>
<!DOCTYPE html>
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
<body>




<style>
    #nav{
        height: 300px;
    }
    .nav .navbar-nav{
        display: inline;
    }
</style>


<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 col-md-2  sidenav hidden-xs">
  
      <ul class="nav nav-pills ">
        <li ><a href="">Dashboard                <h4 class="my-5 text-center text-light">
                        <?php global $current_user; wp_get_current_user(); ?>
                        <?php 
                            if ( is_user_logged_in() ) { 
                            echo 'Welcome ' . $current_user->user_login . "\n"; 
                            } else { 
                            wp_loginout(); 
                            } 
                        ?>
                    </h4></a></li>
        <li ><a href="../../easyM/users"><ion-icon name="people" style="margin-right: 10px;font-size: 20px;"></ion-icon>Users</a></li>
        <li class="active"><a href="../../easyM/profile/"><ion-icon name="person-outline" style="margin-right: 10px;font-size: 20px; "></ion-icon>Profile</a></li>
        <li><a href="../../easyM/google-map"><ion-icon name="navigate" style="margin-right: 10px;font-size: 20px; "></ion-icon>User Location</a></li>
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
          background-color:green;
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
        #red button{
          background-color:red;
        }
        
        
        
 
    </style>
   <div class="col-sm-9 col-md-10">
  <div class="well" id="well" style='background-color: #37362A; color:white;'>
    <h4>Welcome to Easy Manage</h4>
    
   
    <br/><br/>

    <button style="background-color: #960018; width: 70px; border-radius: 5px;">
  <a href="<?php echo wp_logout_url( home_url() ); ?>" style="color: white; text-decoration: none;">Logout</a>
</button>
  </div> 

 
<?php
if ( is_user_logged_in() ) {
  // Get current user ID
  $user_id = get_current_user_id();
  
  // Get user data
  $user_info = get_userdata( $user_id );
  
  // Display user name and email
  echo '<h1>' . esc_html( $user_info->display_name ) . '</h1>';
  
  // Display table to show user information
  echo '<table class="table">';
  echo '<tbody>';
  
  // Display user ID
  echo '<tr>';
  echo '<th>ID</th>';
  echo '<td>' . esc_html( $user_id ) . '</td>';
  echo '</tr>';
  
  // Display user name
  echo '<tr>';
  echo '<th>Name</th>';
  echo '<td>' . esc_html( $user_info->display_name ) . '</td>';
  echo '</tr>';
  
  // Display user email with form to update email
  echo '<tr>';
  echo '<th>Email</th>';
  echo '<td>';
  echo '<form method="post">';
  echo '<div class="input-group">';
  echo '<input type="email" name="user_email" id="user_email" class="form-control" value="' . esc_attr( $user_info->user_email ) . '">';
  echo '<span class="input-group-btn">';
  echo '<input type="submit" name="update_profile" value="Update" class="btn btn-primary">';
  echo '</span>';
  echo '</div>';
  echo '</form>';
  echo '</td>';
  echo '</tr>';
  
  // Display user role
  echo '<tr>';
  echo '<th>Role</th>';
  echo '<td>' . ucfirst( esc_html( $user_info->roles[0] ) ) . '</td>';
  echo '</tr>';
  
  echo '</tbody>';
  echo '</table>';
  
  // Update user email when form is submitted
  if ( isset( $_POST['update_profile'] ) ) {
    $new_email = sanitize_email( $_POST['user_email'] );
    
    if ( is_email( $new_email ) ) {
      wp_update_user( array(
        'ID' => $user_id,
        'user_email' => $new_email,
      ) );
      
      echo '<div class="alert alert-success" role="alert">Profile updated successfully.</div>';
    } else {
      echo '<div class="alert alert-danger" role="alert">Please enter a valid email address.</div>';
    }
  }
} else {
  // Display error message if user is not logged in
  echo '<div class="alert alert-danger" role="alert">You need to be logged in to view your profile.</div>';
}
?>














<?php

 //get_footer();

?>



   


<?php// get_footer();?>