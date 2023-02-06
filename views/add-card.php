<?php

use app\core\Application;

$cart = Application::$app->session->get('card');
if (is_object($sanpham)) {
    /**
     * 
     * Kiểm tra sản phẩm đã có trong giỏ hàng 
     */

    if (isset($_SESSION['card'])) {
        foreach ($_SESSION['card'] as $product) {

            if ($product->id == $id_sanpham) {
                $cart[$id_sanpham]->so_luong_mua = $product->so_luong_mua + $so_luong_mua;
                $cart[$product->id]->thanh_tien  =  $cart[$id_sanpham]->so_luong_mua * ($product->price * ((100 - $product->sale) / 100));

                header('location: card');
            } else {

                /**
                 * Thành tiền = số lượng x giá sale
                 */
                $thanh_tien            = $so_luong_mua * ($sanpham->price * ((100 - $sanpham->sale) / 100));  // cong thuc anh tinh ra thanh tien = gia ban * gia ban sale ./..
                $sanpham->thanh_tien   = $thanh_tien;
                $sanpham->so_luong_mua = $so_luong_mua;;

                /**
                 * Thêm sản phẩm vào giỏ hàng
                 */
                $_SESSION['card'][$id_sanpham] = $sanpham;

                header('location: card');
            }
        }
    }


    /**
     * Thành tiền = số lượng x giá sale
     */
    $thanh_tien            = $so_luong_mua * ($sanpham->price * ((100 - $sanpham->sale) / 100));  // cong thuc anh tinh ra thanh tien = gia ban * gia ban sale ./..
    $sanpham->thanh_tien   = $thanh_tien;
    $sanpham->so_luong_mua = $so_luong_mua;;

    /**
     * Thêm sản phẩm vào giỏ hàng
     */
    $_SESSION['card'][$id_sanpham] = $sanpham;

    header('location: card');




    print_r($_SESSION['card']);
} else {
    header('location: 404.php');
}
