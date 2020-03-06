<?php
$id = $_GET['id'];

$ambil = $koneksi->query("SELECT * FROM tb_user WHERE user_id = '$id'");
$pecah = $ambil->fetch_object();
//var_dump($pecah);
?>

<div id="content-wrapper">

    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php?page=module/user/index">Data User</a>
            </li>
            <li class="breadcrumb-item active">Edit Data User</li>
            <li class="breadcrumb-item">
                <?php echo $pecah->user_id ?>
            </li>


        </ol>
        <h1>Edit Data User</h1>

        <!-- DataTables Example -->
        <div class=" card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Edit Data User</div>
            <div class="card-body col-md-6">
                <a href="index.php?page=module/user/index" class="btn btn-primary" style="float: left">Kembali</a> <br><br>
                <form method="POST">

                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="hidden" class="form-control" name="id" value="<?php echo $pecah->user_id ?>">
                            <input type="text" class="form-control" name="username" value="<?php echo $pecah->user_username ?>">
                            <label>Username</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="password" class="form-control" name="password" value="<?php echo $pecah->user_password ?>">
                            <label>Password</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="text" class="form-control" name="nama" value="<?php echo $pecah->user_nama ?>">
                            <label>Nama</label>
                        </div>
                    </div>

                    <button class="btn btn-primary" name="edit">Update</button>
                    <button class="btn btn-warning" value="reset">Reset</button>
                </form>
                <?php
                if (isset($_POST['edit'])) {
                    $id = $_POST['id'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $nama = $_POST['nama'];

                    // echo $username . "<br>";
                    // echo $password . "<br>";
                    // echo $nama . "<br>";

                    $edit = $koneksi->query("UPDATE tb_user SET user_nama= '$nama',
                    user_username= '$username',
                    user_password= '$password' WHERE user_id='$id'");

                    if ($edit) {
                        echo "<script>
                        Swal.fire(
                            'Update!',
                            'Your file has been Update.',
                            'success'
                        );;
                        window.location='index.php?page=module/user/index';
                        </script>";
                    } else {
                        echo "<script>alert('Data Tidak Disimpan');
                        window.location='index.php?page=module/user/index';
                        </script>";
                    }
                }

                ?>
            </div>

        </div>

    </div>
    <!-- /.container-fluid -->

    <!-- Sticky Footer -->
    <footer class="sticky-footer">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright © Your Website 2019</span>
            </div>
        </div>
    </footer>

</div>