<?php
/**
 * Template Name: Add-User
 */
get_header();
?>

<head>
    <link rel='stylesheet' href='wp-content/themes/wp_bootstrap5_theme/assets/css/add_project.css'>
</head>

<header id='main-header'>
    <div class='account'>
        <figure>
            <div class='avatar'>
                <img src='wp-content/themes/wp_bootstrap5_theme/assets/img/user.png' alt='' class='w-100 h-100'>
                <div class='effect'></div>
            </div>
            <figcaption>
                <h2 class='text-md'>John Doe</h2>
            </figcaption>
        </figure>
    </div>
    <div class='search'>
        <span class='icon flaticon-search color-fff'></span>
        <input type='text' placeholder='Search' name='search' id='search'>
    </div>
</header>
<!-- End Header -->

<!-- Start Main Content -->
<section class='container-fluid no-padding'>
    <div class='row wrapper no-padding'>
        <div class='col-xl-1 col-sm-2'>
            <nav class='menu-left'>
                <ul class='list'>
                    <li>
                        <a href='#' title=''>
                            <span class='icon flaticon-home'></span>
                            <span class='text'>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href='#' title='' class='active'>
                            <span class='icon flaticon-notepad-1'></span>
                            <span class='text'>Tasks</span>
                        </a>
                    </li>
                    <li>
                        <a href='#' title=''>
                            <span class='icon flaticon-settings-5'></span>
                            <span class='text'>Settings</span>
                        </a>
                    </li>
                    <li>
                        <a href='#' title=''>
                            <span class='icon flaticon-power'></span>
                            <span class='text'>Exit</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class='col-xl-11 col-sm-10'>
            <div class='main-content'>
                <header class='header-content'>
                    <ul class='list list-inline'>
                        <li>
                            <a href='' title=''>
                                <span class='state red'></span>
                                <span>Task</span>
                            </a>
                        </li>
                        <li>
                            <a href='' title=''>
                                <span class='state yellow'></span>
                                <span>Blocker</span>
                            </a>
                        </li>
                        <li>
                            <a href='' title='Bug'>
                                <span class='state green'></span>
                                <span>Notification</span>
                            </a>
                        </li>
                    </ul>
                    <div class='action'>
                        <a href='' title=''>New Task </a>
                        <button class='btn btn-primary'>New Board <span class='flaticon-add'></span></button>
                    </div>
                </header>
                <!-- Main content -->
                <section class='content'>
                    <div class='container-fluid'>
                        <div class='col-lg-12'>
                            <div class='m-2 card card-outline card-success'>
                                <div class='card-header'>
                                    <div class='card-tools'>
                                        <h1>New project</h1>
                                    </div>
                                </div>
                                <div class='card-body justify-content-center'>
                                        <form method="POST" action="">
                                        <div class='form-field1'>
                                            <div class='row  justify-content-center'>
                                                <div class='col'>
                                                    <label for='name'>First Name</label><br>
                                                    <input type='text' class='form-control' name='fname' placeholder=''
                                                        required>
                                                </div>
                                                <div class='col'>
                                                    <label for='name'>Email</label>
                                                    <input type='email' class='form-control' name='email' placeholder=''
                                                        required>
                                                </div>
                                            </div>
                                         </div>
                                         <div class='form-field1'>
                                            <div class='row  justify-content-center'>
                                                <div class='col'>
                                                    <label for='name'> Last Name</label><br>
                                                    <input type='text' class='form-control' name='lname' placeholder=''
                                                        required>
                                                </div>
                                                <div class='col'>
                                                    <label for='name'>Password</label>
                                                    <input type='text' class='form-control' name='password' placeholder=''
                                                        required>

                                                </div>
                                            </div>
                                         </div>
                                    <div class='form-field1'>
                                            <div class='row  justify-content-center'>
                                                <div class='col'>
                                                    <label for='name'>User Role</label><br>
                                                    <input type='text' class='form-control' name='urole' placeholder=''
                                                        required>
                                                </div>
                                                <div class='col'>
                                                    <label for='name'>Confirm Password</label>
                                                    <input type='text' class='form-control' name='cpassword' placeholder=''
                                                        required>
                                                </div>
                                            </div>
                                         </div>
                                    </div>
                                    </form>
                                    <div class='btns-section'>
                                        <div class="btn-sec1">
                                        <button type='button' class='btn btn-primary btn-lg' name="submit">Save</button>
                                        </div>
                                        <div class="btn-sec2">
                                        <button type='button' class='btn btn-secondary btn-lg'>Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </section>
                <?php get_footer();
                ?>