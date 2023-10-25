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
function selectFarmersForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT farmer_id, farmer_name, FROM `farmer` order by farmer_name");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectManagersForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT manager_id, manager_name, FROM `manager` order by manager_name");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertMans($iid, $bid, $mid, $type, $count) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `animal` ( `farmer_id`, `breed_id`, `manager_id`, 'type', 'count') VALUES (?,?,?,?,?)");
        $stmt->bind_param("iiisi", $iid, $bid, $mid, $type, $count);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateMans($iid, $bid, $mid, $type, $count, $aid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `animal` set `farmer_id`=?, `breed_id`=?, `manager_id`=?, `type`=?, `count`=? where animal_id=?");
        $stmt->bind_param("iiisii", $iid, $bid, $mid, $type, $count, $aid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteMans($aid) {
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
