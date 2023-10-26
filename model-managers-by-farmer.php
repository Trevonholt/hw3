<?php
function selectManagersByFarmer($iid) {
        try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT m.manager_id, manager_name, description, manager_number, type, count, animal_id FROM `manager`m JOIN animal a on m.manager_id=a.manager_id WHERE a.farmer_id=?");
        $stmt->bind_param("i", $iid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
