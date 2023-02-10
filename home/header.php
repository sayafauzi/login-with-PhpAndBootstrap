<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shorcut icon" href="../assets/brand/bootstrap-logo.svg">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/root.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">

    <script type="text/js" src="assets/js/jquery.js"></script>
    <script type="text/js" src="assets/js/bootstrap.js"></script>
    <script type="text/js" src="assets/js/bootstrap.bundle.min.js"></script>
    <title>Login item</title>
</head>

<body>
    <?php
    session_start();
    include '../koneksi.php';
    if ($_SESSION['status'] != 'login') {
        header("location:../index.php?pesan=belum_login");
    }
    ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><i class="glyphicon glyphicon-home "></i>HOME</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Show Data Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Log Out</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <p class="navbar-text mt-2" style="margin-left: 2rem">Welcome Home,
                            <b><?php echo $_SESSION['username']; ?></b>
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>

</html>