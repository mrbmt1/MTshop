<?php

use app\core\Application;
?>

<link rel="stylesheet" type="text/css" href="/assets/lib/jquery.gritter/css/jquery.gritter.css">

<?php Application::$app->showErrorMsgs() ?>
<?php Application::$app->showMsg('success') ?>
<div class="row">
    <div class="col-12">
        <div class="card card-border-color card-border-color-primary">
            <div class="card-header card-header-divider">
                User
                <span class="card-subtitle">
                    
                </span>
            </div>
            <div class="card-body">
            <img id="image" style="max-width: 60px;" src="/upload" />
                <form id="uploadForm" action="/upload" method="post">
                    <label>Avatar:</label><br />
                    <input name="file" type="file" class="inputFile" id="files" />
                    <input type="submit" value="Upload" class="btnSubmit" />
                </form>
                <form action="/admin/user/create" method="POST">
                <input class="form-control form-control-sm" type="hidden" name="avatar" required>
                    <div class="form-group row">
                        <label class="col-12 col-form-label mb-2">Họ và tên</label>
                        <div class="col-12 col-sm-8 col-lg-6">
                            <input class="form-control form-control-sm" type="text" name="firstname" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 col-form-label mb-2">Email</label>
                        <div class="col-12 col-sm-8 col-lg-6">
                            <input class="form-control form-control-sm" type="email" name="email" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 col-form-label mb-2">Tên đăng nhập</label>
                        <div class="col-12 col-sm-8 col-lg-6">
                            <input class="form-control form-control-sm" type="text" name="login_id" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 col-form-label mb-2">Số điện thoại</label>
                        <div class="col-12 col-sm-8 col-lg-6">
                            <input class="form-control form-control-sm" type="text" name="phone" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 col-form-label mb-2">Địa chỉ</label>
                        <div class="col-12 col-sm-8 col-lg-6">
                            <input class="form-control form-control-sm" type="text" name="diachi" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12 col-sm-8 col-lg-6">
                            <select class="form-control select2 select2-sm" name="role">
                                <option value="1">Admin</option>
                                <option value="2">Quản trị viên</option>
                                <option value="0">Khách hàng</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 col-form-label mb-2">Mật khẩu</label>
                        <div class="col-12 col-sm-8 col-lg-6">
                            <input class="form-control form-control-sm" type="password" name="password">
                        </div>
                    </div>
                    <div class="form-group row"></div>
                    <input class="btn btn-primary" type="submit" value="Xác nhận">
                </form>

            </div>
        </div>
    </div>
</div>

@script
<script src="/assets/lib/jquery.gritter/js/jquery.gritter.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        //-initialize the javascript
        App.init();
        App.uiNotifications();
    });
</script>
<script src="/assets/lib/jquery.gritter/js/jquery.gritter.js" type="text/javascript"></script>
<script src="/assets/lib/optionselect/js/jquery.option-select.js" type="text/javascript"></script>
<script>
    $(".chosen-select").chosen({
  no_results_text: "Oops, nothing found!"
})
</script>
<script>
    $(document).ready(function() {
        //-initialize the javascript
        App.init();
        App.uiNotifications();
    });
</script>
<script type="text/javascript">
    $(document).ready(function(e) {
        document.getElementById('files').onchange = function() {
            var src = URL.createObjectURL(this.files[0])
            document.getElementById('image').src = src
        }

        $("#uploadForm").on('submit', (function(e) {
            e.preventDefault();
            $.ajax({
                url: "/upload",
                type: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    console.log(data.url);
                    $('input[name="avatar"]').val(data.url);

                    $.gritter.add({
                        title: 'Notification',
                        text: 'Upload file success',
                        class_name: 'color success'
                    });


                },
                error: function(err) {
                    $.gritter.add({
                        title: 'Notification',
                        text: err.responseJSON?.errors[0],
                        class_name: 'color danger'
                    });
                }
            });
        }));
    });
</script>
<script>
    

   
</script>
@endScript