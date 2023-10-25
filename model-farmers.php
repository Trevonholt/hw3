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


function insertFarmers($fName,$phoneN,$email) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `farmer` ( `farmer_name`, `phone_number`, `email`) VALUES (?,?, ?)");
        $stmt->bind_param("sss", $fName, $phoneN, $email);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateFarmers($fName,$phoneN,$email,$Fid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `farmer` set `farmer_name`=?, `phone_number`=?, `email`=? where farmer_id=?");
        $stmt->bind_param("sssi", $fName, $phoneN, $email, $Fid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteFarmers($Fid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from farmer where farmer_id=?");
        $stmt->bind_param("i", $Fid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
