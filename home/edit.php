<?php
include 'header.php';
include '../koneksi.php';
?>

<div class="container">
    <div class="container col-md-5 col-md-offset-3">
        <div class="panel">
            <div class="panel-heading">
                <h1>Ubah Admin</h1>
            </div>

            <div class="panel-body">
                <?php
                $id = $_GET['id'];
                $data = mysqli_query($koneksi, "SELECT * FROM tb_login WHERE id='$id'");
                while ($ambil_data = mysqli_fetch_array($data)) {

                ?>
                    <form action="edit_aksi.php" method="POST">
                        <input type="hidden" name="id_user" value="<?php echo $ambil_data['id'] ?>">
                        <div class="from-group">
                            <label class="color-white">Username</label>
                            <input type="text" class="form-control" name="username" value="<?php echo $ambil_data['username'] ?>"><br>
                        </div>
                        <div class=" from-group">
                            <label class="color-white">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Tuliskan Password"><br>
                        </div>
                        <div class=" from-group">
                            <label class="color-white">Password</label>
                            <input type="text" class="form-control" name="level" value="<?php echo $ambil_data['level'] ?>"><br>
                        </div>
                        <input type="submit" class="btn btn-sm btn-success" value="Save">
                        <a href="index.php" class="btn btn-sm btn-success">Back</a>
                    </form>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>