<?php

use app\core\Application;
?>

<link rel="stylesheet" type="text/css" href="/assets/lib/jquery.gritter/css/jquery.gritter.css">

<?php Application::$app->showErrorMsgs('categories',true) ?>
<?php Application::$app->showMsg('success') ?>

<div class="row">
    <div class="col-12">
        <div class="card card-border-color card-border-color-primary">
            <div class="card-header card-header-divider">
                Category
                <span class="card-subtitle">
                    
                </span>
            </div>
            <div class="card-body">

                <!-- <div>
                    <img id="image" style="max-width: 60px;" src="/uploads/<?= $data->avatar ?>" />
                </div> -->
                <!-- <label>Avatar:</label><br /> -->

                <form action="/admin/categories/confirm?action=<?= $action ?>&id=<?= $data->id ?>" method="POST">
                    <div class="form-group row">
                        <label class="col-12 col-form-label mb-2">Tên Loại</label>
                        <div class="col-12 col-sm-8 col-lg-6">
                            <label>
                                <?= $data->name ?>
                            </label>
                        </div>
                    </div>
                    <!-- <div class="form-group row">
                        <label class="col-12 col-form-label mb-2">Loại</label>
                        <div class="col-12 col-sm-8 col-lg-6">
                            <label>
                                <?= $data->building ?>
                            </label>
                        </div>
                    </div> -->
                    <div class="form-group row">
                        <label class="col-12 col-form-label mb-2">Mô tả chi tiết</label>
                        <div class="col-12 col-sm-8 col-lg-6">
                            <label>
                                <?= html_entity_decode($data->description) ?>
                            </label>

                        </div>
                    </div>

                    <div class="form-group row"></div>
                    <a href="/admin/categories/<?= $action == 'create' ? "create" : "edit?id=$data->id" ?>" class="btn btn-primary">Sửa lại </a>
                    <input class="btn btn-primary" type="submit" value="<?= $action == 'create' ? "Lưu" : "Cập nhật" ?>">
            </div>
            </form>
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
@endScript