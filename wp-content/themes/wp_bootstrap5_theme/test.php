<?php
/*
Template Name: Test-Registration
*/
get_header();
?>

<head>
<!-- <link rel="stylesheet" href="./wp-content/themes/wp_bootstrap5_theme/assets/css/front.css"> -->
<!-- <link rel="stylesheet" href="../wp-content/themes/wp_bootstrap5_theme/assets/css/bt.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  

    

    .topnav { 
  background-color: #37362A;
  display: flex;


  margin-top:-70px;
 
}

.topnav li {
  list-style: none;
}

.topnav a {
  color: white;
  text-decoration: none;
  padding: 10px;

}
.module{
    height:80px;
}
.module1{
    height: 50px;
}
.topnav li a:hover {
  color: red;
} 


  </style>
</head>



<!-- =========================================== -->
<?php

$errors =array();

if(isset($_POST['signup'])){
    if ( isset( $_POST['password'] ) && $_POST['password'] != $_POST['passwordconfirm'] ){
        $errors[] = "Passwords do not match.";
    }
    
    if(empty($errors)){
        $user_login = $_POST['username'];
        $user_email = $_POST['email'];
        $user_pass  = $_POST['password'];
        

        $data = array(
            'user_login'           =>  $user_login, // the user's login username.
            'user_email'           =>  $user_email, //enter email
            'user_pass'	           =>  $user_pass, // not necessary to hash password ( The plain-text user password ).
            'role'                 =>  'member', //give role of member
            'show_admin_bar_front' =>  false, // display the Admin Bar for the user 'true' or 'false'
            'user_status'          =>  0, // set the user as inactive
            'meta_input' => array(
               'registration_status' => 'pending', // add custom field to mark the user as unverified
               'verified' => false, // add a custom field to mark the user as unverified
            )
        );
        
        $user_id = wp_insert_user( wp_slash($data) );
        
        if ( ! is_wp_error( $user_id ) ) {
            
            $success_message  = '<div class="alert alert-success alert-dismissible fade show" role="alert">';
            $success_message .= 'User '. $user_id. ' has been successfully registered.';
            $success_message .= '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
            $success_message .= '</div>';

            // send email to administrator to approve or deny the registration
            $to = get_option('admin_email');
            $subject = 'New user registration waiting for approval';
            $message = 'A new user has registered with the following details:\n\n';
            $message .= 'Username: ' . $user_login . '\n';
            $message .= 'Email: ' . $user_email . '\n\n';
            $message .= 'Click the following link to approve or deny the registration:\n\n';
            $message .= site_url('/registration-approval/') . '?user_id=' . $user_id . '&action=approve\n\n';
            $message .= 'Thank you';

            update_user_meta($user_id, 'registration_status', 'pending');
            
            wp_mail($to, $subject, $message);

        }else{
            $error_code = array_key_first( $user_id->errors );
            $error_message = $user_id->errors[$error_code][0];
            $errors[] = $error_message;
        }
    }

}
?>


                      
                <?php if (!empty($errors)): ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Warning!</strong>
                        <?php foreach ($errors as $error): ?>
                            &nbsp; <?php echo $error; ?>
                        <?php endforeach; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>
                <?php if (isset($success_message)): ?>
                  <?php echo $success_message; ?>
                <?php endif; ?>


<!-- =========================================== -->

<div class="topnav">
<div class="logo"><img src="<?php echo get_template_directory_uri()?>/assets/img/Free_sample_By_Wix.jpg" alt="" height="120px"></div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ">
      <li class="nav-item">
      <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="#" style="color:#fff; list-style:none;padding:20px; text-decoration:none; "></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/PMS/" style="color:#fff; list-style:none;padding:20px; text-decoration:none; ">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/PMS/about/"style="color:#fff; list-style:none;padding:20px; text-decoration:none; ">ABOUT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/PMS/contacts/"style="color:#fff; list-style:none;padding:20px; text-decoration:none; ">CONTACT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/PMS/wp-login.php"style="color:#fff; list-style:none;padding:20px; text-decoration:none; ">LOGIN</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>

<div class="module1">

</div>
<section class="vh-100 bg-image"
  style="background-image: url(../img/nathan-dumlao-LPRrEJU2GbQ-unsplash.jpg);">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6" style="margin-bottom: 40px">
          <div class="card" style="border-radius: 15px; margin-bottom: 40px">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create account</h2>

              <form action="" method="post">

                <div class="form-outline mb-4">
                <label>Username</label>
                <input class="floating-input form-control" name="username" type="text" placeholder="Enter Full Name " required>
                
                </div>

                <div class="form-outline mb-4">
                <label>Email</label>
                <input class="floating-input form-control" name="email"type="email" placeholder="Enter Your Email " required>
                
                </div>

                <div class="form-outline mb-4">
                <label>Password</label>
                <input class="floating-input form-control" name="password"type="password" placeholder="Password" required>
                 
                </div>

                <div class="form-outline mb-4">
                <label>Confirm Password</label>
                <input class="floating-input form-control" name="passwordconfirm"type="password" placeholder="confirm Password... " autocomplete="off">
                
                </div>

                <div class="form-check d-flex justify-content-center mb-5">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                  <label class="form-check-label" for="form2Example3g">
                    Agree with our <a href="#!" class="text-body"><u>Terms of service</u></a>
                  </label>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-white" name="signup">Sign Up</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="<?php echo esc_url(wp_login_url(get_permalink())); ?>"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

                <div class="module">

                </div>

<?php get_footer() ?>; 