<?php
    session_start();
    include('includes/connect.php');
    
    if(isset($_POST['login'])){
        $user_uname = $_POST['user_uname'];
        $user_password = $_POST['user_password'];

        $select_query = "SELECT * FROM users WHERE user_uname='$user_uname' AND user_password='$user_password'";
        $result = mysqli_query($con, $select_query);

        if(mysqli_num_rows($result) == 1){
            $_SESSION['user_uname'] = $user_uname;
            header('Location: dashboard.php');
        } else {
            echo "<script>alert('Tên đăng nhập hoặc mật khẩu không đúng')</script>";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

    <div class="container">
        <div class="box">
            <h2>Login</h2>
            <form action="#" method="POST">

                <div class="input_box">
                    <input type="text" class="user_uname" name="user_uname" required>
                    <label>Username</label>
                </div>

                <div class="input_box">
                    <input type="password" class="user_password" name="user_password" required>
                    <label>Password</label>
                    <div class="password_checkbox"></div>
                </div>
                
                <input class="login_button" type="submit" name="login" value="Đăng Nhập">
                <div class="signup_link"><a href="signup.php">Đăng Kí Tài Khoản</a></div>
            </form>
        </div>
    </div>
    
</body>
</html>
