<?php 
/**
 * Template Name: Dashboard
*/

//get_header();?>

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
	<!-- <div class="homepage-heading">
        <div class="heading2">
            <div class="brand">
            <img src="<?php //echo get_stylesheet_directory_uri(); ?>/assets/img/Free_sample_By_Wix.jpg" alt="img" height="80">

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
    </div> -->


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
        <li  class="active"><a href="../../easyM/dashboard-url/">Dashboard</a></li>
        <li ><a href="../../easyM/profile/">Profile</a></li>
        <li><a href="../../easyM/users/">Users</a></li>
        <li ><a href="#section3">Projects list</a></li>

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
        #edit button{
          background-color:#10A54BC9;
          color:white;
          border:1px solid black;
          border-radius:5px;
          width:50px;


        }
        
        
 
    </style>
    <div class="col-sm-9 col-md-10">
      <div class="well" id="well" style='background-color: #37362A; color:white;'>
        <h4>Welcome to Easy Manage</h4>
         <a href="<?php echo wp_logout_url( home_url() ); ?>">Logout</a>
      </div> 
        
<!-- <table class="table table-striped"></table> -->

                           <table class="table table-hover table-condensed" id="list">
                                <colgroup>
                                    <col width="5%">
                                    <col width="10%">
                                    <col width="25%">
                                    <col width="15%">
                                    <col width="15%">
                                    <col width="10%">
                                    <col width="10%">
                                    <col width="10%">
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Project</th>
                                        <th>Description</th>
                                        <th>Project Started</th>
                                        <th>Project Due Date</th>
                                        <th>Project Status</th>
                                        <th>React</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <?php

                                if (isset($_POST['accepted'])) {
                                     $post_id = $_POST['post-id'];
                                     $new_value = $_POST['meta-field'];
                                     update_post_meta($post_id, 'project_status_select', $new_value);
                             }
                                 
                                 if (isset($_POST['completed'])) {
                                     $post_id = $_POST['project-id'];
                                     $new_value = $_POST['meta-field2'];
                                     update_post_meta($post_id, 'project_status_select', $new_value);
                                 }
                                 
                                 $current_user = wp_get_current_user();
                                 $user = new WP_User( $current_user ->ID);
                                 $project_status = get_post_meta(get_the_ID(), 'project_status_select', true);
                                 
                                 // The Query
                                 $query = new WP_Query(array(
                                     'post_type' => 'project',
                                     'meta_query' => array(
                                         array(
                                             'key' => 'project_user',
                                             'value' => $current_user->ID,
                                         )
                                     )
                                 ));
                                 query_posts( $query );

// The Loop
                                  if($query->have_posts()):
                                  while ( $query->have_posts() ) : 
                                      $query->the_post();  
                                  // your post content ( title, excerpt, thumb....)
                                  $project_start = get_post_meta(get_the_ID(), 'project_start', true);
                                  $project_end = get_post_meta(get_the_ID(), 'project_end', true);
                                  $project_status = get_post_meta(get_the_ID(), 'project_status_select', true);
                                  
                                  $project_user_id = get_post_meta(get_the_ID(), 'project_user', true);
                                  
                                  endwhile;
                                  //Reset Query
                                  wp_reset_query();
                                  endif;
                                  ?>
                            
                                <tbody>
                                    <tr>
                                        <td class="text-center"><p class="mt-2">1</p></td>
                                        <td >
                                            <p class="mt-2"><b><?php echo the_title();?></b></p>
                                        </td>
                                        <td>
                                            <p class="mt-0 text-truncate"><?php echo the_content();?></b></p>
                                        </td>

                                        <td><p class="mt-2"><b><?php echo esc_attr( $project_start ) ;?></b></p></td>
                                        <td><p class="mt-2"><b><?php echo esc_attr( $project_end ) ;?></b></p></td>
                                        <td>
                                            <p class="mt-2"><span class=''><?php echo esc_attr( $project_status ) ;?></span></p>                      
                                        </td>

                                        <td>
                                            <div class="mt-2 d-flex gap-1" >
                                                <form action="" method="post">
                                                    <input type="hidden" name="meta-field" value="In Progress">
                                                    <input type="hidden" name="post-id" value="<?php echo get_the_ID(); ?>">                      
                                                    <button class="btn btn-primary"type="submit" name="accepted" <?php if ($project_status == 'In Progress' || $project_status == 'Completed') { echo'disabled'; } ?> >Accept</button>
                                                </form>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mt-2 d-flex gap-1" >
                                                <form action="" method="post">
                                                    <input type="hidden" name="meta-field2" value="Completed">
                                                    <input type="hidden" name="project-id" value="<?php echo get_the_ID(); ?>">
                                                    <button class="btn btn-primary"type="submit" name="completed" <?php if ($project_status == 'Completed') { echo'disabled'; } ?>>Completed</button>
                                                </form>
                                            </div>                       
                                        </td>
                                    </tr>	
                                    
                                </tbody>
                               
                            </table>
  


  
<!-- </table> -->
      </div>
    </div>
  </div>
</div>
 


<?php //get_footer();?>