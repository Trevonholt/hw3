<?php
function selectManagers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT manager_id, manager_name, description, manager_number FROM `manager`");
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
