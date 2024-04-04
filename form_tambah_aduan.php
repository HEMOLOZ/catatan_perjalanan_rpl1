<?php
    session_start();
    if(!empty($_SESSION['nik_login']))
    {

        $nik_login    = $_SESSION['nik_login'];
        $nama_login   = $_SESSION['nama_login'];
        $status       = $_SESSION['status'];
        if($status == 'masyarakat')
        {

            include "header.php";
            include "navigasi.php";
?>
            <div class="container">
                <h3 class="text-center mt-5 mb-3">FORM PENAMBAH ADUAN MASYARAKAT</h3>
                <form action="upload_aduan_mas.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="isi_laporan">Apa Keluhan Anda?</label>
                        <textarea name="isi_laporan" id="isi_laporan" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="foto">Tambahkan Foto Laporan</label>
                        <input type="file" name="foto" id="foto" class="form-control-file">
                    </div>

                    <button type="submit" class="btn btn-success mt-3">Tambahkan Laporan</button>
                    <button type="reset" class="btn btn-danger mt-3">Reset</button>
                </form>
            </div>

                <div class="bg-info fixed-bottom">
                    <div class="container text-white text-center pt-4 pb-4 mt-3">
                        <p>&copy; faisa riskulah pradipa asir</p>
                    </div>
                </div>
    
<?php
            include "footer.php";
        }
        else
        {
            header("location:index.php"); 
        }
    }
    else
    {
        header("location:form_login.php");
    }
?>