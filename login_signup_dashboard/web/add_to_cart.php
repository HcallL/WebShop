<?php
    session_start();

    // Lấy thông tin sản phẩm được gửi từ Ajax
    $product_id = isset($_POST['productId']) ? $_POST['productId'] : null;
    $product_title = isset($_POST['productTitle']) ? $_POST['productTitle'] : null;
    $product_price = isset($_POST['productPrice']) ? $_POST['productPrice'] : null;

    if ($product_id && $product_title && $product_price) {
        // Thêm sản phẩm vào giỏ hàng
        $_SESSION['cart'][$product_id] = array(
            'title' => $product_title,
            'price' => $product_price
        );

        // Trả về thông báo thêm sản phẩm thành công
        echo "success";
    } else {
        // Trả về thông báo lỗi nếu không có thông tin sản phẩm
        echo "error";
    }
?>
