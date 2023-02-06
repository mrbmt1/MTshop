<?php

use app\core\Application;
?>

<div id="content">
      <div class="content-top">
        <div class="wrap">
          <div class="MainBar">
            <nav id="menu" class="hdMenu">
              <div class="navWrapper navWrapper-index" id="spinbasketmenu">
                <div class="nav-sub-visible">
                  <div class="navWrapperBackground">
                    <div class="navWrapperBackground_arrow"></div>
                  </div>
                  <a class="navAllCat showMenu" href="#">Các loại sản phẩm</a>
                  <a class="navDropdown" href="#"></a>
                  <div class="navSub-wrapper">
                    <ul class="navSub showMenu">
                      <?php foreach ($danhmuc as $item) { ?>
                      <li class="multiMenu" data-sub-menu="navLayer_1">
                        <a class="catArrow " href="/find-categories?id=<?= $item['id'] ?>"> <span class="navSubTxt"><?= $item['name'] ?></span> </a>
                      </li>                      
                      <?php } ?>
                      <li class="multiMenu" data-sub-menu="navLayer_1">
                        <a class="catArrow " href="/post"> <span class="navSubTxt" style="color:red;" >BÀI VIẾT</span> </a>
                      </li>

                    </ul>
                  </div>
                </div>
              </div>
            </nav>
          </div>
          <div class="slider">

            <link rel="stylesheet" type="text/css" href="css/sample-styles.css">
            <script src="js/lean-slider.js"></script>
            <script src="js/modernizr-2.6.1.min.js"></script>
            <div class="slider-wrapper">
              <div id="slider-all">
                <?php if(!empty($post)) { ?>
                <?php foreach ($post as $value) { ?>
                  <div class="slide4">
                  <a href="/post-detail?id=<?= $value['id']?>"> <img src="/uploads/<?php  if($value['avatar'] != '') { echo $value['avatar']; }else{ echo 'slider2.jpg'; } ?>" alt="" width="500px"  height="550px"/> </a>
                </div>
                <?php } ?>
                <?php } else { ?>
                <div class="slide3">
                  <a href="#"> <img src="images/slider3.jpg" alt="" width="16px"  height="9px"/></a>
                </div>
                <?php } ?>
              </div>
              <div id="slider-direction-nav"></div>
              <div id="slider-control-nav"></div>
            </div>
            <script type="text/javascript">
              $(document).ready(function () {
                var slider = $('#slider-all').leanSlider({
                  directionNav: '#slider-direction-nav',
                  controlNav: '#slider-control-nav'
                });
              });
            </script>
          </div>
          <!----end.slider---->
          <div class="module-adv">
            <div class="advert">
            <?php foreach ($productNews as $value) { ?>
              <div class="addv1" > <a href="/post-detail?id=<?= $value['id'] ?>"><img width="100%" height="176"  src="/uploads/<?php echo $value['avatar'] ?>" alt="" /> </a>
              </div>
              <?php } ?>
            </div>
          </div>
          <!---end.module-adv--->
          <div class="clear-float"></div>
        </div>
      </div>


      <!------end.content-top--->
      <div class="disco">
        <div class="wrap">

          <link href="css/mb-comingsoon-iceberg.css" rel="stylesheet" />
          <script src="js/jquery.mb-comingsoon.min.js"></script>
          <script type="text/javascript">
            $(function () {
              var $section = $('section');
              $(window).on("resize", function () {
                var dif = Math.max($(window).height() - $section.height(), 0);
                var padding = Math.floor(dif / 2) + 'px';
                $section.css({ 'padding-top': padding, 'padding-bottom': padding });
              }).trigger("resize");
              $('#myCounter').mbComingsoon({ expiryDate: new Date(2014, 7, 1, 9, 50), speed: 100 });
              setTimeout(function () {
                $(window).resize();
              }, 200);
            });

          </script>
          <script type="text/javascript">
            $(function () {
              var $section = $('section');
              $(window).on("resize", function () {
                var dif = Math.max($(window).height() - $section.height(), 0);
                var padding = Math.floor(dif / 2) + 'px';
                $section.css({ 'padding-top': padding, 'padding-bottom': padding });
              }).trigger("resize");
              $('#myCounter1').mbComingsoon({ expiryDate: new Date(2014, 6, 1, 3, 50), speed: 100 });
              setTimeout(function () {
                $(window).resize();
              }, 200);
            });

          </script>
          <script type="text/javascript">
            $(function () {
              var $section = $('section');
              $(window).on("resize", function () {
                var dif = Math.max($(window).height() - $section.height(), 0);
                var padding = Math.floor(dif / 2) + 'px';
                $section.css({ 'padding-top': padding, 'padding-bottom': padding });
              }).trigger("resize");
              $('#myCounter2').mbComingsoon({ expiryDate: new Date(2014, 8, 1, 5, 50), speed: 100 });
              setTimeout(function () {
                $(window).resize();
              }, 200);
            });

          </script>





        </div>
      </div>
      <!-------end.disco------>
      <div class="product-hight">
        <div class="wrap">
          <div class="box productTeaserBox prd-row">
            <div class="header-title">
              <h2 class="lfloat h3"> Sản phẩm nổi bật <img src="images/hot.gif" alt="" /> </h2>
            </div>

            <script src="js/jquery.flexisel.js"></script>
            <ul class="itemlist" id="flexiselDemo3">
            <?php foreach ($productHots as $product) {?>
                    <li>
                      <div class="item view-first1">
                        <a href="/product-detail?id=<?= $product['id'] ?>">
                          <span> <img src="/uploads/<?php echo $product['avatar'] ?>" alt="" /></span>
                          <div class="item-prodinfo">
                            <?php if($product['sale']>=1) { ?>
                            <div class="sb-gdv-disc">
                              <div class="sb-gdv-disc__content"><?php echo $product['sale'] ?>%</div>
                            </div>
                            <?php }?>
                            <div class="item-title"> <?php echo $product['name'] ?> </div>
                            <!-- <div class="item-stockhim">Còn hàng</div>
                            <div class="item-core"><?php echo number_format($product['price'])?> VNĐ</div> -->
                            <div class="item-price"><?php echo number_format((int) $product['price'] - ((int) $product['price'] * (int) $product['sale'])/100) ?> VNĐ</div>
                          </div>
                        </a>
                        <div class="item-hover mask ">
                          <a href="/product-detail?id=<?= $product['id'] ?>" class="shopping" id="shopping">mua hàng</a>
                        </div>
                      </div>
                    </li>
                    <?php }?>
            </ul>
            <script src="js/sliderhot.js"></script>

          </div>
        </div>
      </div>
      <!-----end.product-hight--->
      <div class="product-catalog">
        <div class="wrap">

          <!-------Giorhang---------->
          <link rel="stylesheet" type="text/css" href="css/Cart.css">
          <script src="js/jquery.shopping.js"></script>
          <div id="BeeperBox" class="UIBeeper">
            <div class="UIBeeper_Full">
              <div class="Beeps">
                <div class="UIBeep UIBeep_Top UIBeep_Bottom UIBeep_Selected" style="opacity: 1; ">
                  <a class="UIBeep_NonIntentional" href="giohang.php">
                    <div class="UIBeep_Icon">
                      <i class="beeper_icon image2"></i>
                    </div>
                    <span class="beeper_x"></span>
                    <div class="UIBeep_Title">
                      <span class="blueName">Bạn đã mua </span> 1 sản phẩm<span class="blueName"></span>.
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!----------endgiohang----------->
          <div class="box productTeaserBox prd-row">
            <script src="JS_stor/tabcontent.js"></script>

            <div class="header-title">
            <div class="header-title">
              <h2 class="lfloat h3"> Đang giảm giá <img src="images/hot.gif" alt="" /> </h2>
            </div>
            </div>
            <div class="tabcontents">
              <div id="view1">
                <div class="content spen-plus">
                  <ul class="itemlist" id="myList1">
                    <?php foreach ($productGirls as $product) {?>
                    <li>
                      <div class="item view-first1">
                        <a href="/product-detail?id=<?= $product['id'] ?>">
                          <span> <img src="/uploads/<?php echo $product['avatar'] ?>" alt="" /></span>
                          <div class="item-prodinfo">
                          <?php if($product['sale']>=1) { ?>
                            <div class="sb-gdv-disc">
                              <div class="sb-gdv-disc__content"><?php echo $product['sale'] ?>%</div>
                            </div>
                            <?php }?>
                            <div class="item-title"> <?php echo $product['name'] ?> </div>
                            <!-- <div class="item-stockhim">Còn hàng</div>
                            <div class="item-core"><?php echo number_format($product['price'])?> VNĐ</div> -->
                            <div class="item-price"><?php echo number_format((int) $product['price'] - ((int) $product['price'] * (int) $product['sale'])/100) ?> VNĐ</div>
                          </div>
                        </a>
                        <div class="item-hover mask ">
                          <a href="/product-detail?id=<?= $product['id'] ?>" class="shopping" id="shopping">mua hàng</a>
                        </div>
                      </div>
                    </li>
                    <?php }?>

                    <!-- <div class="control">
                      <div id="loadMore1">Xem thêm >></div>
                      <div id="showLess1"><a href="index.php">Xem tất cả</a></div>
                    </div> -->
                  </ul>

                  <style>
                    .content .control {
                      float: right;
                      height: 20px;
                      width: 180px;
                      padding-right: 20px;
                    }

                    #myList1 li {
                      display: none;
                    }

                    .content .control #loadMore1 {
                      color: #EF090D;
                      font-size: 13px;
                      cursor: pointer;
                      float: left;
                    }

                    #loadMore1:hover {
                      color: black;
                    }

                    .content .control #showLess1 a {
                      font-size: 13px;
                      color: #0C10CD;
                      cursor: pointer;
                      float: right;
                    }

                    #showLess1 a:hover {
                      color: black;
                    }
                  </style>
                  <script type="text/javascript">

                    $(document).ready(function () {
                      // Load the first 3 list items from another HTML file
                      //$('#myList').load('externalList.php li:lt(3)');
                      $('#myList1 li:lt(4)').show();
                      $('#loadMore1').click(function () {
                        $('#myList1 li:lt(8)').show();
                      });
                      $('#showLess1').click(function () {
                        $('#myList1 li').not(':lt(8)').hide();
                      });
                    });
                  </script>
                </div>

              </div>

      </div>
      <!----end.product-catalog--->
      <div class="product-catalog">
          <div class="box productTeaserBox prd-row">
            <script src="JS_stor/tabcontent.js"></script>

            <div class="header-title">
            <div class="header-title">
              <h2 class="lfloat h3"> Tất cả sản phẩm <img src="images/hot.gif" alt="" /> </h2>
            </div>
            </div>
            <div class="tabcontents">
              <div id="view8">
                <div class="content spen-plus">
                  <ul class="itemlist" id="myList8">
                  <?php foreach ($productHots as $product) {?>
                    <li>
                      <div class="item view-first1">
                        <a href="/product-detail?id=<?= $product['id'] ?>">
                          <span> <img src="/uploads/<?php echo $product['avatar'] ?>" alt="" /></span>
                          <div class="item-prodinfo">
                          <?php if($product['sale']>=1) { ?>
                            <div class="sb-gdv-disc">
                              <div class="sb-gdv-disc__content"><?php echo $product['sale'] ?>%</div>
                            </div>
                            <?php }?>
                            <div class="item-title"> <?php echo $product['name'] ?> </div>
                            <!-- <div class="item-stockhim">Còn hàng</div>
                            <div class="item-core"><?php echo number_format($product['price'])?> VNĐ</div> -->
                            <div class="item-price"><?php echo number_format((int) $product['price'] - ((int) $product['price'] * (int) $product['sale'])/100) ?> VNĐ</div>
                          </div>
                        </a>
                        <div class="item-hover mask ">
                          <a href="/product-detail?id=<?= $product['id'] ?>" class="shopping" id="shopping">mua hàng</a>
                        </div>
                      </div>
                    </li>
                    <?php }?>
                    <!-- <div class="control">
                      <div id="loadMore13">Xem thêm >></div>
                      <div id="showLess13"><a href="index.php">Xem tất cả</a></div>
                    </div> -->
                  </ul>


                  <style>
                    #myList13 li {
                      display: none;
                    }

                    .content .control #loadMore13 {
                      color: #EF090D;
                      font-size: 13px;
                      cursor: pointer;
                      float: left;
                    }

                    #loadMore13:hover {
                      color: black;
                    }

                    .content .control #showLess13 a {
                      font-size: 13px;
                      color: #0C10CD;
                      cursor: pointer;
                      float: right;
                    }

                    #showLess13 a:hover {
                      color: black;
                    }
                  </style>
                  <script type="text/javascript">

                    $(document).ready(function () {
                      // Load the first 3 list items from another HTML file
                      //$('#myList').load('externalList.php li:lt(3)');
                      $('#myList13 li:lt(4)').show();
                      $('#loadMore13').click(function () {
                        $('#myList13 li:lt(8)').show();
                      });
                      $('#showLess13').click(function () {
                        $('#myList13 li').not(':lt(8)').hide();
                      });
                    });
                  </script>

            

                </div>
                </div>
            </div>

          </div>
      </div>
      <!----end.product-catalog--->
      
