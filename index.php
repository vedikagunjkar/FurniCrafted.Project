<?php require_once(dirname(__FILE__) . '/config.php'); 
if ( isset($_SESSION['Admin_ID']) && $_SESSION['Login_Type'] == 'admin' ) {
    header('location:' . BASE_URL . 'attendance/');
}
if ( isset($_SESSION['Admin_ID']) && $_SESSION['Login_Type'] == 'emp' ) {
    header('location:' . BASE_URL . 'profile/');
} ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <title>Login - Payroll</title>
    <img src="dist/img/07.jpg" width=100%>

    <link rel="stylesheet" href="<?php echo BASE_URL; ?>bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>dist/css/AdminLTE.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>dist/css/skins/_all-skins.min.css">

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
        <a href="<?php echo BASE_URL; ?>"><b>"Payroll pulse"</b></a>
            
        </div>
        <div class="login-box-body">
            <p class="login-box-msg">Please login to start your session</p>
            <img src="dist/img/12345.jpg" width=100%>
            <form method="POST" role="form" data-toggle="validator" id="login-form">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" id="code" name="code" placeholder="Employee Code" required />
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required />
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <button type="submit" class="btn btn-success btn-block btn-flat">Login</button>

                <br/>
                <h5>  <a href="regform.php">NEW REGISTRATION</a></h5>
                <h5>  <a href="forgotpass.php">FORGOT PASSWORD</a></h5>
            </form>
        </div>
    </div>
    <img src="dist/img/download.png" width=4%><strong> &copy;<?php echo date("Y");?>Payroll pulse | </strong> Developed By VEDIKA GUNJKAR</footer>
    <script src="<?php echo BASE_URL; ?>plugins/jQuery/jquery-2.2.3.min.js"></script>
    <script src="<?php echo BASE_URL; ?>bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo BASE_URL; ?>plugins/bootstrap-notify/bootstrap-notify.min.js"></script>
    <script src="<?php echo BASE_URL; ?>plugins/jquery-validator/validator.min.js"></script>
    <script src="<?php echo BASE_URL; ?>plugins/bootstrap-notify/bootstrap-notify.min.js"></script>
    <script src="<?php echo BASE_URL; ?>dist/js/app.min.js"></script>
    <script type="text/javascript">var baseurl = '<?php echo BASE_URL; ?>';</script>
    <script src="<?php echo BASE_URL; ?>dist/js/script.js?rand=<?php echo rand(); ?>"></script>
</body>
</html>