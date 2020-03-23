<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 5/5/2019
 * Time: 10:01 PM
 */
include '../config.php';

if ($_POST) {

    $NAMA_USER = $_POST['NAMA_USER'];
    $NIK_USER = $_POST['NIK_USER'];
    $PASSWORD_USER = $_POST['PASSWORD_USER'];
    $REG_ID = $_POST['REG_ID'];

    $query = "INSERT INTO kbm_user_akun 
(NAMA_USER, NIK_USER, PASSWORD_USER, RULE_USER, REG_ID) VALUE ('$NAMA_USER', '$NIK_USER', '$PASSWORD_USER', 'user', '$REG_ID');";

    $query = mysqli_query($db, $query);
    if ($query){
        $response["error"] = false;
        $response["error_msg"] = "Berhasil Mendaftar";
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
