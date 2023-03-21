<?php
    include('includes/connect.php');
    if(isset($_POST['sign_up']) ){
        
        $user_uname = $_POST['user_uname'];
        $user_password = $_POST['user_password'];
        $user_email = $_POST['user_email'];
        $user_rname = $_POST['user_rname'];

        // Insert the user into the database
        $insert_query = "INSERT INTO users (user_uname, user_password, user_email, user_rname) VALUES ('$user_uname', '$user_password', '$user_email', '$user_rname')";
        $result = mysqli_query($con, $insert_query);

        if($result){
            echo "<script>alert('Đã thêm User này thành công.')</script>";
        } else {
            echo "Không thêm được vì lí do nào đó";
        }
        mysqli_close($con);
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up</title>
        <link rel="stylesheet" href="signup.css">
    </head>
    <body>
        <div class="container">
            <div class="box">
                <h2>Signup</h2>
                <form method="POST" action="">
                    <div class="input_box">
                        <input type="text" class="user_uname" name ="user_uname" required>
                        <label>Username</label>
                    </div>
                
                    <div class="input_box">
                    <input type="password" class="user_password" name="user_password" required>
                    <label>Password</label>
                    </div>
            
                    <div class="input_box">
                        <input type="text" class="user_email" name="user_email" required>
                        <label>Email</label>
                    </div>

                    <div class="input_box">
                        <input type="text" class="user_rname" name="user_rname" required>
                        <label>Name</label>
                    </div>

                    <input class="signup_button" type="submit" name="sign_up" value="Đăng Ký">
                    <div class="login_link"><a href="login.php">Đăng Nhập</a></div>
                </form>
            </div>  
        </div>
    </body>
</html>
