<?php
/*
Template Name: Employees List
*/
?>

<style>
		.homepage-heading {
	width: 100%;
	padding-top: 1vw;
	display: flex;
	justify-content: space-between;
	align-items: center;
  background-color:#37362A;
    
}
.heading2 {
	display: flex;
	justify-content: space-evenly;
	align-items: center;
	gap: 450px;
    font-family: Arial, Helvetica, sans-serif;
    
}
.links {
	display: flex;
	justify-content: space-evenly;
    gap: 50px;
   
}
.links a {
  color:white;
 
}


.list {
	margin: 20px;
	list-style: none;
  color:white;
 
}
.brand img{
  margin:15px;
  width: 130px;
  height:80px;
}
a {
	text-decoration: none;
	color: #090D5A;
	display: inline-block;

}
.btns{
	color: #fff;
	padding: 5px;
}
.login{
	background-color: #090D5A;
	color: #fff;
	border-radius: 5px	;
}
	</style>
	<div class="homepage-heading">
        <div class="heading2">
            <div class="brand">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Free_sample_By_Wix.jpg" alt="img" height="80">

            </div>
            <div class="links">
              <li class="list"><a href="/easyM/">HOME</a></li>
              <li class="list"><a href="/easyM/about/">ABOUT</a></li>
              <li class="list"><a href="/easyM/contact/">CONTACT</a></li>

            </div>
            
        </div>
        <div class="login">
        <a role="button" class="btns" href="/wp/vanced/register/">Register</a>          
        </div>
    </div>


<head>
<link rel="stylesheet" href="wp-content/themes/wp_bootstrap5_theme/assets/css/front.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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
</style>


<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 col-md-2  sidenav hidden-xs">
  
      <ul class="nav nav-pills ">
        <li ><a href="../../easyM/dashboard-url/">Dashboard</a></li>
        <li><a href="../../easyM/profile/">Profile</a></li>
        <li  class="active"><a href="../..easyM/employees/">Users</a></li>
        <li ><a href="#section3">Projects list</a></li>
        <li><a href="#section3">Approve User</a></li>
        <li><a href="#section3">Account Settings</a></li>
        <li><a href="#section3">Deactivate User</a></li>
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

        /* .search-results {
    margin-top: 20px;
}

.search-results h2 {
    font-size: 24px;
    margin-bottom: 10px;
}

.search-results .entry-title {
    font-size: 18px;
    margin-bottom: 5px;
}

.search-results .entry-content {
    font-size: 14px;
    margin-bottom: 10px;
} */

        
        
 
    </style>
    <div class="col-sm-9 col-md-10">
      <div class="well" id="well" style='background-color: #37362A; color:white;'>
        <h4>Welcome to Easy Manage</h4>
        <a href="../../easyM/create-project/">
         <button><h6>Add Project</h6></button>
        </a>
        <form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <label for="search-field"><?php _e( 'Search for:', 'textdomain' ); ?></label>
  <input type="search" name="s" id="search-field" value="<?php echo get_search_query(); ?>" />
  <button type="submit"><?php _e( 'Search', 'textdomain' ); ?></button>
</form>



<a href="<?php echo wp_logout_url( home_url() ); ?>">Logout</a>

      </div> 
        
<table class="table table-striped">
<?php
$user_query = new WP_User_Query( array( 'orderby' => 'user_registered' ) );
if ( ! empty( $user_query->results ) ) {
?>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Deactivate</th>

        </tr>
    </thead>
    <tbody>
    <?php foreach ( $user_query->results as $user ) { ?>
    <tr>
        <td><?php echo $user->ID; ?></td>
        <td><?php echo $user->display_name; ?></td>
        <td><?php echo $user->user_email; ?></td>
        <td><?php echo $user->user_status; ?></td>
        <td>
            <?php if ( current_user_can( 'manage_options' ) ) { ?>
                <form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
                    <input type="hidden" name="action" value="deactivate_user">
                    <input type="hidden" name="user_id" value="<?php echo $user->ID; ?>">
                    <button type="submit"><?php _e( 'Deactivate', 'textdomain' ); ?></button>
                    <?php wp_nonce_field( 'deactivate_user', 'deactivate_user_nonce' ); ?>
                </form>
            <?php } ?>
        </td>

        <!-- /////////////////////////////////// -->
        <!-- <?php //if ( have_posts() ) : ?>
  <ul>
  <?php //while ( have_posts() ) : the_post(); ?>
    <li>
      <h3><a href="<?php //the_permalink(); ?>"><?php //the_title(); ?></a></h3>
      <p><?php// echo get_post_meta( get_the_ID(), 'email', true ); ?></p>
      <p><?php //echo get_post_meta( get_the_ID(), 'project', true ); ?></p>
    </li>
  <?php //endwhile; ?>
  </ul>
<?php //else : ?>
  <p><?php _e( 'No users found.', 'textdomain' ); ?></p>
<?php//// endif; ?>

    </tr>
<?php } ?> -->








    </tbody>
</table>
<?php
} else {
    echo 'No users found.';
}



?>

  
</table>
      </div>
    </div>
  </div>
</div>



<?php

 get_footer();

?>


