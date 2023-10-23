<?php
function selectAnimalsByManager($cid) {
        try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT m.manager_id, manager_name, description, manager_number, type, count  FROM `manager`m JOIN animal a on m.manager_id=a.manager_id WHERE a.manager_id=?");
        $stmt->bind_param("i", $cid);
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
