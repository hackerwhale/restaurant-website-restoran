<?php 
include ('../../connection/config.php');
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
                    <div class="title">
                        <h2 class="mb-1 p-3">Add Contact</h2>
                        <a href="managecontact.php" class="btn btn-primary mt-3">Manage Contact</a>
                    </div>
                    <?php
                        if (isset($_POST['submit'])) {
                          $title = $_POST['title'];
                          $subtitle= $_POST['subtitle'];
                          $mail=$_POST['mailaddress'];
                          $btn=$_POST['btnname'];


                          if ($title!="" && $subtitle!="" && $mail!="" && $btn!="" ) {

                                $query = "INSERT INTO contact(title,subtitle,mailaddress,btnname) VALUES ('$title','$subtitle', '$mail','$btn')";
                                $result = mysqli_query($conn, $query);
                                if ($result) {
                                  ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>File is added successfully.</strong>
                    </div>
                    <!-- <meta http-equiv="refresh" content=" 0 ; url = managefile.php" /> -->
                    <script>
                    $(".alert").alert();
                    </script>
                    <?php
                        } else {
                          ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>File couldn't be added.</strong>
                    </div>
                    <?php
                        }
                      } else {
            echo "File couldn't be uploaded successfully.";
          }
        }

?>

                    <form action="#" Method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <!-- Start aboutus part -->
                            <div class="col-md-6">
                                <div class="card card-danger m-3">
                                    <div class="card-body ">
                                        <div class="form-group">
                                            <label> Title</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="title" name="title" value=""
                                                    placeholder="Title">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-danger m-3">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Subtitle </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="fa fa-align-justify"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="subtitle" name="subtitle"
                                                    value="" placeholder="Sub Title">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card card-danger m-3">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Mail Address </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="fa fa-align-justify"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="mailaddress"
                                                    name="mailaddress" value="" placeholder="Mailing Address">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card card-danger m-3">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Buttton Name </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="fa fa-align-justify"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="btnname"
                                                    name="btnname" value="" placeholder="Button Name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                            </div>
                        </div>
                    </form>

                </div>
        </div>
        </section>
        <!-- /.content -->

        <?php include ('../../inc/footer.php') ?>