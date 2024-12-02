// app/models/HomeModel.php
require_once '../system/BaseModel.php';

class HomeModel extends BaseModel {
    public function getData() {
        $stmt = $this->db->query("SELECT * FROM your_table");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
