<?php
include 'config.php';


if ($_POST) {
    $regID = $_POST['REG_ID'];
    $idUser = $_POST['ID_USER'];
    $sql = mysqli_query($db, "UPDATE kbm_user_akun SET REG_ID='$regID' where ID_USER='$idUser'");
    if ($sql){
        $response["error"] = false;
        $response["error_msg"] = "Berhasil";
        $response["regID"] = $regID;
        echo json_encode($response);
    } else{
        $response["error"] = false;
        $response["error_msg"] = "Gagal Mengirim";
        echo json_encode($response);
    }
}
else{
    $response["error"] = true;
    $response["error_msg"] = "404";

    echo json_encode($response);
}
?>
