$(function () {
    $("#firstname_error_message").hide();
    $("#lastname_error_message").hide();
    $("#email_error_message").hide();
    $("#password_error_message").hide();
    $("#repassword_error_message").hide();

    var error_firstname=false;
    var error_lastname=false;
    var error_email=false;
    var error_password=false;
    var error_repassword=false;

    $("#form_firstname").focusout(function () {
        check_firstname();
    });

    $("#form_lastname").focusout(function () {
        check_lastname();
    });
    $("#form_email").focusout(function () {
        check_email();
    });
    $("#form_password").focusout(function () {
        check_password();
    });
    $("#form_repassword").focusout(function () {
        check_repassword();
    });


    function check_firstname() {
        var len_firstname=$("#form_firstname").val().length;
        if(len_firstname>40){
            $("#firstname_error_message").html("Invalid");
            $("#firstname_error_message").show();
            error_firstname=true;
        }
        else{
            $("#firstname_error_message").hide();
        }

    }

    function check_lastname() {
        var len_lastname=$("#form_lastname").val().length;
        if(len_lastname>80){
            $("#lastname_error_message").html("Insert again");
            $("#lastname_error_message").show();
            error_lastname=true;
        }
        else{
            $("#lastname_error_message").hide();
        }
    }

    function check_email() {
        var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
        if(pattern.test($("#form_email").val())) {
            $("#email_error_message").hide();
        } else {
            $("#email_error_message").html("Invalid email address");
            $("#email_error_message").show();
            error_email = true;
        }

    }

    function check_password() {
        var password=$("#form_password").val().length;
        if(password<5 ||password>30){
            $("#password_error_message").html("minimum 8 character");
            $("#password_error_message").show();
            error_password=true;
        }
        else{
            $("#password_error_message").hide();
        }
    }
    function check_repassword() {
        var repassword=$("#form_repassword").val();
        var password=$("#form_password").val();
        if(password != repassword){
            $("#repassword_error_message").html("doesnt match");
            $("#repassword_error_message").show();
            error_repassword=true;
        }
        else{
            $("#repassword_error_message").hide();
        }
    }

    $("#login").click(function (event) {
        event.preventDefault();
        var email=$("input#email").val();
        var password=$("input#password").val();

        $.ajax({
        url:"http://localhost/wishlist/index.php/Login/login_verify",
        type:"POST",
        data:{email:email,password:password},
            success:function(data){
            if(data==1){
                alert("looged in successfully");
                window.location = 'http://localhost/wishlist/index.php/Welcome';
            }
            else{
                alert("wrong username or password");
            }
            }
        })

    });

    $("#logout").click(function() {
        $.ajax({
            url: 'http://localhost/wishlist/index.php/Login/logout',
            success: function(data){
                window.location.href = data;
            }
        });
    });


});

