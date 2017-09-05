<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPKBEASISWA | Login</title>
    <link href="control-panel/css/bootstrap.min.css" rel="stylesheet">
    <link href="control-panel/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="control-panel/css/animate.css" rel="stylesheet">
    <link href="control-panel/css/style.css" rel="stylesheet">
</head>

<body class="gray-bg" style="background-color: #26b7ec;">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name"><img src="control-panel/logo/logo.png" style="width: 120px; height: 120px;"></h1>

            </div>
            <h3>SPK-BEASISWA SMA N</h3>
            <p>Login in. To see it in action.</p>
            <form class="m-t" role="form" action="config/proses_login.php" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username" required="" name="username">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="" name="password">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
            </form>
            <p class="m-t"> <small>Ahmad bastiar &copy; <?php echo date('Y'); ?> </small> </p>
        </div>
    </div>
    <script src="control-panel/js/jquery-2.1.1.js"></script>
    <script src="control-panel/js/bootstrap.min.js"></script>

</body>
</html>
