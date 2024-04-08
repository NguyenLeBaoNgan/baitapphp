<?php
include_once 'app/views/share/header.php';
?>


<h2>Form Đặt Hàng</h2>

<form action="/chieu2/cart/process_order" method="post">
<?php
echo "<h2>Danh sách giỏ hàng</h2>";
echo "<ul>";
foreach ($_SESSION['cart'] as $item) {
    echo "<li class='m-3'>$item->id - $item->name - 
            <label name='quality' type='number' value=".$item->quantity.">$item->quantity</label>
        </li>";
}
echo "</ul>";
?>
    <label for="fullname">Họ và Tên:</label><br>
    <input type="text" id="hoTen" name="hoTen" required><br><br>

    <label for="phone">Điện Thoại:</label><br>
    <input type="text" id="dienThoai" name="dienThoai" required><br><br>

    <label for="email">Email:</label><br>
    <input type="text" id="email" name="email" required><br><br>

    <label for="address">Địa Chỉ Nhận Hàng:</label><br>
    <textarea id="diachi" name="diachi" required></textarea><br><br>

    <label for="note">Ghi Chú:</label><br>
    <textarea id="ghichu" name="ghichu"></textarea><br><br>

    <label>Phương Thức Thanh Toán:</label><br>
    <input type="radio" id="cod" name="phuongThucThanhToan" value="cod" checked>
    <label for="cod">COD</label><br>
    <input type="radio" id="bank_transfer" name="phuongThucThanhToan" value="bank_transfer">
    <label for="bank_transfer">Chuyển khoản</label><br><br>

    <input type="checkbox" id="terms" name="terms" required>
    <label for="terms">Tôi chấp nhận điều khoản và điều kiện</label><br><br>

    <input type="submit" value="Xác Nhận Mua Hàng">
</form>

<?php
include_once 'app/views/share/footer.php';
?>
