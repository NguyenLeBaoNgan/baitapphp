<?php
class OrderModel {
    private $conn;
    private $table_name = "orders";

    public function __construct($db) {
        $this->conn = $db;
    }

    // function readAll() {
    //     $query = "SELECT id, name, description, price, image FROM " . $this->table_name;

    //     $stmt = $this->conn->prepare($query);
    //     $stmt->execute();

    //     return $stmt;
    // }

    function createOrder($hoTen, $dienThoai, $email, $diachi, $ghichu, $phuongThucThanhToan)
    {
        // uploadResult: đường dẫn của file hình 
        // uploadResult = false: lỗi upload hình ảnh
        // Kiểm tra ràng buộc đầu vào
        $errors = [];
        if (empty($hoTen)) {
            $errors['hoTen'] = 'Tên không được để trống';
        }
        if (empty($dienThoai)) {
            $errors['dienThoai'] = 'Dien thoai khong dc de trong';
        }
        if (empty($email)) {
            $errors['email'] = 'Email khọng duoc de trong';
        }


        // Truy vấn tạo sản phẩm mới

        $query = "INSERT INTO " . $this->table_name . " (hoTen, dienThoai, email, diachi, ghiChu, phuongThucThanhToan) VALUES (:hoTen, :dienThoai, :email, :diachi, :ghichu, :phuongThucThanhToan)";
        $stmt = $this->conn->prepare($query);

        // Làm sạch dữ liệu
        $hoTen = htmlspecialchars(strip_tags($hoTen));
        $dienThoai = htmlspecialchars(strip_tags($dienThoai));
        $email = htmlspecialchars(strip_tags($email));
        $diachi = htmlspecialchars(strip_tags($diachi));
        $ghichu = htmlspecialchars(strip_tags($ghichu));
        $phuongThucThanhToan = htmlspecialchars(strip_tags($phuongThucThanhToan));

        // Gán dữ liệu vào câu lệnh
        $stmt->bindParam(':hoTen', $hoTen);
        $stmt->bindParam(':dienThoai', $dienThoai);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':diachi', $diachi);
        $stmt->bindParam(':ghichu', $ghichu);
        $stmt->bindParam(':phuongThucThanhToan', $phuongThucThanhToan);
        
           
        

        // Thực thi câu lệnh
        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    

    
}