<?php
class Repair {
    public $id;
    public $name_error;
    public $date_founded;
    public $date_repair;
    public $id_contract;
    public $id_customer;
    public $id_employee;
    public $status;

    function __construct($id, $name_error,$date_founded,$date_repair, $id_contract, $id_customer, $id_employee, $status)
    {
        $this->id = $id;
        $this->name_error = $name_error;
        $this->date_founded=$date_founded;
        $this->date_repair=$date_repair;
        $this->id_contract = $id_contract;
        $this->id_customer = $id_customer;
        $this->id_employee = $id_employee;
        $this->status = $status;
    }

    static function all(){
        $list = [];
        $db = DB::getInstance();
        $req = $db->query('SELECT * FROM suachua');

        foreach ($req->fetchAll() as $item) {
        $list[] = new Repair($item['MaSC'], $item['TenSuCo'],$item['NgayLap'],$item['NgaySC'], $item['MaHD'], $item['MaKH'], $item['MaNV'], $item['Duyet'] );
        }

        return $list;
    }

    static function delete($id) {
        $db = DB::getInstance(); // Assuming DB class handles database connection

        // Prepare and execute SQL DELETE query
        $stmt = $db->prepare('DELETE FROM suachua WHERE MaSC = :id');
        $stmt->execute(array(':id' => $id));

        // Optionally, you can check if the delete operation was successful
        // For example, return true if affected rows > 0, indicating successful deletion
        return $stmt->rowCount() > 0;
    }
}   