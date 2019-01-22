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
    <!--===============================================================================================-->
    <script src="<?php echo base_url();?>assets/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url();?>assets/bootstrap/js/popper.js"></script>
    <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.js"></script>
    <!--===============================================================================================-->
    <script src="../vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url();?>assets/js/main.js"></script>
</head>
<body>
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
        </ul>
    </div>
</nav>

<div class="limiter">
    <div class="container-login100">


            <div class="container">
                <h3>Wish Lists</h3>
                <div class="alert alert-success" style="display: none;">

                </div>
                <button id="btnAdd" class="btn btn-success">Add New</button>
                <table class="table table-bordered table-responsive" style="margin-top: 20px;">
                    <thead>
                    <tr>
                        <td>ID</td>
                        <td>Wishlist Title</td>
                        <td>URL</td>
                        <td>Price</td>
                        <td>Priority</td>
                    </tr>
                    </thead>
                    <tbody id="showdata">

                    </tbody>
                </table>
            </div>
    </div>

</div>
            <div id="myModal" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            <form id="myForm" action="" method="post" class="form-horizontal">
                                <input type="hidden" name="userid" value="<?php echo $this->session->userdata('id'); ?>">
                                <div class="form-group">
                                    <label for="name" class="label-control col-md-4">Item Title</label>
                                    <div class="col-md-8">
                                        <input type="text" name="formtitle" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="address" class="label-control col-md-4">Description</label>
                                    <div class="col-md-8">
                                        <textarea class="form-control" name="formdesc"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="address" class="label-control col-md-4">URL</label>
                                    <div class="col-md-8">
                                        <input type="text" name="formurl" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="address" class="label-control col-md-4">Price</label>
                                    <div class="col-md-8">
                                        <input type="text" name="formprice" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="address" class="label-control col-md-4">Prorirty</label>
                                    <div class="col-md-8">
                                        <input type="text" name="formpriority" class="form-control">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" id="btnSave" class="btn btn-primary">Save changes</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

            <div id="deleteModal" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Confirm Delete</h4>
                        </div>
                        <div class="modal-body">
                            Do you want to delete this record?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" id="btnDelete" class="btn btn-danger">Delete</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->





            <script>
                $(function(){
                    showAllEmployee();

                    //Add New
                    $('#btnAdd').click(function(){
                        $('#myModal').modal('show');
                        $('#myModal').find('.modal-title').text('Add New Item');
                        $('#myForm').attr('action', '<?php echo base_url() ?>index.php/Wishlist/additem');
                    });


                    $('#btnSave').click(function() {
                        var url = $('#myForm').attr('action');
                        var data = $('#myForm').serialize();
                        //validate form
                        // var empoyeeName = $('input[name=txtEmployeeName]');
                        // var address = $('textarea[name=txtAddress]');
                        // var result = '';
                        // if(empoyeeName.val()==''){
                        //     empoyeeName.parent().parent().addClass('has-error');
                        // }else{
                        //     empoyeeName.parent().parent().removeClass('has-error');
                        //     result +='1';
                        // }
                        // if(address.val()==''){
                        //     address.parent().parent().addClass('has-error');
                        // }else{
                        //     address.parent().parent().removeClass('has-error');
                        //     result +='2';
                        // }

                        // if(result=='12'){
                        $.ajax({
                            type: 'ajax',
                            method: 'post',
                            url: url,
                            data: data,
                            async: false,
                            dataType: 'json',
                            success: function (response) {
                                if (response.success) {
                                    $('#myModal').modal('hide');
                                    $('#myForm')[0].reset();
                                    if (response.type == 'add') {
                                        var type = 'added'
                                    } else if (response.type == 'update') {
                                        var type = "updated"
                                    }
                                    $('.alert-success').html('Employee ' + type + ' successfully').fadeIn().delay(4000).fadeOut('slow');
                                    showAllEmployee();
                                } else {
                                    alert('Error');
                                }
                            },
                            error: function () {
                                alert('Could not add data');
                            }
                        });
                    // }
                    });

                    //edit
                    $('#showdata').on('click', '.item-edit', function(){
                        var id = $(this).attr('data');
                        $('#myModal').modal('show');
                        $('#myModal').find('.modal-title').text('Edit Employee');
                        $('#myForm').attr('action', '<?php echo base_url() ?>Wishlist/additem');
                        $.ajax({
                            type: 'ajax',
                            method: 'get',
                            url: '<?php echo base_url() ?>employee/editEmployee',
                            data: {id: id},
                            async: false,
                            dataType: 'json',
                            success: function(data){
                                $('input[name=txtEmployeeName]').val(data.employee_name);
                                $('textarea[name=txtAddress]').val(data.address);
                                $('input[name=txtId]').val(data.id);
                            },
                            error: function(){
                                alert('Could not Edit Data');
                            }
                        });
                    });

                    //delete-
                    $('#showdata').on('click', '.item-delete', function(){
                        var id = $(this).attr('data');
                        alert(id);
                        $('#deleteModal').modal('show');
                        //prevent previous handler - unbind()
                        $('#btnDelete').unbind().click(function(){
                            $.ajax({
                                type: 'ajax',
                                method: 'get',
                                async: false,
                                url: '<?php echo base_url() ?>index.php/Wishlist/deleteitem',
                                data:{id:id},
                                dataType: 'json',
                                success: function(response){
                                    if(response.success){
                                        $('#deleteModal').modal('hide');
                                        $('.alert-success').html('Employee Deleted successfully').fadeIn().delay(4000).fadeOut('slow');
                                        showAllEmployee();
                                    }else{
                                        alert('Error');
                                    }
                                },
                                error: function(){
                                    alert('Error deleting');
                                }
                            });
                        });
                    });



                    //function
                    function showAllEmployee(){
                        $.ajax({
                            type: 'ajax',
                            url: '<?php echo base_url(); ?>index.php/Wishlist/showallitem',
                            async: false,
                            dataType: 'json',
                            success: function(data){

                                var html = '';
                                var i;
                                for(i=0; i<data.length; i++){


                                    html +='<tr>'+

                                        '<td>'+data[i].title+'</td>'+
                                        '<td>'+data[i].url+'</td>'+
                                        '<td>'+data[i].price+'</td>'+
                                        '<td>'+
                                        '<a href="javascript:;" class="btn btn-info item-edit" data="'+data[i].id+'">Edit</a>'+
                                        '<a href="javascript:;" class="btn btn-danger item-delete" data="'+data[i].item_id+'">Delete</a>'+
                                        '</td>'+
                                        '</tr>';
                                }
                                $('#showdata').html(html);
                            },
                            error: function(){
                                alert('Could not get Data from Database');
                            }
                        });
                    }
                });
            </script>









</body>
</html>