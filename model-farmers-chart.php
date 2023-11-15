<?php
function selectFarmers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT farmer_name, COUNT(a.manager_id) as num_managers FROM `farmer` f JOIN animal a on f.farmer_id=a.farmer_id GROUP BY farmer_name");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
