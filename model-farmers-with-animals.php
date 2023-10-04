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

function selectLandWithAnimals($aid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT a.animal_id, type, breed, animal_count, description, name, age FROM `Animals` a JOIN Manager m on a.animal_id=m.manager_id where m.land_id=?");
        $stmt->bind_param("i", $aid);
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
