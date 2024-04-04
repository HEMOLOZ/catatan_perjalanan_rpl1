<nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <div class="container">
            <a class="navbar-brand" href="index.php">ADMAS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Beranda<span class="sr-only">(current)</span></a>
                </li>
            <?php
                if($status == 'masyarakat')
                {
            ?>
                <li class="nav-item ">
                    <a class="nav-link" href="form_tambah_aduan.php">Buat Pengaduan Baru</a>
                </li>
            <?php
                }
            ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    Pengaduan
                    </a>
                    <div class="dropdown-menu">
                    <a class="dropdown-item" href="tampil_hal_total.php">Total Pengaduan</a>
                    <a class="dropdown-item" href="tampil_hal_belum.php">Pengaduan Belum Diproses</a>
                    <a class="dropdown-item" href="tampil_hal_diproses.php">Pengaduan Ditangani</a>
                    <a class="dropdown-item" href="tampil_hal_selesai.php">Pengaduan Selesai</a>
                    
                    </div>
                </li>
            <?php
                if($status == 'admin')
                {
            ?>
                <li class="nav-item ">
                    <a class="nav-link" href="manajemen_anggota.php">Manajemen Anggota</a>
                </li>
            <?php
                }
            ?>
                </ul>
                <span class="navbar-text text-white">
                   <?= $nama_login;?> (<a href="logout.php"  class="text-dark">Logout</a>)
                </span>
            </div>
        </div>
    </nav>