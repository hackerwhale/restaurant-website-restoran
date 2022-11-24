<?php 
require ('../../connection/config.php');
include ("../../inc/header.php"); ?>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <?php include ('../../inc/navbar.php'); ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include ('../../inc/aside.php'); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <div class="container">
                <div class="row m-3">
                    <div class="col-6">
                        <h1>Add User</h1>
                        <div>
                            <a href="manageuser.php" class="btn btn-primary mt-3">Manage User</a>
                        </div>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">DataTables</li>
                        </ol>
                    </div>
</div>

                    <?php
      if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = addslashes(md5($_POST['password']));

        if ( $email != "" && $password != "") {
          $query = "INSERT INTO users (email, password) 
                          VALUES('$email','$password')";
          $result = mysqli_query($conn, $query);
          if ($result) {
      ?>
                    <meta http-equiv="refresh" content=" 0 ; url = manageuser.php" />
                    <?php
          } else {
            echo "Contact couldn't added. Failed.";
          }
        } else {
          echo "All fields are necessary";
        }
      }
      ?>

                    <form action="#" Method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card card-danger m-3">
                                    <div class="card-body ">
                                        <div class="form-group">
                                            <label> Email:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="email" name="email"
                                                    value="" placeholder="Email address">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-danger m-3">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Password:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="password" name="password"
                                                    value="" placeholder="Password must be of at least 8 letters.">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </div>
                    </form>
                </div>
        </div>
        </section>
        <!-- /.content -->

        <?php include ('../../inc/footer.php') ?>