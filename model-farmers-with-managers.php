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

function insertAnimal($iid, $cid, $sem, $room, $time) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `section` (`instructor_id`, `course_id`, `semester`, `room`, `day_time`) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("iisss", $iid, $cid, $sem, $room, $time);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateSection($iid, $cid, $sem, $room, $time, $sid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `section` set `instructor_id` = ?, `course_id` = ?, `semester` = ?, `room` = ?, `day_time` = ? where section_id = ?");
        $stmt->bind_param("iisssi", $iid, $cid, $sem, $room, $time, $sid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteSection($sid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from section where section_id=?");
        $stmt->bind_param("i", $sid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
