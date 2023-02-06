<?php

use app\core\Application;
?>

<?php Application::$app->showErrorMsgs('products', true)?>
<?php Application::$app->showMsg('success')?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>MTshop.vn</title>
<link rel="stylesheet" type="text/css" href="css/style.css" media="all">
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
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
        <li >
          <h4 class="scroll" > HOTLINE: 035 461 xxxx </h4>
        </li>
        <?php if (!Application::$app->session->get('user_')) {?>
            <li>
        <div onclick="toggleLogin()" style="cursor: pointer;color: white;" id="sw_dropdown_3">
                <a id="open-pop-up-1" href="#pop-up-1">Đăng nhập/Đăng ký</a>
        </div></li>
        <?php } else {?>
            <li>
        <div onclick="logout()" style="cursor: pointer;color: white;" id="sw_dropdown_3" >
        <?php if(Application::$app->session->get('user_')->role == 0) { ?>
        <a style="color: #000" href="/user">Thông tin tài khoản</a>
        <?php }?>

                <a style="color: #000" href="/logout?rd=2"><?=Application::$app->session->get('user_')->firstname?> Đăng xuất</a>
        </div></li>
        <?php }?>
      </ul>
   <div id="pop-up-1" class="pop-up-display-content">

    <div class="plans_table">
        	<h2 class="h2-login">Đăng nhập /Đăng ký</h2>
          <div id="login">
		<h2><span class="fontawesome-lock"></span>Khách hàng đã đăng ký</h2>
		<form action="/login" method="POST">

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
            <div><a href="#">
              <div class="usp-sp-icon usp-sprite usp-sp-warp">
                <div class="usp-sprite warp-animation"></div>
                <div class="usp-sprite warp-static"></div>
              </div>
              <div class="usp-sp-desc">
                <div class="strong uspline"> Đổi trả hàng
                  trong 10 ngày</div>
                <div class="uspline-sub"></div>
              </div>
              </a>
            </div>
            <!-- <div>
          <div id="freeship-tooltip" class="tip middle">
            <div class="tt-title"> <b>Quý khách có thể đổi trả hàng miễn phí trong vòng 10 ngày kể nhận hàng.</b> </div>
            <div class="tt-desc"> <span>khách đều được đổi trả hàng miễn phí trong vòng 10 ngày theo mọi hình thức </span> </div>
          </div>
        </div> --->
          </div>
          <div class="cskh">
            <div><a href="#">
              <div class="usp-sp-icon usp-sprite usp-sp-cash">
                <div class="usp-sprite cash-animation"></div>
                <div class="usp-sprite cash-static"></div>
              </div>
              <div class="usp-sp-desc">
                <div class="strong uspline"> Thanh toán thuận tiện</div>
                <div class="uspline-sub"></div>
              </div>
              </a>
            </div>
            <!-- <div>
          <div id="freeship-tooltip" class="tip middle">
            <div class="tt-title"> <b>Quý khách có thể đổi trả hàng miễn phí trong vòng 10 ngày kể nhận hàng.</b> </div>
            <div class="tt-desc"> <span>khách đều được đổi trả hàng miễn phí trong vòng 10 ngày theo mọi hình thức </span> </div>
          </div>
        </div> --->
          </div>
          <div class="cskh">
            <div><a href="#">
              <div class="usp-sp-icon usp-sp-ship usp-sprite">
                <div class="usp-sprite ship-animation"></div>
              </div>
              <div class="usp-sp-desc">
                <div class="strong uspline">Vận chuyển
                  miễn phí</div>
                <div class="uspline-sub"></div>
              </div>
              </a>
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
          <a href="card">
              <div class="usp-sp-icon usp-sprite usp-sp-cart ">
                <div class="usp-sprite cart-animation">
                </div>
              </div>
              <div class="usp-sp-desc">
            <div class="strong uspline"> <span style="color:red; line-height:26px;">(<?php echo ($cart)? count($cart) : 0 ?>) </span> Giỏ hàng </div>
              <div class="uspline-sub"></div>
            </div>
    </a>
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
        <div class="typical">
          <h3>Sản phẩm mới</h3>
        <link rel="stylesheet" type="text/css" href="css/jsCarousel-2.0.0.css">
        <script src="js/jsCarousel-2.0.0.js"></script>
     <script type="text/javascript">
        $(document).ready(function() {

            $('#carouselv').jsCarousel({ onthumbnailclick: function(src) { alert(src); }, autoscroll: true, masked: false, itemstodisplay: 1, orientation: 'v' });
            $('#carouselh').jsCarousel({ onthumbnailclick: function(src) { alert(src); }, autoscroll: false, circular: true, masked: false, itemstodisplay: 3, orientation: 'h' });
            $('#carouselhAuto').jsCarousel({ onthumbnailclick: function(src) { alert(src); }, autoscroll: true, masked: true, itemstodisplay: 3, orientation: 'h' });

        });

    </script>


          <div class="flexslider">
       <div id="carouselv">
     <div>
                             <a href="#">Nhiều ưu đãi, khuyến mãi</a></div>
                             <div>
                             <a href="#">Giao hàng miễn phí toàn quốc</a></div>
                             <div>
                             <a href="#">Bảo hành chính hãng</a></div>

     </div>
          </div>
        </div>
        <div class="search-home">
          <form action="/" id="search-box" >
            <div class="search-wapper">
              <input type="text"  class="text-search" name="" placeholder="Nhập tên sản phẩm cần tìm"/>
              <button type="submit" class="search-btn" name="q"> TÌM KIẾM </button>
            </div>
          </form>
        </div>
        <!-- <div class="like-face"> <img src="images/icon-like.png" alt="" /> </div> -->
      </div>
    </div>
    <!--------end#nav-top---->
  </div>
</div>


<div id="header">
    <!-----end#header-top--->
    <div id="nav-top">
      <div class="wrap">
        <div class="menu-top">
   
        
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
        </div>
      </div>
    </div>
  </nav>
</div>
<script src="js/menucatalog.js"></script>
  <script src="js/1399642332.js"></script>
 
        
      
      </div>
          
    </div>
      <div class="clear-float"></div>
    <!--------end#nav-top----> 
  </div>
</div>
<!-------end#header--->

<div id="content">
<div class="content-top">
<div class="wrap">   
      </div>
      </div>
  <!------end.content-top--->
  <!-- <div class="product-advertising"> 
  <div class="wrap">
  <div class="advertising">
  <div class="module-advertising">
  <a href="#" title=""><img src="images/slider2.jpg" title="" alt=""/></a>
  </div>
    <div class="module-advertising">
  <a href="#" title=""><img src="images/slider2.jpg" title="" alt=""/></a>
  </div>
  </div>
  </div>

  </div> -->
  <!-----end.product-hight--->
   <div class="bread">
  <div class="wrap">
  <div class="breadcrumb">
      <a href="#">Trang chủ</a> &raquo; <a href="index.php"><?= $dmuc->name ?></a>
  </div>
  </div>
  </div>
  <div class="disco">
  <div class="wrap">
   <div class="box productTeaserBox prd-row">
  <div class="header-title">
      <h1 class="lfloat h3"> <?= $dmuc->name ?> </h1>
        </div>
        </div>
        <?php  if($products) { ?>
        
        <?php  foreach ($products as $product) { ?>
      <div class="item view-first1">
                        <a href="/product-detail?id=<?= $product['id'] ?>">
                          <span> <img src="/uploads/<?php echo $product['avatar'] ?>" alt="" /></span>
                          <div class="item-prodinfo">
                            <div class="sb-gdv-disc">
                              <div class="sb-gdv-disc__content">-<?php echo $product['sale'] ?>%</div>
                            </div>
                            <div class="item-title"> <?php echo $product['name'] ?> </div>
                            <!-- <div class="item-stockhim">Còn hàng</div>
                            <div class="item-core"><?php echo $product['price'] ?> VNĐ</div> -->
                            <!-- <div class="item-price"><?php echo (int) $product['price'] - (int) $product['sale'] ?> VNĐ</div> -->
                            <div class="item-price"><?php echo number_format((int) $product['price'] - ((int) $product['price'] * (int) $product['sale'])/100) ?> VNĐ</div>
                          </div>
                        </a>
                        <div class="item-hover mask ">
                          <a href="#" class="shopping" id="shopping">mua hàng</a>
                        </div>
                      </div>
          <?php } ?>  
          <?php }else{ ?>  
      <h1 class="lfloat h3"> Hiện tại hết hàng </h1>
                    
          <?php } ?>  
                    

  </div>
  <!-------end.disco------>
   <div class="product-Lienqua">
 
 <div class="wrap">
   <div class="box productTeaserBox prd-row">
  <!--------end.productTeaserBox---->
 </div>
 
 </div>

  <div id="footer">

    <!-- <div class="footer-top"> -->
      <!-- <div class="wrap"> -->
      <!-- <div class="wrap" style="width: 100%, align-items=center;" >

    <div class="fot-col">
    <div class="fotitle">THÔNG TIN</div>
    <ul class="linklist">
    <li><a href="#">Dành cho nhóm mua</a></li>
     <li><a href="#">Dành cho nhà cung cấp</a></li>
      <li><a href="#">Về MtShop.vn</a></li>
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
    <div class="socal"> -->
<!-- <div class="share-icon">
<a href="link_facebook" class="facebook"></a><span>Facebook </span>
<a href="link_twitter" class="twitter"></a><span> Twitter</span>
<a href="link_googleplus" class="google"></a><span>Google</span>
</div> -->
    <!-- </div>
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
