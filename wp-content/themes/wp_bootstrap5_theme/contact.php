<?php
/**
 * Template Name:My Contact
 */get_header();

?>

<head>
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
<section class="contact">
        <div class="header">
            <h2>Contact</h2>
            <p>Talk to our Agents now to  receive  our 
services in every part of the world.</p>
        </div>

        <div class="container">
            <div class="info_container">

                <div class="location info_item">
                    <div class="icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="information">
                        <h4>Location:</h4>
                        <p>Nairobi Kenya Next to “nk Sacco Building 
Call or Visit us Today.</p>
                    </div>
                </div>

                <div class="email info_item">
                    <div class="icon">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="information">
                        <h4>Email:</h4>
                        <p>Talk to our Agents now:
<br>Crispinmanda06@gmail.com</p>
                        
                    </div>
                </div>

                <div class="call info_item">
                    <div class="icon">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="information">
                        <h4>Call:</h4>
                        <p>+254 712321 004</p>
                    </div>
                </div>

                <div class="open_hours info_item">
                    <div class="icon">
                        <i class="fa-solid fa-clock"></i>
                    </div>
                    <div class="information">
                        <h4>Open Hours:</h4>
                        <p>Mon-Sun: 24 Hrs</p>
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
        <input type="text" id="name" name="firstname" class="form-control"  placeholder="input your First Name..." />
        
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form3Example2">Last name</label>
        <input type="text" id="name" name="secondname" class="form-control"  placeholder="input your second Name..." />
        
      </div>
    </div>
  </div>

  <!-- Email input -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form3Example1">Email</label>
        <input type="text" id="useremail" name="email" class="form-control" placeholder="input your email..."/>
        
      </div>
    </div>

    <!--Telephone -->
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form3Example2">Telephone Number</label>
        <input type="text" name="telephone" id="tel" class="form-control"  placeholder="input your telephone number..." />
       
      </div>
    </div>
  </div>


   <!-- Message input -->
   <div class="form-outline mb-4">
   <label class="form-label" for="form4Example3"  placeholder="input your message...">Message</label>
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



<?php

 get_footer();

?>