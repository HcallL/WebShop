<?php   
    session_start();
    $username = $_SESSION['user_uname'];
    include('C:\xampp\htdocs\444\includes\connect.php');
    ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Dashboard</title> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="css/dashboard.css">
        <style>
            .admin_image{
                width: 100px;
                object-fit: contain;
            }
        </style>

    </head>
    <body>
        <!-- navbar -->
        <div class="container-fluid p-0">
            <!--1-->
            <nav class="navbar navbar-expand-lg navbar-light bg-info">
                <div class="container-fluid">
                    <img src="img/logo.png" alt="" class="logo">
                    <nav class="navbar navbar-expand-lg">  
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="" class="nav-link">Welcome, <?php echo $username; ?>!</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </nav>
            <!--2-->
            <div class="bg-light">
                <h3 class="text-center p-2">Quản Lý</h3>
            </div>
            <!--3-->
            <div class="row">
                <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                    <div class="p-3">
                        <a href="#"><img src="img/fish.jpg" alt="" class="admin_image"></a>
                        <p class="text-light text-center"><?php echo $username; ?></p>
                    </div>
                    <div class="text-center">
                        <button><a href="insert_product.php" class="btn_row">> Insect Products</a></button>
                        <button><a href="viewproduct.php" class="btn_row">> View Products</a></button>
                        <button><a href="dashboard.php?insert_category" class="btn_row">> Insert Categories</a></button>
                        <button><a href="view_cate.php" class="btn_row">> View Categories</a></button>
                        <button><a href="dashboard.php?get_cate" class="btn_row">> Gắn Cate</a></button>
                        <button><a href="dashboard.php?push_cate" class="btn_row">> Bỏ Cate</a></button>
                        <button><a href="" class="btn_row">All Order</a></button>
                        <button><a href="" class="btn_row">All Payments</a></button>
                        <button><a href="view_users.php" class="btn_row">> List Users</a></button>
                        <button><a href="logout.php" class="btn_row">> Log Out</a></button>
                        <button><a href="index_help.php" class="btn_row">> Index Product</a></button>
                    </div>
                </div>
            </div>
            <!--4-->
            <div class="container my-5">
                <?php 
                if(isset($_GET['insert_category'])){
                    include('insert_categories.php');
                }

                if(isset($_GET['get_cate'])){
                    include('get_cate.php');
                }

                if(isset($_GET['push_cate'])){
                    include('push_cate.php');
                }
                ?>
            </div>

        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>