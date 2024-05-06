
<?php
class Employee {
    public $id;
    public $name;
    public $born_date;
    public $address;
    public $position;
    public $id_user;

    function __construct($id, $name, $born_date, $address, $position, $id_user)
    {
        $this->id = $id;
        $this->name = $name;
        $this->born_date = $born_date;
        $this->address = $address;
        $this->position = $position;
        $this->id_user = $id_user;
    }

    static function all(){
        $list = [];
        $db = DB::getInstance();
        $req = $db->query('SELECT * FROM nhanvien');

        foreach ($req->fetchAll() as $item) {
        $list[] = new Employee($item['MaNV'], $item['TenNV'], $item['NS'], $item['DC'], $item['CV'], $item['ID_TK']);
        }

        return $list;
    }

    static function delete($id) {
        $db = DB::getInstance(); // Assuming DB class handles database connection

        // Prepare and execute SQL DELETE query
        $stmt = $db->prepare('DELETE FROM nhanvien WHERE MaNV = :id');
        $stmt->execute(array(':id' => $id));

        // Optionally, you can check if the delete operation was successful
        // For example, return true if affected rows > 0, indicating successful deletion
        return $stmt->rowCount() > 0;
    }

    static function add($TenNV, $NS, $DC, $CV, $ID_TK) {
        $db = DB::getInstance();
        $stmt = $db->prepare('INSERT INTO nhanvien (TenNV, NS, DC, CV, ID_TK) VALUES (:TenNV, :NS, :DC, :CV, :ID_TK)');
        $stmt->bindValue(':TenNV', $TenNV);
        $stmt->bindValue(':NS', $NS);
        $stmt->bindValue(':DC', $DC);
        $stmt->bindValue(':CV', $CV);
        $stmt->bindValue(':ID_TK', $ID_TK);
    
        // Thực thi câu lệnh SQL và kiểm tra kết quả
        if ($stmt->execute()) {
            // Trả về true nếu số hàng bị ảnh hưởng > 0, cho biết dữ liệu đã được thêm thành công
            return $stmt->rowCount() > 0;
        } else {
            // Trả về false nếu có lỗi xảy ra
            return false;
        }
    }
    
    static function getEmployeeById($id) {
        // Kết nối đến cơ sở dữ liệu
        $db = DB::getInstance();
    
        // Chuẩn bị câu truy vấn SQL để lấy thông tin của nhân viên theo ID
        $stmt = $db->prepare('SELECT * FROM nhanvien WHERE MaNV = :id');
        $stmt->execute(array(':id' => $id));
    
        // Lấy thông tin nhân viên từ kết quả truy vấn
        $employee = $stmt->fetch(PDO::FETCH_ASSOC);
    
        // Trả về thông tin nhân viên (hoặc null nếu không tìm thấy)
        return $employee;
    }

    static function update($MaNV, $TenNV, $NS, $DC, $CV, $ID_TK) {
        try {
            // Kết nối đến cơ sở dữ liệu
            $db = DB::getInstance();
    
            // Chuẩn bị câu truy vấn SQL để cập nhật thông tin của nhân viên
            $stmt = $db->prepare('UPDATE nhanvien SET TenNV = :TenNV, NS = :NS, DC = :DC, CV = :CV, ID_TK = :ID_TK WHERE MaNV = :MaNV');
            $stmt->execute(array(
                ':MaNV' => $MaNV,
                ':TenNV' => $TenNV,
                ':NS' => $NS,
                ':DC' => $DC,
                ':CV' => $CV,
                ':ID_TK' => $ID_TK
            ));
    
            // Kiểm tra số dòng bị ảnh hưởng, nếu không có dòng nào bị ảnh hưởng, có thể xảy ra lỗi
            if ($stmt->rowCount() === 0) {
                throw new Exception("Không có nhân viên nào được cập nhật.");
            }
    
            // Trả về true nếu cập nhật thành công
            return true;
        } catch (Exception $e) {
            // Trả về false và thông báo lỗi
            return false;
        }
    }
    
    
    
}   