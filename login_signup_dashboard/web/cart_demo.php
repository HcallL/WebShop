<?php
    include('C:\xampp\htdocs\444\includes\connect.php');
    session_start();
    require_once('layouts/header.php');

    if (!isset($_SESSION['cart'])) {
        echo "Giỏ hàng của bạn đang trống!";
    } else {
        $cart_items = $_SESSION['cart'];
        if(isset($_POST['checkout']) && !empty($_POST['customer_name']) && !empty($_POST['customer_add']) && !empty($_POST['customer_phone'])) {
            $customer_name = $_POST['customer_name'];
            $customer_add = $_POST['customer_add'];
            $customer_phone = $_POST['customer_phone'];
            $sql = "INSERT INTO customer (customer_name, customer_add, customer_phone) VALUES ('$customer_name', '$customer_add', '$customer_phone')";
            if (mysqli_query($conn, $sql)) {
                $customer_id = mysqli_insert_id($conn); // Lấy id của khách hàng mới được thêm vào
                    
                $order_total = 0;
                foreach ($cart_items as $item) {
                    $product_id = $item['product_id'];
                    $product_qty = $item['qty'];
                    $product_price = $item['price'];
        
                    $insert_query = "INSERT INTO order_detail (customer_id, product_id, qty, price) VALUES ('$customer_id', '$product_id', '$product_qty', '$product_price')";
                    $result = mysqli_query($con, $insert_query);
        
                    $order_total += $product_qty * $product_price; // Tính tổng tiền đơn hàng
                }
        
                unset($_SESSION['cart']);
            } else {
                $error_msg = mysqli_error($conn);
                echo "<script>alert('Lưu thông tin khách hàng thất bại: $error_msg')</script>";
            }
        } else {
            echo "<script>alert('Vui lòng điền đầy đủ thông tin khách hàng!')</script>";
        }
    }
?>

    <div class="container mt-5" style="position: relative; height: auto; z-index:999">
        <h1>Giỏ hàng</h1>
        <div class="row mt-4">
            <div class="col-md-8">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Sản phẩm</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Tổng tiền</th>
                        <th scope="col">Bỏ</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($cart_items as $key => $cart_item) { ?>
                        <tr>
                            <td><?php echo $cart_item['title']; ?></td>
                            <td>
                                <input type="number" class="form-control quantity" name="quantity[]" min="1" value="<?php echo isset($cart_item['quantity']) ? $cart_item['quantity'] : '1'; ?>">
                            </td>
                            <td><?php echo number_format($cart_item['price'], 0, ',', '.') . 'đ'; ?></td>
                            <td class="subtotal"><?php echo number_format($cart_item['price'], 0, ',', '.') . 'đ'; ?></td>
                            <td><button type="button" class="btn btn-danger remove">Bỏ</button></td>
                        </tr>
                    <?php } ?>
                    <tr>
                        <td colspan="3"><strong>Tổng cộng:</strong></td>
                        <td id="total"></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>


            </div>

            <!-- Form điền thông tin khách hàng --> 
            <div class="col-md-4">
                <form action="checkout.php" method="post">
                    <div class="form-group">
                        <label for="customer_name">Họ Tên</label>
                        <input type="text" class="form-control" id="customer_name" name="customer_name" required>
                    </div>
                    <div class="form-group">
                        <label for="customer_add">Địa Chỉ</label>
                        <input type="text" class="form-control" id="customer_add" name="customer_add" required>
                    </div>
                    <div class="form-group">
                        <label for="customer_phone">Số Điện Thoại</label>
                        <input type="text" class="form-control" id="customer_phone" name="customer_phone" required>
                    </div>
                    <div class="form-group">
                        <label for="note">Ghi Chú</label>
                        <textarea class="form-control" id="note" name="note" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="payment_method">Phương thức thanh toán</label>
                        <select class="form-control" id="payment_method" name="payment_method" required>
                            <option value="chuyen_khoan">Chuyển khoản</option>
                            <option value="cod">COD</option>
                        </select>
                    </div>
                </form>
            </div>

        </div>
        <div class="text-right mt-3 mr-3">
            <button type="submit" class="btn btn-primary" name="checkout" value="checkout">Thanh toán</button>
        </div>
    </div>

<script>
    // Lấy tất cả các thẻ input số lượng
    const quantityInputs = document.querySelectorAll('.quantity');
    quantityInputs.forEach(input => {
        // Thêm sự kiện change để tính lại giá khi số lượng thay đổi
        input.addEventListener('change', () => {
            // Lấy số lượng và giá của sản phẩm tương ứng
            const quantity = input.value;
            const price = input.parentNode.nextElementSibling.textContent.replace(/[^0-9]/g, '');

            // Tính tổng tiền và hiển thị
            const subtotal = quantity * price;
            input.parentNode.nextElementSibling.nextElementSibling.textContent = number_format(subtotal, 0, ',', '.') + 'đ';
            updateTotal();
        });
    });

    // Hoạt động của button "Bỏ"
    const removeButtons = document.querySelectorAll('.remove');
    removeButtons.forEach(button => {
        // Thêm sự kiện click để xóa sản phẩm khi bấm vào nút "Bỏ"
        button.addEventListener('click', () => {
            button.parentNode.parentNode.remove();
            updateTotal();
        });
    });

    // Hàm tính lại tổng tiền
    function updateTotal() {
        let total = 0;
        const subtotalElements = document.querySelectorAll('.subtotal');
        subtotalElements.forEach(element => {
            total += parseInt(element.textContent.replace(/[^0-9]/g, ''));
        });
        document.querySelector('#total').textContent = number_format(total, 0, ',', '.') + 'đ';
    }

    // Hàm định dạng số
    function number_format(number, decimals, decimal_separator, thousand_separator) {
        number = parseFloat(number.toFixed(decimals)).toString();
        if (isNaN(number) || number === 'Infinity') {
            return '-';
        }

        // Đổi dấu phẩy thành dấu chấm và ngược lại
        decimal_separator = decimal_separator === undefined ? '.' : decimal_separator;
        thousand_separator = thousand_separator === undefined ? ',' : thousand_separator;
        const parts = number.split(decimal_separator);
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, thousand_separator);
        return parts.join(decimal_separator);
    }
</script>

