<?php
    session_start();
    include "koneksi.php";

    $id_petugas             = $_SESSION['nik_login'];
    $tanggal_tanggapan      = date('Y-m-d');
    $id_pengaduan           = $_POST['id_pengaduan'];
    $status                 = $_POST['status'];

    if($status == "Belum DiProses")
    {
        $narasi = "Status pekerjaan diubah ke peninjauan";
    }
    elseif($status == "DiProses")
    {
        $narasi = "Status pekernaan diubah ke pekerjaan sedang dilakukan";
    }
    else
    {
        $narasi = "Status pekerjaan saat ini telah selesai";
    }
    
    $sql_update_status = "UPDATE `pengaduan` SET `status` = '$status' WHERE `id_pengaduan` = '$id_pengaduan'";
    $ekse              = mysqli_query($conn,$sql_update_status);

    if($ekse)
    {
            $sql_tanggapan            = "INSERT INTO tanggapan (id_tanggapan, id_pengaduan, tgl_tanggapan, tanggapan, id_petugas)
                                          VALUES (NULL, '$id_pengaduan', '$tanggal_tanggapan' , '$narasi', '$id_petugas')";
            $ekse_tanggapan           = mysqli_query($conn,$sql_tanggapan);
        if($ekse_tanggapan)
        {
            header("location:pengaduan_detail.php?id_pengaduan=$id_pengaduan");    
        }
    }
    else
    {
        echo "UPDATE GAGAL";
    }


    
?>