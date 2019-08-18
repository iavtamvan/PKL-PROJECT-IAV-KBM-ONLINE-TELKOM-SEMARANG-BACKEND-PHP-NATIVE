<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 7/7/2019
 * Time: 8:28 PM
 */

include "config.php";

if ($_GET){

    $username = $_GET['NIK_USER'];
    $password = $_GET['PASSWORD_USER'];

    $sql = mysqli_query($db, "Select * from kbm_user_akun where NIK_USER='$username' and PASSWORD_USER='$password'");
    $user = mysqli_fetch_assoc($sql);
    $num = mysqli_num_rows($sql);

    $id_account = "".$user['ID_USER'];
    $username = "".$user['NAMA_USER'];
    $rule = "".$user['RULE_USER'];
    $regID = "".$user['REG_ID'];

    if ($num > 0) {
        $response["error"] = false;
        $response["error_msg"] = "Berhasil Login";
        $response["id"] = $id_account;
        $response["username"] = $username;
        $response["rule"] = $rule;
        $response["regID"] = $regID;
        echo json_encode($response);
    } else{
        $response["error"] = false;
        $response["error_msg"] = "Gagal Mengirim";
        echo json_encode($response);
    }

} else {
    $response["error"] = true;
    $response["error_msg"] = "404";

    echo json_encode($response);
}
?>
