<?php

use app\core\Application;
?>

<link rel="stylesheet" type="text/css" href="/assets/lib/jquery.gritter/css/jquery.gritter.css">
<link rel="stylesheet" type="text/css" href="/assets/lib/optionselect/css/option-select.css"/>

<?php Application::$app->showErrorMsgs('products',true) ?>
<?php Application::$app->showMsg('success') ?>

<div class="row">
    <div class="col-12">
        <div class="card card-border-color card-border-color-primary">
            <div class="card-header card-header-divider">
                Product
                <span class="card-subtitle">
                    
                </span>
            </div>
            <div class="card-body">

                <div>
                    <img id="image" style="max-width: 60px;" src="/uploads/<?= $data->avatar ?>" />
                </div>
                <label>Avatar:</label><br />

                <form action="/admin/products/confirm?action=<?= $action ?>&id=<?= $data->id ?>" method="POST">
                    <div class="form-group row">
                        <label class="col-12 col-form-label mb-2">Tên sản phẩm</label>
                        <div class="col-12 col-sm-8 col-lg-6">
                            <label>
                                <?= $data->name ?>
                            </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 col-form-label mb-2">Giá</label>
                        <div class="col-12 col-sm-8 col-lg-6">
                        <label>
                                <?= $data->price ?>
                            </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 col-form-label mb-2">Sale</label>
                        <div class="col-12 col-sm-8 col-lg-6">
                        <label>
                                <?= $data->sale ?>
                            </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 col-form-label mb-2">Số lượng</label>
                        <div class="col-12 col-sm-8 col-lg-6">
                            <label>
                                <?= $data->quantity ?>
                            </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 col-form-label mb-2">Loại</label>
                        <div class="col-12 col-sm-8 col-lg-6">
                            <code>
                                <?= $category->name ?>
                            </code>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 col-form-label mb-2">Mô tả chi tiết</label>
                        <div class="col-12 col-sm-8 col-lg-6">
                            <label>
                                <?= html_entity_decode($data->description) ?>
                            </label>

                        </div>
                    </div>

                    <div class="form-group row"></div>
                    <a href="/admin/products/<?= $action == 'create' ? "create" : "edit?id=$data->id" ?>" class="btn btn-primary">Sửa lại </a>
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