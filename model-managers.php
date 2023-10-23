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

function insertManagers($mName, $desc, $mNum) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `manager` ( `manager_name`, `description`, `manager_number`) VALUES (?,?,?)");
        $stmt->bind_param("sss", $mName, $desc, $mNum);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateManagers($mName, $desc, $mNum,$mid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `manager` set `manager_name`=?, `description`=?, `manager_number`=? where manager_id=?");
        $stmt->bind_param("sssi", $mName, $desc, $mNum, $mid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteManagers($mid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from manager where manager_id=?");
        $stmt->bind_param("i", $mid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
