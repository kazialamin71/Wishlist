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
    <div class="container-login100" style="background-image: url('#');">
        <div class="wrap-login100 p-t-190 p-b-30">
            <?php
            if($this->session->flashdata('error')){
                echo $this->session->flashdata('error');
            } ?>
<!--            method="post" action="--><?php //echo site_url('Login/verify')?>;
            <form class="login100-form validate-form">

					<span class="login100-form-title p-t-20 p-b-45">
						Welcome to wishlist Applications
					</span>

                <div class="wrap-input100 validate-input m-b-10" data-validate = "Email is required">
                    <input class="input100" type="text" name="email" placeholder="email" id="email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
                </div>

                <div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
                    <input class="input100" type="password" name="pass" placeholder="Password" id="password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
                </div>

                <div class="container-login100-form-btn p-t-10">
                    <button class="login100-form-btn" id="login">
                        Login
                    </button>
                </div>

                <div class="text-center w-full p-t-25 p-b-230">
                    <a href="#" class="txt1">
                        Forgot Username / Password?
                    </a>
                </div>

                <div class="text-center w-full">
                    <a class="txt1" href="<?php echo site_url('Login/reg'); ?>">
                        Create new account
                        <i class="fa fa-long-arrow-right"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>




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