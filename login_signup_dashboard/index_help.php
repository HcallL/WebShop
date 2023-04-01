<?php
  include('C:\xampp\htdocs\444\includes\connect.php');

  $sql = "SELECT products.*, GROUP_CONCAT(categories.category_title SEPARATOR ', ') AS category_titles FROM products 
  LEFT JOIN product_categories ON products.product_id = product_categories.product_id 
  LEFT JOIN categories ON product_categories.category_id = categories.category_id 
  GROUP BY products.product_id";
    
  $result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Chọn sản phẩm</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div class="container">
      <h1>Sản Phẩm Nổi Bật (12)</h1>
      <form action="web/index.php" method="POST">
        <?php
          // Tạo ra danh sách các sản phẩm dựa trên kết quả truy vấn
          $products = array();
          while($row = mysqli_fetch_assoc($result)) {
            $products[] = $row;
          }

          // Tạo ra 8 thanh chọn sản phẩm
          for($i = 1; $i <= 12; $i++) {
            echo '<div class="form-group">';
            echo '<label for="product-select-' . $i . '">Sản phẩm ' . $i . ':</label>';
            echo '<select class="form-control" id="product-select-' . $i . '" name="product-select[]">';
            echo '<option value="">Chọn sản phẩm</option>';
            foreach($products as $product) {
              echo '<option value="' . $product['product_id'] . '">' . $product['product_title'] . '</option>';
            }
            echo '</select>';
            echo '</div>';
          }
        ?>
        <button type="submit" name="submit" class="btn btn-primary mt-3">Xác Nhận</button>
      </form>
    </div>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
          integrity="sha384-DThZ3qvwVcaH++HYC0R0+AK27yNpAWzbAvL83FNGpZdyOeyChjhdt9Qm1l6fvO89"
          crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
          integrity="sha384-cFyjK04nCpL+fsMFrJ1SPZ9uwBPTQ+oz+tDms/FwE8/cyLfXEJ6QsU6GcqfrrLX8"
          crossorigin="anonymous"></script>

</body>
</html>

<!-- <div class="input-group w-10 mb-2 m-auto mt-3"> -->