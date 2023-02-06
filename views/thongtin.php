<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Đăng nhập thanh toán</title>
  <link rel="stylesheet" type="text/css" href="css/style.css" media="all">
  <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css">
  <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">

  <script src="js/jquery-1.8.1.min.js"></script>
  <script src="js/script.js"></script>
  <script src="js/jquery.magnific-popup.js"></script>
  <script src="js/jquery.fancybox.js"></script>
  <script src="js/jquery.fancybox-media.js"></script>
</head>

<body data-control="Index">
  <div id="page-top">
    <div class="pagecuston">
      <div class="wrap">
        <!-- <ul class="menu-top">
        <li >
          <a href="/">Trang chủ</a>
        </li>
         <li >
          <a href="/">Hướng dẫn mua hàng</a>
        </li>
         <li >
          <a href="/">Điều khoản sử dụng</a>
        </li>
      </ul> -->

      </div>
    </div>
  </div>
  <!-------end#page-top--->
  <div id="page-all">
    <div id="header">
      <div class="header_top">
        <div class="wrap">
          <div class="logo"> <a href="/"><img src="images/logomt.png" alt="" title="logo" /></a> </div>
          <!-------end#logo--->
          <div class="shopping-check">
            <div class="breadcrumb-top">
              <a href="/login-thanhtoan">Đăng nhập</a>
              <a href="/thongtin" class="active">Thông tin khách hàng</a>
              <a href="/checkout">Thanh toán</a>
            </div>



          </div>
        </div>
        <!-----end#shopping_header--->

      </div>
      <!-----end#header-top--->


    </div>
    <!-------end#header--->
    <div id="content">
      <div class="wrap">
        <div class="Login-checkout">

          <div id="custo-info">


            <h2><span class="fontawesome-lock"></span>Thông tin khách hàng</h2>

            <form action="/saveUser?rd=6" method="post">

              <fieldset>
                <p class="cten">
                <p><label for="TDN">Họ và Tên(*) </label>
                  <input type="text" id="TDN" <?php if ($user->firstname) {
                                                echo "value = '$user->firstname'";
                                              } ?> name="firstname" placeholder="Họ và Tên">
                </p>
                <p><label for="TDN">Email(*) </label>
                  <input type="text" id="TDN" <?php if ($user->email) {
                                                echo "value = $user->email";
                                              } ?> name="email" placeholder="Email">
                </p>
                <p><label for="SDT"> Số Điện Thoại(*) </label>
                  <input type="text" id="SDT" <?php if ($user->phone) {
                                                echo "value = $user->phone";
                                              } ?> name="phone" placeholder="Số Điện Thoại">
                </p>
                <p>
                  <php><label for="DC">Địa chỉ(*) </label>
                    <input type="text" id="DC" <?php if ($user->diachi) {
                                                  echo "value = '$user->diachi'";
                                                } ?> name="diachi" placeholder="Địa chỉ">
                </p>
                </p>

                <p>

                  <!-- <div class="trans">
     <link href="css/tooltip.css" rel="stylesheet" type="text/css" />
    <script src="js/tooltip.js" type="text/javascript"></script>
  <a class="tooltip" href="#demo2_tip" onmouseover="tooltip.pop(this, '#demo2_tip')">Thanh toán trực tiếp</a>
        <div style="display:none;">
            <div id="demo2_tip">

                <h4>Thanh thoán tiền mặt (COD)</h4>
               Áp dụng trong mọi trường hợp. <br>
► Với các địa điểm tại  Hà Nội: Nhân viên giao hàng của Vuabanle sẽ chuyển hàng và bạn vui lòng thanh toán trực tiếp với nhân viên giao hàng. <br>
► Với các tỉnh thành khác: Nhân viên bưu điện sẽ chuyển hàng đến tận nhà và bạn vui lòng thanh toán trực tiếp với nhân viên bưu điện.
            </div>
        </div>
         <a class="tooltip" href="#demo3_tip" onmouseover="tooltip.pop(this, '#demo3_tip')">Thanh toán Smartlink</a>
        <div style="display:none;">
            <div id="demo3_tip">

                <h4>Thanh toán qua ngân hàng</h4>
                Áp dụng trong mọi trường hợp:
     <strong> (Giảm 20% phí giao hàng khi chọn hình thức thanh toán này)</strong>
                <br> Khi Vuabanle nhận được thông báo từ phía ngân hàng, chúng tôi sẽ nhanh chóng chuyển hàng cho quý khách. <br>
Giá trị thanh toán bảng 100% giá trị đơn hàng + Phí giao hàng (theo bảng giá tại chính sách vận chuyển)</strong>.
            </div>
        </div>
         <a class="tooltip" href="#demo4_tip" onmouseover="tooltip.pop(this, '#demo4_tip')">Thanh toán qua ngân lượng</a>
        <div style="display:none;">
            <div id="demo4_tip">

                <h4>Thanh toán qua ngân lượng</h4>

                <p>Áp dụng trong mọi trường hợp.</p>
                <p>Khách hàng đợi chúng tôi xác nhận bên </p>
            </div>
        </div>
     </div> -->

                </p>
                <p><input type="submit" name="update" value="Chọn hình thức thanh toán"></p>

              </fieldset>

            </form>

          </div> <!-- end login -->

          <div class="CartShop">
            <h1>Thông tin đơn hàng</h1>
            <div class="compare_plan">

              <div class="plans-list">
                <p>Bạn đang có 1 sản phẩm </p>
              </div>


              <div class="sho-row">
                <div class="plans-list1">
                  <h3>Sản phẩm</h3>
                </div>
                <div class="plans-list2">
                  <h3>Số lượng</h3>
                </div>
                <div class="plans-list3">
                  <h3>Giá </h3>
                </div>
                <div class="clear-float"></div>
              </div>


              <div class="body-row">

                <?php foreach ($cart as $item) { ?>
                  <div class="plans-list1">
                    <img src="/uploads/<?php echo $item->avatar ?>" alt="" title="" width="60px" height="60" />

                    <h4></h4>
                  </div>
                  <div class="plans-list2"><input type="text" id="soluongmua" name="so_luong_mua" value="<?php echo $item->so_luong_mua ?>" /></div>

                  <div class="plans-list3" id="test" value="<?= $item->price ?>"><?= number_format($item->price) ?> VNĐ</div>
                  <div class="clear-float"></div>
                <?php } ?>
              </div>
              <div class="control-shop">
                <div class="order_now1">Phí vận chuyển</div>
                <div class="order_now2"><?= number_format($up) ?></div>
                <div class="clear-float"></div>
              </div>
              <div class="control-shop">
                <div class="order_now1">Tổng cộng</div>
                <div class="order_now2"><?= number_format($tong + $up) ?>VNĐ</div>
                <div class="clear-float"></div>

                <div class="control-suse">
                  <div class="order_now1">Thành tiền</div>
                  <div class="order_now2"><?= number_format($total + $up) ?>VNĐ</div>
                  <div class="clear-float"></div>
                </div>
              </div>

            </div>

          </div>

        </div>




      </div>
      <!-----end#content----->
      <div id="footer-thong-tin">
        <div class="wrap">
          <!-------end.footer-top--->
          <div class="copy-footer">
            <b>WEBSITE CỬA HÀNG ĐTDĐ MTSHOP CẦN THƠ</b>
            <p>Địa chỉ: số 6/9, hẻm 69, phường An Khánh, Ninh Kiều, Cần Thơ</p>
            <p>Điện thoại: 035 461 xxxx | Email: mrbmtxxx@gmail.com</p>
          </div>
          <!---------end.copy-footer--->
        </div>
      </div>
      <!-------end#footer-top------->
    </div>
  </div>
  <!-------end#page-all--->

</body>

</html>