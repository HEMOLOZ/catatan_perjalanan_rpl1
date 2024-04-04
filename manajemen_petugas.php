<?php
    session_start();
    if((!empty($_SESSION['nik_login']) AND ($_SESSION['status'] == 'admin'))) 
    {
        include "koneksi.php";
        include "header.php";

        $nik_login    = $_SESSION['nik_login'];
        $nama_login   = $_SESSION['nama_login'];
        $status       = $_SESSION['status'];
        if(!empty($level))
        {
            $level = $_GET['level'];
        }
        else
        {
            $level = "petugas";
        }
      

       
            $sql_masyarakat = "SELECT * FROM masyarakat";
            $eks_masya = mysqli_query($conn,$sql_masyarakat);
            $jml_masya = mysqli_num_rows($eks_masya);

            $sql_petugas = "SELECT * FROM petugas WHERE status='petugas'";
            $eks_petugas = mysqli_query($conn,$sql_petugas);
            $jml_petugas = mysqli_num_rows($eks_petugas);

            $sql_admin = "SELECT * FROM petugas WHERE  status = 'admin'";
            $eks_admin = mysqli_query($conn,$sql_admin);
            $jml_admin = mysqli_num_rows($eks_admin);

        include "navigasi.php";

        
?>

        <div class="container">
            <h4 class="text-uppercase font-weight-bold text-secondary mt-2">rekapitulasi pengguna</h4>
            <hr>
            <div class="row text-white mb-3">
                <div class="card bg-primary mr-3" style="width: 30%;">
                    <div class="card-body">
                        <h5 class="card-title">MASYARAKAT</h5>
                        <div class="display-4 font-weight-bold"><?=  $jml_masya ;?></div>
                        <a href="manajemen_anggota.php"><p class="card-text text-white mt-2">Selengkapnya</p></a>
                    </div>
                </div>

                <div class="card bg-warning mr-3" style="width:30%;">
                    <div class="card-body">
                        <h5 class="card-title">PETUGAS</h5>
                        <div class="display-4 font-weight-bold"><?=   $jml_petugas;?></div>
                        <a href="manajemen_petugas.php?level=petugas"><p class="card-text text-white mt-2">Selengkapnya</p></a>
                    </div>
                </div>

                <div class="card bg-danger mr-3" style="width:30%;">
                    <div class="card-body">
                        <h5 class="card-title">ADMIN</h5>
                        <div class="display-4 font-weight-bold"><?=  $jml_admin;?></div>
                        <a href="manajemen_petugas.php?level=admin"><p class="card-text text-white mt-2">Selengkapnya</p></a>
                    </div>
                </div>

                
            </div>

            <div>
            <h4 class="text-uppercase font-weight-bold text-secondary mt-2">Tabel <?= $level; ?></h4>
            </div>
            <table class="table table-striped mt-5 data">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nomor Telpon</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                    while($data = mysqli_fetch_array($eks_masya)) :
                    ?>
                    <tr>
                        <th scope="row"><?= $no; ?></th>
                        <td><?= $data['nik'];?></td>
                        <td><?= $data['nama'];?></td>
                        <td><?= $data['telp'];?></td>
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
                <p>&copy; faisa riskulah pradipa asir</p>
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