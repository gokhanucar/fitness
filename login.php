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
                    <form method="POST">
                        <h1>Login Form</h1>
                        <div>
                            <input type="email" name="email" class="form-control" placeholder="Email" maxlength="100" required="" />
                        </div>
                        <div>
                            <input type="password" name="password" class="form-control" placeholder="Password" maxlength="50" required="" />
                        </div>
                        <div>
                            <button onclick="test()" type="submit" name="login" value="login" class="btn btn-default submit">Log in</button>
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
                    <form method="POST">
                        <h1>Create Account</h1>
                        <div>
                            <input type="email" name="email" class="form-control" placeholder="Email" maxlength="100" required="" />
                        </div>
                        <div>
                            <input type="text" name="name" class="form-control" placeholder="Name" maxlength="50" required="" />
                        </div>
                        <div>
                            <input type="text" name="surname" class="form-control" placeholder="Surname" maxlength="50" required="" />
                        </div>
                        <div>
                            <input type="password" name="password" class="form-control" placeholder="Password" maxlength="50" required="" />
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

    <script>
        function test() {
            new PNotify({
                title: 'Oh No!',
                text: 'Something terrible happened.',
                type: 'info',
                styling: 'bootstrap3',
                addclass: 'dark'
            });
        }
    </script>
</body>

</html>