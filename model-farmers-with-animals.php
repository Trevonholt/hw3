<?php
function selectFarmers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT farmer_id, farmer_name, phone_number FROM `Farmer`");
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
