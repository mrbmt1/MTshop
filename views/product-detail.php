<?php


use app\core\Application;
?>

<?php Application::$app->showErrorMsgs('products', true)?>
<?php Application::$app->showMsg('success')?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>MtShop.vn</title>
<link rel="stylesheet" type="text/css" href="css/style.css" media="all">
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
<link rel="stylesheet" type="text/css" href="css/demo.css">
<link rel="stylesheet" href="/assets/css/app.css" type="text/css" />
<script>!window.jQuery && document.write(unescape('%3Cscript src="js/jquery-1.8.1.min.js"%3E%3C/script%3E'))</script>
<script> $(document).ready(function() {
window.catalog_rotate = 0;

window.sb_submenu = 1;
 });</script>
<script src="js/menucatalog.js"></script>
 <script src="js/1399642332.js"></script>
<script src="js/script.js"></script>
<link rel="stylesheet" href="css/popupwindow.css">
<script src="js/popupwindow.js"></script>
<script src="js/demo.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<style>
  .container {
	max-width: 640px;
	margin: 30px auto;
	background: #fff;
	border-radius: 8px;
	padding: 20px;
}

.margin-bottom {
}

.comment {
	display: block;
	transition: all 1s;
}

.commentClicked {
	min-height: 0px;
	border: 1px solid #eee;
	border-radius: 5px;
	padding: 5px 10px
}

textarea {
	width: 100%;
	border: none;
	background: #E8E8E8;
	padding: 5px 10px;
	height: 50%;
	border-radius: 5px 5px 0px 0px;
	border-bottom: 2px solid #016BA8;
	transition: all 0.5s;
	margin-top: 15px;
}

button.primaryContained {
	background: #016ba8;
	color: #fff;
	padding: 10px 10px;
	border: none;
	margin-top: 0px;
	cursor: pointer;
	text-transform: uppercase;
	letter-spacing: 4px;
	box-shadow: 0px 2px 6px 0px rgba(0, 0, 0, 0.25);
	transition: 1s all;
	font-size: 10px;
	border-radius: 5px;
}
.message {
    font: 20px Helvetica, Arial, Sans-serif;
    display: none;
    width: 100%;
    padding: 20px;
    color: #fff;
}

.error {
    background: red;
}

.success {
    background: green;
}
button.primaryContained:hover {
	background: #9201A8;
}
</style>

</head>

<body   data-control="Index">
<div style="background:green;color:white;display:flex;align-items:center;justify-content: center;">
  <?php Application::$app->showErrorMsgs('products', true)?>
  <?php Application::$app->showMsg('success')?>
  </div>
<div id="page-top">
  <div class="pagecuston">
    <div class="wrap">
    <ul class="menu-top">
        <?php if (!Application::$app->session->get('user_')) {?>
          <li>
        <div  style="cursor: pointer;color: white;" id="sw_dropdown_3">
                <a id="open-pop-up-1" href="#pop-up-1">Đăng nhập/Đăng ký</a>
        </div></li>
        <?php } else {?>
        <li>
        <div style="color: green">Hi: <?= Application::$app->session->get('user_')->login_id ?></div>
        </li>
            <li>
        <div  style="cursor: pointer;color: white;" id="sw_dropdown_3" >
        <?php if(Application::$app->session->get('user_')->role == 0) { ?>
        <a style="color: #000" href="/user">Thông tin tài khoản</a>
        <?php }?>
        
                <a style="color: #000" href="/logout?rd=3">Đăng xuất</a>
        </div></li>
        <?php }?>
      </ul>
   <div id="pop-up-1" class="pop-up-display-content">

    <div class="plans_table">
        	<h2 class="h2-login">Đăng nhập /Đăng ký</h2>
          <div id="login">
		<h2><span class="fontawesome-lock"></span>Khách hàng đã đăng ký</h2>
		<form action="/login?rd=4&id=<?=$product->id?>" method="POST">

			<fieldset>

				<p><label for="email">Account </label></p>
				<p><input type="text" id="email" name="login_id" value="mail@address.com" onBlur="if(this.value=='')this.value='mail@address.com'" onFocus="if(this.value=='mail@address.com')this.value=''"></p> <!-- JS because of IE support; better: placeholder="mail@address.com" -->

				<p><label for="password">Password (*)</label></p>
				<p><input type="password" name="password" id="password" value="password" onBlur="if(this.value=='')this.value='password'" onFocus="if(this.value=='password')this.value=''"></p> <!-- JS because of IE support; better: placeholder="password" -->
	<!-- <p><label>Quên mật khẩu?</label></p> -->
				<p><input type="submit" value="Đăng nhập"></p>

			</fieldset>

		</form>

	</div> <!-- end login -->
      <div id="res">

		<h2><span class="fontawesome-lock"></span>Khách hàng chưa đăng ký</h2>
<script>
$(function(){
  var regExp = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;

  $('[type="text"]').on('keyup', function() {
    $('.message').hide();
    regExp.test( $(this).val() ) ? $('.message.success').show() : $('.message.error').show();
  });

});
</script>
<form action="/register" method="POST">

<fieldset>

  <p><label for="HoTen">Họ và Tên (*) </label>
  <input required type="HoTen"  id="HoTen" placeholder="Họ và Tên" name="firstname"></p>
    <p><label for="SDT">Số Điện Thoại (*) </label>
  <input required type="SDT"  id="SDT" name="phone" placeholder="Số Điện Thoại" ></p>
            <p><label for="Email-l">Email (*) </label>
  <input required type="Email-l"  id="Email-l" name="email" placeholder="mail@address.com" ></p>
      <p><label for="TDN">Tên Đăng Nhập(*) </label>
  <input required type="TDN"  id="TDN" placeholder="Tên Đăng Nhập" name="login_id"></p>
            <p><label for="password">Mật Khẩu (*)</label>
  <input required type="password"  id="password" placeholder="password" name="password" ></p>
  <p><input type="submit" value="Đăng ký" ></p>

</fieldset>

</form>

	</div> <!-- end login -->



    </div>
  </div>


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
        <div class="shopping-header">
          <div class="cskh">
            <div>
              <div class="usp-sp-icon usp-sprite usp-sp-warp">
                <div class="usp-sprite warp-animation"></div>
                <div class="usp-sprite warp-static"></div>
              </div>
              <div class="usp-sp-desc">
                <div class="strong uspline"> Đổi trả hàng <br>
                  trong 10 ngày</div>
                <div class="uspline-sub"></div>
              </div>
            </div>
            <!-- <div>
          <div id="freeship-tooltip" class="tip middle">
            <div class="tt-title"> <b>Quý khách có thể đổi trả hàng miễn phí trong vòng 10 ngày kể nhận hàng.</b> </div>
            <div class="tt-desc"> <span>khách đều được đổi trả hàng miễn phí trong vòng 10 ngày theo mọi hình thức </span> </div>
          </div>
        </div> ---> 
          </div>
          <div class="cskh">
            <div>
              <div class="usp-sp-icon usp-sprite usp-sp-cash">
                <div class="usp-sprite cash-animation"></div>
                <div class="usp-sprite cash-static"></div>
              </div>
              <div class="usp-sp-desc">
                <div class="strong uspline"> Thanh toán khi <br>
                  nhận hàng</div>
                <div class="uspline-sub"></div>
              </div>
            </div>
            <!-- <div>
          <div id="freeship-tooltip" class="tip middle">
            <div class="tt-title"> <b>Quý khách có thể đổi trả hàng miễn phí trong vòng 10 ngày kể nhận hàng.</b> </div>
            <div class="tt-desc"> <span>khách đều được đổi trả hàng miễn phí trong vòng 10 ngày theo mọi hình thức </span> </div>
          </div>
        </div> ---> 
          </div>
          <div class="cskh">
            <div>
              <div class="usp-sp-icon usp-sp-ship usp-sprite">
                <div class="usp-sprite ship-animation"></div>
              </div>
              <div class="usp-sp-desc">
                <div class="strong uspline">Vận chuyển<br>
                  miễn phí</div>
                <div class="uspline-sub"></div>
              </div>
            </div>
            <!-- <div>
          <div id="freeship-tooltip" class="tip middle">
            <div class="tt-title"> <b>Quý khách có thể đổi trả hàng miễn phí trong vòng 10 ngày kể nhận hàng.</b> </div>
            <div class="tt-desc"> <span>khách đều được đổi trả hàng miễn phí trong vòng 10 ngày theo mọi hình thức </span> </div>
          </div>
        </div> ---> 
          </div>
          <div class="cskh">
            <div>
              <div class="usp-sp-icon usp-sprite usp-sp-cart">
                <div class="usp-sprite cart-animation"></div>
              </div>
              <div class="usp-sp-desc">
            <div class="strong uspline"> <span style="color:red; line-height:26px;">(<?php echo ($cart) ? count($cart) : 0 ?>) </span> Giỏ hàng </div>
              <div class="uspline-sub"></div>
            </div>
          </div>
          <!-- <div>
          <div id="freeship-tooltip" class="tip middle">
            <div class="tt-title"> <b>Quý khách có thể đổi trả hàng miễn phí trong vòng 10 ngày kể nhận hàng.</b> </div>
            <div class="tt-desc"> <span>khách đều được đổi trả hàng miễn phí trong vòng 10 ngày theo mọi hình thức </span> </div>
          </div>
        </div> ---> 
        </div>
      </div>
      <!-----end#shopping_header---> 
      
    </div>
    <!-----end#header-top--->
    <div id="nav-top">
      <div class="wrap">
        <div class="menu-top">
   
<script>!window.jQuery && document.write(unescape('%3Cscript src="js/jquery-1.8.1.min.js"%3E%3C/script%3E'))</script>
        
         <div class="MainBar">
  <nav id="menu" class="hdMenu">
    <div class="navWrapper navWrapper-index navWrapper-mu" id="spinbasketmenu">
      <div class="nav-sub-visible">
        <div class="navWrapperBackground">
          <div class="navWrapperBackground_arrow"></div>
        </div>
        <a class="navAllCat " href="#">Các loại sản phẩm</a> 
        <a class="navDropdown" href="#"></a>
        <div class="navSub-wrapper">
          <ul class="navSub">                    
            <?php foreach ($danhmuc as $item) { ?>
                      <li class="multiMenu" data-sub-menu="navLayer_1">
                        <a class="catArrow " href="/find-categories?id=<?= $item->id ?>"> <span class="navSubTxt"><?= $item->name ?></span> </a>
                      </li>
                      <?php } ?>
                      <li class="multiMenu" data-sub-menu="navLayer_1">
                        <a class="catArrow " href="/post"> <span class="navSubTxt" style="color:red;">BÀI VIẾT</span> </a>
                      </li>
         
          </ul>
          <div class="submenuWrapper">
            <div id="navLayer_1" class="navLayer" style="display: none;">
              <div class="navLayerSub clearfix">
                <div class="navCol navCol1">
                  <div class="nav-title"><a href="danhmucon.html">TiVi,Video &amp; Âm Thanh</a> </div>
                  <div class="nav-linklist"> 
                  <a href="#" class="bsncLink">Đầu thu kĩ thuật số</a> 
                   </div>
                  <div class="brand-list"> </div>
                  <div class="nav-title"><a href="#">Bể bơi phao</a> </div>
                  <div class="nav-linklist"> 
                  <a href="#" class="bsncLink">Intex</a>
                   <a href="#" class="bsncLink">Swimming pool</a>
                    <a href="#" class="bsncLink">Phụ kiện bể bơi</a>  </div>
                  <div class="brand-list"> </div>
                        <div class="nav-title"><a href="#">Nội thất</a> </div>
                  <div class="nav-linklist">
                  <a href="#" class="bsncLink">Nội thất phong thủy</a>
                   <a href="#" class="bsncLink">Bàn trà</a>   </div>
                  <div class="brand-list"> </div>
                       <div class="nav-title"><a href="#">Đèn pin chiếu sáng</a> </div>
                  <div class="nav-linklist"> 
                  <a href="#" class="bsncLink">Đèn pin LED</a>
                   <a href="#" class="bsncLink">Phụ kiện đèn pin</a>
                     <a href="#" class="bsncLink">Đèn pin xe đạp</a> 
                     <a href="#" class="bsncLink">Đèn pin chiếu sáng khủng</a>  </div>
                  <div class="brand-list"> </div>
                </div>
                 <div class="navCol navCol2">
                  <div class="nav-title"><a href="#">Đồ dùng gia dụng</a> </div>
                  <div class="nav-linklist"> 
                  <a href="#" class="bsncLink">Bình,Cây nóng lạnh</a>
                   <a href="#" class="bsncLink">Máy lọc nước gia đình</a>
                    <a href="#" class="bsncLink">Đèn sưởi ấm nhà tắm</a>
                     <a href="#" class="bsncLink">Bếp từ, bếp hồng ngoại</a>
                      <a href="#" class="bsncLink">Máy sưởi, quạt sưởi</a> 
                    <a href="#" class="bsncLink">Bình đun siêu tốc</a>
                     <a href="#" class="bsncLink">Bình dữ nhiệt</a>
                      <a href="#" class="bsncLink">Lò vi sóng, vỉ nướng, lò nướng</a>
                       <a href="#" class="bsncLink">Nồi áp suất, nồi lẩu</a> 
                       <a href="#" class="bsncLink">Máy sấy quần áo</a>
                       <a href="#" class="bsncLink">Chổi lau nhà</a>
                        <a href="#" class="bsncLink">Máy hút bụi</a>
                        <a href="#" class="bsncLink">Quạt điện</a> 
                         </div>
                  <div class="brand-list"> </div>
                </div>
                  <div class="navCol navCol3">
                  <div class="nav-title"><a href="#">Đồ dùng nhà bếp</a> </div>
                  <div class="nav-linklist"> 
                  <a href="#" class="bsncLink">Máy trồng rau</a>
                   <a href="#" class="bsncLink">Nồi cơm điện</a>
                    <a href="#" class="bsncLink">Nồi xoong - chảo</a> 
                    <a href="#" class="bsncLink">Máy đánh trứng</a> 
                    <a href="#" class="bsncLink">Nồi hấp đa năng</a>
                     </div>
                </div>
              </div>
              <div class="catImg catImg-inside" style="max-height: 343px;"> 
                <!-- Image in .png format --> 
                <a href="#"> <span class="" data-src="images/anh-thu-muc-do-dung-gia-dinh.jpg"><img src="images/anh-thu-muc-do-dung-gia-dinh.jpg"></span> </a> </div>
              <div style="clear:both"></div>
            </div>
            <div id="navLayer_2" class="navLayer" style="display: none;">
              <div class="navLayerSub clearfix">
                <div class="navCol navCol1">
                  <div class="nav-title"><a href="#">Điều hòa Funiki</a> </div>
                  <div class="nav-linklist">
                   <a href="#" class="bsncLink">Một chiều Funiki</a>
                    <a href="#" class="bsncLink">Hai chiều Funiki</a> </div>
                  <div class="brand-list">  </div>
                  <div class="nav-title"><a href="#">Điều hòa Daikin</a> </div>
                  <div class="nav-linklist"> 
                  <a href="#" class="bsncLink">Một chiều DaiKin</a>
                   <a href="#" class="bsncLink">Hai chiều DaiKin</a>
                    </div>
                  <div class="brand-list">  </div>
                </div>
                <div class="navCol navCol2">
                  <div class="nav-title"><a href="#">Điều hòa Sumikuza</a> </div>          
                  <div class="nav-linklist"> 
                  <a href="#" class="bsncLink">Thẻ nhớ</a>
                   <a href="#" class="bsncLink">Vỏ &amp; Bao điện thoại</a>
                    <a href="#" class="bsncLink">Headset</a>
                     <a href="#" class="bsncLink">Pin điện thoại</a>
                      <a href="#" class="bsncLink">Sạc pin điện thoại</a> 
                      </div>
                  <div class="brand-list">  </div>
                  <div class="nav-title"><a href="#">Điều hòa Panasonic</a> </div>
                  <div class="nav-linklist">
                   <a href="#" class="bsncLink">Một chiều Panasonic</a>
                    <a href="#" class="bsncLink">Hai chiều Panasonic</a>
                     </div>
                  <div class="brand-list">  </div>
                  
                </div>
                <div class="navCol navCol3">
                  <div class="nav-title"><a href="#">Điều hòa LG</a> </div>
                  <div class="nav-linklist"> 
                  <a href="#" class="bsncLink">Một chiều LG</a>
                   <a href="#" class="bsncLink">Hai chiều LG</a> 
                    </div>
                </div>
              </div>
              <div class="catImg catImg-inside" style="max-height: 326px;"> 
                <!-- Image in .png format --> 
                <a href="h#"> <span class="" data-src="images/anh-danh-muc-dien-may_1.png"><img src="images/anh-danh-muc-dien-may_1.png"></span> </a> </div>
              <div style="clear:both"></div>
            </div>
            <div id="navLayer_3" class="navLayer" style="display: none;">
              <div class="navLayerSub clearfix">
                <div class="navCol navCol1">
                  <div class="nav-title"><a href="#">Nghe nhìn</a> </div>
                  <div class="nav-linklist">
                   <a href="#" class="bsncLink">Kính thiên văn</a> 
                   <a href="#" class="bsncLink">Đồng hồ, điện thoại</a>  
                   </div>
                  <div class="brand-list"> </div>
                  <div class="nav-title"><a href="#">Đồ du lịch</a> </div>
                  <div class="nav-linklist"> <a href="#" class="bsncLink">Gường hơi</a>  </div>
                  <div class="brand-list"></div>
                   <div class="nav-title"><a href="#">Dụng cụ tập thể lực</a> </div>
                  <div class="nav-linklist"> <a href="#" class="bsncLink">Xà đơn, Xà kép, xà xếp</a>
                   <a href="#" class="bsncLink">Tạ tay đa năng</a>
                    <a href="#" class="bsncLink">Boxing</a>
                     <a href="#" class="bsncLink">Yoga</a>
                      <a href="#" class="bsncLink">Dụng cụ tập</a>  </div>
                  <div class="brand-list"></div>
                </div>
                <div class="navCol navCol2">
                  <div class="nav-title"><a href="#">Patin</a> </div>
                  <div class="nav-linklist"> 
                  <a href="#" class="bsncLink">Giày Patin Couger</a>
                   <a href="#" class="bsncLink">Phụ kiện patin</a>
                    <a href="#" class="bsncLink">Giay Patin Seba</a> 
                    <a href="#" class="bsncLink">Giay Patin Fly Eagle</a>
                    <a href="#" class="bsncLink">Giay Patin Thương hiệu khác</a>
                    </div>
                  <div class="brand-list">  </div>
                  <div class="nav-title"><a href="#">Máy mesaga toàn thân</a> </div>
                  <div class="nav-title"><a href="#">Xe đạp thể lực</a> </div>
                  <div class="nav-title"><a href="#">Ván trượt </a> </div>
                  <div class="nav-title"><a href="#">Máy tăng chiều cao</a> </div>
                </div>
                <div class="navCol navCol3">
                  <div class="nav-title"><a href="#">Máy chạy bộ</a> </div>
                  <div class="nav-linklist"> 
                  <a href="#" class="bsncLink">Máy chạy bộ động lực</a> 
                  <a href="#" class="bsncLink">Máy chạy bộ Life</a>
                   <a href="#" class="bsncLink">Máy chạy bộ OMA</a>
                    <a href="#" class="bsncLink">Máy chạy bộ Reebok</a>
                     <a href="#" class="bsncLink">Máy chạy bộ MOFIT</a>
                     <a href="#" class="bsncLink">Máy chạy bộ Thương hiệu khác</a>
                     </div>
                </div>
              </div>
              <div class="catImg catImg-inside" style="max-height: 343px;"> 
                <!-- Image in .png format --> 
                <a href="#"> <span class="" data-src="images/anh the thao_(2).jpg"><img src="images/anh the thao_(2).jpg"></span> </a> </div>
              <div style="clear:both"></div>
            </div>
            <div id="navLayer_4" class="navLayer" style="display: none;">
              <div class="navLayerSub clearfix">
                <div class="navCol navCol1">
                  <div class="nav-title"><a href="#">Thực phẩm chức năng</a> </div>
                  <div class="nav-linklist">
                   <a href="#" class="bsncLink">Đường huyết</a> 
                   <a href="#" class="bsncLink">Chống thiếu máu</a>
                    <a href="#" class="bsncLink">Giảm béo</a>
                    <a href="#" class="bsncLink">Chăm sóc da</a>  </div>
                  <div class="brand-list">  </div>
                  <div class="nav-title"><a href="#">Mỹ phẩm làm đẹp</a> </div>
                  <div class="nav-linklist"> 
                  <a href="#" class="bsncLink">Trang điểm</a> 
                  <a href="#" class="bsncLink">Dưỡng da</a>
                   <a href="#" class="bsncLink">Nước hoa</a> 
                   <a href="#" class="bsncLink">Chăm sóc tóc</a>
                   <a href="#" class="bsncLink">Nước hoa cáo cấp</a>
                   <a href="#" class="bsncLink">Kem dưỡng tay, móng tay</a> 
                   </div>
                  <div class="brand-list"></div>
                  <div class="nav-title"><a href="#">Sản phẩm hỗ trợ tình dục</a> </div>
                  <div class="nav-linklist">
                   <a href="#" class="bsncLink">Bao cao su</a> 
                    </div>
                  <div class="brand-list"></div>
                </div>
                <div class="navCol navCol2">
                  <div class="nav-title">
                  <a href="#">Thiết bị y tế gia đình</a> </div>
                  <div class="nav-linklist"> 
                  <a href="#" class="bsncLink">Thiết bị tai mũi họng</a>
                   <a href="#" class="bsncLink">Túi chườm đa năng</a> 
                   <a href="#" class="bsncLink">Máy đo và que thử đường huyết</a>
                    <a href="#" class="bsncLink">Máy đo máu nhiễm mỡ</a> 
                    <a href="#" class="bsncLink">Cân sức khỏe</a> 
                    <a href="#" class="bsncLink">Nhiệt kế điện tử</a> 
                    <a href="#" class="bsncLink">Đèn hồng ngoại</a>
                    <a href="#" class="bsncLink">Chăn điện</a>
                    <a href="#" class="bsncLink">Tấm chườn nóng</a>
                     <a href="#" class="bsncLink">Đo nhiệt độ, độ ẩm</a>
                      <a href="#" class="bsncLink">Đệm bốn mùa</a>
                      <a href="#" class="bsncLink">Máy theo dõi, trị liệu khác</a>
                      </div>
                  
                </div>
                <div class="navCol navCol3">
                  <div class="nav-title"><a href="#">Thiết bị làm đẹp</a> </div>
                  <div class="nav-linklist"> 
                  <a href="#" class="bsncLink">Lều xông hơi</a> 
                  <a href="#" class="bsncLink">Xông hơi 2 mặt</a> 
                  <a href="#" class="bsncLink">Đai massage</a> 
                  <a href="#" class="bsncLink">Máy giảm béo & chăm sóc da</a> 
                  <a href="#" class="bsncLink">Máy sấy tóc</a></div>
                </div>
              </div>
              <div class="catImg catImg-inside" style="max-height: 343px;"> 
                <!-- Image in .png format --> 
                <a href="#"> <span class="" data-src="images/sac-dep-suc-khoe.jpg"><img src="images/sac-dep-suc-khoe.jpg"></span> </a> </div>
              <div style="clear:both"></div>
            </div>
            <div id="navLayer_5" class="navLayer" style="display: none;">
              <div class="navLayerSub clearfix">
                <div class="navCol navCol1">
                  <div class="nav-title"><a href="#">Thiết bị mã số vạch</a> </div>
                  <div class="nav-linklist"> <a href="#" class="bsncLink">Đầu đọc mã vạch</a>
                   <a href="#" class="bsncLink">Máy in hóa đơn</a> <a href="#" class="bsncLink">Máy in mã vạch</a> </div>
                  <div class="brand-list"> </div>
                  <div class="nav-title"><a href="#">Máy hút ẩm</a> </div>
                  <div class="nav-linklist"> <a href="#" class="bsncLink">Edison</a> <a href="#" class="bsncLink">Harison</a>  </div>
                  <div class="nav-title"><a href="#">Máy cắt</a> </div>
                  <div class="nav-title"><a href="#">Máy photocopy</a> </div>
                  <div class="nav-title"><a href="#">Máy fax</a> </div>
                </div>
                <div class="navCol navCol2">
                  
                    <div class="nav-title"><a href="#">Thiết bị mạng</a> </div>
                  <div class="nav-linklist"> <a href="#" class="bsncLink">Bộ phát Wifi</a> <a href="#" class="bsncLink">Bộ thu Wifi</a><a href="#" class="bsncLink">Cổng chia mạng (Swith)</a> </div>
                  <div class="brand-list"> </div>
                  <div class="nav-title"><a href="#">Linh kiện máy tính</a> </div>
                  <div class="nav-linklist"> <a href="#" class="bsncLink">Màn hình vi tính</a> <a href="#" class="bsncLink">RAM máy tính</a> </div>
                </div>
                <div class="navCol navCol3">
                  <div class="nav-title"><a href="#">Máy in văn phòng</a> </div>
                  <div class="nav-linklist"> <a href="#" class="bsncLink">Máy in phun mau</a> <a href="#" class="bsncLink">Máy in ảnh canon</a> <a href="#" class="bsncLink">Máy in Bother</a>  </div>
                </div>
              </div>
              <div class="catImg catImg-inside" style="max-height: 326px;"> 
                <!-- Image in .png format --> 
                <a href="#"> <span class="" data-src="images/anh-may-van-phong.jpg"><img src="images/anh-may-van-phong.jpg"></span> </a> </div>
              <div style="clear:both"></div>
            </div>
            <div id="navLayer_6" class="navLayer" style="display: none;">
              <div class="navLayerSub clearfix">
                <div class="navCol navCol1">
                  <div class="nav-title"><a href="#">Đồ chơi trí tuệ thông minh</a> </div>
                  <div class="nav-linklist"> 
                  <a href="#" class="bsncLink">Bộ xây dựng</a>
                   <a href="#" class="bsncLink">Bộ lắp ghép</a>
                    <a href="#" class="bsncLink">Đồ chơi tạo âm thanh</a>
                     <a href="#" class="bsncLink">Học chữ, học số</a>
                      <a href="#" class="bsncLink">Đồ chơi lắp ghép hura</a>
                       <a href="#" class="bsncLink">Đồ chơi LEGO</a> </div>
                  <div class="nav-title">
                  <a href="#">Đồ chơi cao cấp</a>
                   </div>
                  <div class="nav-linklist">
                 <a href="#" class="bsncLink">Bộ xây dựng</a>
                   <a href="#" class="bsncLink">Bộ lắp ghép</a>
                    <a href="#" class="bsncLink">Đồ chơi tạo âm thanh</a>
                   
                     </div>
                  <div class="nav-title"><a href="#">Xe đẩy</a> </div>
                  <div class="nav-title"><a href="#">Xe tập đi</a> </div>
                  <div class="nav-title"><a href="#">Thảm chơi cho bé</a> </div>
                </div>
                <div class="navCol navCol2">
                  <div class="nav-title">
                  <a href="#">Máy bay điều khiển</a> 
                  </div>
                  <div class="nav-linklist"> 
                  <a href="#" class="bsncLink">Máy bay 4 kênh</a> 
                
                   <a href="#" class="bsncLink">Máy bay 3 kênh</a> 
                   <a href="#" class="bsncLink">Máy bay 3,5 kênh</a>
                    <a href="#" class="bsncLink">May bay 2 kênh</a> 
                    
                     </div>
                       <div class="nav-title">
                  <a href="#">Xe mô hình mới</a> 
                  </div>
                  <div class="nav-linklist"> 
                  <a href="#" class="bsncLink">Mô hình ford</a> 
                
                   <a href="#" class="bsncLink">Mô hinh nisan</a> 
                   <a href="#" class="bsncLink">Máy bay 3,5 kênh</a>
                    <a href="#" class="bsncLink">May bay 2 kênh</a> 
                    
                     </div>
                  <div class="brand-list">
                   </div>
                </div>
                <div class="navCol navCol3">
                  <div class="nav-title">
                  <a href="#">Đai và Địu trẻ em</a> </div>
                  <div class="nav-linklist"> 
                  <a href="#" class="bsncLink">Đai trẻ em</a>
                   <a href="#" class="bsncLink">Đai an toan trẻ em</a>
                  </div>
                </div>
              </div>
              <div class="catImg catImg-inside" style="max-height: 326px;"> 
                <!-- Image in .png format --> 
                <a href="#"> <span class="" data-src="images/anh-thu-muc-tre-em.jpg"><img src="images/anh-thu-muc-tre-em.jpg"></span> </a> </div>
              <div style="clear:both"></div>
            </div>
            <div id="navLayer_7" class="navLayer" style="display: none;">
              <div class="navLayerSub clearfix">
                <div class="navCol navCol1">
                
                  <div class="nav-title"><a href="#">Xe đạp mini thời trang</a> </div>
                  <div class="nav-linklist"> 
                  <a href="#" class="bsncLink">Loan Dao</a>
                   <a href="#" class="bsncLink">Thống nhất</a> 
                  
                      </div>
                  <div class="brand-list">  </div>
                  <div class="nav-title"><a href="#">Xe đạp thông dụng</a> </div>
                  <div class="nav-linklist"> 
                  <a href="#" class="bsncLink">Thống nhất</a>
                   <a href="#" class="bsncLink">Xone</a>
                 
                     </div>
                  <div class="brand-list">  </div>
            <div class="nav-title"><a href="#">Xe đạp điện</a> </div>
                  <div class="nav-linklist"> 
                  <a href="#" class="bsncLink">Thống nhất</a>
                
                 
                     </div>
                  <div class="brand-list">  </div>
                 
                </div>
                <div class="navCol navCol2">
               
                  <div class="nav-title"><a href="#">Xe đạp trẻ em</a> </div>
                  <div class="nav-linklist"> 
                  <a href="#" class="bsncLink">Thống nhất</a>
                      <a href="#" class="bsncLink">X-game</a>
                          <a href="#" class="bsncLink">Radio-flyer</a>
                              <a href="#" class="bsncLink">Các thương hiệu khác</a>  </div>
                </div>
                <div class="navCol navCol3">
                  <div class="nav-title"><a href="#">Xe đạp đị hình thời trang</a> </div>
                  <div class="nav-linklist"> 
                  <a href="#" class="bsncLink">Thống nhất</a>
                   <a href="#" class="bsncLink">Timaon</a> 
                   <a href="#" class="bsncLink">Thướng hiệu khác</a>
                
                    </div>
                </div>
              </div>
              <div class="catImg catImg-inside" style="max-height: 343px;"> 
                <!-- Image in .png format --> 
                <a href="#"> <span class="" data-src="mages/anh-xe-dap-cac-loai.jpg"><img src="images/anh-xe-dap-cac-loai.jpg"></span> </a> </div>
              <div style="clear:both"></div>
            </div>
            <div id="navLayer_8" class="navLayer" style="display: none;">
              <div class="navLayerSub clearfix">
                <div class="navCol navCol1">
                  <div class="nav-title"><a href="#">Sách chấm đọc</a> </div>
                  <div class="nav-linklist"> 
                  <a href="#" class="bsncLink">Sách chấm đọc But Huna Talk</a> 
                  <a href="#" class="bsncLink">Sách chấm đọc But Touch talk</a>
                  <a href="#" class="bsncLink">Sách chấm đọc K700</a>  </div>
                  <div class="brand-list">  </div>
                     <div class="nav-title"><a href="#">Sách chấm đọc</a> </div>
                  <div class="nav-linklist"> 
                  <a href="#" class="bsncLink">Sách chấm đọc But Huna Talk</a> 
                  <a href="#" class="bsncLink">Sách chấm đọc But Touch talk</a>
                  <a href="#" class="bsncLink">Sách chấm đọc K700</a>  </div>
                  <div class="brand-list">  </div>
                </div>
                <div class="navCol navCol2">
                  <div class="nav-title">
                  <a href="#">Máy học tiếng anh</a> </div>
                  <div class="nav-linklist"> 
                   <a href="#" class="bsncLink">Vua gia sư 500 - may giảng bài</a>
                      <a href="#" class="bsncLink">Vua gia sư 600 - may giảng bài</a>
                    <a href="#" class="bsncLink">Easy Talk 818 OFD - Máy học tiếng Anh</a>
                     <a href="#" class="bsncLink">Easy Talk 815 TPD - Máy học tiếng Anh</a> </div>
           
                </div>
                <div class="navCol navCol3">
                  <div class="nav-title"><a href="h#">Bút chấm đọc</a> </div>
                  <div class="nav-linklist"> 
                  <a href="#" class="bsncLink">Bút huna talk</a> 
                  <a href="#" class="bsncLink">Bút touch talk</a> 
                  <a href="#" class="bsncLink">Bút hoạt hình</a>
                  <a href="#" class="bsncLink">Bút K700</a> </div>
                </div>
              </div>
              <div class="catImg catImg-inside" style="max-height: 343px;"> 
                <!-- Image in .png format --> 
                <a href="#"> <span class="" data-src="images/anh-but-cham-doc-thong-minh.jpg"><img src="images/anh-but-cham-doc-thong-minh.jpg"></span> </a> </div>
              <div style="clear:both"></div>
            </div>
      
        
      
                 
            </div>
        </div>
      </div>
    </div>
  </nav>
</div>
<script src="js/menucatalog.js"></script>
  <script src="js/1399642332.js"></script>
 
        </div>
        <div class="search-home">
          <form action="#" id="search-box" >
            <div class="search-wapper">
              <input type="text"  class="text-search" name="" placeholder="Nhập tên sản phẩm cần tìm"/>
              <button type="submit" class="search-btn"> TÌM KIẾM </button>
            </div>
          </form>
        </div>
        <!-- <div class="like-face"> <img src="images/icon-like.png" alt="" /> </div> -->
      
      </div>
          
    </div>
      <div class="clear-float"></div>
    <!--------end#nav-top----> 

</div>
<!-------end#header--->
<div id="content">
<div class="content-top">
<div class="wrap"> 
      </div>
      </div>
  <!------end.content-top--->
 
  <!-----end.product-hight--->
   <div class="bread">
  <div class="wrap">
  </div>
  </div> <!----Bread-->
  <div class="Product-info">
    <div class="wrap">

    <div class="product-details">
    <div class="img-details">
    <div class="simpleLens-gallery-container" id="detail-1">
        <div class="simpleLens-container">
            <div class="simpleLens-big-image-container">
            <a class="simpleLens-lens-image" data-lens-image="/uploads/<?php echo $product->avatar ?>">
                    <img src="/uploads/<?php echo $product->avatar ?>" class="simpleLens-big-image">
                </a>
            </div>
        </div>
    </div>

<script type="text/javascript" src="js/jquery.simpleGallery.js"></script>
<script type="text/javascript" src="js/jquery.simpleLens.js"></script>

<script>
    $(document).ready(function(){
        $('#detail-1 .simpleLens-thumbnails-container img').simpleGallery({
            loading_image: 'images/loading.gif'
        });

        $('#detail-1 .simpleLens-big-image').simpleLens({
            loading_image: 'images/loading.gif'
        });
    });
</script>
    </div>
    
  
    <div class="info-details">
    <h1 class="title-h1"><?=$product->name?></h1> 
    <!-- <div class="as-ment"> <p> <a href="#review" 
class="prd-reviews" data-tab-linked="tab-review">
               Hãy là người đánh giá đầu tiên           </a></p></div> -->
    <!-- <div class="stocking"> Còn hàng</div> -->
    <?php $data = (int) $product->price - ((int) $product->price * (int) $product->sale)/100 ?>
    <div class="cost"> Giá gốc: <span><?=number_format($product->price)?> VNĐ</span></div>
        <div class="price"> Giá bán:<span style="color:red; padding-left:5px;"><?=number_format($data)?> VNĐ</span></div>
        
        <div class="info-">        
        <div class="colors" >
       
       <script>
$('.attrs-item.option').find('label').live('click',function(){$(this).parent().find('label').removeClass('check');$(this).addClass('check');});
    </script>

      <!-- <form id="" method="POST">
        <div class="attrs"><label class="label"> Màu sắc: </label>
        <div class="attrs-item option"> 
        <label title="Trắng" class=""><input type="radio" name="" value=""><span class="label" style="background-color:#ffffff">&nbsp;</span><span class="ic-check">Check</span></label>
        <label title="Đỏ"><input type="radio" name="" value=""><span class="label" style="background-color:#ff0000">&nbsp;</span><span class="ic-check">Check</span></label>
        <label title="vàng"><input type="radio" name="" value=""><span class="label" style="background-color:#FBF921">&nbsp;</span><span class="ic-check">Check</span></label>
        <label title="đen"><input type="radio" name="" value=""><span class="label" style="background-color:#151414">&nbsp;</span><span class="ic-check">Check</span></label>
        </div></div>
                  </form> -->
        </div>
          <style>
.wrap-custom {
  width: 100% !important;
}
                
  .attrs select {
	width: 100px;
	line-height: 22px;
	height: 22px;
}
 .quality input[type='text'] {
	width: 50px;
	height: 24px;
	text-align: center;
}
 .attrs .attrs-item label {
	width: auto;
	border: 1px solid #ccc;
	background: #F2F2F2;
	text-align: center;
	display: block;
	float: left;
	cursor: pointer;
	position: relative;
	font-size: 13px;
	margin-right: 10px;
	margin-bottom: 5px;
	padding: 1px;
}
 .attrs .attrs-item label:hover,  .attrs .attrs-item label.check {
	border: 2px solid #c00;
	padding: 0
}
 .attrs .attrs-item label.check:before {
	display: block
}
 .attrs .attrs-item label > input {
	opacity: 0;
	position: absolute;
	top: 0;
	left: 0;
	cursor: pointer;
}
 .attrs .attrs-item label .ic-check {
	width: 0;
	height: 0;
	display: none;
	z-index: -1;
}
 .attrs .attrs-item label:before {
	content: '';
	background: url("http://static.sendo.vn/images/ecom/ic-sprite.gif") -462px -45px no-repeat;
	width: 13px;
	height: 13px;
	position: absolute;
	right: 0;
	bottom: 0;
	display: none;
}
 .attrs .attrs-item label > span {
	display: block;
	height: 20px;
	min-width: 26px;
	line-height: 20px;
	padding: 0 5px;
}
.attrs .attrs-item.color label {
}
.attrs .attrs-item.color label span {
	line-height: 25px;
	height: 25px;
}
 .buybtn {
	margin-top: 10px;
	position: relative;
}
 .fav {
	padding-left: 20px;
	font-size: 11px;
	font-weight: bold;
	line-height: 20px;
	clear: both;
	position: absolute;
	right: 0;
	top: 10px;
}
          </style>

    <div class="purchase">
    
    <div class="form-group">
    <div class="purc"> 
  <a class="popup-with-zoom-shop"  href="<?='/add-cart?id=' . $product->id?>" >  <button class="btn btn-primary"> <span>MUA NGAY</span></button></a></div>
    
    </div>
    <!-- <div class="purc-text">
    <p><a href="#">Hướng dẫn mua hàng</a></p>
    </div> -->
   
    </div>
    <div class="Nati">     
        <div class="Nati-Delivery">Giao hàng miễn phí toàn quốc</div>
        </div>
    <div class="Purc-phone">
    <h4>Hỗ trợ mua hàng: </h4>
				<div class="phone-number">
								 
								<img alt="" src="images/phone.png">
								<p>
								 <span class="phone"> 035 461 xxxx </span>
								</p>
															</div>
													
							<div class="phone-number">
								 
								<img alt="" src="images/phone.png">
								<p>
								 <span class="phone"> 0909 111 999</span>
								</p>
															<!-- </div>
													
                                                            <div class="support-online">
								 
							<a href="#">	<img alt="" src="images/yahoo.png">
								
													</a>		</div>	 -->
						
                                                            <!-- <div class="support-online">
								 
							<a href="#">	<img alt="" src="images/sky.png">
								
													</a>		</div>						 -->
    </div>
    <div class="direct" style="display:none;">
    <h4>Quý khách có thể trực tiếp đến cửa hàng tại Hà Nội:</h4>
 <p> Số 75 Trung kính, Cầu giấy, Hà nội</p>
    </div>

    <!-- <div class="likefacebook">
    <img src="images/imagefacebook.png" alt=""/>
    </div> -->
    </div>
    
  
    
    </div>
    
    
    </div>
  </div>
  
<div class="product-catalog">
  <div class="wrap1">
      <div class="box productTeaserBox prd-row">
<script src="JS_stor/tabcontent.js"></script>
   
    <div class="header-title1">
      <ul class="tabs" data-persist="true">
            <li>
            
    <h3 class="lfloat "> <a href="#view1"> Chi tiết sản phẩm </a> </h3>
      
            </li>
            <li>
      <h3 class="lfloat ">   <a href="#view2"> Nhận xét & bình luận </a> </h3>
      </li>
        </ul>
        </div>
        <div class="tabcontents">
            <div id="view1">
                  <div class="content spen-plus">
        
       
        <div class="content-detail-info">
        <div><?php echo html_entity_decode($product->description) ?></div>
        </div>
        <div class="product-Lienqua">
 
 <div class="wrap1">
   <div class="box productTeaserBox prd-row">
 <div class="header-title2"> 
      <h1 class="lfloat h3"> Các sản phẩm khác </h1>
        </div>
  <ul class="itemlist">
  <?php foreach ($productRelated as $product) {?>
                    <li>
                      <div class="item view-first1">
                        <a id="product-id" href="/product-detail?id=<?=$product->id?>">
                          <span> <img src="/uploads/<?php echo $product->avatar ?>" alt="" /></span>
                          <div class="item-prodinfo">
                            <div class="sb-gdv-disc">
                              <!-- <div class="sb-gdv-disc__content">-<?php echo $product->sale ?>%</div> -->
                            </div>
                            <div class="item-title"> <?php echo $product->name ?> </div>
                            <div class="item-price"><?php echo number_format((int) $product->price - ((int) $product->price * (int) $product->sale)/100) ?> VNĐ</div>
                          </div>
                        </a>
                        <div class="item-hover mask ">
                          <a href="#" class="shopping" id="shopping">mua hàng</a>
                        </div>
                      </div>
                    </li>
                    <?php }?>
          
          
          
   
          </ul>    <!------ListSanPham---->     
            
 
            
 </div> <!--------end.productTeaserBox---->
 </div>
 
 </div>
        <div id="footer-product-detail">

    <!-- <div class="footer-top">
      <div class="wrap wrap-custom" >
    <div class="fot-col">
    <div class="fotitle">THÔNG TIN</div>
    <ul class="linklist">
    <li><a href="#">Dành cho nhóm mua</a></li>
     <li><a href="#">Dành cho nhà cung cấp</a></li>
      <li><a href="#">Về MTshop.vn</a></li>
       <li><a href="#">Tuyển dụng</a></li>
     <li><a href="#">Tin tức</a></li>
      <li><a href="#">Tin khuyến mại</a></li>
       <li><a href="#">Cam kết thông tin</a></li>
          <li><a href="#">Khiếu nại</a></li>
    </ul>
    </div>
     <div class="fot-col">
    <div class="fotitle">HỖ TRỢ KHÁCH HÀNG</div>
    <ul class="linklist">
    <li><a href="#">Liên hệ</a></li>
     <li><a href="#">Phương thức thanh toán</a></li>
      <li><a href="#">Hướng dẫn mua hàng</a></li>
      <li><a href="#">Chính sách đổi trả hàng</a></li>
      <li><a href="#">Trung tâm bảo hành</a></li>
      <li><a href="#">Báo phí vận chuyển</a></li>
      <li><a href="#">Chính sách bảo hành</a></li>

    </ul>
    </div>
    <div class="fot-col2">
    <ul class="list-horiontal">
    <div class="fotitle">CÁCH THỨC THANH TOÁN</div>
    <ul class="list-horiontal payment-list">
    <li class="pay-icon ipayVisa" title=""></li>
    <li class="pay-icon ipayMaster" title=""></li>
    <li class="pay-icon ipayCOD" title=""></li>
    </ul>

    </ul>

    </div>

    <div class="fot-col3">
    <div class="fotitle">THƯƠNG HIỆU NỔI TIẾNG</div>
    <div class="line">
    <div class="line1">
    <ul>
    <li>Thiết bị sưởi ấm: <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> <a href="#"> xem thêm</a></li>
        <li>Thiết bị sưởi ấm: <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> <a href="#"> xem thêm</a></li>
            <li>Thiết bị sưởi ấm: <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> <a href="#"> xem thêm</a></li>
                <li>Thiết bị sưởi ấm: <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> </li>

    </ul>

    </div>
     </div>
    <div class="socal">
<div class="share-icon">
<a href="link_facebook" class="facebook"></a><span>Facebook </span>
<a href="link_twitter" class="twitter"></a><span> Twitter</span>
<a href="link_googleplus" class="google"></a><span>Google</span>
</div>
    </div>
    </div>
    </div>
    </div> -->
    <!-------end.footer-top--->
    <div class="copy-footer">
    <div class="wrap">
    <b>WEBSITE CỬA HÀNG ĐTDĐ MTSHOP CẦN THƠ</b>
    <p>Địa chỉ: số 6/9, hẻm 69, phường An Khánh, Ninh Kiều, Cần Thơ</p>
    <p>Điện thoại: 035 461 xxxx | Email: mrbmtxxx@gmail.com</p>
</div>
    </div>
    <!---------end.copy-footer--->
  </div>
  </div>
  <!-------end#footer-top------->
</div>
<!-------end#page-all--->

</body>
</html>

        
        </div>
                
            </div>
            <div id="view2">
                           <div class="content spen-plus"> 
     <table class="ui-grid ui-gridFull prd-attributes">
     <!-- <form id="post_id" action="/comment?id=<?= $product->id ?>" method="post">
<section id="app">
    <div style="width:100%;padding:20px">
      <div>
        <div >
          <div class="comment">
        <p v-for="items in item" v-text="items">
          <?php foreach ($comment as $item) {?>
            <div class="commentClicked">
                <div class="colorRate"><?php echo $item['rate'] ?? 3 ?>&#9733;</div>
                  <div class="commentName"><?php echo $item['firstname'] . ' ( ' . $item['email'] . ' )' ?> :</div>
              <div class="commentDetail">
                  <div><?php echo $item['commentDetail'] ?>
                </div>
              </div>
              <div>
              <?php echo $item['commentDataTime'] ?></div>
                <?php if($user && $user->id == $item['user_id'] || $user && $user->role == 1) { ?>
                <a href="/deleteComment?id=<?= $product->id?>&comment_id=<?= $item['idc'] ?>" class="btn btn-space btn-danger" >xóa</a>
                <?php }?>

            </div>
          <?php }?>
        </p>

      
          </div>
          </div>
          </div>
      <div class="row">
        <div class="col-6">
      <textarea type="text" class="input" name = "commentDetail" placeholder="Write a comment" v-model="newItem" @keyup.enter="addItem()"></textarea>
      <div style="display:flex">
          <button v-on:click="addItem()" class='primaryContained float-right' type="submit">Add Comment</button>
          <section id="rate" class="rating" name = "rate">
            <input type="radio" id="star_5" name="rate" value="5" />
            <label for="star_5" title="Five">&#9733;</label>
            <input type="radio" id="star_4" name="rate" value="4" />
            <label for="star_4" title="Four">&#9733;</label>
            <input type="radio" id="star_3" name="rate" value="3" />
            <label for="star_3" title="Three">&#9733;</label>
            <input type="radio" id="star_2" name="rate" value="2" />
            <label for="star_2" title="Two">&#9733;</label>
            <input type="radio" id="star_1" name="rate" value="1" />
            <label for="star_1" title="One">&#9733;</label>
          </section>
          </div>
        </div>

      </div> -->

      <div class="col-md-12" id="fbcomment">
			<div class="header_comment">
				<div class="row">
					<div class="col-md-6 text-left">
					  <span class="count_comment">Bình luận sản phẩm</span>
					</div>
					<!-- <div class="col-md-6 text-right">
					  <span class="sort_title">Sort by</span>
					  <select class="sort_by">
						<option>Top</option>
						<option>Newest</option>
						<option>Oldest</option>
					  </select>
					</div> -->
				</div>
			</div>

			<div class="body_comment">
				<div class="row">
          <form action="/comment?id=<?= $id_sanpham ?>" method="post">
            <div class="avatar_comment col-md-1">
              <img src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg" alt="avatar"/>
            </div>
            <div class="box_comment col-md-11">
              <textarea class="commentar" type="text" placeholder="Bình luận ở đây..." name = "commentDetail"></textarea>
              <div class="box_post">
                <div class="pull-right">
                  <span>
                  <img src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg" alt="avatar" />
                  <i class="fa fa-caret-down"></i>
                  </span>
                  <button type="submit" >Comment</button>
                </div>
              </div>
					  </div>
          </form>
				</div>
				<div class="row">
					<ul id="list_comment" class="col-md-12">
            <?php foreach ($comment as $item) {?>
              <?php if ( $item['reply_id'] == 0) { ?>
						<li class="box_result row" id ="post_id" data-sp ="<?= $id_sanpham?>"  data-action = "<?= $item['idc'] ?>">
							<div class="avatar_comment col-md-1">
								<img src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg" alt="avatar"/>
							</div>
							<div class="result_comment col-md-11">
								<h4><?= ($item['firstname'] != '') ? $item['firstname'] : 'Ẩn danh' ?></h4>
								<p><?= $item['commentDetail'] ?></p>
								<div class="tools_comment">
									<a class="replay" href="#" data-sp ="<?= $id_sanpham?>"  data-action = "<?= $item['idc'] ?>">Reply</a>
									<span aria-hidden="true"> · </span>
                  <?php if($user && $user->id == $item['user_id'] || $user && $user->role == 1) { ?>
                        <a href="/deleteComment?id=<?= $id_sanpham?>&comment_id=<?= $item['idc'] ?>" >Delete</a>
                      <?php } ?>
									<span aria-hidden="true"> · </span>
							
								</div>
								<ul class="child_replay">
                  <?php foreach ($comment as $items) {?>
                    <?php if ($items['reply_id'] == $item['idc']) { ?>
                    <li class="box_reply row">
										<div class="avatar_comment col-md-1">
											<img src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg" alt="avatar"/>
										</div>
										 <div class="result_comment col-md-11">
											<h4><?= ($item['firstname'] != '') ? $items['firstname'] : 'Ẩn danh' ?></h4>
											<p><?= $items['commentDetail'] ?></p>
											<div class="tools_comment">
                      <?php if($user && $user->id == $items['user_id'] || $user && $user->role == 1) { ?>
                        <a href="/deleteComment?id=<?= $id_sanpham?>&comment_id=<?= $items['idc'] ?>" >Delete</a>
                      <?php } ?>
												<span aria-hidden="true"> · </span>
											</div>
											<ul class="child_replay"></ul>
										</div>
									</li>
                    <?php } ?>
                  <?php } ?>
								</ul>
							</div>
						</li>
            <?php }?>
            <?php }?>
					</ul>
				<button class="show_more" type="button">Xem các bình luận khác</button>
				</div>
			</div>
		</div>
    </div><!--End Container -->
  </section><!-- end App -->
<!-- partial -->
  <script src='JS_stor/vue.min.js'></script>
<script src='JS_stor/jquery.min.js'></script>
<script  src="js/script.js"></script>

<!-- </form></table> -->
    
        </div>
            </div>
            <div id="tab-review">
                         

        <div class="content spen-plus"> 
   



<!-- jQuery Form Validator --> 
<script src="JS_stor/jquery.form-validator.min.js"></script>
<!-- jQuery Barrating plugin --> 
<script src="JS_stor/jquery.barrating.js"></script>
<!-- jQuery starReviews --> 
<script src="JS_stor/starReviews.js"></script>
<script type="text/javascript">
    
      $(document).ready(function() {
        
        /* Activate our reviews */
        $().reviews('.starReviews');
        
      });

    </script>
    
        </div>
        
     
      </div>
 </div>
 
 </div>

  </div>
 </div> <!----end.product-catalog---> 
 
 
 <div class="product-Lienqua">
 
 <div class="wrap">
   <div class="box productTeaserBox prd-row">
 <div class="header-title2"> 
      <h1 class="lfloat h3"> Các sản phẩm khác </h1>
        </div>
  <ul class="itemlist">
  <?php foreach ($productRelated as $product) {?>
                    <li>
                      <div class="item view-first1">
                        <a id="product-id" href="/product-detail?id=<?=$product->id?>">
                          <span> <img src="/uploads/<?php echo $product->avatar ?>" alt="" /></span>
                          <div class="item-prodinfo">
                            <div class="sb-gdv-disc">
                              <!-- <div class="sb-gdv-disc__content">-<?php echo $product->sale ?>%</div> -->
                            </div>
                            <div class="item-title"> <?php echo $product->name ?> </div>
                            <!-- <div class="item-stockhim">Còn hàng</div>
                            <div class="item-core"><?php echo $product->price ?> VNĐ</div> -->
                            <div class="item-price"><?php echo number_format((int) $product->price - ((int) $product->price * (int) $product->sale)/100) ?> VNĐ</div>
                          </div>
                        </a>
                        <div class="item-hover mask ">
                          <a href="#" class="shopping" id="shopping">mua hàng</a>
                        </div>
                      </div>
                    </li>
                    <?php }?>
          
          
          
   
          </ul>    <!------ListSanPham---->     
            
 
            
 </div> <!--------end.productTeaserBox---->
 </div>
 
 </div>




 <div id="shoppingcart" class="mfp-hide">
					                           	    <div class="plans_table">
  			 	
								  			
                                             <div class="ther">
								        				<div class="plans-list1"><h3>Tên sản phẩm</h3></div>
								        				<div class="plans-list3"><h3>Giá</h3></div>
								        				<div class="plans-list2"><h3>Số lượng </h3></div>
                                                        <div class="plans-list3"><h3>Tổng tiền</h3></div>
								        				<div class="plans-list2"><h3></h3></div>
								    		</div>	
													
												<div class="tboo">	
								   			
								   				
									        			<div class="plan_list_title">
                                                        <img src="images/im2.jpg" alt="" width="160" height="160"/>
                                                       <h4> Robot nhảy Tosy Discorobo kèm loa</h4></div>
												        <div class="price_body1">1.000.000 VNĐ</div>
												        <div class="price_body2"><input type="text" value="1" /></div>
                                                         <div class="price_body1">2.000.000 VNĐ</div>
                                                          <div class="price_body2"><button>[Xóa]</button></div>
									    			</div>
                                                    <div class="tee">
                                                    <h4>Tổng cộng : 2.000.000 VNĐ</h4>
                                                    	
                                                    </div>
                                                    <div class="summomy">
                                                       <h4>Tổng tiền : <span>2.000.000 VNĐ</span></h4>
                                                       <p>Đã bao gồm thuế</p>
                                                       
                                                    </div>
								    			
								    			<div class="tfoo">
								    			
									    						     
								        				<div class="order_now"><a href="index.html" >Quay lại mua hàng</a></div>
							 	        				<div class="order_now"><a href="Login-Thanhtoan.html" >Tiến hành thanh toán</a></div>
										
								    			
								    			</div>
								    			
								    				
											
                                            	 	
  											 </div>
												<button title="Close (Esc)" type="button" class="mfp-close">×</button></div>
           <script>
						$(document).ready(function() {
														$('.popup-with-zoom-shop').magnificPopup({
															type: 'inline',
													
															fixedContentPos: false,
															fixedBgPos: true,
													
															overflowY: 'auto',
													
															closeBtnInside: true,
															preloader: false,
															
															midClick: true,
															removalDelay: 300,
															mainClass: 'my-mfp-zoom-on'
														});
																					
													});
													</script>  
                                                   

 </div> <!-----end#content----->
  <!-- <div id="footer-product-detail">

    <div class="footer-top">
      <div class="wrap">
    <div class="fot-col">
    <div class="fotitle">THÔNG TIN</div>
    <ul class="linklist">
    <li><a href="#">Dành cho nhóm mua</a></li>
     <li><a href="#">Dành cho nhà cung cấp</a></li>
      <li><a href="#">Về MTshop.vn</a></li>
       <li><a href="#">Tuyển dụng</a></li>
     <li><a href="#">Tin tức</a></li>
      <li><a href="#">Tin khuyến mại</a></li>
       <li><a href="#">Cam kết thông tin</a></li>
          <li><a href="#">Khiếu nại</a></li>
    </ul>
    </div>
     <div class="fot-col">
    <div class="fotitle">HỖ TRỢ KHÁCH HÀNG</div>
    <ul class="linklist">
    <li><a href="#">Liên hệ</a></li>
     <li><a href="#">Phương thức thanh toán</a></li>
      <li><a href="#">Hướng dẫn mua hàng</a></li>
      <li><a href="#">Chính sách đổi trả hàng</a></li>
      <li><a href="#">Trung tâm bảo hành</a></li>
      <li><a href="#">Báo phí vận chuyển</a></li>
      <li><a href="#">Chính sách bảo hành</a></li>
   
    </ul>
    </div>
    <div class="fot-col2">
    <ul class="list-horiontal">
    <div class="fotitle">CÁCH THỨC THANH TOÁN</div>
    <ul class="list-horiontal payment-list">
    <li class="pay-icon ipayVisa" title=""></li>
    <li class="pay-icon ipayMaster" title=""></li>
    <li class="pay-icon ipayCOD" title=""></li>
    </ul>
    
    </ul>
    
    </div>
    
    <div class="fot-col3">
    <div class="fotitle">THƯƠNG HIỆU NỔI TIẾNG</div>
    <div class="line">
    <div class="line1">
    <ul>
    <li>Thiết bị sưởi ấm: <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> <a href="#"> xem thêm</a></li>
        <li>Thiết bị sưởi ấm: <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> <a href="#"> xem thêm</a></li>
            <li>Thiết bị sưởi ấm: <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> <a href="#"> xem thêm</a></li>
                <li>Thiết bị sưởi ấm: <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> </li>
              
    </ul>
    
    </div>
     </div>
    <div class="socal">
<div class="share-icon">
<a href="link_facebook" class="facebook"></a><span>Facebook </span>
<a href="link_twitter" class="twitter"></a><span> Twitter</span>
<a href="link_googleplus" class="google"></a><span>Google</span>
</div>
    </div>
    </div>
    </div>
    </div>
    <!-------end.footer-top--->
    <div class="copy-footer">
    <div class="wrap">
    <b>WEBSITE CỬA HÀNG ĐTDĐ MTSHOP CẦN THƠ</b>
    <p>Địa chỉ: số 6/9, hẻm 69, phường An Khánh, Ninh Kiều, Cần Thơ</p>
    <p>Điện thoại: 035 461 xxxx | Email: mrbmtxxx@gmail.com</p>
</div>
    </div>
    <!---------end.copy-footer---> 
  </div> -->
  <!-------end#footer-top-------> 
</div>
  </div>
  
<!-------end#page-all--->

<script>

function submit_comment(){
  var post_id =  $('#post_id').attr('data-action');
  var data_sp =  $('#post_id').attr('data-sp');

  var comment = $('.commentar').val();
  el = document.createElement('li');
  el.className = "box_result row";
  el.innerHTML =
		'<div class=\"avatar_comment col-md-1\">'+
		  '<img src=\"https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg\" alt=\"avatar\"/>'+
		'</div>'+
		'<div class=\"result_comment col-md-11\">'+
		'<h4>Anonimous</h4>'+
		'<p>'+ comment +'</p>'+
		'<div class=\"tools_comment\">'+
		'<a class=\"like\" href=\"#\">Like</a><span aria-hidden=\"true\"> · </span>'+
		'<i class=\"fa fa-thumbs-o-up\"></i> <span class=\"count\">0</span>'+
		'<span aria-hidden=\"true\"> · </span>'+
		'<a class=\"replay\" href=\"#\">Reply</a><span aria-hidden=\"true\"> · </span>'+
			'<span>1m</span>'+
		'</div>'+
		'<ul class="child_replay"></ul>'+
		'</div>';
	document.getElementById('list_comment').prepend(el);
	$('.commentar').val('');
}

$(document).ready(function() {
	$('#list_comment').on('click', '.like', function (e) {
		$current = $(this);
		var x = $current.closest('div').find('.like').text().trim();
		var y = parseInt($current.closest('div').find('.count').text().trim());
		
		if (x === "Like") {
			$current.closest('div').find('.like').text('Unlike');
			$current.closest('div').find('.count').text(y + 1);
		} else if (x === "Unlike"){
			$current.closest('div').find('.like').text('Like');
			$current.closest('div').find('.count').text(y - 1);
		} else {
			var replay = $current.closest('div').find('.like').text('Like');
			$current.closest('div').find('.count').text(y - 1);
		}
	});
	
	$('#list_comment').on('click', '.replay', function (e) {
    var post_id =  $('#post_id').attr('data-action');
    var data_sp =  $('#post_id').attr('data-sp');
    console.log(data_sp);
    var post_id = $(this).attr('data-action');
		cancel_reply();
		$current = $(this);
		el = document.createElement('li');  
		el.className = "box_reply row";
		el.innerHTML =
			'<div class=\"col-md-12 reply_comment\">'+
    '<form action="/comment?id='+data_sp+'&reply_id='+post_id+'" method="POST">'+
				'<div class=\"row\">'+
					'<div class=\"avatar_comment col-md-1\">'+
					  '<img src=\"https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg\" alt=\"avatar\"/>'+
					'</div>'+
					'<div class=\"box_comment col-md-10\">'+
					  '<textarea class=\"comment_replay\"  name = \"commentDetail\" placeholder=\"Add a comment...\"></textarea>'+
					  '<div class=\"box_post\">'+
						'<div class=\"pull-right\">'+
						  '<span>'+
							'<img src=\"https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg\" alt=\"avatar\" />'+
							'<i class=\"fa fa-caret-down\"></i>'+
						  '</span>'+
						  '<button class=\"cancel\" onclick=\"cancel_reply()\" type=\"button\">Cancel</button>'+
						  '<button type=\"submit\" value=\"1\">Reply</button>'+
						'</div>'+
					  '</div>'+
					'</div>'+
				'</div>'+
    '</form>'+
			'</div>';
		$current.closest('li').find('.child_replay').prepend(el);
	});
});

function submit_reply(){
  var comment_replay = $('.comment_replay').val();
  var post_id =  $('#post_id').attr('data-action');
  el = document.createElement('li');
  el.className = "box_reply row";
  el.innerHTML =
  '<div class=\"avatar_comment col-md-1\">'+
        '<img src=\"https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg\" alt=\"avatar\"/>'+
      '</div>'+
      '<div class=\"result_comment col-md-11\">'+
      '<h4>Anonimous</h4>'+
      '<p>'+ comment_replay +'</p>'+
      '<div class=\"tools_comment\">'+
      '<a class=\"like\" href=\"#\">Like</a><span aria-hidden=\"true\"> · </span>'+
      '<i class=\"fa fa-thumbs-o-up\"></i> <span class=\"count\">0</span>'+
      '<span aria-hidden=\"true\"> · </span>'+
      '<a class=\"replay\" href=\"#\">Reply</a><span aria-hidden=\"true\"> · </span>'+
        '<span>1m</span>'+
      '</div>'+
      '<ul class="child_replay"></ul>'+
      '</div>';
    ;
	$current.closest('li').find('.child_replay').prepend(el);
	$('.comment_replay').val('');
	cancel_reply();
}

function cancel_reply(){
	$('.reply_comment').remove();
}
                  </script>

</body>
</html>
