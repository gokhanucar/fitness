<?php
require_once "utils/config.php";
require_once "functions/authentication.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login Fitness Tracking Panel</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/nprogress.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/custom.min.css">
    <link rel="stylesheet" href="assets/css/pnotify.css">
    <link rel="stylesheet" href="assets/css/pnotify.buttons.css">
</head>

<body class="login">
    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>

        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <form method="POST" data-parsley-validate>
                        <h1>Login Form</h1>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email" maxlength="100" required="" data-parsley-type="email" data-parsley-trigger="change" data-parsley-maxlength="100" />
                        </div>
                        <div>
                            <input type="password" name="password" class="form-control" placeholder="Password" required="" data-parsley-minlength="4" data-parsley-maxlength="8" />
                        </div>
                        <div>
                            <button type="submit" name="login" value="login" class="btn btn-default submit">Log in</button>
                            <a class="reset_pass" href="#">Lost your password?</a>
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">
                            <p class="change_link">New to site?
                                <a href="#signup" class="to_register"> Create Account </a>
                            </p>
                            <div class="clearfix"></div>
                            <br />
                            <div>
                                <h1><i class="fa fa-trophy"></i> Fitness Tracking System</h1>
                                <p>©<?php echo date("Y") ?> In Development. Gökhan Uçar. gokhanucar@outlook.com</p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>

            <div id="register" class="animate form registration_form">
                <section class="login_content">
                    <form method="POST" data-parsley-validate>
                        <h1>Create Account</h1>
                        <div>
                            <input type="email" name="email" class="form-control" placeholder="Email" maxlength="100" required="" data-parsley-type="email" data-parsley-trigger="change" data-parsley-maxlength="100" />
                        </div>
                        <div>
                            <input type="text" name="name" class="form-control" placeholder="Name" maxlength="50" required="" data-parsley-minlength="2" data-parsley-maxlength="50" />
                        </div>
                        <div>
                            <input type="text" name="surname" class="form-control" placeholder="Surname" maxlength="50" required="" data-parsley-minlength="2" data-parsley-maxlength="50" />
                        </div>
                        <div>
                            <input type="password" name="password" class="form-control" placeholder="Password" maxlength="50" required="" data-parsley-minlength="4" data-parsley-maxlength="8" />
                        </div>
                        <div>
                            <button type="submit" name="register" value="register" class="btn btn-default submit">Submit</button>
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">
                            <p class="change_link">Already a member ?
                                <a href="#signin" class="to_register"> Log in </a>
                            </p>
                            <div class="clearfix"></div>
                            <br />
                            <div>
                                <h1><i class="fa fa-trophy"></i> Fitness Tracking System</h1>
                                <p>©<?php echo date("Y") ?> In Development. Gökhan Uçar. gokhanucar@outlook.com</p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/pnotify.js"></script>
    <script src="assets/js/pnotify.buttons.js"></script>
    <script src="assets/js/parsley.min.js"></script>

    <script>
        const notification = <?php echo get_notification(); ?>;

        $(document).ready(function() {
            if (notification) {
                new PNotify({
                title: notification.title,
                text: notification.message,
                type: notification.type,
                styling: 'bootstrap3'
            });
            }
        });
    </script>
</body>

</html>