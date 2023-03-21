<?php
  include('C:\xampp\htdocs\444\includes\connect.php');

  // Lấy thông tin sản phẩm từ cơ sở dữ liệu
  $sql = "SELECT products.*, GROUP_CONCAT(categories.category_title SEPARATOR ', ') AS category_titles FROM products 
          LEFT JOIN product_categories ON products.product_id = product_categories.product_id 
          LEFT JOIN categories ON product_categories.category_id = categories.category_id 
          GROUP BY products.product_id";
  $result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product List</title>
    <link rel="stylesheet" href="css/button_help.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <!--Quay Lại-->
    <button class="back-button" onclick="location.href='dashboard.php';">Quay Lại</button>

    <div class="container">
        <h1 class="my-4">Product List</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Product ID</th>
                    <th>Product Title</th>
                    <th>Product Categories</th>
                    <th>Product Image 1</th>
                    <th>Product Image 2</th>
                    <th>Product Image 3</th>
                    <th>Product Price</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row['product_id']; ?></td>
                        <td><?php echo $row['product_title']; ?></td>
                        <td><?php echo $row['category_titles']; ?></td>
                        <td><img src="product_images/<?php echo $row['product_image1']; ?>" alt="Product Image" class="img-thumbnail" width="200" height="150"></td>
                        <td><img src="product_images/<?php echo $row['product_image2']; ?>" alt="Product Image" class="img-thumbnail" width="200" height="150"></td>
                        <td><img src="product_images/<?php echo $row['product_image3']; ?>" alt="Product Image" class="img-thumbnail" width="200" height="150"></td>
                        <td><?php echo $row['product_price']; ?></td>
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