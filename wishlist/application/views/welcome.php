<?php
if($this->session->loggedin){
echo "Welcome to your account";

    echo " as ". $this->session->userdata('email');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V12</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css"/>

    <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/images/icons/favicon.ico"/>
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
<body >
<nav class="navbar navbar-dark bg-dark navbar-expand-sm" style="border-bottom:3px solid #0083d6;background:#292bc;opacity:0.7">
    <div class="container">

        <a class="navbar-brand" href="#">WishList Application</a>
        <ul class="navbar-nav">
            <li class="nav-item mx-2" active>
                <a class="nav-link " href="#">Home</a>
            </li>
            <li class="nav-item mx-2">
                <a class="nav-link" href="#">View your list</a>
            </li>
            <li class="nav-item mx-2">
                <a class="nav-link" href="<?php echo base_url()?>index.php/Welcome/create">Create new item</a>
            </li>
            <li class="nav-item mx-2">
                <a class="nav-link" href="contact.html">Contact</a>
            </li>
            <li class="nav-item mx-2">
                <a class="nav-link" href="register.php">Sign up</a>
            </li>
            <li class="nav-item mx-2">
                <a class="nav-link" href="Login.php">Sign in</a>
            </li>
            <li class="nav-item mx-2">
                <a class="nav-link" href="Login.php">Logout</a>
            </li>
            <li>
                <button id="logout">Logout</button>
            </li>
        </ul>
    </div>
</nav>
<div class="limiter">
    <div class="container-login100" style="background-image: url('images/img-01.jpg');">

            <section class="page-section clearfix">
                <div class="container">
                    <div class="intro">
                        <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/intro.jpg" alt="">
                        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                            <h2 class="section-heading mb-4">
                                <span class="section-heading-upper"><?php echo $this->session->userdata('wishlist_name'); ?></span>

                            </h2>
                            <p class="mb-3"><?php echo $this->session->userdata('description'); ?>
                            </p>
                            <div class="intro-button mx-auto">
                                <a class="btn btn-primary btn-xl" href="#">Visit Us Today!</a>
                            </div>
                        </div>
                    </div>

            </section>

        </div>
    </div>
</div>
<?php }
else {
    redirect(site_url('Login'));
}
?>

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