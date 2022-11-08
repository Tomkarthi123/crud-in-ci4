<!doctype html>
<html lang="en">

<head>
    <title>SK Fashion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <style>
        .error {
            color: #dc3545;
        }
    </style>
</head>

<body>
    <div class="container py-4">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">
                <form method="POST" action="javascript:void(0)" id="registrationForm">
                    <?= csrf_field() ?>

                    <div class="card shadow">
                        <div class="card-header">
                            <h5 class="card-title">SK Fashion</h5>
                        </div>

                        <div class="card-body p-4">

                            <div class="form-group mb-3 has-validation">
                                <label class="form-label" for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?php echo set_value('name'); ?>" />
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label" for="email">Email</label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo set_value('email'); ?>" />
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label" for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="<?php echo set_value('password'); ?>" />
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label" for="confirm_password">Confirm Password</label>
                                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password" value="<?php echo set_value('confirm_password'); ?>" />
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label" for="phone">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" value="<?php echo set_value('phone'); ?>" />
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="address">Address</label>
                                <textarea class="form-control" name="address" id="address" placeholder="Address"><?php echo set_value('address'); ?></textarea>
                            </div>
                        </div>

                        <div class="card-footer d-flex align-items-center">
                            <button type="submit" id="submit-btn" class="btn btn-success">submit</button>

                            <div class="response-message ms-3"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>

    <script>
        if ($("#registrationForm").length > 0) {
            $("#registrationForm").validate({

                rules: {
                    name: {
                        required: true,
                        maxlength: 50
                    },
                    email: {
                        required: true,
                        maxlength: 50,
                        email: true,
                    },
                    password: {
                        required: true,
                        minlength: 5,
                        maxlength: 20,
                    },
                    confirm_password: {
                        required: true,
                        equalTo: "#password",
                    },
                    phone: {
                        required: true,
                        digits: true,
                        minlength: 10,
                        maxlength: 12,
                    },
                    address: {
                        required: true,
                        minlength: 10,
                        maxlength: 200,
                    },
                },
                messages: {
                    name: {
                        required: "Please enter your name",
                        maxlength: "Name length should be 50 characters long."
                    },
                    email: {
                        required: "Please enter your email",
                        maxlength: "Email length should be 50 characters long.",
                        email: "Please enter a valid email",
                    },
                    password: {
                        required: "Please enter your password",
                        minlength: "Password must be greater than 5 chars",
                        maxlength: "Password must not be greater than 20 chars",
                    },
                    confirm_password: {
                        required: "Please re-enter your password",
                        equalTo: "Password not confirmed",
                    },
                    phone: {
                        required: "Please enter contact number",
                        minlength: "The contact number should be 10 digits",
                        digits: "Please enter only numbers",
                        maxlength: "The contact number should be 12 digits",
                    },
                    address: {
                        required: "Please enter your address",
                        minlength: "Address must be greater than 10 chars",
                        maxlength: "Address must not be greater than 200 chars",
                    },
                },
                submitHandler: function(form) {
                    $('.response-message').removeClass('d-none');
                    $('#submit-btn').html('Sending');
                    $.ajax({
                        url: "<?php echo base_url('store') ?>",
                        type: "POST",
                        data: $('#registrationForm').serialize(),
                        dataType: "json",
                        success: function(response) {
                            $('#submit-btn').html('Submit');
                            $('.response-message').html(response?.message);
                            response?.status === 'success' && $('.response-message').addClass('text-success') || $('.response-message').addClass('text-danger');
                            $('.response-message').show();
                            $('.response-message').removeClass('d-none');

                            document.getElementById("registrationForm").reset();
                            setTimeout(function() {
                                $('.response-message').hide();
                            }, 5000);
                        }
                    });
                }
            })
        }
    </script>

</body>

</html>