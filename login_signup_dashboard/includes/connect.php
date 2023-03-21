<?php 
    $con = mysqli_connect('localhost', 'root', '', 'shop_tt_01');

    if (!$con) {
        die('Lỗi kết nối: ' . mysqli_connect_error());
    }
?>