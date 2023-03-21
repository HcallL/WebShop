<?php
include('C:\xampp\htdocs\444\includes\connect.php');

// Lấy thông tin danh mục từ cơ sở dữ liệu
$sql = "SELECT categories.category_id, categories.category_title, GROUP_CONCAT(products.product_title SEPARATOR ', ') AS product_titles
        FROM categories
        LEFT JOIN product_categories ON categories.category_id = product_categories.category_id
        LEFT JOIN products ON product_categories.product_id = products.product_id
        GROUP BY categories.category_id;";
$result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Category List</title>
    <link rel="stylesheet" href="css/button_help.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <!--Quay Lại-->
    <button class="back-button" onclick="location.href='dashboard.php';">Quay Lại</button>

    <div class="container">
        <h1 class="my-4">Category List</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Category ID</th>
                    <th>Category Title</th>
                    <th>Product Titles</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row['category_id']; ?></td>
                        <td><?php echo $row['category_title']; ?></td>
                        <td><?php echo $row['product_titles']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php mysqli_close($con); ?>
</body>
</html>