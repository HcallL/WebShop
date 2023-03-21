<?php 
    include('C:\xampp\htdocs\444\includes\connect.php');
    if(isset($_POST['insert_cat'])){
        $category_title = $_POST['cat_title'];

        // Select data from database 
        $select_query = "SELECT * from categories WHERE category_title='$category_title'";
        $result_select = mysqli_query($con, $select_query);

        // Check if the category is already present in the database
        if(mysqli_num_rows($result_select) > 0){
            echo "<script>alert('Category này đã có sẵn trong database rồi.')</script>";
        }
        else{
            // Insert the category into the database
            $insert_query = "INSERT INTO categories (category_title) VALUES ('$category_title')";
            $result = mysqli_query($con, $insert_query);
            if($result){
                echo "<script>alert('Đã thêm Category này thành công.')</script>";
            } else {
                echo "Không thêm được vì lí do nào đó";
            }
        }
    }
?>
<h2 class="text-center">Insert Categories (Thêm Categories)</h2>

<form action="" method="post" class="mb-2"> 
    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control" name="cat_title" placeholder="Insert categories" aria-label="Categories" aria-describedby="basic-addon1">
    </div>

    <div class="input-group w-10 mb-2 m-auto">
        <input type="submit" class="form-control bg-info" name="insert_cat" value="Insert Categories">
    </div>
</form>