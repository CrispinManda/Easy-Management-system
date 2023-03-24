<?php 



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
              <!-- <li class="list"> <a href=""></a> <a href="<?php// echo wp_logout_url( home_url() ); ?>">LOGOUT</a></li> -->

            </div>
            
        </div>
        <!-- <div class="login">
        <a role="button" class="btns" href="/wp/vanced/register/">Register</a>          
        </div> -->
    </div>
<div class="wrapper">
  <div class="error-container">
   <h1 class="error-title">Oops! Page Not Found</h1>
   <p class="error-message">The page you are looking for might have been removed,<br> had its name changed, or is temporarily unavailable.</p>
   <a href="<?php echo home_url(); ?>" class="error-button">
  <button>Go to homepage</button>
</a>

 </div>
  <div class="svg">
   <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/people.svg" height="400px" alt="img">
  </div>
</div>
<style>
  .wrapper{
    display:flex;
    flex-direction:row;
    justify-content:space-around;
  }
  .error-container{
    margin-top:150px;
  }
  button{
    background-color:#222F77;
    color:white;
    padding:10px;
    border:1px solid black;
    border-radius:5px;
  }
  .svg img{
    margin-top:30px;
  }

</style>




<?php get_footer();?>