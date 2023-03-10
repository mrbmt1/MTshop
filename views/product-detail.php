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
                <a id="open-pop-up-1" href="#pop-up-1">????ng nh???p/????ng k??</a>
        </div></li>
        <?php } else {?>
        <li>
        <div style="color: green">Hi: <?= Application::$app->session->get('user_')->login_id ?></div>
        </li>
            <li>
        <div  style="cursor: pointer;color: white;" id="sw_dropdown_3" >
        <?php if(Application::$app->session->get('user_')->role == 0) { ?>
        <a style="color: #000" href="/user">Th??ng tin t??i kho???n</a>
        <?php }?>
        
                <a style="color: #000" href="/logout?rd=3">????ng xu???t</a>
        </div></li>
        <?php }?>
      </ul>
   <div id="pop-up-1" class="pop-up-display-content">

    <div class="plans_table">
        	<h2 class="h2-login">????ng nh???p /????ng k??</h2>
          <div id="login">
		<h2><span class="fontawesome-lock"></span>Kh??ch h??ng ???? ????ng k??</h2>
		<form action="/login?rd=4&id=<?=$product->id?>" method="POST">

			<fieldset>

				<p><label for="email">Account </label></p>
				<p><input type="text" id="email" name="login_id" value="mail@address.com" onBlur="if(this.value=='')this.value='mail@address.com'" onFocus="if(this.value=='mail@address.com')this.value=''"></p> <!-- JS because of IE support; better: placeholder="mail@address.com" -->

				<p><label for="password">Password (*)</label></p>
				<p><input type="password" name="password" id="password" value="password" onBlur="if(this.value=='')this.value='password'" onFocus="if(this.value=='password')this.value=''"></p> <!-- JS because of IE support; better: placeholder="password" -->
	<!-- <p><label>Qu??n m???t kh???u?</label></p> -->
				<p><input type="submit" value="????ng nh???p"></p>

			</fieldset>

		</form>

	</div> <!-- end login -->
      <div id="res">

		<h2><span class="fontawesome-lock"></span>Kh??ch h??ng ch??a ????ng k??</h2>
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

  <p><label for="HoTen">H??? v?? T??n (*) </label>
  <input required type="HoTen"  id="HoTen" placeholder="H??? v?? T??n" name="firstname"></p>
    <p><label for="SDT">S??? ??i???n Tho???i (*) </label>
  <input required type="SDT"  id="SDT" name="phone" placeholder="S??? ??i???n Tho???i" ></p>
            <p><label for="Email-l">Email (*) </label>
  <input required type="Email-l"  id="Email-l" name="email" placeholder="mail@address.com" ></p>
      <p><label for="TDN">T??n ????ng Nh???p(*) </label>
  <input required type="TDN"  id="TDN" placeholder="T??n ????ng Nh???p" name="login_id"></p>
            <p><label for="password">M???t Kh???u (*)</label>
  <input required type="password"  id="password" placeholder="password" name="password" ></p>
  <p><input type="submit" value="????ng k??" ></p>

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
                <div class="strong uspline"> ?????i tr??? h??ng <br>
                  trong 10 ng??y</div>
                <div class="uspline-sub"></div>
              </div>
            </div>
            <!-- <div>
          <div id="freeship-tooltip" class="tip middle">
            <div class="tt-title"> <b>Qu?? kh??ch c?? th??? ?????i tr??? h??ng mi???n ph?? trong v??ng 10 ng??y k??? nh???n h??ng.</b> </div>
            <div class="tt-desc"> <span>kh??ch ?????u ???????c ?????i tr??? h??ng mi???n ph?? trong v??ng 10 ng??y theo m???i h??nh th???c </span> </div>
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
                <div class="strong uspline"> Thanh to??n khi <br>
                  nh???n h??ng</div>
                <div class="uspline-sub"></div>
              </div>
            </div>
            <!-- <div>
          <div id="freeship-tooltip" class="tip middle">
            <div class="tt-title"> <b>Qu?? kh??ch c?? th??? ?????i tr??? h??ng mi???n ph?? trong v??ng 10 ng??y k??? nh???n h??ng.</b> </div>
            <div class="tt-desc"> <span>kh??ch ?????u ???????c ?????i tr??? h??ng mi???n ph?? trong v??ng 10 ng??y theo m???i h??nh th???c </span> </div>
          </div>
        </div> ---> 
          </div>
          <div class="cskh">
            <div>
              <div class="usp-sp-icon usp-sp-ship usp-sprite">
                <div class="usp-sprite ship-animation"></div>
              </div>
              <div class="usp-sp-desc">
                <div class="strong uspline">V???n chuy???n<br>
                  mi???n ph??</div>
                <div class="uspline-sub"></div>
              </div>
            </div>
            <!-- <div>
          <div id="freeship-tooltip" class="tip middle">
            <div class="tt-title"> <b>Qu?? kh??ch c?? th??? ?????i tr??? h??ng mi???n ph?? trong v??ng 10 ng??y k??? nh???n h??ng.</b> </div>
            <div class="tt-desc"> <span>kh??ch ?????u ???????c ?????i tr??? h??ng mi???n ph?? trong v??ng 10 ng??y theo m???i h??nh th???c </span> </div>
          </div>
        </div> ---> 
          </div>
          <div class="cskh">
            <div>
              <div class="usp-sp-icon usp-sprite usp-sp-cart">
                <div class="usp-sprite cart-animation"></div>
              </div>
              <div class="usp-sp-desc">
            <div class="strong uspline"> <span style="color:red; line-height:26px;">(<?php echo ($cart) ? count($cart) : 0 ?>) </span> Gi??? h??ng </div>
              <div class="uspline-sub"></div>
            </div>
          </div>
          <!-- <div>
          <div id="freeship-tooltip" class="tip middle">
            <div class="tt-title"> <b>Qu?? kh??ch c?? th??? ?????i tr??? h??ng mi???n ph?? trong v??ng 10 ng??y k??? nh???n h??ng.</b> </div>
            <div class="tt-desc"> <span>kh??ch ?????u ???????c ?????i tr??? h??ng mi???n ph?? trong v??ng 10 ng??y theo m???i h??nh th???c </span> </div>
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
        <a class="navAllCat " href="#">C??c lo???i s???n ph???m</a> 
        <a class="navDropdown" href="#"></a>
        <div class="navSub-wrapper">
          <ul class="navSub">                    
            <?php foreach ($danhmuc as $item) { ?>
                      <li class="multiMenu" data-sub-menu="navLayer_1">
                        <a class="catArrow " href="/find-categories?id=<?= $item->id ?>"> <span class="navSubTxt"><?= $item->name ?></span> </a>
                      </li>
                      <?php } ?>
                      <li class="multiMenu" data-sub-menu="navLayer_1">
                        <a class="catArrow " href="/post"> <span class="navSubTxt" style="color:red;">B??I VI???T</span> </a>
                      </li>
         
          </ul>
          <div class="submenuWrapper">
            <div id="navLayer_1" class="navLayer" style="display: none;">
              <div class="navLayerSub clearfix">
                <div class="navCol navCol1">
                  <div class="nav-title"><a href="danhmucon.html">TiVi,Video &amp; ??m Thanh</a> </div>
                  <div class="nav-linklist"> 
                  <a href="#" class="bsncLink">?????u thu k?? thu???t s???</a> 
                   </div>
                  <div class="brand-list"> </div>
                  <div class="nav-title"><a href="#">B??? b??i phao</a> </div>
                  <div class="nav-linklist"> 
                  <a href="#" class="bsncLink">Intex</a>
                   <a href="#" class="bsncLink">Swimming pool</a>
                    <a href="#" class="bsncLink">Ph??? ki???n b??? b??i</a>  </div>
                  <div class="brand-list"> </div>
                        <div class="nav-title"><a href="#">N???i th???t</a> </div>
                  <div class="nav-linklist">
                  <a href="#" class="bsncLink">N???i th???t phong th???y</a>
                   <a href="#" class="bsncLink">B??n tr??</a>   </div>
                  <div class="brand-list"> </div>
                       <div class="nav-title"><a href="#">????n pin chi???u s??ng</a> </div>
                  <div class="nav-linklist"> 
                  <a href="#" class="bsncLink">????n pin LED</a>
                   <a href="#" class="bsncLink">Ph??? ki???n ????n pin</a>
                     <a href="#" class="bsncLink">????n pin xe ?????p</a> 
                     <a href="#" class="bsncLink">????n pin chi???u s??ng kh???ng</a>  </div>
                  <div class="brand-list"> </div>
                </div>
                 <div class="navCol navCol2">
                  <div class="nav-title"><a href="#">????? d??ng gia d???ng</a> </div>
                  <div class="nav-linklist"> 
                  <a href="#" class="bsncLink">B??nh,C??y n??ng l???nh</a>
                   <a href="#" class="bsncLink">M??y l???c n?????c gia ????nh</a>
                    <a href="#" class="bsncLink">????n s?????i ???m nh?? t???m</a>
                     <a href="#" class="bsncLink">B???p t???, b???p h???ng ngo???i</a>
                      <a href="#" class="bsncLink">M??y s?????i, qu???t s?????i</a> 
                    <a href="#" class="bsncLink">B??nh ??un si??u t???c</a>
                     <a href="#" class="bsncLink">B??nh d??? nhi???t</a>
                      <a href="#" class="bsncLink">L?? vi s??ng, v??? n?????ng, l?? n?????ng</a>
                       <a href="#" class="bsncLink">N???i ??p su???t, n???i l???u</a> 
                       <a href="#" class="bsncLink">M??y s???y qu???n ??o</a>
                       <a href="#" class="bsncLink">Ch???i lau nh??</a>
                        <a href="#" class="bsncLink">M??y h??t b???i</a>
                        <a href="#" class="bsncLink">Qu???t ??i???n</a> 
                         </div>
                  <div class="brand-list"> </div>
                </div>
                  <div class="navCol navCol3">
                  <div class="nav-title"><a href="#">????? d??ng nh?? b???p</a> </div>
                  <div class="nav-linklist"> 
                  <a href="#" class="bsncLink">M??y tr???ng rau</a>
                   <a href="#" class="bsncLink">N???i c??m ??i???n</a>
                    <a href="#" class="bsncLink">N???i xoong - ch???o</a> 
                    <a href="#" class="bsncLink">M??y ????nh tr???ng</a> 
                    <a href="#" class="bsncLink">N???i h???p ??a n??ng</a>
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
                  <div class="nav-title"><a href="#">??i???u h??a Funiki</a> </div>
                  <div class="nav-linklist">
                   <a href="#" class="bsncLink">M???t chi???u Funiki</a>
                    <a href="#" class="bsncLink">Hai chi???u Funiki</a> </div>
                  <div class="brand-list">  </div>
                  <div class="nav-title"><a href="#">??i???u h??a Daikin</a> </div>
                  <div class="nav-linklist"> 
                  <a href="#" class="bsncLink">M???t chi???u DaiKin</a>
                   <a href="#" class="bsncLink">Hai chi???u DaiKin</a>
                    </div>
                  <div class="brand-list">  </div>
                </div>
                <div class="navCol navCol2">
                  <div class="nav-title"><a href="#">??i???u h??a Sumikuza</a> </div>          
                  <div class="nav-linklist"> 
                  <a href="#" class="bsncLink">Th??? nh???</a>
                   <a href="#" class="bsncLink">V??? &amp; Bao ??i???n tho???i</a>
                    <a href="#" class="bsncLink">Headset</a>
                     <a href="#" class="bsncLink">Pin ??i???n tho???i</a>
                      <a href="#" class="bsncLink">S???c pin ??i???n tho???i</a> 
                      </div>
                  <div class="brand-list">  </div>
                  <div class="nav-title"><a href="#">??i???u h??a Panasonic</a> </div>
                  <div class="nav-linklist">
                   <a href="#" class="bsncLink">M???t chi???u Panasonic</a>
                    <a href="#" class="bsncLink">Hai chi???u Panasonic</a>
                     </div>
                  <div class="brand-list">  </div>
                  
                </div>
                <div class="navCol navCol3">
                  <div class="nav-title"><a href="#">??i???u h??a LG</a> </div>
                  <div class="nav-linklist"> 
                  <a href="#" class="bsncLink">M???t chi???u LG</a>
                   <a href="#" class="bsncLink">Hai chi???u LG</a> 
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
                  <div class="nav-title"><a href="#">Nghe nh??n</a> </div>
                  <div class="nav-linklist">
                   <a href="#" class="bsncLink">K??nh thi??n v??n</a> 
                   <a href="#" class="bsncLink">?????ng h???, ??i???n tho???i</a>  
                   </div>
                  <div class="brand-list"> </div>
                  <div class="nav-title"><a href="#">????? du l???ch</a> </div>
                  <div class="nav-linklist"> <a href="#" class="bsncLink">G?????ng h??i</a>  </div>
                  <div class="brand-list"></div>
                   <div class="nav-title"><a href="#">D???ng c??? t???p th??? l???c</a> </div>
                  <div class="nav-linklist"> <a href="#" class="bsncLink">X?? ????n, X?? k??p, x?? x???p</a>
                   <a href="#" class="bsncLink">T??? tay ??a n??ng</a>
                    <a href="#" class="bsncLink">Boxing</a>
                     <a href="#" class="bsncLink">Yoga</a>
                      <a href="#" class="bsncLink">D???ng c??? t???p</a>  </div>
                  <div class="brand-list"></div>
                </div>
                <div class="navCol navCol2">
                  <div class="nav-title"><a href="#">Patin</a> </div>
                  <div class="nav-linklist"> 
                  <a href="#" class="bsncLink">Gi??y Patin Couger</a>
                   <a href="#" class="bsncLink">Ph??? ki???n patin</a>
                    <a href="#" class="bsncLink">Giay Patin Seba</a> 
                    <a href="#" class="bsncLink">Giay Patin Fly Eagle</a>
                    <a href="#" class="bsncLink">Giay Patin Th????ng hi???u kh??c</a>
                    </div>
                  <div class="brand-list">  </div>
                  <div class="nav-title"><a href="#">M??y mesaga to??n th??n</a> </div>
                  <div class="nav-title"><a href="#">Xe ?????p th??? l???c</a> </div>
                  <div class="nav-title"><a href="#">V??n tr?????t </a> </div>
                  <div class="nav-title"><a href="#">M??y t??ng chi???u cao</a> </div>
                </div>
                <div class="navCol navCol3">
                  <div class="nav-title"><a href="#">M??y ch???y b???</a> </div>
                  <div class="nav-linklist"> 
                  <a href="#" class="bsncLink">M??y ch???y b??? ?????ng l???c</a> 
                  <a href="#" class="bsncLink">M??y ch???y b??? Life</a>
                   <a href="#" class="bsncLink">M??y ch???y b??? OMA</a>
                    <a href="#" class="bsncLink">M??y ch???y b??? Reebok</a>
                     <a href="#" class="bsncLink">M??y ch???y b??? MOFIT</a>
                     <a href="#" class="bsncLink">M??y ch???y b??? Th????ng hi???u kh??c</a>
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
                  <div class="nav-title"><a href="#">Th???c ph???m ch???c n??ng</a> </div>
                  <div class="nav-linklist">
                   <a href="#" class="bsncLink">???????ng huy???t</a> 
                   <a href="#" class="bsncLink">Ch???ng thi???u m??u</a>
                    <a href="#" class="bsncLink">Gi???m b??o</a>
                    <a href="#" class="bsncLink">Ch??m s??c da</a>  </div>
                  <div class="brand-list">  </div>
                  <div class="nav-title"><a href="#">M??? ph???m l??m ?????p</a> </div>
                  <div class="nav-linklist"> 
                  <a href="#" class="bsncLink">Trang ??i???m</a> 
                  <a href="#" class="bsncLink">D?????ng da</a>
                   <a href="#" class="bsncLink">N?????c hoa</a> 
                   <a href="#" class="bsncLink">Ch??m s??c t??c</a>
                   <a href="#" class="bsncLink">N?????c hoa c??o c???p</a>
                   <a href="#" class="bsncLink">Kem d?????ng tay, m??ng tay</a> 
                   </div>
                  <div class="brand-list"></div>
                  <div class="nav-title"><a href="#">S???n ph???m h??? tr??? t??nh d???c</a> </div>
                  <div class="nav-linklist">
                   <a href="#" class="bsncLink">Bao cao su</a> 
                    </div>
                  <div class="brand-list"></div>
                </div>
                <div class="navCol navCol2">
                  <div class="nav-title">
                  <a href="#">Thi???t b??? y t??? gia ????nh</a> </div>
                  <div class="nav-linklist"> 
                  <a href="#" class="bsncLink">Thi???t b??? tai m??i h???ng</a>
                   <a href="#" class="bsncLink">T??i ch?????m ??a n??ng</a> 
                   <a href="#" class="bsncLink">M??y ??o v?? que th??? ???????ng huy???t</a>
                    <a href="#" class="bsncLink">M??y ??o m??u nhi???m m???</a> 
                    <a href="#" class="bsncLink">C??n s???c kh???e</a> 
                    <a href="#" class="bsncLink">Nhi???t k??? ??i???n t???</a> 
                    <a href="#" class="bsncLink">????n h???ng ngo???i</a>
                    <a href="#" class="bsncLink">Ch??n ??i???n</a>
                    <a href="#" class="bsncLink">T???m ch?????n n??ng</a>
                     <a href="#" class="bsncLink">??o nhi???t ?????, ????? ???m</a>
                      <a href="#" class="bsncLink">?????m b???n m??a</a>
                      <a href="#" class="bsncLink">M??y theo d??i, tr??? li???u kh??c</a>
                      </div>
                  
                </div>
                <div class="navCol navCol3">
                  <div class="nav-title"><a href="#">Thi???t b??? l??m ?????p</a> </div>
                  <div class="nav-linklist"> 
                  <a href="#" class="bsncLink">L???u x??ng h??i</a> 
                  <a href="#" class="bsncLink">X??ng h??i 2 m???t</a> 
                  <a href="#" class="bsncLink">??ai massage</a> 
                  <a href="#" class="bsncLink">M??y gi???m b??o & ch??m s??c da</a> 
                  <a href="#" class="bsncLink">M??y s???y t??c</a></div>
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
                  <div class="nav-title"><a href="#">Thi???t b??? m?? s??? v???ch</a> </div>
                  <div class="nav-linklist"> <a href="#" class="bsncLink">?????u ?????c m?? v???ch</a>
                   <a href="#" class="bsncLink">M??y in h??a ????n</a> <a href="#" class="bsncLink">M??y in m?? v???ch</a> </div>
                  <div class="brand-list"> </div>
                  <div class="nav-title"><a href="#">M??y h??t ???m</a> </div>
                  <div class="nav-linklist"> <a href="#" class="bsncLink">Edison</a> <a href="#" class="bsncLink">Harison</a>  </div>
                  <div class="nav-title"><a href="#">M??y c???t</a> </div>
                  <div class="nav-title"><a href="#">M??y photocopy</a> </div>
                  <div class="nav-title"><a href="#">M??y fax</a> </div>
                </div>
                <div class="navCol navCol2">
                  
                    <div class="nav-title"><a href="#">Thi???t b??? m???ng</a> </div>
                  <div class="nav-linklist"> <a href="#" class="bsncLink">B??? ph??t Wifi</a> <a href="#" class="bsncLink">B??? thu Wifi</a><a href="#" class="bsncLink">C???ng chia m???ng (Swith)</a> </div>
                  <div class="brand-list"> </div>
                  <div class="nav-title"><a href="#">Linh ki???n m??y t??nh</a> </div>
                  <div class="nav-linklist"> <a href="#" class="bsncLink">M??n h??nh vi t??nh</a> <a href="#" class="bsncLink">RAM m??y t??nh</a> </div>
                </div>
                <div class="navCol navCol3">
                  <div class="nav-title"><a href="#">M??y in v??n ph??ng</a> </div>
                  <div class="nav-linklist"> <a href="#" class="bsncLink">M??y in phun mau</a> <a href="#" class="bsncLink">M??y in ???nh canon</a> <a href="#" class="bsncLink">M??y in Bother</a>  </div>
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
                  <div class="nav-title"><a href="#">????? ch??i tr?? tu??? th??ng minh</a> </div>
                  <div class="nav-linklist"> 
                  <a href="#" class="bsncLink">B??? x??y d???ng</a>
                   <a href="#" class="bsncLink">B??? l???p gh??p</a>
                    <a href="#" class="bsncLink">????? ch??i t???o ??m thanh</a>
                     <a href="#" class="bsncLink">H???c ch???, h???c s???</a>
                      <a href="#" class="bsncLink">????? ch??i l???p gh??p hura</a>
                       <a href="#" class="bsncLink">????? ch??i LEGO</a> </div>
                  <div class="nav-title">
                  <a href="#">????? ch??i cao c???p</a>
                   </div>
                  <div class="nav-linklist">
                 <a href="#" class="bsncLink">B??? x??y d???ng</a>
                   <a href="#" class="bsncLink">B??? l???p gh??p</a>
                    <a href="#" class="bsncLink">????? ch??i t???o ??m thanh</a>
                   
                     </div>
                  <div class="nav-title"><a href="#">Xe ?????y</a> </div>
                  <div class="nav-title"><a href="#">Xe t???p ??i</a> </div>
                  <div class="nav-title"><a href="#">Th???m ch??i cho b??</a> </div>
                </div>
                <div class="navCol navCol2">
                  <div class="nav-title">
                  <a href="#">M??y bay ??i???u khi???n</a> 
                  </div>
                  <div class="nav-linklist"> 
                  <a href="#" class="bsncLink">M??y bay 4 k??nh</a> 
                
                   <a href="#" class="bsncLink">M??y bay 3 k??nh</a> 
                   <a href="#" class="bsncLink">M??y bay 3,5 k??nh</a>
                    <a href="#" class="bsncLink">May bay 2 k??nh</a> 
                    
                     </div>
                       <div class="nav-title">
                  <a href="#">Xe m?? h??nh m???i</a> 
                  </div>
                  <div class="nav-linklist"> 
                  <a href="#" class="bsncLink">M?? h??nh ford</a> 
                
                   <a href="#" class="bsncLink">M?? hinh nisan</a> 
                   <a href="#" class="bsncLink">M??y bay 3,5 k??nh</a>
                    <a href="#" class="bsncLink">May bay 2 k??nh</a> 
                    
                     </div>
                  <div class="brand-list">
                   </div>
                </div>
                <div class="navCol navCol3">
                  <div class="nav-title">
                  <a href="#">??ai v?? ?????u tr??? em</a> </div>
                  <div class="nav-linklist"> 
                  <a href="#" class="bsncLink">??ai tr??? em</a>
                   <a href="#" class="bsncLink">??ai an toan tr??? em</a>
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
                
                  <div class="nav-title"><a href="#">Xe ?????p mini th???i trang</a> </div>
                  <div class="nav-linklist"> 
                  <a href="#" class="bsncLink">Loan Dao</a>
                   <a href="#" class="bsncLink">Th???ng nh???t</a> 
                  
                      </div>
                  <div class="brand-list">  </div>
                  <div class="nav-title"><a href="#">Xe ?????p th??ng d???ng</a> </div>
                  <div class="nav-linklist"> 
                  <a href="#" class="bsncLink">Th???ng nh???t</a>
                   <a href="#" class="bsncLink">Xone</a>
                 
                     </div>
                  <div class="brand-list">  </div>
            <div class="nav-title"><a href="#">Xe ?????p ??i???n</a> </div>
                  <div class="nav-linklist"> 
                  <a href="#" class="bsncLink">Th???ng nh???t</a>
                
                 
                     </div>
                  <div class="brand-list">  </div>
                 
                </div>
                <div class="navCol navCol2">
               
                  <div class="nav-title"><a href="#">Xe ?????p tr??? em</a> </div>
                  <div class="nav-linklist"> 
                  <a href="#" class="bsncLink">Th???ng nh???t</a>
                      <a href="#" class="bsncLink">X-game</a>
                          <a href="#" class="bsncLink">Radio-flyer</a>
                              <a href="#" class="bsncLink">C??c th????ng hi???u kh??c</a>  </div>
                </div>
                <div class="navCol navCol3">
                  <div class="nav-title"><a href="#">Xe ?????p ????? h??nh th???i trang</a> </div>
                  <div class="nav-linklist"> 
                  <a href="#" class="bsncLink">Th???ng nh???t</a>
                   <a href="#" class="bsncLink">Timaon</a> 
                   <a href="#" class="bsncLink">Th?????ng hi???u kh??c</a>
                
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
                  <div class="nav-title"><a href="#">S??ch ch???m ?????c</a> </div>
                  <div class="nav-linklist"> 
                  <a href="#" class="bsncLink">S??ch ch???m ?????c But Huna Talk</a> 
                  <a href="#" class="bsncLink">S??ch ch???m ?????c But Touch talk</a>
                  <a href="#" class="bsncLink">S??ch ch???m ?????c K700</a>  </div>
                  <div class="brand-list">  </div>
                     <div class="nav-title"><a href="#">S??ch ch???m ?????c</a> </div>
                  <div class="nav-linklist"> 
                  <a href="#" class="bsncLink">S??ch ch???m ?????c But Huna Talk</a> 
                  <a href="#" class="bsncLink">S??ch ch???m ?????c But Touch talk</a>
                  <a href="#" class="bsncLink">S??ch ch???m ?????c K700</a>  </div>
                  <div class="brand-list">  </div>
                </div>
                <div class="navCol navCol2">
                  <div class="nav-title">
                  <a href="#">M??y h???c ti???ng anh</a> </div>
                  <div class="nav-linklist"> 
                   <a href="#" class="bsncLink">Vua gia s?? 500 - may gi???ng b??i</a>
                      <a href="#" class="bsncLink">Vua gia s?? 600 - may gi???ng b??i</a>
                    <a href="#" class="bsncLink">Easy Talk 818 OFD - M??y h???c ti???ng Anh</a>
                     <a href="#" class="bsncLink">Easy Talk 815 TPD - M??y h???c ti???ng Anh</a> </div>
           
                </div>
                <div class="navCol navCol3">
                  <div class="nav-title"><a href="h#">B??t ch???m ?????c</a> </div>
                  <div class="nav-linklist"> 
                  <a href="#" class="bsncLink">B??t huna talk</a> 
                  <a href="#" class="bsncLink">B??t touch talk</a> 
                  <a href="#" class="bsncLink">B??t ho???t h??nh</a>
                  <a href="#" class="bsncLink">B??t K700</a> </div>
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
              <input type="text"  class="text-search" name="" placeholder="Nh???p t??n s???n ph???m c???n t??m"/>
              <button type="submit" class="search-btn"> T??M KI???M </button>
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
               H??y l?? ng?????i ????nh gi?? ?????u ti??n           </a></p></div> -->
    <!-- <div class="stocking"> C??n h??ng</div> -->
    <?php $data = (int) $product->price - ((int) $product->price * (int) $product->sale)/100 ?>
    <div class="cost"> Gi?? g???c: <span><?=number_format($product->price)?> VN??</span></div>
        <div class="price"> Gi?? b??n:<span style="color:red; padding-left:5px;"><?=number_format($data)?> VN??</span></div>
        
        <div class="info-">        
        <div class="colors" >
       
       <script>
$('.attrs-item.option').find('label').live('click',function(){$(this).parent().find('label').removeClass('check');$(this).addClass('check');});
    </script>

      <!-- <form id="" method="POST">
        <div class="attrs"><label class="label"> M??u s???c: </label>
        <div class="attrs-item option"> 
        <label title="Tr???ng" class=""><input type="radio" name="" value=""><span class="label" style="background-color:#ffffff">&nbsp;</span><span class="ic-check">Check</span></label>
        <label title="?????"><input type="radio" name="" value=""><span class="label" style="background-color:#ff0000">&nbsp;</span><span class="ic-check">Check</span></label>
        <label title="v??ng"><input type="radio" name="" value=""><span class="label" style="background-color:#FBF921">&nbsp;</span><span class="ic-check">Check</span></label>
        <label title="??en"><input type="radio" name="" value=""><span class="label" style="background-color:#151414">&nbsp;</span><span class="ic-check">Check</span></label>
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
    <p><a href="#">H?????ng d???n mua h??ng</a></p>
    </div> -->
   
    </div>
    <div class="Nati">     
        <div class="Nati-Delivery">Giao h??ng mi???n ph?? to??n qu???c</div>
        </div>
    <div class="Purc-phone">
    <h4>H??? tr??? mua h??ng: </h4>
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
    <h4>Qu?? kh??ch c?? th??? tr???c ti???p ?????n c???a h??ng t???i H?? N???i:</h4>
 <p> S??? 75 Trung k??nh, C???u gi???y, H?? n???i</p>
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
            
    <h3 class="lfloat "> <a href="#view1"> Chi ti???t s???n ph???m </a> </h3>
      
            </li>
            <li>
      <h3 class="lfloat ">   <a href="#view2"> Nh???n x??t & b??nh lu???n </a> </h3>
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
      <h1 class="lfloat h3"> C??c s???n ph???m kh??c </h1>
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
                            <div class="item-price"><?php echo number_format((int) $product->price - ((int) $product->price * (int) $product->sale)/100) ?> VN??</div>
                          </div>
                        </a>
                        <div class="item-hover mask ">
                          <a href="#" class="shopping" id="shopping">mua h??ng</a>
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
    <div class="fotitle">TH??NG TIN</div>
    <ul class="linklist">
    <li><a href="#">D??nh cho nh??m mua</a></li>
     <li><a href="#">D??nh cho nh?? cung c???p</a></li>
      <li><a href="#">V??? MTshop.vn</a></li>
       <li><a href="#">Tuy???n d???ng</a></li>
     <li><a href="#">Tin t???c</a></li>
      <li><a href="#">Tin khuy???n m???i</a></li>
       <li><a href="#">Cam k???t th??ng tin</a></li>
          <li><a href="#">Khi???u n???i</a></li>
    </ul>
    </div>
     <div class="fot-col">
    <div class="fotitle">H??? TR??? KH??CH H??NG</div>
    <ul class="linklist">
    <li><a href="#">Li??n h???</a></li>
     <li><a href="#">Ph????ng th???c thanh to??n</a></li>
      <li><a href="#">H?????ng d???n mua h??ng</a></li>
      <li><a href="#">Ch??nh s??ch ?????i tr??? h??ng</a></li>
      <li><a href="#">Trung t??m b???o h??nh</a></li>
      <li><a href="#">B??o ph?? v???n chuy???n</a></li>
      <li><a href="#">Ch??nh s??ch b???o h??nh</a></li>

    </ul>
    </div>
    <div class="fot-col2">
    <ul class="list-horiontal">
    <div class="fotitle">C??CH TH???C THANH TO??N</div>
    <ul class="list-horiontal payment-list">
    <li class="pay-icon ipayVisa" title=""></li>
    <li class="pay-icon ipayMaster" title=""></li>
    <li class="pay-icon ipayCOD" title=""></li>
    </ul>

    </ul>

    </div>

    <div class="fot-col3">
    <div class="fotitle">TH????NG HI???U N???I TI???NG</div>
    <div class="line">
    <div class="line1">
    <ul>
    <li>Thi???t b??? s?????i ???m: <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> <a href="#"> xem th??m</a></li>
        <li>Thi???t b??? s?????i ???m: <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> <a href="#"> xem th??m</a></li>
            <li>Thi???t b??? s?????i ???m: <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> <a href="#"> xem th??m</a></li>
                <li>Thi???t b??? s?????i ???m: <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> </li>

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
    <b>WEBSITE C???A H??NG ??TD?? MTSHOP C???N TH??</b>
    <p>?????a ch???: s??? 6/9, h???m 69, ph?????ng An Kh??nh, Ninh Ki???u, C???n Th??</p>
    <p>??i???n tho???i: 035 461 xxxx | Email: mrbmtxxx@gmail.com</p>
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
                <a href="/deleteComment?id=<?= $product->id?>&comment_id=<?= $item['idc'] ?>" class="btn btn-space btn-danger" >x??a</a>
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
					  <span class="count_comment">B??nh lu???n s???n ph???m</span>
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
              <textarea class="commentar" type="text" placeholder="B??nh lu???n ??? ????y..." name = "commentDetail"></textarea>
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
								<h4><?= ($item['firstname'] != '') ? $item['firstname'] : '???n danh' ?></h4>
								<p><?= $item['commentDetail'] ?></p>
								<div class="tools_comment">
									<a class="replay" href="#" data-sp ="<?= $id_sanpham?>"  data-action = "<?= $item['idc'] ?>">Reply</a>
									<span aria-hidden="true"> ?? </span>
                  <?php if($user && $user->id == $item['user_id'] || $user && $user->role == 1) { ?>
                        <a href="/deleteComment?id=<?= $id_sanpham?>&comment_id=<?= $item['idc'] ?>" >Delete</a>
                      <?php } ?>
									<span aria-hidden="true"> ?? </span>
							
								</div>
								<ul class="child_replay">
                  <?php foreach ($comment as $items) {?>
                    <?php if ($items['reply_id'] == $item['idc']) { ?>
                    <li class="box_reply row">
										<div class="avatar_comment col-md-1">
											<img src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg" alt="avatar"/>
										</div>
										 <div class="result_comment col-md-11">
											<h4><?= ($item['firstname'] != '') ? $items['firstname'] : '???n danh' ?></h4>
											<p><?= $items['commentDetail'] ?></p>
											<div class="tools_comment">
                      <?php if($user && $user->id == $items['user_id'] || $user && $user->role == 1) { ?>
                        <a href="/deleteComment?id=<?= $id_sanpham?>&comment_id=<?= $items['idc'] ?>" >Delete</a>
                      <?php } ?>
												<span aria-hidden="true"> ?? </span>
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
				<button class="show_more" type="button">Xem c??c b??nh lu???n kh??c</button>
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
      <h1 class="lfloat h3"> C??c s???n ph???m kh??c </h1>
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
                            <!-- <div class="item-stockhim">C??n h??ng</div>
                            <div class="item-core"><?php echo $product->price ?> VN??</div> -->
                            <div class="item-price"><?php echo number_format((int) $product->price - ((int) $product->price * (int) $product->sale)/100) ?> VN??</div>
                          </div>
                        </a>
                        <div class="item-hover mask ">
                          <a href="#" class="shopping" id="shopping">mua h??ng</a>
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
								        				<div class="plans-list1"><h3>T??n s???n ph???m</h3></div>
								        				<div class="plans-list3"><h3>Gi??</h3></div>
								        				<div class="plans-list2"><h3>S??? l?????ng </h3></div>
                                                        <div class="plans-list3"><h3>T???ng ti???n</h3></div>
								        				<div class="plans-list2"><h3></h3></div>
								    		</div>	
													
												<div class="tboo">	
								   			
								   				
									        			<div class="plan_list_title">
                                                        <img src="images/im2.jpg" alt="" width="160" height="160"/>
                                                       <h4> Robot nh???y Tosy Discorobo k??m loa</h4></div>
												        <div class="price_body1">1.000.000 VN??</div>
												        <div class="price_body2"><input type="text" value="1" /></div>
                                                         <div class="price_body1">2.000.000 VN??</div>
                                                          <div class="price_body2"><button>[X??a]</button></div>
									    			</div>
                                                    <div class="tee">
                                                    <h4>T???ng c???ng : 2.000.000 VN??</h4>
                                                    	
                                                    </div>
                                                    <div class="summomy">
                                                       <h4>T???ng ti???n : <span>2.000.000 VN??</span></h4>
                                                       <p>???? bao g???m thu???</p>
                                                       
                                                    </div>
								    			
								    			<div class="tfoo">
								    			
									    						     
								        				<div class="order_now"><a href="index.html" >Quay l???i mua h??ng</a></div>
							 	        				<div class="order_now"><a href="Login-Thanhtoan.html" >Ti???n h??nh thanh to??n</a></div>
										
								    			
								    			</div>
								    			
								    				
											
                                            	 	
  											 </div>
												<button title="Close (Esc)" type="button" class="mfp-close">??</button></div>
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
    <div class="fotitle">TH??NG TIN</div>
    <ul class="linklist">
    <li><a href="#">D??nh cho nh??m mua</a></li>
     <li><a href="#">D??nh cho nh?? cung c???p</a></li>
      <li><a href="#">V??? MTshop.vn</a></li>
       <li><a href="#">Tuy???n d???ng</a></li>
     <li><a href="#">Tin t???c</a></li>
      <li><a href="#">Tin khuy???n m???i</a></li>
       <li><a href="#">Cam k???t th??ng tin</a></li>
          <li><a href="#">Khi???u n???i</a></li>
    </ul>
    </div>
     <div class="fot-col">
    <div class="fotitle">H??? TR??? KH??CH H??NG</div>
    <ul class="linklist">
    <li><a href="#">Li??n h???</a></li>
     <li><a href="#">Ph????ng th???c thanh to??n</a></li>
      <li><a href="#">H?????ng d???n mua h??ng</a></li>
      <li><a href="#">Ch??nh s??ch ?????i tr??? h??ng</a></li>
      <li><a href="#">Trung t??m b???o h??nh</a></li>
      <li><a href="#">B??o ph?? v???n chuy???n</a></li>
      <li><a href="#">Ch??nh s??ch b???o h??nh</a></li>
   
    </ul>
    </div>
    <div class="fot-col2">
    <ul class="list-horiontal">
    <div class="fotitle">C??CH TH???C THANH TO??N</div>
    <ul class="list-horiontal payment-list">
    <li class="pay-icon ipayVisa" title=""></li>
    <li class="pay-icon ipayMaster" title=""></li>
    <li class="pay-icon ipayCOD" title=""></li>
    </ul>
    
    </ul>
    
    </div>
    
    <div class="fot-col3">
    <div class="fotitle">TH????NG HI???U N???I TI???NG</div>
    <div class="line">
    <div class="line1">
    <ul>
    <li>Thi???t b??? s?????i ???m: <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> <a href="#"> xem th??m</a></li>
        <li>Thi???t b??? s?????i ???m: <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> <a href="#"> xem th??m</a></li>
            <li>Thi???t b??? s?????i ???m: <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> <a href="#"> xem th??m</a></li>
                <li>Thi???t b??? s?????i ???m: <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> </li>
              
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
    <b>WEBSITE C???A H??NG ??TD?? MTSHOP C???N TH??</b>
    <p>?????a ch???: s??? 6/9, h???m 69, ph?????ng An Kh??nh, Ninh Ki???u, C???n Th??</p>
    <p>??i???n tho???i: 035 461 xxxx | Email: mrbmtxxx@gmail.com</p>
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
		'<a class=\"like\" href=\"#\">Like</a><span aria-hidden=\"true\"> ?? </span>'+
		'<i class=\"fa fa-thumbs-o-up\"></i> <span class=\"count\">0</span>'+
		'<span aria-hidden=\"true\"> ?? </span>'+
		'<a class=\"replay\" href=\"#\">Reply</a><span aria-hidden=\"true\"> ?? </span>'+
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
      '<a class=\"like\" href=\"#\">Like</a><span aria-hidden=\"true\"> ?? </span>'+
      '<i class=\"fa fa-thumbs-o-up\"></i> <span class=\"count\">0</span>'+
      '<span aria-hidden=\"true\"> ?? </span>'+
      '<a class=\"replay\" href=\"#\">Reply</a><span aria-hidden=\"true\"> ?? </span>'+
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
