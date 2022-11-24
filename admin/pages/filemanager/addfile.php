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
                    <div class="title">
                        <h2 class="mb-3 p-2">Add File</h2>
                        <a href="managefile.php" class="btn btn-primary mt-3">Manage file</a>
                    </div>

                    <?php
        if (isset($_POST['submit'])) {

            $firstname = $_POST['filename'];

            $dataFile = $_FILES['dataFile']['name'];
            $filesize = $_FILES['dataFile']['size'];
            $explode_values = explode('.', $dataFile);
            $name = $explode_values[0];
            $filename = str_replace(' ', '', $name);
            $finalname = strtolower($filename . time());   
            $extention = $explode_values[1];
            $finalfile = $finalname . "." . $extention;

            $ftype = $_POST['type'];
            
            if ($filesize <= 3000000) {
                if ($extention == 'jpg' || $extention == 'JPG' || $extention == 'pdf' || $extention == 'PNG' || $extention == 'png' || $extention == 'jpeg') {
                    if (move_uploaded_file($_FILES['dataFile']['tmp_name'], "../../uploads/" . $finalfile)) 
                    {
                        $query = "INSERT INTO filemanager (filename, filelink, type) VALUES ('$firstname','$finalfile','$ftype')";
                        $result = mysqli_query($conn, $query);
                        if ($result) {
        ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>File is added successfully.</strong>
                    </div>
                    <meta http-equiv="refresh" content=" 0 ; url = managefile.php" />
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
                } else {
                    echo "File format not accepted.";
                }
            } else {
                echo "File size exceeded. Limited to 2MB.";
            }
        }
        ?>

                    <form action="#" Method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card card-danger m-3">
                                    <div class="card-body ">
                                        <div class="form-group">
                                            <label> File Name:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="name" name="filename"
                                                    value="" placeholder="File name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Link:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="fas fa-address-card"></i></span>
                                                </div>
                                                <input type="file" class="form-control" id="Address" name="dataFile"
                                                    value="" placeholder="File link">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-danger m-3">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Type:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="fas fa-envelope"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="Email" name="type" value=""
                                                    placeholder="Type">
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