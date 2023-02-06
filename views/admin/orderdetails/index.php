<?php

use app\core\Application;
?>

<?php Application::$app->showErrorMsgs('orderdetails',true) ?>
<?php Application::$app->showMsg('success') ?>

<div class="row">
    <div class="col-4 mx-auto">
        <div class="card-body">
            <form method="get" action="/admin/orderdetails">
                <!-- <div class="form-group row">
                    <label class="col-3 col-lg-2 col-form-label text-right">danh mục</label>
                    <div class="col-9 col-lg-10">
                        <select class="form-control form-control-sm" name="building">
                            <option value="">Chọn danh mục</option>
                            <?php foreach ($buildings as $value) : ?>
                                <?php if ($value === $buiding) : ?>
                                    <option value="<?= $value->building ?>" selected="selected"><?= $value->building ?></option>
                                <?php else : ?>
                                    <option value="<?= $value->building ?>"><?= $value->building ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div> -->
                <div class="form-group row">
                    <label class="col-3 col-lg-2 col-form-label text-right">Từ khóa</label>
                    <div class="col-9 col-lg-10">
                        <input value="<?= $q ?>" class="form-control form-control-sm" type="text" name="q">
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn btn-primary">Tìm kiếm</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="row mb-3">
    <div class="col-12">
        <label style="font-size:14px;font-weight: 500; color: #009688">Số bản ghi tìm thấy: <?= count($data) ?></label>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card card-table">
            <div class="card-header">Chi tiết đơn hàng
                <div class="tools dropdown">
                    </span>
                    <!-- <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"><span class="icon mdi mdi-more-vert"></span></a> -->
                    <!-- <div class="dropdown-menu" role="menu">
                        <a class="dropdown-item" href="/admin/orderdetails/create">Thêm</a>
                    </div> -->
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped table-borderless">
                    <thead>
                        <tr>
                            <th style="width:5%;">STT</th>
                            <th style="width:10%;">Tên sản phẩm</th>
                            <th style="width:15%;">Giá</th>
                            <th style="width:10%;">Người mua</th>
                            <th style="width:20%;">Địa chỉ</th>
                            <th style="width:10%;">Số điện thoại</th>
                            <th style="width:15%;">Phương thức thanh toán</th>
                            <th colspan="2" class="actions">Trạng thái đơn hàng</th>
                        </tr>
                    </thead>
                    <tbody class="no-border-x">
                        <?php $i = 1 ?>
                        <?php foreach ($data as $item) : ?>
                            <tr>
                                <td><label> <?= $item['ido']; ?> </label></td>
                                <td><label> <?= $item['name']; ?> </label></td>
                                <td><label> <?= $item['price']; ?> </label></td>
                                <td><label> <?= $item['firstname']; ?> </label></td>
                                <td><label> <?= $item['diachiOrder']; ?></label></td>
                                <td><label> <?= $item['phone']; ?></label></td>
                                <td> <?php echo ($item['paymentType'] == 0) ?  '<label class="btn btn-success">COD</label>' :  '<label class="btn btn-primary">VNPay</label>' ?> </td>
                                <?php if($item['st'] == 0){ ?>
                                <td style="width:60px" class="actions"><a class="btn btn-secondary btn-sm" href="/admin/orderdetails/edit?id=<?= $item['ido'] ?>&status=0">Chưa xác nhận</a></td>
                                <?php } else if($item['st'] == 1) {?>
                                <td style="width:60px" class="actions"><a class="btn btn-success btn-sm" href="/admin/orderdetails/edit?id=<?= $item['ido'] ?>&status=1">Đã xác nhận và giao hàng</a></td>
                                <?php } else if($item['st'] == 2) {?>
                                <td style="width:60px" class="actions"><a class="btn btn-danger btn-sm" href="/admin/orderdetails/edit?id=<?= $item['ido'] ?>&status=2">Đơn bị hủy</a></td>
                                <?php } else if($item['st'] == 3) {?>
                                <td style="width:60px" class="actions"><a class="btn btn-warning btn-sm" href="/admin/orderdetails/edit?id=<?= $item['ido'] ?>&status=3">Đã hủy đơn</a></td>
                                <?php } else if($item['st'] == 4) {?>
                                <td style="width:60px" class="actions"><a class="btn btn-info btn-sm" href="/admin/orderdetails/edit?id=<?= $item['ido'] ?>&status=4">Chưa xác nhận</a></td>
                                <?php } ?>
                                <td style="width:60px" class="actions">
                                    <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#mod-danger-<?= $item['ido'] ?>" type="button">Xóa</a>
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
<div class="modal fade" id="mod-danger-<?= $item['ido'] ?>" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" aria-hidden="true"><span class="mdi mdi-close"></span></button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <div class="text-danger"><span class="modal-main-icon mdi mdi-close-circle-o"></span></div>
                    <h3>Xóa</h3>
                    <p>Bạn chắc chắn thực hiện hành động này ?</p>
                    <div class="mt-8">
                        <button class="btn btn-space btn-secondary" type="button" data-dismiss="modal">Hủy</button>
                        <a href="/admin/orderdetails/destroy?id=<?= $item['ido'] ?>" class="btn btn-space btn-danger" >Đồng ý</a>
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
@endScript