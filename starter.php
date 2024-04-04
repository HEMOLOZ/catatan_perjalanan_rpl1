<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">

    <title>ADMAS</title>
  </head>
  <body>
        <!-- Awal Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <div class="container">
            <a class="navbar-brand" href="#">ADMAS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Beranda    <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">Buat Pengaduan Baru</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    Pengaduan
                    </a>
                    <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Total Pengaduan</a>
                    <a class="dropdown-item" href="#">Pengaduan Diproses</a>
                    <a class="dropdown-item" href="#">Pengaduan Selesai</a>
                    </div>
                </li>
                </ul>
                <span class="navbar-text">
                    Admin (<a href="#" >Logout</a>)
                </span>
            </div>
        </div>
    </nav>
        <!-- Akhir navbar -->
    <div class="container">
        <h4 class="text-uppercase font-weight-bold text-secondary mt-2">Daftar pengaduan yang dibuat</h4>
        <hr>

        <!-- card -->
    <div class="row text-white">
        <div class="card bg-info mr-3" style="width: 30%;">
            <div class="card-body">
                <h5 class="card-title">JUMLAH PENGADUAN</h5>
                <div class="display-4 font-weight-bold">25</div>
                <a href=""><p class="card-text text-white mt-2">Selengkapnya</p></a>
            </div>
        </div>

        <div class="card bg-warning mr-3" style="width: 30%;">
            <div class="card-body">
                <h5 class="card-title">PENGADUAN DIPROSES</h5>
                <div class="display-4 font-weight-bold">25</div>
                <a href=""><p class="card-text text-white mt-2">Selengkapnya</p></a>
            </div>
        </div>

        <div class="card bg-success mr-3" style="width: 30%;">
            <div class="card-body">
                <h5 class="card-title">PENGADUAN SELESAI</h5>
                <div class="display-4 font-weight-bold">25</div>
                <a href=""><p class="card-text text-white mt-2">Selengkapnya</p></a>
            </div>
        </div>
        
    </div>
        <!-- Akhir card -->
    <a href="" class="btn btn-primary mt-5 mb-3">BUAT PENGADUAN BARU</a>
        <!-- awal table -->
    <table class="table table-striped mt-5 data">
        <thead>
            <tr>
            <th scope="col">No.</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Isi Pengaduan</th>
            <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>2022-11-26</td>
            <td><a href="" class="text-dark">Kondisi jalan di Korpri sangat memprihatinkan , Mohon diperbaiki</a></td>
            <td>Sedang ditangani</td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>2022-11-26</td>
            <td><a href="" class="text-dark">Kondisi tanaman di Serpong Garden tidak terawat , Mohon perhatiannya</a></td>
            <td>Selesai</td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td>2022-11-26</td>
            <td><a href="" class="text-dark">Ada rumah yang sudah reyok didepan Jl.Gatot Subroto , Mohon Dirobohkan</a></td>
            <td>Sedang Ditangani </td>
            </tr>
            <tr>
            <th scope="row">1</th>
            <td>2022-11-26</td>
            <td><a href="" class="text-dark">Kondisi jalan di Korpri sangat memprihatinkan , Mohon diperbaiki</a></td>
            <td>Sedang ditangani</td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>2022-11-26</td>
            <td><a href="" class="text-dark">Kondisi tanaman di Serpong Garden tidak terawat , Mohon perhatiannya</a></td>
            <td>Selesai</td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td>2022-11-26</td>
            <td><a href="" class="text-dark">Ada rumah yang sudah reyok didepan Jl.Gatot Subroto , Mohon Dirobohkan</a></td>
            <td>Sedang Ditangani </td>
            </tr>
            <tr>
            <th scope="row">1</th>
            <td>2022-11-26</td>
            <td><a href="" class="text-dark">Kondisi jalan di Korpri sangat memprihatinkan , Mohon diperbaiki</a></td>
            <td>Sedang ditangani</td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>2022-11-26</td>
            <td><a href="" class="text-dark">Kondisi tanaman di Serpong Garden tidak terawat , Mohon perhatiannya</a></td>
            <td>Selesai</td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td>2022-11-26</td>
            <td><a href="" class="text-dark">Ada rumah yang sudah reyok didepan Jl.Gatot Subroto , Mohon Dirobohkan</a></td>
            <td>Sedang Ditangani </td>
            </tr>
            <tr>
            <th scope="row">1</th>
            <td>2022-11-26</td>
            <td><a href="" class="text-dark">Kondisi jalan di Korpri sangat memprihatinkan , Mohon diperbaiki</a></td>
            <td>Sedang ditangani</td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>2022-11-26</td>
            <td><a href="" class="text-dark">Kondisi tanaman di Serpong Garden tidak terawat , Mohon perhatiannya</a></td>
            <td>Selesai</td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td>2022-11-26</td>
            <td><a href="" class="text-dark">Ada rumah yang sudah reyok didepan Jl.Gatot Subroto , Mohon Dirobohkan</a></td>
            <td>Sedang Ditangani </td>
            </tr>
        </tbody>
    </table>
        <!-- akhir table -->
    </div>

    <div class="bg-info ">
        <div class="container text-white text-center pt-5 pb-5 mt-3">
            <p>&copy; faisa riskulah pradipa asir</p>
        </div>
    </div>




    <script src="js/jquery.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
        $(document).ready( function () {
            $('.data').DataTable();
        } );
    </script>
  </body>
</html>