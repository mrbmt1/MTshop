
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
<body  data-control="Index">
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
          
        <div style="color:green">Hi: <?= Application::$app->session->get('user_')->login_id ?></div>
        </li>
            <li>
            <?php if(Application::$app->session->get('user_')->role == 0) { ?>
        <a style="color: #000" href="/user">Thông tin tài khoản</a>
        <?php }?>
        <div  style="cursor: pointer;color: white;" id="sw_dropdown_3" >
                <a style="color: #000" href="/logout?rd=3">Đăng xuất</a>
        </div></li>
        <?php }?>
      </ul>
   <div id="pop-up-1" class="pop-up-display-content">

    <div class="plans_table">
        	<h2 class="h2-login">Đăng nhập /Đăng ký</h2>
          <div id="login">
		<h2><span class="fontawesome-lock"></span>Khách hàng đã đăng ký</h2>

		<form action="/login?rd=3" method="POST">

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
<input type="HoTen" id="HoTen" value="Họ và Tên" name="firstname" onBlur="if(this.value=='')this.value='Họ và Tên'" onFocus="if(this.value=='Họ và Tên')this.value=''"></p>
  <p><label for="SDT">Số Điện Thoại (*) </label>
<input type="SDT" id="SDT" name="phone" value="Số Điện Thoại" onBlur="if(this.value=='')this.value='Số Điện Thoại'" onFocus="if(this.value=='Số Điện Thoại')this.value=''"></p>
          <p><label for="Email-l">Email (*) </label>
<input type="Email-l" id="Email-l" name="email" value="mail@address.com" onBlur="if(this.value=='')this.value='mail@address.com'" onFocus="if(this.value=='mail@address.com')this.value=''"></p>
    <p><label for="TDN">Tên Đăng Nhập(*) </label>
<input type="TDN" id="TDN" value="Tên Đăng Nhập" name="login_id" onBlur="if(this.value=='')this.value='Tên Đăng Nhập'" onFocus="if(this.value=='Tên Đăng Nhập')this.value=''"></p>
          <p><label for="password">Mật Khẩu (*)</label>
<input type="password" id="password" value="password" name="password" onBlur="if(this.value=='')this.value='password'" onFocus="if(this.value=='password')this.value=''"></p>
<p><input type="submit" value="Đăng ký"></p>

</fieldset>

		</form>

	</div> <!-- end login -->
    
        </div>
      </div>
      <script>
						$(document).ready(function() {
														$('.popup-with-zoom-anim').magnificPopup({
															type: 'inline',
													
															fixedContentPos: false,
															fixedBgPos: true,
													
															overflowY: 'auto',
													
															closeBtnInside: true,
															preloader: false,
															
															midClick: true,
															removalDelay: 300,
															mainClass: 'my-mfp-zoom-in'
														});
																					
													});
													</script> 
                                                    
                                                    
                                                    
                                                    <!---------end.Login----->
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
              <div class="usp-sp-icon usp-sprite usp-sp-cart" >
                <div class="usp-sprite cart-animation"></div>
              </div>
              <div class="usp-sp-desc">
            <div class="strong uspline"> <span style="color:red; line-height:26px;">(<?php echo ($cart)? count($cart) : 0 ?>) </span> Giỏ hàng </div>
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
                        <a class="catArrow " href="/find-categories?id=<?= $item->id?>"> <span class="navSubTxt"><?= $item->name ?></span> </a>
                      </li>                                   
                      <?php } ?>
                      <li class="multiMenu" data-sub-menu="navLayer_1">
                        <a class="catArrow " href="/post"> <span class="navSubTxt" style="color:red;">BÀI VIẾT</span> </a>
                      </li>

         
          </ul>
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
<style>
    .shopping-cart {
        width: 850px;
        margin: 80px auto;
        background: #FFFFFF;
        box-shadow: 1px 2px 3px 0px rgba(0, 0, 0, 0.10);
        border-radius: 6px;

        display: flex;
        flex-direction: column;
    }

    .cart-collaterals {
        width: 850px;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        align-items: flex-end;
    }

    .title {
        height: 60px;
        border-bottom: 1px solid #E1E8EE;
        padding: 20px 30px;
        color: #5E6977;
        font-size: 18px;
        font-weight: 400;
    }

    .item {
        padding: 20px 30px;
        height: 120px;
        display: flex;
        align-items: center;
    }

    .item:nth-child(3) {
        border-top: 1px solid #E1E8EE;
        border-bottom: 1px solid #E1E8EE;
    }


    .buttons {
        position: relative;
        margin-right: 60px;
    }
    .button{
        background-color:red;
        color: #fff;
        padding:10px 30px;
        border:none;
    }
    .delete-btn,
    .like-btn {
        display: inline-block;
        Cursor: pointer;
    }

    .delete-btn {
        width: 18px;
        height: 17px;
        background: url(&amp;quot;delete-icn.svg&amp;quot;) no-repeat center;
    }

    .like-btn {
        position: absolute;
        top: 9px;
        left: 15px;
        background: url('twitter-heart.png');
        width: 60px;
        height: 60px;
        background-size: 2900%;
        background-repeat: no-repeat;
    }

    .is-active {
        animation-name: animate;
        animation-duration: .8s;
        animation-iteration-count: 1;
        animation-timing-function: steps(28);
        animation-fill-mode: forwards;
    }

    @keyframes animate {
        0% {
            background-position: left;
        }

        50% {
            background-position: right;
        }

        100% {
            background-position: right;
        }
    }

    .image {
        margin-right: 50px;
    }

    .description {
         flex:1;
    }

    .description span {
        display: block;
        font-size: 14px;
        color: #43484D;
        font-weight: 400;
    }

    .description span:first-child {
        margin-bottom: 5px;
    }

    .description span:last-child {
        font-weight: 300;
        margin-top: 8px;
        color: #86939E;
    }

    .quantity {
        min-width:80px;
        text-align: center;
    }

    .quantity input {
        -webkit-appearance: none;
        border: none;
        text-align: center;
        width: 32px;
        font-size: 16px;
        color: #43484D;
        font-weight: 300;
    }

    button[class*=btn] {
        width: 30px;
        height: 30px;
        background-color: #E1E8EE;
        border-radius: 6px;
        border: none;
        cursor: pointer;
    }

    .minus-btn img {
        margin-bottom: 3px;
    }

    .plus-btn img {
        margin-top: 2px;
    }

    button:focus,
    input:focus {
        outline: 0;
    }

    .total-price {
        width: 83px;
        text-align: center;
        font-size: 16px;
        color: #43484D;
        font-weight: 300;
    }

    @media (max-width: 800px) {
        .shopping-cart {
            width: 100%;
            height: auto;
            overflow: hidden;
        }

        .item {
            height: auto;
            flex-wrap: wrap;
            justify-content: center;
        }

        .image img {
            width: 50%;
        }

        .image,
        .quantity,
        .description {
            width: 100%;
            text-align: center;
            margin: 6px 0;
        }

        .buttons {
            margin-right: 20px;
        }
    }

    .bill-body{
        display: flex;
        flex-direction: column;
        font-size: 16px;
        padding: 20px 0;
    }
    .bill-body th{
        min-width: 160px;
        text-align: left;
    }
</style>
<div id="content">
<div class="content-top">
<div class="wrap">
  <form action="<?= '/update-cart' ?>" method="post">

        <div  class="shoppcart">
        <?php if (is_array($cart)) {?>
                    <!-- Product #1 -->
                    <?php foreach ($cart as $item) {?>
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
                              <a href="<?=('product-detail?id=' . $item->id)?>">
                                <img src="/uploads/<?=$item->avatar?>" alt="" width="160" height="160">
                              </a>
                              <a href="<?=('product-detail?id=' . $item->id)?>">
                             <h4><?=$item->name?></h4></div></a>
                              <div class="price_body1"><?=number_format($item->price) . ' VNĐ'?></div>
                              <div class="price_body2"><input type="number" style="width: 50px;" max=<?=$item->quantity?> min=1 name="<?= $item->id ?>" value="<?=$item->so_luong_mua?>" ></div>
                               <div class="price_body1"><?=number_format($item->price * $item->so_luong_mua) . ' VNĐ'?></div>
                                <div class="price_body2"><a href="remove-product?id=<?= $item->id ?>">[Xóa]</a></div>
                                
                          </div>
                          <div class="tee">
                          <h4>Tổng cộng : <?=number_format($item->price * $item->so_luong_mua) . ' VNĐ'?></h4>



                    </div>
                    <div class="summomy">
                        <!-- <h4>Tổng tiền : <span><?=number_format($item->price * $item->so_luong_mua) . ' VNĐ'?></span></h4> -->
                        <p>Đã bao gồm thuế</p>
                    </div>

                    <?php }?>
								    			<div class="tfoo">
                            
                            <!-- <div class="order_now2"><button type="submit" class="button" name="update-" value="Update cart">update</button></div> -->
							 	        				<div class="order_now2" style= "margin-bottom : 20px"><button type="submit" class="button" name="update-cart" value="Update cart">Tiến hành thanh toán</button></div>


								    			</div>




  											 </div>
												<button title="Close (Esc)" type="button" class="mfp-close">×</button></div>
      </div>
      <?php } else {?>
        <h2 class="alert alert-warning" style="height: 40vh;color:green;  width: 100%; font-size: 18px; display:flex; align-items:center; justify-content:center">Giỏ hàng của bạn chưa có sản phẩm nào !</h2>
        <?php }?>

      </div>
      </form>
  <!------end.content-top--->

  <!-----end.product-hight--->






 <!-- <div class="product-Lienqua">

 <div class="wrap">
   <div class="box productTeaserBox prd-row">
 <div class="header-title2">
      <h1 class="lfloat h3"> Các sản phẩm khác </h1>
        </div>
  <ul class="itemlist">
  <?php foreach ($cart as $product) {?>
                    <li>
                      <div class="item view-first1">
                        <a href="ChitietSP.php">
                          <span> <img src="/uploads/<?php echo $product->avatar ?>" alt="" /></span>
                          <div class="item-prodinfo">
                            <div class="sb-gdv-disc">
                              <div class="sb-gdv-disc__content">-<?php echo $product->sale ?>%</div>
                            </div>
                            <div class="item-title"> <?php echo $product->name ?> </div>
                            <div class="item-stockhim">Còn hàng</div>
                            <div class="item-core"><?php echo $product->price ?> VNĐ</div>
                            <div class="item-price"><?php echo (int) $product->price - (int) $product->sale ?> VNĐ</div>
                          </div>
                        </a>
                        <div class="item-hover mask ">
                          <a href="#" class="shopping" id="shopping">mua ngay</a>
                        </div>
                      </div>
                    </li>
                    <?php }?>
          </ul>    ----ListSanPham--



 </div> ------end.productTeaserBox--
 </div>
 </div> -->



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
 <div id="footer-card">

<!-- <div class="footer-top">
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
