<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>BackOffice Portal Bisnis UP</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
</head>

<body>
    <div class="row">
        <div class="col-12" style="padding: 100px;padding-bottom: 0px;"><span> <h2><strong>Welcome To Back Office Portal Bisnis UP</strong></h2></span></div>
    </div>
    <div class="row">
        <div class="col-12" style="padding: 100px;padding-top: 0px;margin-top: 20px;">
            <form action="<?= base_url('backOffice') ?>" method="POST"><label>Email</label><input required class="form-control" name="email" type="text"><label>Password</label><input name="password" required class="form-control" type="password"><button class="btn btn-primary" type="submit" style="margin-top: 10px;">Login</button></form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>