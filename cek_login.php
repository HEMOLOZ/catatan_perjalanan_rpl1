<?php
    session_start();
    include "koneksi.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM masyarakat WHERE username='$username' AND password ='$password'";

    $eksekusi = mysqli_query($conn,$sql);
    $ketemu   = mysqli_num_rows($eksekusi);

    if($ketemu>0)  // ini jika ditemukan pada tabel masyarakat
    {
        // echo "berhasil";

        $data = mysqli_fetch_array($eksekusi);

        $nik  = $data['nik'];
        $nama = $data['nama'];

        $_SESSION['nik_login']  = $nik;
        $_SESSION['nama_login'] = $nama;
        $_SESSION['status']     = 'masyarakat';

        header("location:index.php");
    }
    else // jika tidak ditemukan pada tabel masyarakat
    {
        $sql_petugas = "SELECT * FROM petugas WHERE username='$username' AND password ='$password'";
        $eksekusi_petugas = mysqli_query($conn,$sql_petugas);
        $ketemu_petugas   = mysqli_num_rows($eksekusi_petugas);

        if($ketemu_petugas>0)
        {
            // global $nama;
            $data_petugas        = mysqli_fetch_array($eksekusi_petugas);
            $id_petugas  = $data_petugas['id_petugas'];
            $nama        = $data_petugas['nama_petugas'];
            $status      = $data_petugas['status'];
    
            $_SESSION['nik_login']  = $id_petugas;
            $_SESSION['nama_login'] = $nama;
            $_SESSION['status']     = $status;

            header("location:index.php");
        }
        else
        {
            header("location:form_login.php");
        }
    // echo $ketemu_petugas;
    //    header("location:form_login.php");
        // if(!$ketemu_petugas)
        // {
        //     header("location:form_login.php");
        // }
        // else
        // {
        //     echo "berhasil";
        // }
    }



?>