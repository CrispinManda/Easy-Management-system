<?php
/**
 * Template Name: Dashboard
 */
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



<head>
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
        <li><a href="../../easyM/profile/"><ion-icon name="person-outline" style="margin-right: 10px;font-size: 20px; "></ion-icon>Profile</a></li>
        <li><a href="../../easyM/project"><ion-icon name="stats-chart" style="margin-right: 10px;font-size: 20px; "></ion-icon>Projects List</a></li>
        <li class="active"><a href="../../easyM/google-map"><ion-icon name="navigate" style="margin-right: 10px;font-size: 20px; "></ion-icon>User Location</a></li>
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
    <a href="../../easyM/create-project/">
     <button><h6>Add Project</h6></button>
    </a>
    
    <br/><br/>
    <!-- <form action="" method="GET">
      <input type="text" name="search" placeholder="Search users...">
      <button  type="submit" >Search</button>
    </form> -->
    <button style="background-color: #960018; width: 70px; border-radius: 5px;">
  <a href="<?php echo wp_logout_url( home_url() ); ?>" style="color: white; text-decoration: none;">Logout</a>
</button>
</div>

<div class="container">
<body>   
       <h2>Click to View Location in the Map </h2>   
        <button style ="background-color:green;Color:white;" onclick="getlocation();"> Show Position</button>   
        <div id="demo" style="width: 600px; height: 400px; margin-left: 200px;"></div>   
         
        <script src="https://maps.google.com/maps/api/js?sensor=false"> </script>   
          
        <script type="text/javascript">   
        function getlocation(){   
            if(navigator.geolocation){   
                navigator.geolocation.getCurrentPosition(showPos, showErr);   
            }  
            else{  
                alert("Sorry! your Browser does not support Geolocation API")  
            }  
        }   
        //Showing Current Poistion on Google Map  
        function showPos(position){   
            latt = position.coords.latitude;   
            long = position.coords.longitude;   
            var lattlong = new google.maps.LatLng(latt, long);   
            var myOptions = {   
                center: lattlong,   
                zoom: 15,   
                mapTypeControl: true,   
                navigationControlOptions: {style:google.maps.NavigationControlStyle.SMALL}   
            }   
            var maps = new google.maps.Map(document.getElementById("demo"), myOptions);   
            var markers =   
            new google.maps.Marker({position:lattlong, map:maps, title:"You are here!"});   
        }   
  
        //Handling Error and Rejection  
             function showErr(error) {  
              switch(error.code){  
              case error.PERMISSION_DENIED:  
             alert("User denied the request for Geolocation API.");  
              break;  
             case error.POSITION_UNAVAILABLE:  
             alert("USer location information is unavailable.");  
            break;  
            case error.TIMEOUT:  
            alert("The request to get user location timed out.");  
            break;  
           case error.UNKNOWN_ERROR:  
            alert("An unknown error occurred.");  
            break;  
           }  
        }        </script>   
    </body>   
</div>









<?php

 //get_footer();

?>