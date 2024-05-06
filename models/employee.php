
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

    static function add($MaNV, $TenNV, $NS, $DC, $CV, $ID_TK) {
        $db = DB::getInstance();
        $stmt = $db->prepare('INSERT INTO nhanvien (MaNV, TenNV, NS, DC, CV, ID_TK) VALUES (:MaNV, :TenNV, :NS, :DC, :CV, :ID_TK)');
        $stmt->bindValue(':MaNV', $MaNV);
        $stmt->bindValue(':TenNV', $TenNV);
        $stmt->bindValue(':NS', $NS);
        $stmt->bindValue(':DC', $DC);
        $stmt->bindValue(':CV', $CV);
        $stmt->bindValue(':ID_TK', $ID_TK);
    
        // Thực thi câu lệnh SQL và kiểm tra kết quả
        if ($stmt->execute()) {
            // Trả về true nếu thêm dữ liệu thành công
            return true;
        } else {
            // Trả về false nếu có lỗi xảy ra
            return false;
        }
    }
}   