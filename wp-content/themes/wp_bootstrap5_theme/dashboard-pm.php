<?php 
/**
 * Template Name: Dashboard 
*/
get_header();?>

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
        <!-- <div class="login">
        <a role="button" class="btns" href="/wp/vanced/register/">Register</a>          
        </div> -->
    </div>
<?php

if (isset($_POST['update-meta'])) {
    $post_id = $_POST['post-id'];
    $new_value = $_POST['meta-field'];
    update_post_meta($post_id, 'meta_key', $new_value);
  }

if (isset($_POST['delete_post'])) {
    $post_id = $_POST['post-id'];
    wp_delete_post($post_id);
}
$current_user = wp_get_current_user();
$user = new WP_User( $current_user ->ID);

?>
<section class="content">
            <div class="container-fluid">
                <div class="col-lg-12">
                    <h2 class="my-5 text-center text-light">
                        <?php global $current_user; wp_get_current_user(); ?>
                        <?php 
                            if ( is_user_logged_in() ) { 
                            echo 'Welcome ' . $current_user->user_login . "\n"; 
                            } else { 
                            wp_loginout(); 
                            } 
                        ?>
                    </h2>
                    <div class="m-2 card card-outline card-success">
                        <div class="card-header">
                            <div class=" d-flex  gap-5">
                                <h3 class="flex-grow-1 text-center text-primary">List of Projects</h3>
                                <a class=" ms-auto btn btn-primary" href="../create-project"> Add New project</a>
                            </div>
                        </div>
                        <div class="card-body">
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
                                        <th>Assigned Developer</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <?php
                                // The Query
                                $query = new WP_Query(array('post_type' => 'project'));
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

                                $project_user = '';
                                if ( $project_user_id ) {
                                    $user_info = get_userdata( $project_user_id );
                                    if ( $user_info ) {
                                        $project_user = $user_info->display_name;
                                    }
                                }

                                ?>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>
                                            <p><b><?php the_title();?></b></p>
                                        </td>
                                        <td>
                                            <p><?php the_content();?></b></p>
                                            <p class="truncate"></p>
                                        </td>
                                        <td><b><?php echo esc_attr( $project_start ) ;?></b></td>
                                        <td><b><?php echo esc_attr( $project_end ) ;?></b></td>
                                        <td>
                                            <span <?php if ($project_status == 'Pending') { echo'class="badge text-bg-danger"'; } ?> <?php if ($project_status == 'In Progress') { echo'class="badge text-bg-primary"'; } ?> <?php if ($project_status == 'Completed') { echo'class="badge text-bg-success"'; } ?> >
                                                <?php echo esc_attr( $project_status ) ;?>
                                            </span>                   
                                        </td>
                                        <td>
                                            <span class=''><?php echo esc_attr( $project_user) ;?></span>                        
                                        </td>
                                        <td>
                                            <div class="mt-2 d-flex gap-1" >
                                                <a href="../edit-project/?post_id=<?php echo get_the_ID(); ?>"><input class="btn btn-primary"type="button" value="Edit"></a>
                                                <form action="" method="post">
                                                    <input type="hidden" name="meta-field" value="<?php echo get_post_meta(get_the_ID(), 'project_user', true); ?>">
                                                    <input type="hidden" name="post-id" value="<?php echo get_the_ID(); ?>">
                                                    <button class="btn btn-primary"type="submit" name="delete_post">Del</button>
                                                </form>
                                            </div>                       
                                        </td>
                                    </tr>	
                                    
                                </tbody>
                                <?php
                                    endwhile;
                                    //Reset Query
                                    wp_reset_query();
                                endif;
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!--/. container-fluid -->
        </section>
<?php
?>
        


<?php get_footer();?>