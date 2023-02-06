<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Đăng nhập thanh toán</title>
<link rel="stylesheet" type="text/css" href="css/style.css">

<script src="js/jquery-1.8.1.min.js"></script>
<script src="js/script.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
</head>
<body >
<div id="page-top">
  <div class="pagecuston">
    <div class="wrap">
      <ul class="menu-top">
        <!-- <li >
          <a href="/">Trang chủ</a>
        </li>
         <li >
          <a href="/">Hướng dẫn mua hàng</a>
        </li>
         <li >
          <a href="/">Điều khoản sử dụng</a>
        </li> -->
      </ul>
     
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
	<a href="/login-thanhtoan" class="active">Đăng nhập</a>
	<a href="/thongtin">Thông tin giao hàng</a>
	<a href="/checkout">Thanh toán</a>
</div>


  
      </div>
      </div>
      <!-----end#shopping_header---> 
      
    </div>
    <!-----end#header-top--->
       <!--------end#nav-top----> 

</div>
<!-------end#header--->
<div id="content">
<div class="wrap">
<div class="Login-checkout">
<div id="Login-check">

		<h2><span class="fontawesome-lock"></span>Vui lòng đăng nhập trước khi mua hàng</h2>

		<form action="/login?rd=1" method="post">

			<fieldset>
      <input type="hidden" value="/thongtin" name = "url">
                	<p><label for="TDN">Tên Đăng Nhập(*) </label>
				<input type="TDN" id="TDN" value="Tên Đăng Nhập" name="login_id" onBlur="if(this.value=='')this.value='Tên Đăng Nhập'" onFocus="if(this.value=='Tên Đăng Nhập')this.value=''"></p> 
                  <p><label for="password">Mật Khẩu (*)</label>
				<input type="password" id="password" value="password" name="password" onBlur="if(this.value=='')this.value='password'" onFocus="if(this.value=='password')this.value=''"></p> 
               
				<p class="bot"><label><input type="submit" name = "login" value="Đăng nhập"> </label>    
           </p>
                

			</fieldset>

		</form>

	</div> <!-- end login -->
    
    <div class="CartShop">
     <h1>Thông tin đơn hàng</h1> 
    <div class="compare_plan">
 
								   				
								        				<div class="plans-list"><p>Bạn đang có 1 sản phẩm </p></div>
								        				
								    	
								   					<div class="sho-row">
								        				<div class="plans-list1"><h3>Sản phẩm</h3></div>
								        				<div class="plans-list2"><h3>Số lượng</h3></div>
								        				<div class="plans-list3"><h3>Giá </h3></div>
                                                         <div class="clear-float"></div>
								    			</div>
													
                                                         		
								   				<div class="body-row">
                           <?php foreach ($cart as $item) { ?>
									        			<div class="plans-list1">
                                                        <img src="/uploads/<?php echo $item->avatar ?>" alt="" title="" width="60px" height="60"/>

                                                        <h4></h4></div>
												        <div class="plans-list2"><input type="text" id="soluongmua" name="so_luong_mua" value = "<?php echo $item->so_luong_mua ?>"/></div>
                                
												        <div class="plans-list3" id = "test" value="<?= $item->price ?>"><?= number_format($item->price) ?> VNĐ</div>
                                                         <div class="clear-float"></div>
                            <?php } ?>
									    		</div>
                                                <div class="control-shop">  
								        				<div class="order_now1">Phí vận chuyển</div>
								        				<div class="order_now2" ><?= number_format($up) ?></div>
                                                        <div class="clear-float"></div>
														</div>
                                                <div class="control-shop">
								        				<div class="order_now1">Tổng cộng</div>
								        				<div class="order_now2"><?= number_format($tong + $up) ?>VNĐ</div>
                                                        <div class="clear-float"></div>

                                                          <div class="control-suse">
								        				<div class="order_now1">Thành tiền</div>
								        				<div class="order_now2" ><?= number_format($total + $up) ?>VNĐ</div>
                                                        <div class="clear-float"></div>
														</div>
                                                </div>
                                                
                                                </div>
 
 </div>

 </div>

 </div> <!-----end#content----->
  <div id="footer">
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
