<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 6/18/2019
 * Time: 11:33 PM
 */

include 'config.php';

if ($_GET){
    $change = $_GET['change'];

    switch ($change){
        case "getHistoriAtasan" : //untuk atasan
            $idUser = $_GET['ID_USER_ATASAN'];
            $sql = mysqli_query($db, "Select * from kbm_pemesanan where ID_USER_ATASAN='$idUser'");
            $arrayJson = array();

            while($data = mysqli_fetch_assoc($sql)){
                $arrayJson[] = $data;
            }
            $response = $arrayJson;
            echo json_encode($response);

            break;
        case "getDetailHistoriAtasan" : // untuk atasan
            $idUser = $_GET['ID_USER'];
            $sql = mysqli_query($db, "Select * from kbm_pemesanan where ID_USER='$idUser'");

//            $sql = mysqli_query($db, "Select * from kbm_user_akun where NIK_USER='$username' and PASSWORD_USER='$password'");
            $user = mysqli_fetch_assoc($sql);
            $num = mysqli_num_rows($sql);

            $jarakPerKM = "".$user['JARAK_PER_KM'];
            $hitungLiter = $jarakPerKM / 11.6;
            $hitungHargaBBK = $hitungLiter * 7650;

            if ($num > 0) {
                $response["error"] = false;
                $response["error_msg"] = "Berhasil Menghitung";
                $response["liter"] = $hitungLiter;
                $response["total_harga"] = $hitungHargaBBK;
                echo json_encode($response);
            } else{
                $response["error"] = false;
                $response["error_msg"] = "Gagal Mengirim";
                echo json_encode($response);
            }

            break;
        case "getAllDataPemesanan" : // untuk atasan
//            $sql = mysqli_query($db, "Select * from kbm_pemesanan where STATUS_PEMESANAN='NOT APROVAL'");
//            $sql = mysqli_query($db, "SELECT * FROM kbm_pemesanan INNER JOIN kbm_user_akun ON kbm_user_akun.ID_USER = kbm_pemesanan.ID_USER_ATASAN where STATUS_PEMESANAN='NOT APROVAL'");
            $sql = mysqli_query($db, "SELECT * FROM kbm_pemesanan where STATUS_PEMESANAN='NOT APROVAL'");
            $arrayJson = array();

            while($data = mysqli_fetch_assoc($sql)){
                $arrayJson[] = $data;
            }
            $response = $arrayJson;
            echo json_encode($response);

            break;
        case "getDataUser" : // untuk atasan
            $sql = mysqli_query($db, "SELECT * FROM kbm_user_akun where RULE_USER='user'");
            $arrayJson = array();

            while($data = mysqli_fetch_assoc($sql)){
                $arrayJson[] = $data;
            }
            $response = $arrayJson;
            echo json_encode($response);

            break;
        case "getDataMobil" : // untuk atasan
            $sql = mysqli_query($db, "SELECT * FROM kbm_mobil");
            $arrayJson = array();

            while($data = mysqli_fetch_assoc($sql)){
                $arrayJson[] = $data;
            }
            $response = $arrayJson;
            echo json_encode($response);

            break;
        case "getDataMobilByStatus" : // untuk atasan
            $statusMobil = $_GET['STATUS_MOBIL'];
            $sql = mysqli_query($db, "SELECT * FROM kbm_mobil where STATUS_MOBIL='$statusMobil'");
            $arrayJson = array();

            while($data = mysqli_fetch_assoc($sql)){
                $arrayJson[] = $data;
            }
            $response = $arrayJson;
            echo json_encode($response);

            break;
        case "getDataMobilByType" : // untuk atasan
            $typeMobil = $_GET['TYPE_MOBIL'];
            $sql = mysqli_query($db, "SELECT * FROM kbm_mobil where STATUS_MOBIL='KOSONG' and TYPE_MOBIL='$typeMobil'");
            $arrayJson = array();

            while($data = mysqli_fetch_assoc($sql)){
                $arrayJson[] = $data;
            }
            $response = $arrayJson;
            echo json_encode($response);

            break;
        case "getDataPemesanan" : // untuk user
            $namaPemesan = $_GET['NAMA_PEMESAN'];
            $sql = mysqli_query($db, "SELECT * FROM kbm_pemesanan where NAMA_PEMESAN='$namaPemesan'");
            $arrayJson = array();

            while($data = mysqli_fetch_assoc($sql)){
                $arrayJson[] = $data;
            }
            $response = $arrayJson;
            echo json_encode($response);

            break;

    }
}



?>
