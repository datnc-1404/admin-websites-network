
<?php
class Contract {
    public $id;
    public $name;
    public $content_of_contract;
    public $id_customer;
    public $id_employee;
    public $date_founded;

    function __construct($id, $name, $content_of_contract, $id_customer, $id_employee, $date_founded)
    {
        $this->id = $id;
        $this->name = $name;
        $this->content_of_contract = $content_of_contract;
        $this->id_customer = $id_customer;
        $this->id_employee = $id_employee;
        $this->date_founded=$date_founded;
    }

    static function all(){
        $list = [];
        $db = DB::getInstance();
        $req = $db->query('SELECT * FROM hopdong');

        foreach ($req->fetchAll() as $item) {
        $list[] = new Contract($item['MaHD'], $item['TenHD'], $item['NDHD'], $item['MaKH'], $item['MaNV'],$item['NgayLap']);
        }

        return $list;
    }

    static function delete($id) {
        $db = DB::getInstance(); // Assuming DB class handles database connection

        // Prepare and execute SQL DELETE query
        $stmt = $db->prepare('DELETE FROM hopdong WHERE MaHD = :id');
        $stmt->execute(array(':id' => $id));

        // Optionally, you can check if the delete operation was successful
        // For example, return true if affected rows > 0, indicating successful deletion
        return $stmt->rowCount() > 0;
    }
}   