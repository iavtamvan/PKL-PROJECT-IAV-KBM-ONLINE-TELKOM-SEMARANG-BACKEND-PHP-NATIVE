<?php
include '../config.php';


if ($_POST) {

    $id_pemesanan = $_POST['ID_PEMESANAN'];
    $id_user_atasan = $_POST['ID_USER_ATASAN'];
    $status = $_POST['STATUS_PEMESANAN'];

    $sql = mysqli_query($db, "UPDATE `kbm_pemesanan` SET `STATUS_PEMESANAN`='$status', ID_USER_ATASAN='$id_user_atasan' WHERE `ID_PEMESANAN`='$id_pemesanan'");

    if ($sql){
        $response["error"] = false;
        $response["error_msg"] = "Berhasil";
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