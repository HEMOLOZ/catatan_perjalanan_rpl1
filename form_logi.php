<?php
session_start();
if (empty($_SESSION['nik_login'])) {
    include "header.php";
?>

    <div class="row justify-content-center align-items-center" style="height: 100vh;">
        <div class="card " style="width: 500px;">
            <div class="card-body p-0">
                <h2 class="text-center card-header bg-white">FORM LOGIN ADMAS</h2>
                <div class="p-3">
                    <form action="cek_login.php" method="POST">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan Username anda">
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password anda">
                        </div>

                        <div class="registrasi">
                            <!-- <a href=""><p><small>New Account</small></p></a> -->
                        </div>
                        <div class="d-flex">
                            <button style="width: 50%;" type="submit" class="btn btn-outline-primary mx-2">Login</button>
                            <button style="width: 50%;" type="reset" class="btn btn-outline-danger mx-2">Reset</button>
                        </div>



                    </form>
                </div>
            </div>


        </div>
    </div>
<?php
    include "footer.php";
} else {
    header("location:index.php");
}
?>