<?php
class Relocation {
    public $id;
    public $location;
    public $date_founded;
    public $date_relocation;
    public $id_contract;
    public $id_customer;
    public $id_employee;
    public $status;

    function __construct($id, $location,$date_founded,$date_relocation, $id_contract, $id_customer, $id_employee, $status)
    {
        $this->id = $id;
        $this->location = $location;
        $this->date_founded=$date_founded;
        $this->date_relocation=$date_relocation;
        $this->id_contract = $id_contract;
        $this->id_customer = $id_customer;
        $this->id_employee = $id_employee;
        $this->status = $status;
    }

    static function all(){
        $list = [];
        $db = DB::getInstance();
        $req = $db->query('SELECT * FROM didoi');

        foreach ($req->fetchAll() as $item) {
        $list[] = new Relocation($item['MaDD'], $item['NoiDDDen'],$item['NgayLap'],$item['NgayD'], $item['MaHD'], $item['MaKH'], $item['MaNV'], $item['Duyet'] );
        }

        return $list;
    }

    static function delete($id) {
        $db = DB::getInstance(); // Assuming DB class handles database connection

        // Prepare and execute SQL DELETE query
        $stmt = $db->prepare('DELETE FROM didoi WHERE MaDD = :id');
        $stmt->execute(array(':id' => $id));

        // Optionally, you can check if the delete operation was successful
        // For example, return true if affected rows > 0, indicating successful deletion
        return $stmt->rowCount() > 0;
    }
}   