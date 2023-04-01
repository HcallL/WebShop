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
  <title>5 Thanh chọn sản phẩm</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

  <div class="container">
    <h1>5 Thanh chọn sản phẩm</h1>

    <?php
      // Tạo ra danh sách các sản phẩm dựa trên kết quả truy vấn
      $products = array();
      while($row = mysqli_fetch_assoc($result)) {
        $products[] = $row;
      }

      // Tạo ra 5 thanh chọn sản phẩm
      for($i = 1; $i <= 5; $i++) {
        echo '<div class="form-group">';
        echo '<label for="product-select-' . $i . '">Sản phẩm ' . $i . ':</label>';
        echo '<select class="form-control" id="product-select-' . $i . '">';
        echo '<option value="">Chọn sản phẩm</option>';
        foreach($products as $product) {
          echo '<option value="' . $product['product_id'] . '">' . $product['product_title'] . '</option>';
        }
        echo '</select>';
        echo '</div>';
      }
    ?>

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
