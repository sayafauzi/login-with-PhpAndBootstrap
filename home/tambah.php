<?php include 'header.php'; ?>

<div class="container">
    <div class="container col-md-5 col-md-offset-3">
        <div class="container panel">
            <div class="panel-heading">;
                <h1>Tambah User</h1>
            </div>
            <form action="tambah_aksi.php" method="POST">
                <div class="panel-body">
                    <div class="from-group">
                        <label class="color-white">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Tuliskan Username"><br>
                    </div>
                    <div class="from-group">
                        <label class="color-white">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Tuliskan Password"><br>
                    </div>
                    <div class="from-group">
                        <label class="color-white">Level</label>
                        <input type="text" class="form-control" name="level" placeholder="Tuliskan User/Admin"><br>
                    </div>
                    <input type="submit" class="btn btn-sm btn-success" value="Save">
            </form>
        </div>
    </div>
</div>
</div>