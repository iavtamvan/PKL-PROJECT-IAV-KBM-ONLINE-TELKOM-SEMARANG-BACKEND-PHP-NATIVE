<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 5/5/2019
 * Time: 10:01 PM
 */
include '../config.php';

if ($_POST) {

    $ID_USER_ATASAN = $_POST['ID_USER_ATASAN'];
    $NAMA_PEMESAN = $_POST['NAMA_PEMESAN'];
    $JENIS_KEPERLUAN = $_POST['JENIS_KEPERLUAN'];
    $JENIS_PEMESANAN = $_POST['JENIS_PEMESANAN'];
    $JENIS_KENDARAAN = $_POST['JENIS_KENDARAAN'];
    $KEBERANGKATAN_KAWASAN = $_POST['KEBERANGKATAN_KAWASAN'];
    $KEBERANGKATAN_WITEL = $_POST['KEBERANGKATAN_WITEL'];
    $KEBERANGKATAN_AREA_POOL = $_POST['KEBERANGKATAN_AREA_POOL'];
    $TUJUAN_ALAMAT_JEMPUT = $_POST['TUJUAN_ALAMAT_JEMPUT'];
    $TUJUAN_AREA = $_POST['TUJUAN_AREA'];
    $TUJUAN_ALAMAT_DETAIL_MAPS = $_POST['TUJUAN_ALAMAT_DETAIL_MAPS'];
    $LAT_AWAL = $_POST['LAT_AWAL'];
    $LONG_AWAL = $_POST['LONG_AWAL'];
    $LAT_TUJUAN = $_POST['LAT_TUJUAN'];
    $LONG_TUJUAN = $_POST['LONG_TUJUAN'];
    $WAKTU_KEBERANGKATAN = $_POST['WAKTU_KEBERANGKATAN'];
    $WAKTU_KEPULANGAN = $_POST['WAKTU_KEPULANGAN'];
    $NO_TELEPON_KANTOR = $_POST['NO_TELEPON_KANTOR'];
    $NO_HP = $_POST['NO_HP'];
    $JUMLAH_PENUMPANG = $_POST['JUMLAH_PENUMPANG'];
    $ISI_PENUMPANG = $_POST['ISI_PENUMPANG'];
    $KETERANGAN = $_POST['KETERANGAN'];
    $JARAK_PER_KM = $_POST['JARAK_PER_KM'];
    $BENSIN_PER_LITER = $_POST['BENSIN_PER_LITER'];
    $NAMA_ATASAN = $_POST['NAMA_ATASAN'];
    $REG_TOKEN_PEMESANAN = $_POST['REG_TOKEN_PEMESANAN'];
    $REG_ID = $_POST['REG_ID'];

    $query = "INSERT INTO kbm_pemesanan 
(ID_USER_ATASAN,  NAMA_PEMESAN,  JENIS_KEPERLUAN,  JENIS_PEMESANAN,  JENIS_KENDARAAN,  KEBERANGKATAN_KAWASAN,  KEBERANGKATAN_WITEL,  KEBERANGKATAN_AREA_POOL,  TUJUAN_ALAMAT_JEMPUT,  TUJUAN_AREA,  TUJUAN_ALAMAT_DETAIL_MAPS, LAT_AWAL, LONG_AWAL, LAT_TUJUAN, LONG_TUJUAN,  WAKTU_KEBERANGKATAN,  WAKTU_KEPULANGAN,  NO_TELEPON_KANTOR,  NO_HP,  JUMLAH_PENUMPANG,  ISI_PENUMPANG,  KETERANGAN,  JARAK_PER_KM,  BENSIN_PER_LITER,  NAMA_ATASAN,  STATUS_PEMESANAN,  REG_TOKEN_PEMESANAN, REG_ID) 
VALUE ('$ID_USER_ATASAN', '$NAMA_PEMESAN', '$JENIS_KEPERLUAN', '$JENIS_PEMESANAN', '$JENIS_KENDARAAN', '$KEBERANGKATAN_KAWASAN', '$KEBERANGKATAN_WITEL', '$KEBERANGKATAN_AREA_POOL', '$TUJUAN_ALAMAT_JEMPUT', '$TUJUAN_AREA', '$TUJUAN_ALAMAT_DETAIL_MAPS', '$LAT_AWAL', '$LONG_AWAL', '$LAT_TUJUAN', '$LONG_TUJUAN', '$WAKTU_KEBERANGKATAN', '$WAKTU_KEPULANGAN', '$NO_TELEPON_KANTOR', '$NO_HP', '$JUMLAH_PENUMPANG', '$ISI_PENUMPANG', '$KETERANGAN', '$JARAK_PER_KM', '$BENSIN_PER_LITER', '$NAMA_ATASAN', 'NOT APROVAL', '$REG_TOKEN_PEMESANAN', '$REG_ID');";

    $query = mysqli_query($db, $query);
    if ($query){
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