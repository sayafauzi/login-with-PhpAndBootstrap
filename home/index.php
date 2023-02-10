<?php
include 'header.php';
include '../koneksi.php'
?>

<div class="container col-md-8 col-md-offset-2">
    <div class="panel">
        <div class="panel-heading">
            <h1>Data Admin</h1>

        </div>
        <div class="panel-body " style="overflow-x:auto;">
            <table class=" table table-bordered">
                <tr class="table-heading">
                    <th width="10%">Id Admin</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Level</th>
                    <th>Opsi</th>
                </tr>
                <?php
                $data = mysqli_query($koneksi, "SELECT * FROM tb_login");
                while ($ambil_data = mysqli_fetch_array($data)) {
                ?>
                    <tr class="table-body">
                        <td><?php echo $ambil_data['id']; ?></td>
                        <td><?php echo $ambil_data['username']; ?></td>
                        <td><?php echo $ambil_data['password']; ?></td>
                        <td><?php echo $ambil_data['level']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $ambil_data['id'] ?>" class="btn btn-sm btn-warning"> <i class="glyphicon glyphicon-pencil"></i><b>Edit</b></a>
                            <a onclick="return confirm('Anda Yakin Inging Mengahpus Data dengan Id User: <?php echo $ambil_data['id'] ?> ?')" href="hapus.php?id=<?php echo $ambil_data['id'] ?>" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i><b>Delete</b></a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
            <a href="tambah.php" class="btn btn-sm btn-success"> <i class="glyphicon glyphicon-plus"></i><b>Add</b></a>
        </div>
    </div>
</div>