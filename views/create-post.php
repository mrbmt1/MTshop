<?php

use app\core\Application;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/post-create.css" media="all">
<link rel="stylesheet" type="text/css" href="/assets/lib/jquery.gritter/css/jquery.gritter.css">
<link rel="stylesheet" type="text/css" href="/assets/lib/optionselect/css/option-select.css"/>
<script src="https://cdn.tiny.cloud/1/bl53mermimquffv1vxi976v6waddhax2mvoolb16026sopsb/tinymce/5/tinymce.min.js"></script>
    <script>
    tinymce.init({ selector:'textarea' });
    </script>
    <title>Thêm bài viết</title>
</head>
<body>
<div class="container">  
  <div id="contact" >
    <div style="background:red;color:white">
  <?php Application::$app->showErrorMsgs('post', true) ?>
  <?php Application::$app->showMsg('success') ?>
  </div>
    <h3 style="color:red;">Bài viết</h3>
    <h4>Tạo tin mới</h4>
    <form id="uploadForm" action="/upload" method="post">
      <label>Avatar bài đăng:</label>
      <img id="image" style="max-width: 60px;" />
        <label class="custom-file-upload">
            <input name="file" type="file" class="btn" id="files" />
            Chọn thumbnail cho bài đăng
        </label>
      <input type="submit" value="Upload thumbnail" class="btn" />
    </form>

    </fieldset>
  <form action="/post-create" method="POST">
    <input class="form-control form-control-sm" type="hidden" name="avatar">
    <fieldset>
      <input placeholder="Title" type="tel" tabindex="3" required name="title">
    </fieldset>
    <fieldset>
      <textarea placeholder="Nhập hoặc dán nội dung bài viết..." tabindex="5"  name="content"></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Đăng bài</button>
    </fieldset>
  </form>
</div>
@script
<script src="/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
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

@endScript
</div>


</body>
</html>