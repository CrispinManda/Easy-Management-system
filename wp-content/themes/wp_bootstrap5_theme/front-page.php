<?php get_header();?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="wp-content/themes/wp_bootstrap5_theme/assets/css/front.css">
</head>
<body>
<ul class="topnav">
  <li><div class="logo"> <img src="wp-content/themes/wp_bootstrap5_theme/assets/img/Free_sample_By_Wix.jpg" alt="" height="80x"></div></li>
  <li><a  href="/easyM/">HOME</a></li>
  <li><a href="/easyM/about/">ABOUT</a></li>
  <li><a href="/easyM/contact/">CONTACT</a></li>
  <li>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button onclick="window.location.href='/easyM/hidden/'">LOGIN</button>
</li>

  

</ul>
<div class="bgimage" >
<div class="slogan">
    <h4>‘’Effortlessly <br>
 manage
 your projects
 and team with
 Easy’’</h4>
</div>
</div> <br> <br>
<style>
  .contactinfo{
max-width: 100%;
max-height: 100%;
border-radius: 10px;
background:  #ECEAE8;
}
.conts2{
  display:flex;
  flex-direction:row;
}
body{
  margin:0;
  padding:0;
  box-sizing:border-box;
  background-color: white;
}
li button{
    margin-top:20px;
}
li .button{
    background-color:green;
}
    




</style>

<div class="grid-wrapper">
  <div class="grid-container">
    <div class="image-cell">
    <img src="wp-content/themes/wp_bootstrap5_theme/assets/img/istockphoto-.jpg" alt="">
    </div>
    <div class="text-cell">
    <h5 class="service">OUR SERVICES.</h5>
      <div class='inner-cell'>
      <p>User Account Management<br>
      Project Management.<br>
      User Deactivation.<br>
      Location Tracking.<br>
      Email Notifications.</p>
      </div>

    </div>
    <div class="text-cell2">
     
      <img src="wp-content/themes/wp_bootstrap5_theme/assets/img/R.jfif" alt="img">
    </div>
  </div>
</div>

<section class="contact">
        <div class="header">
          <h2>Contact Us</h2>
        </div>

        <div class="container">
            <div class="info_container">

                <div class="location info_item">
                    <div class="icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="information">
                        <h4>Get In Touch</h4>
                        Talk to our Agents now receive our 
                        services in every part of the </p>
                    </div>
                </div>

                <div class="email info_item">
                    <div class="icon">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="information">
                        <h4>Location</h4>
                        <p>Nairobi Kenya Next to “nk Sacco Building 
                        Call or Visit us Today</p>
                        
                    </div>
                </div>

                <div class="call info_item">
                    <div class="icon">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="information">
                        <h4>Email</h4>
                        <p>Talk to our Agents now. <br> E-mail crispinmanda06@gmail.com</p>
                    </div>
                </div>

                <div class="open_hours info_item">
                    <div class="icon">
                        <i class="fa-solid fa-clock"></i>
                    </div>
                    <div class="information">
                        <h4>Call</h4>
                        <p>+254 712 321 004</p>
                    </div>
                </div>

            </div>

            <div class="input_container">
            <form method="post">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form3Example1">First name</label>
        <input type="text" id="name" name="firstname" class="form-control"/>
        
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form3Example2">Last name</label>
        <input type="text" id="name" name="secondname" class="form-control"/>
        
      </div>
    </div>
  </div>

  <!-- Email input -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form3Example1">Email</label>
        <input type="text" id="useremail" name="email" class="form-control"/>
        
      </div>
    </div>

    <!--Telephone -->
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form3Example2">Telephone Number</label>
        <input type="text" name="telephone" id="tel" class="form-control" />
       
      </div>
    </div>
  </div>


   <!-- Message input -->
   <div class="form-outline mb-4">
   <label class="form-label" for="form4Example3">Message</label>
    <textarea class="form-control" name="message" id="message" rows="4"></textarea>
   
  </div>
  <!-- Submit button -->
  <button type="submit" name="submitbtn" class="btn btn-primary btn-block mb-4">Send</button>

 
</form>
            </div>
        </div>
    </section>

    <style>
      *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    font-family: 'Montserrat', sans-serif;
}

section{
    padding: 20px;
    overflow: hidden;
}

section .header{
    text-align: center;
    padding-bottom: 60px;
}

.header h2{
    font-size: 32px;
    font-weight: 600;
    margin-bottom: 20px;
    padding-bottom: 20px;
    position: relative;
}

.header h2::after{
    content: "";
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    display: block;
    width: 50px;
    height: 3px;
    background:  #222F77;
    margin: auto;
}

.header p{
    margin-bottom: 0;
    color: #6f6f6f;
}


.container{
    max-width: 1300px;
    box-shadow: 0px 2px 25px rgb(0 0 0 / 10%);
    border-radius: 10px;
    margin: auto;
    display: flex;
    transition: 0.4s all ease-in-out;
}

.info_container{
    padding: 20px;
    max-width: 35%;
    width: 100%;
    background: #008072;
    border-radius: 10px 0 0 10px;
    color: #fff;
}

.info_container .info_item{
    padding: 20px;
    background:  #222F77;
    border-radius: 10px;
    margin-bottom: 20px;
}

.info_container .info_item:last-child{
    margin: 0;
}

.info_item .icon{
    float: left;
    clear: left;
    margin-right: 15px;
    height: 75px;
}

.icon i{
    font-size: 20px;
    color: #fff;
    width: 44px;
    height: 44px;
    background-color: rgba(255, 255, 255, 0.2);
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    transition: all 0.3s ease-in-out;
}

.info_item:hover i{
    background: #fff;
    color: #009282;
}

.information h4{
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 5px;
}

.information p{
    font-size: 15px;
    line-height: 1.7;
}

.input_container{
    max-width: 65%;
    width: 100%;
    padding: 30px;
}

form .row{
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 30px;
}

form .form_control{
    border: 1px solid #ced4da;
    outline: none;
    font-size: 14px;
    padding: 12px 15px;
    color: #212529;
    width: 100%;
    margin-bottom: 25px;
    transition: 0.3s;
    line-height: 1.5;
}

.form_control:focus{
    border-color: #009282;
}

textarea{
    resize: none;
    font-family: sans-serif;
}

.btn{
    width: 100%;
    text-align: center;
}

.btn button{
    background:  #222F77;
    border: 0;
    padding: 16px 45px;
    color: #fff;
    border-radius: 50px;
    cursor: pointer;
    font-size: 17px;
    font-weight: 400;
    transition: 0.4s;
}

.btn button:hover{
    background: #019e8b;
}

@media screen and (max-width: 1400px) {
    
    .container{
        max-width: 1100px;
    }

    .information p{
        font-size: 13px;
    }
}

@media screen and (max-width: 1200px){
    .container{
        max-width: 900px;
    }
}

@media screen and (max-width: 991px){
    .container{
        max-width: 768px;
        flex-direction: column;
    }

    .info_container, .input_container{
        max-width: 100%;
    }

    .info_container{
        border-radius: 10px 10px 0 0;
    }

    .input_container{
        padding-top: 50px;
    }
}

@media screen and (max-width: 768px){
    section{
        padding: 50px 5px;
    }
    .container{
        max-width: 550px;
    }
    form .row{
        flex-direction: column;
        gap: 0;
    }
}
    </style>




</div>
    
</body>
</html>







<?php get_footer();?>