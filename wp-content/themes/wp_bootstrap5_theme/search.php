<?php
get_header();
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

<div class="container">
  <h1><?php printf( __( 'Search Results for: %s', 'textdomain' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
  <?php if ( have_posts() ) : ?>
    <table class="table">
      <thead>
        <tr>
          <th><?php _e( 'Title', 'textdomain' ); ?></th>
          <th><?php _e( 'Type', 'textdomain' ); ?></th>
          <th><?php _e( 'Author', 'textdomain' ); ?></th>
          <th><?php _e( 'Date', 'textdomain' ); ?></th>
        </tr>
      </thead>
      <tbody>
        <?php while ( have_posts() ) : the_post(); ?>
          <tr>
            <td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
            <td><?php echo get_post_type(); ?></td>
            <td><?php the_author(); ?></td>
            <td><?php the_time( get_option( 'date_format' ) ); ?></td>
          </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
    <?php the_posts_pagination(); ?>
  <?php else : ?>
    <p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'textdomain' ); ?></p>
    <?php get_search_form(); ?>
  <?php endif; ?>
</div>

<style>
.table {
  width: 100%;
  max-width: 100%;
  margin-bottom: 1rem;
  background-color: transparent;
  color: #212529;
}

.table thead th {
  vertical-align: bottom;
  border-bottom: 2px solid #dee2e6;
}

.table tbody tr:nth-of-type(even) {
  background-color: rgba(0, 0, 0, 0.05);
}

.table td, .table th {
  padding: 0.75rem;
  vertical-align: top;
  border-top: 1px solid #dee2e6;
}


</style>

<?php
get_footer();
?>
