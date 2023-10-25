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
        $stmt = $conn->prepare("SELECT m.manager_id, manager_name, description, manager_number, type, count FROM `manager`m JOIN animal a on m.manager_id=a.manager_id WHERE a.farmer_id=?");
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

function insertMans($fid, $mid, $type, $count) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `animal` ( `farmer_id`, `manager_id`, 'type', 'count') VALUES (?,?,?,?)");
        $stmt->bind_param("iiss", $fid, $mid, $type, $count);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateMans($fid, $mid, $mName, $type, $count, $aid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `breed` set `type`=?, `breed`=?, `gender`=? where breed_id=?");
        $stmt->bind_param("sssi", $type, $breed, $gender, $bid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteMans($bid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from breed where breed_id=?");
        $stmt->bind_param("i", $bid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
