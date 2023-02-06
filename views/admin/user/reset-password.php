<?php

use app\core\Application;
?>

<?php Application::$app->showErrorMsgs(false) ?>
<?php Application::$app->showMsg('success') ?>


<div class="row">
    <div class="col-lg-12">
        <div class="card card-table">
            <div class="card-header">Bảng yêu cầu đổi mật khẩu
            </div>
            <div class="card-body">
                <table class="table table-striped table-borderless">
                    <thead>
                        <tr>
                            <th style="width:5%;">STT</th>
                            <th style="width:30%;">Tên người dùng</th>
                            <th style="width:30%;">Mật khẩu mới</th>
                            <th colspan="2" class="actions">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody class="no-border-x">

                        <?php $i = 1 ?>
                        <?php foreach ($data as $item) : ?>
                            <tr>
                                <td><label> <?= $i; ?> </label></td>
                                <td><label> <?= $item->firstname . " " . $item->lastname; ?></label></td> </label></td>
                                <td><label> <input id="input-<?= $item->id ?>" type="text"></label></td>
                                <td style="width:60px" class="actions">
                                    <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#mod-warning-<?= $item->id ?>" type="button">Reset</a>
                                </td>
                            </tr>
                            <?php $i++ ?>
                        <?php endforeach ?>
                    </tbody>
                </table>
                <?php if (count($data) === 0) : ?>
                    <div class="alert alert-info p-2 text-center">Không có kết quả nào</div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php foreach ($data as $item) : ?>
    <div class="modal fade" id="mod-warning-<?= $item->id ?>" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal" aria-hidden="true"><span class="mdi mdi-close"></span></button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <div class="text-warning"><span class="modal-main-icon mdi mdi-alert-triangle"></span></div>
                        <h3>Reset Password</h3>
                        <p>Bạn có muốn reset mật khẩu của <?= $item->firstname . " " . $item->lastname ?> không ?</p>
                        <div class="mt-8">
                            <form id="form-<?= $item->id ?>" action="/admin/user/reset-password?id=<?= $item->id ?>" method="post">
                                <input type="text" id="input-update-<?= $item->id ?>" name="password" class="d-none">
                                <button class="btn btn-space btn-secondary" type="button" data-dismiss="modal">Hủy</button>
                                <button type="button" onclick="handleSubmit(<?= $item->id ?>)" class="btn btn-space btn-warning">Đồng ý</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

@script
<script src="/assets/lib/jquery.niftymodals/js/jquery.niftymodals.js" type="text/javascript"></script>
<script type="text/javascript">
    $.fn.niftyModal('setDefaults', {
        overlaySelector: '.modal-overlay',
        contentSelector: '.modal-content',
        closeSelector: '.modal-close',
        classAddAfterOpen: 'modal-show'
    });

    $(document).ready(function() {
        //-initialize the javascript
        App.init();
    });
</script>
<script>
     function handleSubmit(id){
        const form = document.getElementById('form-' + id);
        const input = document.getElementById('input-' + id);
        const inputUpdate = document.getElementById('input-update-' + id);
        inputUpdate.value = input.value;
        form.submit();
     }
</script>
@endScript