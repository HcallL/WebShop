<?php
include('C:\xampp\htdocs\444\includes\connect.php');

// Lấy id của người dùng cần xóa
$user_id = $_GET['id'];

// Xóa người dùng khỏi cơ sở dữ liệu
$sql = "DELETE FROM users WHERE user_id = '$user_id'";
mysqli_query($con, $sql);

// Chuyển hướng trở lại trang danh sách người dùng
header('Location: user_list.php');
exit;
?>
