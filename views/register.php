<?php

/** @var $model \thecodeholic\phpmvc\Model */

use app\core\Application;
use app\core\form\Form;

$form = new Form();
?>
<?php Application::$app->showErrorMsgs() ?>
<?php Application::$app->showMsg('success') ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/logo-fav.png">
    <title>MTshop</title>
    <link rel="stylesheet" type="text/css" href="assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" />
    <link rel="stylesheet" type="text/css" href="assets/lib/material-design-icons/css/material-design-iconic-font.min.css" />
    <link rel="stylesheet" href="assets/css/app.css" type="text/css" />
</head>

<body class="be-splash-screen mainss">
<?php $form = Form::begin('?role=2&rd=1', 'post') ?>
<div class="row">
    <div class="col">
        <?php echo $form->field($model, 'firstname') ?>
    </div>
</div>
<?php echo $form->field($model, 'email') ?>
<?php echo $form->field($model, 'login_id') ?>
<?php echo $form->field($model, 'phone') ?>
<?php echo $form->field($model, 'password')->passwordField() ?>
<button class="btn btn-success">Submit</button>
<?php Form::end() ?>
</body>

</html>