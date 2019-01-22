<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V12</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css"/>
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/util.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css"/>
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100" style="background-image: url('images/img-01.jpg');">
        <div class="wrap-login100 p-t-190 p-b-30">
            <form class="login100-form validate-form" action="<?php echo site_url("Login/registration"); ?>" method="post">

					<span class="login100-form-title p-t-20 p-b-45">
						Welcome to wishlist Application
					</span>
                <span class="login100-form-title p-t-20 p-b-45">
						Register Here
					</span>
                <?php
                if($this->session->flashdata('error')){
                    echo $this->session->flashdata('error');
                } ?>
<div class="row">

                <div class="wrap-input100 validate-input m-b-10" data-validate = "firstname is required" >
                    <input class="input100" type="text" name="firstname" placeholder="First Name" id="form_firstname"><span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>

</div>
    <div class="col-md-1">
        <span class="error_form" id="firstname_error_message">Test</span>
    </div>
</div>


                <div class="row">

                <div class="wrap-input100 validate-input m-b-10" data-validate = "lastname is required">
                    <input class="input100" type="text" name="lastname" placeholder="Last Name" id="form_lastname">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
                </div>

                <div class="col-md-1">
                    <span class="error_form" id="lastname_error_message">Test</span>
                </div>
                </div>
                <div class="row">
                <div class="wrap-input100 validate-input m-b-10" data-validate = "Email is required">
                    <input class="input100" type="text" name="email" placeholder="Email" id="form_email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
                </div>
                    <div class="col-md-1">
                        <span class="error_form" id="email_error_message">Test</span>
                    </div>
                </div>
                <div class="row">
                <div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
                    <input class="input100" type="password" name="pass" placeholder="Password" id="form_password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
                </div>
        <div class="col-md-1">
            <span class="error_form" id="password_error_message">Test</span>
        </div>
    </div>

                <div class="row">
                        <div class="wrap-input100 validate-input m-b-10" data-validate = "C assword is required">
                            <input class="input100" type="password" name="repass" placeholder="Retype Password" id="form_repassword">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
                        </div>

                    <div class="col-md-1">
                        <span class="error_form" id="repassword_error_message">Test</span>
                    </div>
                </div>

                <div class="row">

                    <div class="wrap-input100 validate-input m-b-10" data-validate = "wishlist is required">
                        <input class="input100" type="text" name="wishlist_name" placeholder="Name of the wishlist" id="form_lastname">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
                    </div>

                    <div class="col-md-1">
                        <span class="error_form" id="wishlist_error_message">Test</span>
                    </div>
                </div>


                <div class="row">

                    <div class="wrap-input100 validate-input m-b-10" data-validate = "desc is required">
                        <textarea class="input100" type="text" name="desc" placeholder="description" id="form_lastname"></textarea>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">

						</span>
                    </div>

                    <div class="col-md-1">
                        <span class="error_form" id="lastname_error_message">Test</span>
                    </div>
                </div>

                <div class="container-login100-form-btn p-t-10">
                    <input class="login100-form-btn" type="submit" value="submit"/>
                </div>
                    <?php echo site_url('Login/'); ?>
                </form>
                <div class="text-center w-full p-t-25 p-b-230">
                    <a href="#" class="txt1">
                        ALready registered?
                    </a>
                </div>

                <div class="text-center w-full">
                    <a class="txt1" href="<?php echo site_url('Login'); ?>">
                        login here
                        <i class="fa fa-long-arrow-right"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

<!--===============================================================================================-->
<script src="<?php echo base_url();?>assets/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url();?>assets/bootstrap/js/popper.js"></script>
<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.js"></script>
<!--===============================================================================================-->
<script src="../vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url();?>assets/js/main.js"></script>

</body>
</html>