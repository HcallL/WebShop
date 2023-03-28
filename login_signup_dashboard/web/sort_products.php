<?php
    include('C:\xampp\htdocs\444\includes\connect.php');
    
    $sortValue = isset($_POST['sort_value']) ? $_POST['sort_value'] : 'default';

    $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $per_page = 12;
    $start = ($current_page - 1) * $per_page;

    if ($sortValue === 'price_asc') {
        $sql = "SELECT products.*, GROUP_CONCAT(categories.category_title SEPARATOR ', ') AS category_titles 
                FROM products 
                LEFT JOIN product_categories ON products.product_id = product_categories.product_id 
                LEFT JOIN categories ON product_categories.category_id = categories.category_id 
                GROUP BY products.product_id 
                ORDER BY products.product_price ASC 
                LIMIT $start, $per_page";
    } else {
        $sql = "SELECT products.*, GROUP_CONCAT(categories.category_title SEPARATOR ', ') AS category_titles 
                FROM products 
                LEFT JOIN product_categories ON products.product_id = product_categories.product_id 
                LEFT JOIN categories ON product_categories.category_id = categories.category_id 
                GROUP BY products.product_id 
                LIMIT $start, $per_page";
    }
    
    $result = mysqli_query($con, $sql);
    $products = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $products[] = $row;
    }

    echo displayProducts($products);
?>
