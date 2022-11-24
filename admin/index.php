<!DOCTYPE html>
<html lang="en>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Log In</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <section>
        <div class="container p-5">
            <div class="wrapper" style="width: 100%; margin:auto;">
                <form action="loginprocess/adminloginprocess.php" Method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-danger m-3">
                                <div class="card-body ">
                                    <div class="form-group">
                                        <label> Email</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                            </div>
                                            <input type="email" class="form-control" id="name" name="email" value=""
                                                placeholder="Enter Valid Emailaddress">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                                            </div>
                                            <input type="password" class="form-control" id="password" name="password"
                                                value="" placeholder="Enter Valid Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div>
                                <div class="title">
                                </div>
                                <img src="../admin/uploads/@hackerwhale1659684975.png" alt="" height="100%" width="60%"
                                    style="margin: auto;">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>



    <!-- /.register-box -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
</body>

</html>