<?php
function selectFarmers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT farmer_id, farmer_name, phone_number, email FROM `farmer`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function selectManagersByFarmer($iid) {
        try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT m.manager_id, breed_id, manager_name, description, manager_number, type, count FROM `manager`m JOIN animal a on m.manager_id=a.manager_id WHERE a.farmer_id=?");
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
function insertAnimals($iid, $bid, $mid,$type,$count) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `animal`(`farmer_id`, `breed_id`, `manager_id`, `type`, `count`) VALUES  (?,?,?,?,?)");
        $stmt->bind_param("iiisi", $iid, $bid, $mid,$type,$count);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateAnimals($iid, $bid, $mid,$type,$count,$aid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `animal` SET `animal_id`=?,`farmer_id`=?,`breed_id`=?,`manager_id`=?,`type`=?,`count`=? WHERE animal_id=?");
        $stmt->bind_param("iiisii", $iid, $bid, $mid,$type,$count,$aid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteAnimals($aid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from animal where animal_id=?");
        $stmt->bind_param("i", $aid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>
