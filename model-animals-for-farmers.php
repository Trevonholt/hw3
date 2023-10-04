<?php
function selectAnimalsForFarmers($fid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT a.animal_id, type, breed, animal_count, description, name as "Manager_Name", age FROM `Animals` a JOIN Manager m on a.animal_id=m.manager_id where m.animal_id=?");
        $stmt->bind_param("i", $fid);
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
