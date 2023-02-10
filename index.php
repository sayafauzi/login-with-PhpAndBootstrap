<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shorcut icon" href="assets/brand/bootstrap-logo.svg">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/root.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <script type="text/js" src="assets/js/jquery.js"></script>
    <script type="text/js" src="assets/js/bootstrap.js"></script>
    <script type="text/js" src="assets/js/bootstrap.bundle.min.js"></script>
    <title>Login item</title>
</head>

<body>

    <div class="container col-md-4 ">
        <video autoplay muted loop id="myVideo">
            <source src="assets/brand/Hitam - 13495.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
        <div class="col-offset-4 content" style="margin-top: 4rem;">
            <div class="card-header col-center">
                <h1>Login Item</h1>
            </div>
            <?php
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == 'gagal') {
                    echo "<div class='alert alert-danger' >LOGIN GAGAL !!</div>";
                } elseif ($_GET['pesan'] == 'logout') {
                    echo "<div class='alert alert-info' >Loguot Berhasil !</div>";
                } elseif ($_GET['pesan'] == 'belum_login') {
                    echo "<div class='alert alert-danger'>Maaf anda belum Login !</div>";
                }
            }
            ?>
            <form action="login.php" method="POST">
                <div class="panel-body mt-4">
                    <div class="form-group">
                        <label class="col-md-4 offset-md-1 mb-2 mt-4">username</label>
                        <input type="text" name="name_pemakai" placeholder="username" class="shadow-box col-md-10 offset-md-1 mb-2 form-control"><br>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 offset-md-1  mb-2">password</label>
                        <input type="password" name="password_pemakai" placeholder="password" class="shadow-box col-md-10 offset-md-1 mb-2 form-control"><br>
                    </div>
                    <div class="col-center">
                        <input type="submit" class="btn btn-sm btn-color-milk col-md-4 col-md-offset-4 mb-5 " value="Login">
                    </div>

                </div>
                <div class="card-footer mt-4 col-center">
                    <h7>Created by Ahmad Fauzi</h7>
                </div>
            </form>
        </div>

    </div>
</body>

</html>