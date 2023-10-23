<?php
function selectBreeds() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT breed_id, type, breed, gender FROM `breed`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertBreeds($type, $breed, $gender) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `breed` ( `type`, `breed`, `gender`) VALUES (?,?, ?)");
        $stmt->bind_param("sss", $type, $breed, $gender);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateBreeds($type, $breed, $gender,$bid) {
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

function deleteBreeds($bid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from farmer where breed_id=?");
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
