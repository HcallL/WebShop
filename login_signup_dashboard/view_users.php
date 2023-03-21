<?php
  include('C:\xampp\htdocs\444\includes\connect.php');

  // Lấy thông tin người dùng từ cơ sở dữ liệu
  $sql = "SELECT * FROM users";
  $result = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User List</title>
    <link rel="stylesheet" href="css/button_help.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <!--Quay Lại-->
    <button class="back-button" onclick="location.href='dashboard.php';">Quay Lại</button>
    
    <div class="container">
        <h1 class="my-4">User List</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Real Name</th>
                    <th>Email</th>
                    <th>Delete</th>

                </tr>
            </thead>
            <tbody>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['user_id']; ?></td>
                <td><?php echo $row['user_uname']; ?></td>
                <td><?php echo $row['user_password']; ?></td>
                <td><?php echo $row['user_rname']; ?></td>
                <td><?php echo $row['user_email']; ?></td>
                <td><button class="btn btn-danger delete-user" data-id="<?php echo $row['user_id']; ?>">Delete</button></td>
            </tr>
        <?php } ?>
</tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    
    <!--Xóa user-->
    <script>
        $(document).ready(function() {
            $('.delete-user').click(function() {
                var user_id = $(this).data('id');
                if(confirm('Are you sure you want to delete this user?')) {
                    window.location.href = 'delete_user.php?id=' + user_id;
                }
            });
        });
        </script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php mysqli_close($con); ?>
</body>
</html>