<?php

use app\core\Application;
?>

<?php Application::$app->showErrorMsgs('orderdetails', true) ?>
<?php Application::$app->showMsg('success') ?>

<div class="row">
    <div class="col-4 mx-auto">
        <div class="card-body">

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
                <!-- <div class="tools dropdown"> -->
                </span>
                <!-- <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"><span class="icon mdi mdi-more-vert"></span></a> -->
                <div class="dropdown-menu" role="menu">
                    <a class="dropdown-item" href="/admin/orderdetails/create">Thêm</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped table-borderless">
                <thead>
                    <tr>
                        <th style="width:5%;">Số thứ tự</th>
                        <th style="width:15%;">Tên sản phẩm</th>
                        <th style="width:15%;">Ảnh sản phẩm</th>
                        <th style="width:15%;">Giá</th>
                        <th style="width:15%;">Địa chỉ</th>
                        <th style="width:15%;">Ngày đặt hàng</th>
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
                            <td><img width="100px" src="/uploads/<?= (!$item['av']) ? 'slider2.jpg' : $item['av']  ?>" alt="" srcset=""></td>
                            <td><label> <?= $item['price']; ?> </label></td>
                            <td><label> <?= $item['diachiOrder']; ?></label></td>
                            <?php
                            $timeReal = date("Y-m-d");
                            $time = date("Y-m-d", strtotime($item['time']));
                            $muoi_ngay_truoc = date("Y-m-d", strtotime("+1 day", strtotime($time)));
                            ?>
                            <td><label> <?= $item['time']; ?></label></td>
                            <td><label class="btn btn-success"> <?php echo ($item['paymentType'] == 0) ?  'COD' :  'VNPay' ?> </label></td>
                            <?php if ($item['st'] == 0 && $muoi_ngay_truoc >= $timeReal) { ?>
                                <td style="width:60px" class="actions"><a class="btn btn-warning btn-sm" href="/user/update?id=<?= $item['ido'] ?> status=0">Chọn hủy đơn</a></td>
                            <?php } else if ($item['st'] == 0) { ?>
                                <td style="width:60px" class="actions"><label class="btn btn-secondary btn-sm" href="">Đang chuyển hàng</label></td>
                            <?php } else if ($item['st'] == 1) { ?>
                                <td style="width:60px" class="actions"><label class="btn btn-success btn-sm" href="">Đang giao hàng</label></td>
                            <?php } else if ($item['st'] == 2) { ?>
                                <td style="width:60px" class="actions"><label class="btn btn-warning btn-sm" href="">Đã hủy đơn</label></td>
                            <?php } else if ($item['st'] == 3) { ?>
                                <td style="width:60px" class="actions"><label class="btn btn-info btn-sm" href="">Đã hủy đơn</label></td>
                            <?php } ?>
                        </tr>
                        <?php $i++ ?>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>


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