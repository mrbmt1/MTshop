<?php

use app\core\Application;
?>

<link rel="stylesheet" type="text/css" href="/assets/lib/jquery.gritter/css/jquery.gritter.css">
<link rel="stylesheet" type="text/css" href="/assets/lib/optionselect/css/option-select.css"/>

<?php Application::$app->showErrorMsgs('products', true) ?>
<?php Application::$app->showMsg('success') ?>
<div class="row">
    <div class="col-12">
        <div class="card card-border-color card-border-color-primary">
            <div class="card-header card-header-divider">
                Product
                <span class="card-subtitle">

                </span>
            </div>
            <?php if (!$data) : ?>
                <div class="card-body">
                    <img id="image" style="max-width: 60px;" />
                    <form id="uploadForm" action="/upload" method="post">
                        <label>Avatar:</label><br />
                        <input name="file" type="file" class="inputFile" id="files" />
                        <input type="submit" value="Upload" class="btnSubmit" />
                    </form>
                    <form action="/admin/products/create" method="POST">
                        <input class="form-control form-control-sm" type="hidden" name="avatar" required>
                        <div class="form-group row">
                            <label class="col-12 col-form-label mb-2">Tên sản phẩm</label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <input id="username" class="form-control form-control-sm" type="text" name="name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12 col-form-label mb-2">Giá gốc</label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <input class="form-control form-control-sm" type="number" name="price" required></input>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12 col-form-label mb-2">Sale</label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <input class="form-control form-control-sm" type="number" min=0 max=100 name="sale" required></input>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12 col-form-label mb-2">Quantity</label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <input class="form-control form-control-sm" type="number" name="quantity" required></input>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12 col-form-label mb-2">Loại</label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <select data-placeholder="Loại" class="chosen-select" name="category_id" style="width: 160px">
                                    <?php foreach ($categories as $value) { ?>
                                        <option value="<?php echo $value->id ?>"><?= $value->name ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12 col-form-label mb-2">Mô tả chi tiết</label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <textarea class="form-control form-control-sm" type="text" name="description"></textarea>
                            </div>
                        </div>

                        <div class="form-group row"></div>
                        <input class="btn btn-primary" type="submit" value="Xác nhận">
                    </form>

                </div>
            <?php else : ?>
                <div class="card-body">
                    <img id="image" style="max-width: 60px;" src="/uploads/<?= $data->avatar ?>" />
                    <form id="uploadForm" action="/upload" method="post">
                        <label>Avatar:</label><br />
                        <input name="file" type="file" class="inputFile" id="files" />
                        <input type="submit" value="Upload" class="btnSubmit" />
                    </form>

                    <form action="/admin/products/create" method="POST">
                        <input value=/uploads/<?= $data->avatar ?> class="form-control form-control-sm" type="hidden" name="avatar">
                        <div class="form-group row">
                            <label class="col-12 col-form-label mb-2">Tên sản phẩm</label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <input id="username" value="<?= $data->name ?>" class="form-control form-control-sm" type="text" name="name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12 col-form-label mb-2">Giá gốc</label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <input class="form-control form-control-sm" type="number" name="price"></input>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12 col-form-label mb-2">Sale</label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <input class="form-control form-control-sm" type="number" min=0 name="sale"></input>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12 col-form-label mb-2">Quantity</label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <input class="form-control form-control-sm" type="number" name="quantity"></input>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12 col-form-label mb-2">Loại</label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <select data-placeholder="Loại" class="chosen-select" name="category_id">
                                <?php foreach ($categories as $value) { ?>
                                        <option value="<?= $value->id ?>"><?= $value->name ?></option>
                                    <?php } ?>
                                </select>
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12 col-form-label mb-2">Mô tả chi tiết</label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <textarea class="form-control form-control-sm" type="text" name="description"><?= html_entity_decode($data->description) ?></textarea>
                            </div>
                        </div>

                        <div class="form-group row"></div>
                        <input class="btn btn-primary" type="submit" value="Xác nhận">
                    </form>
                </div>
            <?php endif ?>
        </div>
    </div>
</div>

@script
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