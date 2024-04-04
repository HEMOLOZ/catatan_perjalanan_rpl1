<?php
    session_start();
    if(!empty($_SESSION['nik_login']))
    {
        include "koneksi.php";
        include "header.php";

        $nik_login    = $_SESSION['nik_login'];
        $nama_login   = $_SESSION['nama_login'];
        $status       = $_SESSION['status'];
        if($status == 'masyarakat')
        {
            $sql_peng_all = "SELECT * FROM pengaduan WHERE nik = '$nik_login' ORDER BY id_pengaduan DESC";
            $eks_peng_all = mysqli_query($conn,$sql_peng_all);
            $jml_peng_all = mysqli_num_rows($eks_peng_all);

            $sql_peng_blm = "SELECT * FROM pengaduan WHERE nik = '$nik_login' AND status = 'Belum DiProses'";
            $eks_peng_blm = mysqli_query($conn,$sql_peng_blm);
            $jml_peng_blm = mysqli_num_rows($eks_peng_blm);

            $sql_peng_pros = "SELECT * FROM pengaduan WHERE nik = '$nik_login' AND status = 'DiProses'";
            $eks_peng_pros = mysqli_query($conn,$sql_peng_pros);
            $jml_peng_pros = mysqli_num_rows($eks_peng_pros);

            $sql_peng_sls = "SELECT * FROM pengaduan WHERE nik = '$nik_login' AND status = 'Selesai'";
            $eks_peng_sls = mysqli_query($conn,$sql_peng_sls);
            $jml_peng_sls = mysqli_num_rows($eks_peng_sls);
        }
        else
        {
            $sql_peng_all = "SELECT * FROM pengaduan ORDER BY id_pengaduan DESC";
            $eks_peng_all = mysqli_query($conn,$sql_peng_all);
            $jml_peng_all = mysqli_num_rows($eks_peng_all);

            $sql_peng_blm = "SELECT * FROM pengaduan WHERE  status = 'Belum DiProses'";
            $eks_peng_blm = mysqli_query($conn,$sql_peng_blm);
            $jml_peng_blm = mysqli_num_rows($eks_peng_blm);

            $sql_peng_pros = "SELECT * FROM pengaduan WHERE  status = 'DiProses'";
            $eks_peng_pros = mysqli_query($conn,$sql_peng_pros);
            $jml_peng_pros = mysqli_num_rows($eks_peng_pros);

            $sql_peng_sls = "SELECT * FROM pengaduan WHERE status = 'Selesai'";
            $eks_peng_sls = mysqli_query($conn,$sql_peng_sls);
            $jml_peng_sls = mysqli_num_rows($eks_peng_sls);
        }

        include "navigasi.php";

        
?>

        <div class="container">
            <h4 class="text-uppercase font-weight-bold text-secondary mt-2">Daftar pengaduan yang dibuat</h4>
            <hr>
            <div class="row text-white mb-3">
                <div class="card bg-primary mr-3" style="width: 23%;">
                    <div class="card-body">
                        <h5 class="card-title">JUMLAH PENGADUAN</h5>
                        <div class="display-4 font-weight-bold"><?=  $jml_peng_all ;?></div>
                        <a href="tampil_hal_total.php"><p class="card-text text-white mt-2">Selengkapnya</p></a>
                    </div>
                </div>

                <div class="card bg-danger mr-3" style="width:23%;">
                    <div class="card-body">
                        <h5 class="card-title">PENGADUAN BELUM DIPROSES</h5>
                        <div class="display-4 font-weight-bold"><?=   $jml_peng_blm;?></div>
                        <a href="tampil_hal_belum.php"><p class="card-text text-white mt-2">Selengkapnya</p></a>
                    </div>
                </div>

                <div class="card bg-warning mr-3" style="width:23%;">
                    <div class="card-body">
                        <h5 class="card-title">PENGADUAN DIPROSES</h5>
                        <div class="display-4 font-weight-bold"><?=  $jml_peng_pros;?></div>
                        <a href="tampil_hal_diproses.php"><p class="card-text text-white mt-2">Selengkapnya</p></a>
                    </div>
                </div>

                <div class="card bg-success mr-3" style="width:23%;">
                    <div class="card-body">
                        <h5 class="card-title">PENGADUAN SELESAI</h5>
                        <div class="display-4 font-weight-bold"><?= $jml_peng_sls; ?></div>
                        <a href="tampil_hal_selesai.php"><p class="card-text text-white mt-2">Selengkapnya</p></a>
                    </div>
                </div>
                
            </div>
        <?php
            if($status == 'masyarakat')
            {
        ?>
            <a href="form_tambah_aduan.php" class="btn btn-primary mt-3 mb-3">BUAT PENGADUAN BARU</a>
        <?php 
            }
        ?>
            <table class="table table-striped mt-5 data">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <?php 
                            if($status != 'masyarakat')
                            {
                        ?>
                            <th scope="col">NIK Masyarakat</th>    
                        <?php
                            }
                        ?>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Isi Pengaduan</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                    while($data = mysqli_fetch_array($eks_peng_all)) :
                    ?>
                    <tr>
                        <th scope="row"><?= $no; ?></th>
                        <?php
                            if($status != 'masyarakat')
                            {
                        ?>    
                            <td><?= $data['nik'];?></td>
                        <?php
                            }
                        ?>
                        <td><?= $data['tgl_pengaduan'];?></td>
                        <td><a href="pengaduan_detail.php?id_pengaduan=<?= $data['id_pengaduan'];?>" class="text-dark"><?= $data['isi_laporan'];?></a></td>
                        <td><?= $data['status'];?></td>
                    </tr>
                    <?php
                        $no++;
                         endwhile
                     ?>
                </tbody>
            </table>
        </div>

        <div class="bg-info ">
            <div class="container text-white text-center pt-4 pb-4 mt-3">
                <p>&copy; faisa riskulah pradipa asir </p>
            </div>
        </div>

<?php
        include "footer.php";
    }
    else
    {
        header("location:form_login.php");
    }
?>