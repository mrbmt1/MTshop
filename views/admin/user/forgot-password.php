<?php

use app\core\Application;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=User-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/logo-fav.png">
    <title>MTshop</title>
    <link rel="stylesheet" type="text/css" href="assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" />
    <link rel="stylesheet" type="text/css" href="assets/lib/material-design-icons/css/material-design-iconic-font.min.css" />
    <link rel="stylesheet" href="assets/css/app.css" type="text/css" />
</head>

<body class="be-splash-screen">
    <div class="be-wrapper be-login">
        <div class="be-content">
            <div class="main-content container-fluid">
                <div class="splash-container">
                    <div class="card card-border-color card-border-color-primary">
                        <div class="card-header">
                            <span style="font-size:22px; color:#4285f4; font-weight: 500 ">User manage</span>
                            <span class="splash-description">Please enter your user information.</span>
                        </div>
                        <div class="card-body">
                            <?php Application::$app->showErrorMsgs(false) ?>
                            <?php Application::$app->showMsg('success') ?>
                            <form action="/forgot-password" method="POST">
                                <div class="form-group">
                                    <input class="form-control" id="username" type="text" placeholder="Login ID" autocomplete="off" name="login_id">
                                </div>
                                <div class="form-group login-submit">
                                    <button class="btn btn-primary btn-xl" type="submit">Gửi yêu cầu reset password</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="assets/js/app.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            //-initialize the javascript
            App.init();
        });
    </script>
</body>

</html>