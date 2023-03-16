<?php get_header();?>


<div class="homepage">
    <div class="homepage-heading">
        <div class="heading2">
            <div class="brand">
                <li class="list">PROJECT MANAGEMENT SYSTEM</li>
            </div>
            <div class="links">
                <li class="list"><a href="#homepage">Home</a></li>
                <li class="list"><a href="#second-page">Service</a></li>
                <li class="list"><a href="#contact-page">Contact</a></li>
            </div>
        </div>
        <div class="member">
                <button><li class="list"><a href="#">Login</a></li></button>
        </div>
    </div>

    <div class="homepage-content">
        <h1>Effortlessly manage Your Projects with our Powerful Project Management System.</h1>
        <div class="buttons">
            <button class="login">Login</button>
            <button class="contact">Contact-Us</button>
        </div>
    </div>
</div>

<div class="second-page">
    <h1>OFFERED SERVICES</h1>
    <p>Effortlessly Manage Your Projects With Our Powerful Project Management System</p>
    <p>Assign Tasks, Track Progress and Streamline Workflows With Ease</p>

</div>


<div class="contact-page" style="margin-bottom:50px">
    <h1>CONTACT DETAILS</h1>
    <P>For any type of inquiries please dont hesitate to ge intouch with us.<br> The easiest way is to send us an email to the following adress or use the form below.</P>
    <div class="row justify-content-center">
    <div class="row ">
    <div class="col-lg-7 mx-auto">
    <div class="card mt-2 mx-auto p-4 bg-light">
        <div class="card-body bg-light">
    
        <div class = "container" style="padding-bottom:30px;">
        <form id="contact-form" role="form" method="post">
            <div class="controls">

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="form_name">Firstname *</label>
                        <input id="form_name" type="text" name="fullname" class="form-control" placeholder="Please enter your full name *" required="required" data-error="Firstname is required.">
                        
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="form_lastname">Email *</label>
                        <input id="form_lastname" type="text" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Lastname is required.">
                    </div>
                </div>
            </div>
            <div class="row">
                
                    <div class="form-group">
                        <label for="form_email">Telephone *</label>
                        <input id="form_email" type="number" name="telephone" class="form-control" placeholder="Please enter your Number *" required="required" data-error="Valid email is required.">
                        
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="form_message">Message *</label>
                        <textarea id="form_message" name="message" class="form-control" placeholder="Write your message here." rows="4" required="required" data-error="Please, leave us a message."></textarea
                            >
                        </div>

                    </div>


                <div class="col-md-12">
                    <div class="reg-btn" style="padding-top:20px;">
                    <input type="submit" value="Register" name="submitbtn" class="btn btn-primary btn-block">
                    </div>           
            
        </div>
                
            </div>
        
            </div>


    </div>
        </form>
    </div>
        </div>


</div>
    

</div>


</div>
</div>




</div>
</div>



<?php get_footer();?>