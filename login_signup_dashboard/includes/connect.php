<?php 
    $con=mysqli_connect('localhost','root','','shop_tt_01');
    if($con){
        echo "Kết Nối Thành Công";
    }else{
        die(mysqli_error($con));
    }
?>
